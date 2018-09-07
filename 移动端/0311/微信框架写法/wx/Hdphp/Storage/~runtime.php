<?php  namespace Hdphp\Kernel;

class Boot
{

    private static $binded = false;

    //应用目录
    private static $appPath;

    public static function bootstrap()
    {
        if (defined('APP_GROUP_PATH'))
        {
            self::$appPath = APP_GROUP_PATH . '/Home';
        }
        else
        {
            self::$appPath = APP_PATH;
        }
        //设置系统常量
        self::setConsts();

        //创建初始目录
        self::mkDirs();

        //创建初始文件
        self::createInitFile();

        //创建编译文件
        self::createRuntimeFile();
    }

    /**
     * 设置初始常量
     */
    public static function setConsts()
    {
        define('IS_CGI', substr(PHP_SAPI, 0, 3) == 'cgi' ? true : false);
        define('IS_WIN', strstr(PHP_OS, 'WIN') ? true : false);
        define('IS_CLI', PHP_SAPI == 'cli' ? true : false);
        define('DS', DIRECTORY_SEPARATOR);
        define('IS_GET', $_SERVER['REQUEST_METHOD'] == 'GET');
        define('IS_POST', $_SERVER['REQUEST_METHOD'] == 'POST');
        define('IS_DELETE', $_SERVER['REQUEST_METHOD'] == 'DELETE' ?: (isset($_POST['_method']) && $_POST['_method'] == 'DELETE'));
        define('IS_PUT', $_SERVER['REQUEST_METHOD'] == 'PUT' ?: (isset($_POST['_method']) && $_POST['_method'] == 'PUT'));
        define(
        'IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        );

        define('NOW', $_SERVER['REQUEST_TIME']);
        define('NOW_MICROTIME', microtime(true));
        // 系统信息
        @ini_set('memory_limit', '128M');
        @ini_set('register_globals', 'off');
        if (version_compare(PHP_VERSION, '5.4.0', '<'))
        {
            //对外部引入文件禁止加转义符
            ini_set('magic_quotes_runtime', 0);
            //删除系统自动加的转义符号
            if (get_magic_quotes_gpc())
            {
                self::unaddslashes($_POST);
                self::unaddslashes($_COOKIE);
                self::unaddslashes($_GET);
            }
        }
    }

    //反转义$_POST
    private static function unaddslashes(&$data)
    {
        foreach ((array)$data as $k => $v)
        {
            if (is_numeric($v))
            {
                $data[$k] = $v;
            }
            else
            {
                $data[$k] = is_array($v) ? self::unaddslashes($v) : stripslashes($v);
            }
        }

        return $data;
    }

    /**
     * 初次运行框时创建基础目录
     *
     * @return [type] [description]
     */
    public static function mkDirs()
    {
        if (is_dir(self::$appPath))
        {
            self::$binded = true;

            return;
        }


        $dirs = array(
            'System/Service', 'System/Provider', 'System/Lang', 'System/Tag', 'System/Hook', self::$appPath . '/Home/Controller', self::$appPath . '/Home/Model', self::$appPath . '/Home/Api', self::$appPath . '/Home/View/Index', 'Config', 'Public'
        );

        foreach ($dirs as $dir)
        {
            is_dir($dir) or mkdir($dir, 0755, true);
        }
    }

    /**
     * 创建初始文件
     *
     * @return [type] [description]
     */
    public static function createInitFile()
    {
        if (self::$binded)
        {
            return;
        }

        $files = array(
            HDPHP_PATH . '/View/index.php' => self::$appPath . '/Home/View/Index/index.php', HDPHP_PATH . '/View/success.php' => 'Public/success.php', HDPHP_PATH . '/View/error.php' => 'Public/error.php', HDPHP_PATH . '/View/tag.php' => 'System/Tag/Common.php', HDPHP_PATH . '/Controller/IndexController.php' => self::$appPath . '/Home/Controller/IndexController.php', HDPHP_PATH . '/Lang/zh.php' => 'System/Lang/zh.php', HDPHP_PATH . '/Route/routes.php' => 'System/routes.php',
        );

        foreach ($files as $key => $value)
        {
            if ( ! is_file($value))
            {
                copy($key, $value);
            }
        }

        //复制配置文件
        foreach (glob(HDPHP_PATH . '/Config/Config/*') as $file)
        {
            if ( ! is_file('Config/' . basename($file)))
            {
                copy($file, 'Config/' . basename($file));
            }
        }
    }

    /**
     * 生成编译文件
     *
     * @return [type] [description]
     */
    private static function createRuntimeFile()
    {
        //调试模式下不生成编译文件
        if (DEBUG == true || is_file('Storage/~runtime.php'))
        {
            return;
        }

        //核心文件
        $core = array(
            HDPHP_PATH . '/Kernel/Boot', HDPHP_PATH . '/Kernel/Container', HDPHP_PATH . '/Kernel/Application', HDPHP_PATH . '/Kernel/Facade', HDPHP_PATH . '/Kernel/Kernel', HDPHP_PATH . '/Kernel/ServiceProvider',
        );

        //服务与facade文件列表
        $config = require 'Config/service.php';

        $files = array_merge($core, $config['provider'], $config['facade']);

        $compile = '';

        foreach ($files as $file)
        {
            $file = str_replace('\\', DS, $file);
            $compile .= substr(rtrim(file_get_contents($file . '.php')), 5) . "\n";
        }
        if ( ! is_dir('Storage'))
        {
            mkdir('Storage', 0755, true);
        }
        //保存文件
        file_put_contents('Storage/~runtime.php', '<?php ' . $compile);
    }

}
 namespace Hdphp\Kernel;

// .-----------------------------------------------------------------------------------
// |  Software: [HDPHP framework]
// |      Site: http://www.hdphp.com
// |-----------------------------------------------------------------------------------
// |    Author: 向军 <2300071698@qq.com>
// | Copyright (c) 2012-2019, http://houdunwang.com. All Rights Reserved.
// |-----------------------------------------------------------------------------------
// |   License: http://www.apache.org/licenses/LICENSE-2.0
// '-----------------------------------------------------------------------------------

use Closure;
use ArrayAccess;
use Exception;
use ReflectionClass;
use ReflectionMethod;
use ReflectionFunction;
use ReflectionParameter;
use InvalidArgumentException;

class Container implements ArrayAccess{

