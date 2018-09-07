<?php namespace Admin\Controller; 
use Hdphp\Controller\Controller;
include "./WeixinAPI/Weixin.php";
use Weixin;

//测试控制器
class IndexController extends Controller{

	//构造函数
	public function __init()
	{
	}
	
    //动作
    public function index(){
    		View::make();
    }
	
	public function addMenu(){
		$menu = array(
            'button' => array(
           	 array(
                    'name'       => '前台项目',
                    'sub_button' => array(
                        array(
                            "type" => "view",
                            "name" => "响应式博客",
                            "url"  => "http://www.baidu.com/"
                        ),
                      
                        array(
                            "type" => "view",
                            "name" => "立方体",
                            "url"  => "http://www.baidu.com"
                        )
                    )
                ),
                array(
                    'name'       => '后台项目',
                    'sub_button' => array(
                        array(
                            "type" => "view",
                            "name" => "商城",
                            "url"  => "http://www.baidu.com/"
                        ),
                      
                        array(
                            "type" => "click",
                            "name" => "联系方式",
                            "key"  => "address"
                        )
                    )
                )
            )
        );
		$result  = Weixin::getInstance('button')->createButton($menu);
		View::success('创建成功' . $result);
	}
}




