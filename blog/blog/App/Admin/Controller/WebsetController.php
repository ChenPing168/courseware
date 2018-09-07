<?php namespace Admin\Controller; 
use Hdphp\Controller\Controller;
/**
 *网站配置管理控制器
 */
class WebsetController extends CommonController{
	//首页
	public function index(){
		$model = new \Common\Model\Webset;
		if(IS_POST){
			//修改数据库操作
		    foreach (Q('post.') as $name => $value) {
		    		//UPDATE webset SET value='$value' WHERE name='$name';
		    		//UPDATE webset SET value='后盾blog教学123' WHERE name='webname';
		    		$model->where("name='{$name}'")->save(array('value'=>$value));
		    }
			//修改配置文件 \r\n 换行
			$data = "<?php\r\nreturn " . var_export(Q('post.'),true) . ";\r\n?>";
			file_put_contents('Config/webset.php', $data);
			View::success('修改成功');
		}
		$data = $model->get();
		View::with('data',$data);
	    View::make();
	}
}