	//绑定实例
	public $bindings=array();

    //单例服务
    public $instances=array();
    
	/**
	 * 绑定到容器
	 * @param  [type]  $name    [别名]
	 * @param  [type]  $closure [服务生成闭包函数]
	 * @param  boolean $shared  [单例]
	 * @return [type]           [description]
	 */
	public function bind($name,$closure,$force=false)
	{
		$this->bindings[$name]= compact('closure','force');
	}

    /**
     * 注册单例服务
     * @param  [type] $name    [description]
     * @param  [type] $closure [description]
     * @return [type]          [description]
     */
    public function single($name,$closure)
    {
        $this->bind($name,$closure,true);
    }

    /**
     * 单一实例
     * @param  [type] $name [服务别名或类]
     * @return [type]       [description]
     */
    public function instance($name,$object)
    {
        $this->instances[$name]=$object;
    }

	/**
	 * 获取实例
	 * @param  [type] $name [服务别名或类]
	 * @return [type]       [description]
	 */
	public function make($name,$force=false)
	{
        if(isset($this->instances[$name]))
        {
            return $this->instances[$name];
        }
        //获得实现提供者
        $closure = $this->getClosure($name);

        //获取实例
        $object = $this->build($closure);

        if(isset($this->bindings[$name]['force']) && $this->bindings[$name]['force'] || $force)
        {
            $this->instances[$name]=$object;
        }

        return $object;
    }

    /**
     * 获得实例实现
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
    private function getClosure($name)
    {
        return isset($this->bindings[$name])?$this->bindings[$name]['closure']:$name;
    }

    /**
     * 自动绑定（Autowiring）自动解析（Automatic Resolution）
     * @param  String $k 键名
     * @return Object 
     */
    protected function build($className)
    {
    	//匿名函数
        if($className instanceof Closure)
        {
            //执行闭包函数
            return $className($this);
        }

    	//获取类信息
        $reflector = new ReflectionClass($className);

    	// 检查类是否可实例化, 排除抽象类abstract和对象接口interface
        if (!$reflector->isInstantiable()) 
        {
            throw new Exception("$className 不能实例化.");
        }

        //获取类的构造函数
        $constructor = $reflector->getConstructor();

        //若无构造函数，直接实例化并返回
        if (is_null($constructor)) 
        {
            return new $className;
        }

        //取构造函数参数,通过 ReflectionParameter 数组返回参数列表
        $parameters = $constructor->getParameters();

        //递归解析构造函数的参数
        $dependencies = $this->getDependencies($parameters);

        //创建一个类的新实例，给出的参数将传递到类的构造函数。
        return $reflector->newInstanceArgs($dependencies);
    }

