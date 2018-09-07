<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎使用HDPHP框架</title>
    <style type="text/css">
        body{
            background: #efefef;
        }
        div#main {
            padding: 30px 50px;
            font-family: "Microsoft Yahei", Helvetica, arial, sans-serif;
            margin-top: 90px;
        }

        div#main h1 {
            font-size: 200px;
            margin: 0px;
            color:#bbb;
            text-align: center;
        }

        div#main div.hdphp {
            font-size: 38px;
            color:#bbb;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="main">
        欢迎 <?php echo $_SESSION['username']?> 回来 <a href="<?php echo U('Login/out')?>">退出</a>
      <ul>
          <li>
              <a href="<?php echo U('Cate/add')?>">分类添加</a>
          </li>
          <li>
              <a href="<?php echo U('Cate/index')?>">分类展示</a>
          </li>
          <li>
              <a href="<?php echo U('Goods/add')?>">商品添加</a>
          </li>
           
      </ul>
















    </div>
</body>
</html>