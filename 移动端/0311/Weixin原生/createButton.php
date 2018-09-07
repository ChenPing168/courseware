<?php 
include "./Weixin.php";
$menu = array(
            'button' => array(
                array(
                    'type' => 'click',
                    'name' => '今日歌曲',
                    'key'  => 'jrgq',
                ),
                array(
                    'name'       => '菜单',
                    'sub_button' => array(
                        array(
                            "type" => "view",
                            "name" => "百度",
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
echo Weixin::getInstance('button')->createButton($menu);






 ?>