    /**
     * 递归解析构造函数的参数
     * @param  构造函数参数 $parameters
     * @return array
     */
    protected function getDependencies($parameters)
    {
        $dependencies = array();
        
        //参数列表
        foreach ($parameters as $parameter) 
        {
            //获取参数类型
            $dependency = $parameter->getClass();
            
            if (is_null($dependency)) 
            {
                // 是变量,有默认值则设置默认值
                $dependencies[] = $this->resolveNonClass($parameter);
            } 
            else 
            {
                // 是一个类，递归解析
                $dependencies[] = $this->build($dependency->name);
            }
        }

        return $dependencies;
    }

    /**
     * 提取参数默认值
     * @param  [type] $parameter [description]
     * @return [type]            [description]
     */
    protected function resolveNonClass($parameter)
    {
        // 有默认值则返回默认值
        if ($parameter->isDefaultValueAvailable()) 
        {
            return $parameter->getDefaultValue();
        }

        throw new Exception('参数无默认值，无法实例化');
    }

    public function offsetExists($key)
    {
        return isset($this->bindings[$key]);
    }

    public function offsetGet($key)
    {
        return $this->make($key);
    }

    public function offsetSet($key,$value)
    {
        if ( ! $value instanceof Closure)
        {
            $value = function() use ($value){
                return $value;
            };
        }

        $this->bind($key, $value);
    }

    public function offsetUnset($key)
    {
        unset($this->bindings[$key], $this->instances[$key]);
    }

    /**
     * 魔术方法
     * @param  [type] $key [description]
     * @return [type]      [description]
     */
    public function __get($key)
    {
        return $this[$key];
    }

    /**
     * 魔术方法
     * @param [type] $key   [description]
     * @param [type] $value [description]
     */
    public function __set($key,$value)
    {
        $this[$key]=$value;
    }
}
 namespace Hdphp\Kernel;

use Closure;
use ReflectionClass;
use ReflectionMethod;
use ReflectionFunction;
use ReflectionParameter;
use Hdphp\Kernel\ServiceProviders;

class Application extends Container
{

    //应用已启动
    protected $booted = false;

    //服务列表
    protected $services = array();

    //外观别名
    protected $facade = array();

    //延迟加载服务提供者
    protected $deferProviders = array();

    //已加载服务提供者
    protected $serviceProviders = array();

    //类库映射
    protected $alias = array();

    //构造函数
    public function __construct()
    {
        //注册自动载入函数
        spl_autoload_register(array($this, 'autoload'));
        spl_autoload_register(array($this, 'autoloadFacade'));
        spl_autoload_register(array($this, 'autoloadModel'));

        //引入服务配置
        $config = require 'Config/service.php';

        //服务提供者
        $this->services = $config['provider'];
        $this->facade   = $config['facade'];

        //绑定核心服务提供者
        $this->bindServiceProvider();

        //添加初始实例
        $this->setInstance();

        //设置外观基类APP属性
        \Hdphp\Kernel\Facade::setFacadeApplication($this);

        //导入类库别名
        $this->addMap(Config::get('app.alias'));

        //启动
        $this->boot();
    }

    /**
     * 添加初始实例
     *
     * @return [type] [description]
     */
    protected function setInstance()
    {
        $this->instance('App', $this);
    }

    /**
     * 系统启动
     *
     * @return void
     */
    public function boot()
    {
        if ($this->booted)
        {
            return;
        }

        foreach ($this->serviceProviders as $p)
        {
            $this->bootProvider($p);
        }

        $this->booted = true;
    }

    /**
     * 服务加载处理
     *
     * @return [type] [description]
     */
    public function bindServiceProvider()
    {
        foreach ($this->services as $service)
        {
            $reflectionClass = new ReflectionClass($service);
            $properties      = $reflectionClass->getDefaultProperties();

            //获取服务延迟属性
            if (isset($properties['defer']) && $properties['defer'])
            {
                $alias = substr($reflectionClass->getShortName(), 0, -15);

                //延迟加载服务
                $this->deferProviders[$alias] = $service;
            }
            else
            {
                //立即加载服务
                $this->register(new $service($this));
            }
        }

    }

