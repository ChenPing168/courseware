<!--载入公共模板-->
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="Public/Home/org/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
		<script src="Public/Home/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="Public/Home/org/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" type="text/css" href="Public/Home/css/index.css" />
		<link rel="stylesheet" type="text/css" href="Public/Home/css/backTop.css"/>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>欢迎来到后盾BLOG教学系统</h1>
					</div>
				</div>
			</div>
		</header>
		<nav role="navigation" class="navbar navbar-default">
			<div class="container">
				<div class="row">
					<div class="col-sm-12" >
					
						<div class="navbar-header">
							
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
							
								<span class="sr-only">切换导航</span>
								
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<?php 
						//获得顶级分类,导航条
				    		$cateModel =  new \Common\Model\Cate;
				    		$topCate = $cateModel->where("pid=0")->get();
						 ?>
						<div class="collapse navbar-collapse" id="example-navbar-collapse">
							<ul class="_menu" >
								<li <?php if('Index'=='Index'){?>
                class="_active"
               <?php }?>><a href="index.php">首页</a></li>
								<?php foreach ($topCate as $v){?>
								<li <?php if($v['cid']==Q('get.cid',0,'intval')){?>
                class="_active"
               <?php }?>><a href="l<?php echo $v['cid']?>.html"><?php echo $v['cname']?></a></li>
								<?php }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		