    /**
     * 获取服务对象
     *
     * @param  [type] $name [description]
     *
     * @return [type]       [description]
     */
    public function make($name, $force = false)
    {
        if (isset($this->deferProviders[$name]))
        {
            $this->register(new $this->deferProviders[$name]($this));
            unset($this->deferProviders[$name]);
        }

        return parent::make($name, $force);
    }

    /**
     * 注册服务
     *
     * @param  [type] $provider [description]
     *
     * @return [type]           [description]
     */
    public function register($provider)
    {
        if ($registered = $this->getProvider($provider))
        {
            return $registered;
        }

        if (is_string($provider))
        {
            $provider = new $provider($this);
        }

        $provider->register($this);

        //记录服务
        $this->serviceProviders[] = $provider;

        if ($this->booted)
        {
            $this->bootProvider($provider);
        }
    }

    /**
     * 运行服务提供者的boot方法
     *
     * @param [type] $provider [description]
     */
    public function bootProvider($provider)
    {
        if (method_exists($provider, 'boot'))
        {
            $provider->boot();
        }
    }

    /**
     * 获取已经注册的服务
     *
     * @param  [type] $provider [description]
     *
     * @return [type]           [description]
     */
    protected function getProvider($provider)
    {
        $class = is_object($provider) ? get_class($provider) : $provider;
        foreach ($this->serviceProviders as $value)
        {
            if ($value instanceof $class)
            {
                return $value;
            }
        }
    }

    /**
     * 类库映射
     *
     * @param array|string $alias     别名
     * @param string       $namespace 命名空间
     */
    public function addMap($alias, $namespace = '')
    {
        if (is_array($alias))
        {
            foreach ($alias as $key => $value)
            {
                $this->alias[$key] = $value;
            }
        }
        else
        {
            $this->alias[$alias] = $namespace;
        }
    }

    /**
     * 类自动加载
     *
     * @param  [type] $class [description]
     *
     * @return [type]        [description]
     */
    public function autoload($class)
    {
        $file = str_replace('\\', DS, $class) . '.php';
        if (isset($this->alias[$class]))
        {
            //检测类库映射
            require_once str_replace('\\', DS, $this->alias[$class]);
        }
        else if (is_file($file))
        {
            //直接加载文件
            require_once $file;
        }
        else if (defined('MODULE_PATH') && is_file(MODULE_PATH . DS . $file))
        {
            //项目文件
            require_once MODULE_PATH . DS . $file;
        }
        else if (defined('APP_PATH') && is_file(APP_PATH . DS . $file))
        {
            //项目文件
            require_once APP_PATH . DS . $file;
        }
        else if (class_exists('Config', false))
        {
            //自动加载命名空间
            foreach ((array)Config::get('app.autoload_namespace') as $key => $value)
            {
                if (strpos($class, $key) !== false)
                {
                    $file = str_replace($key, $value, $class) . '.php';
                    require_once(str_replace('\\', DS, $file));
                }
            }

        }
    }

    /**
     * 自动加载facade类
     *
     * @param  [type] $class [description]
     *
     * @return [type]        [description]
     */
    public function autoloadFacade($class)
    {
        $file = str_replace('\\', '/', $class);

        if (isset($this->facade[basename($file)]))
        {
            //加载facade类
            return class_alias($this->facade[basename($file)], $class);
        }
    }

    /**
     * 自动加载模型
     *
     * @param  [type] $class [description]
     *
     * @return [type]        [description]
     */
    public function autoloadModel($class)
    {
        $file = str_replace('\\', '/', $class);

        if (isset($this->facade[basename($file)]))
        {
            //加载facade类
            return class_alias($this->facade[basename($file)], $class);
        }
    }
}
 namespace Hdphp\Kernel;

use RuntimeException;

abstract class Facade{
	protected static $app;

	public static $resolvedInstance=array();

	public static function getFacadeRoot()
	{
		return self::resolveFacadeInstance(static::getFacadeAccessor());
	}

	protected static function getFacadeAccessor()
	{
		throw new RuntimeException("Facade does not implement getFacadeAccessor method.");
	}

	protected static function resolveFacadeInstance($name)
	{
		if (is_object($name)) return $name;

		if (isset(static::$resolvedInstance[$name]))
		{
			return static::$resolvedInstance[$name];
		}
		return static::$resolvedInstance[$name] = static::$app[$name];
	}

	public static function setFacadeApplication($app)
	{
		static::$app = $app;
	}

	public static function __callStatic($method, $args)
	{
		$instance = static::getFacadeRoot();
		switch (count($args))
		{
			case 0:
				return $instance->$method();

			case 1:
				return $instance->$method($args[0]);

			case 2:
				return $instance->$method($args[0], $args[1]);

			case 3:
				return $instance->$method($args[0], $args[1], $args[2]);

			case 4:
				return $instance->$method($args[0], $args[1], $args[2], $args[3]);

			default:
				return call_user_func_array(array($instance, $method), $args);
		}
	}
}
 namespace Hdphp\Kernel;

use Exception;
use ReflectionMethod;

class Kernel
{

    public function __construct()
    {
        //设置字符集
        header("Content-type:text/html;charset=" . Config::get('app.charset'));

        //时区
        date_default_timezone_set(Config::get('app.timezone'));

        //路由处理
        $this->ParseRoute();

        //导入钓子
        \Hdphp\Hook\Hook::import(Config::get('hook'));

        //应用开始钓子
        \Hdphp\Hook\Hook::listen("app_begin");

        //定义常量
        $this->DefineConsts();

        //执行控制器方法
        $this->ExecuteAction();

        //应用结束钩子
        \Hdphp\Hook\Hook::listen("app_end");

        //保存日志
        Log::save();
    }

    /**
     * 解析路由
     *
     * @return bool
     */
    private function parseRoute()
    {
        //导入路由
        require 'System/routes.php';

        //分析处理
        return Route::dispatch();
    }

    /**
     * 定义常量
     */
    private function DefineConsts()
    {
        define('__ROOT__', rtrim('http://' . $_SERVER['HTTP_HOST'] . preg_replace('@\w+\.php$@i', '', $_SERVER['SCRIPT_NAME']), '/'));
        define('__WEB__', C('http.rewrite') ? __ROOT__ : __ROOT__ . '/' . basename($_SERVER['SCRIPT_FILENAME']));
        define('__URL__', 'http://' . $_SERVER['HTTP_HOST'] . '/' . trim($_SERVER['REQUEST_URI'], '/'));
        define("__HISTORY__", isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : null);

        if (defined('APP_GROUP_PATH'))
        {
            defined('APP_PATH') or define('APP_PATH', APP_GROUP_PATH . '/' . APP);
        }
        
        //模块目录
        defined('MODULE_PATH') or define('MODULE_PATH', APP_PATH . '/' . MODULE);
        //模板目录
        defined('VIEW_PATH') or define('VIEW_PATH', defined('MODULE_PATH') ? MODULE_PATH . '/View' : C('view.path'));
        //公共目录
        defined("__PUBLIC__") or define('__PUBLIC__', __ROOT__ . '/Public');
        defined("__VIEW__") or define('__VIEW__', __ROOT__ . '/' . rtrim(VIEW_PATH, '/'));
    }

    //执行动作
    private function ExecuteAction()
    {

        //禁止使用模块检测
        if (in_array(MODULE, C('http.deny_module')))
        {
            throw new Exception(MODULE . '模块禁止使用');
        }

        $class = ucfirst(MODULE) . '\\Controller\\' . ucfirst(CONTROLLER) . 'Controller';

        //控制器不存在
        if ( ! class_exists($class))
        {
            throw new Exception("{$class} 不存在");
        }

        $controller = new $class;

        //执行动作
        try
        {
            $action = new ReflectionMethod($controller, ACTION);

            if ($action->isPublic())
            {
                call_user_func_array(array($controller, ACTION), Route::getArg());
            }
            else
            {
                throw new ReflectionException('动作不存在');
            }

        }
        catch (ReflectionException $e)
        {
            $action = new ReflectionMethod($controller, '__call');
            $action->invokeArgs($controller, array(ACTION, ''));
        }
    }
}
 namespace Hdphp\Kernel;
/**
 * 服务抽象类
 */
abstract class ServiceProvider{
	
	//延迟加载
	public $defer=false;
	
	//应用程序实例
	protected $app;
	
	//注册服务
	abstract function register();
	
	/**
	 * 
	 * @param hdphp\Application $app
	 */
	public function __construct($app)
	{
		$this->app = $app;
	}

	public function __call($method,$args){
		if($method=='boot')return;
		throw new BadMethodCallException("$method 方法不存在 ");
	}
}

































































