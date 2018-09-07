<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>hdphp教学博客-首页</title>
		<!--描述和摘要-->
		<meta name="Description" content=""/>
		<meta name="Keywords" content=""/>
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
												<div class="collapse navbar-collapse" id="example-navbar-collapse">
							<ul class="_menu" >
								<li                 class="_active"
               ><a href="index.php">首页</a></li>
																<li ><a href="l2.html">娱乐</a></li>
																<li ><a href="l3.html">运动</a></li>
															</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		

		<section>
			<div class="container">
				<div class="row">
					<!--标签规定文档的主要内容main-->
					<main class="col-md-8">
						<article class="_carousel">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							  </ol>
							
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							    <div class="item active">
							      <img src="Public/Home/images/1.jpg">
							    </div>
							    <div class="item">
							       <img src="Public/Home/images/2.jpg">
							    </div>
							  </div>
							
							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  </a>
							</div>
						</article>
						<?php foreach ($arcData as $v){?>
						<article>
							<div class="_head">
								<h1><?php echo $v['title']?></h1>
								<span>
								作者：
								<?php echo $v['author']?>
								</span>
								•
								<!--pubdate表⽰示发布⽇日期-->
								<time pubdate="pubdate" datetime="<?php echo date('Y-m-d',$v['sendtime'])?>"><?php echo date('Y-m-d',$v['sendtime'])?></time>
								•
								分类：
								<a href="<?php echo U('List/index',array('cid'=>$v['cid']))?>"><?php echo $v['cname']?></a>
							</div>
							<div class="_digest">
							<?php if($v['thumb']){?>
                
							<img src="<?php echo $v['thumb']?>"  class="img-responsive" width="100%"/>
							
               <?php }?>
								<p>
									<?php echo $v['digest']?>
								</p>
							</div>
							<div class="_more">
								<a href="<?php echo U('Content/index',array('aid'=>$v['aid']))?>" class="btn btn-default">阅读全文</a>
							</div>
							<div class="_footer">
								<i class="glyphicon glyphicon-tags"></i>
								<?php foreach ($v['tag'] as $tag){?>
								<a href="<?php echo U('List/index',array('tid'=>$tag['tid']))?>"><?php echo $tag['tname']?></a>、
								<?php }?>
							</div>
						</article>
						<?php }?>
					</main>
						<aside class="col-md-4 hidden-sm hidden-xs">
						<div class="_widget">
							<h4>关于自己</h4>
							<div class="_info">
								<p>多年一线开发经验与讲师经验。擅长引导思维，而不是一味灌输，新生代优秀青年讲师的代表...</p>
								<p>
									<i class="glyphicon glyphicon-volume-down"></i>
									目前就职于
									<a href="http://www.houdunwang.com" target="_blank">北京后盾网</a>
								</p>
							</div>
						</div>
												<div class="_widget">
							<h4>分类列表</h4>
							<div>
																<!--如果分类下面有文章，显示总数-->
																	<!--否则就不显总数了-->
									<a href="javascript:;">娱乐</a>
								
               								
																<!--如果分类下面有文章，显示总数-->
								                
									<a href="http://localhost/c58_teacher/blog/blog/index.php?m=Home&c=List&a=index&cid=3">运动 (4)</a>
																
																<!--如果分类下面有文章，显示总数-->
																	<!--否则就不显总数了-->
									<a href="javascript:;">中国军事</a>
								
               								
																<!--如果分类下面有文章，显示总数-->
								                
									<a href="http://localhost/c58_teacher/blog/blog/index.php?m=Home&c=List&a=index&cid=20">小娱乐 (1)</a>
																
																<!--如果分类下面有文章，显示总数-->
																	<!--否则就不显总数了-->
									<a href="javascript:;">小运动</a>
								
               								
																<!--如果分类下面有文章，显示总数-->
																	<!--否则就不显总数了-->
									<a href="javascript:;">小小娱乐</a>
								
               								
															</div>
						</div>
												<div class="_widget">
							<h4>标签云</h4>
							<div class="_tag">
																<a href="http://localhost/c58_teacher/blog/blog/index.php?m=Home&c=List&a=index&tid=28">PHP</a>
																<a href="http://localhost/c58_teacher/blog/blog/index.php?m=Home&c=List&a=index&tid=29">js</a>
																<a href="http://localhost/c58_teacher/blog/blog/index.php?m=Home&c=List&a=index&tid=30">热门</a>
																<a href="http://localhost/c58_teacher/blog/blog/index.php?m=Home&c=List&a=index&tid=31">火爆</a>
															</div>
						</div>
						
					</aside>
					



				</div>
			</div>
		</section>
			<footer class="hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h4 class="_title">最新文章</h4>
						<div id="" class="_single">
							<p><a href="">标题</a></p>
							<time>2010年11月06日11:24:16</time>
						</div>
							<div id="" class="_single">
							<p><a href="">标题</a></p>
							<time>2010年11月06日11:24:16</time>
						</div>
					</div>
					<div class="col-sm-4 footer_tag">
						<div id="">
							<h4 class="_title">标签云</h4>
							<a href="">PHP</a>
							<a href="">PHP</a>
							<a href="">PHP</a>
						</div>
					</div>
					<div class="col-sm-4">
						<h4 class="_title">友情链接</h4>
						<div id="" class="_single">
							<p><a href="" target="_blank">百度</a></p>
							<p><a href="" target="_blank">百度</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="footer_bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<a href=""><?php echo C('webset.webname')?></a>
						 | 
						<a href=""><?php echo C('webset.copy')?></a>
						 |
						<a href=""><?php echo C('webset.adminemail')?></a>
					</div>
				</div>
			</div>
		</div>
		<!--返回顶部自己写的插件-->
		<script src="Public/Home/js/backTop.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
				//插件使用
				$('.back_top').backTop({right:120});
			})
		</script>
		<div class="back_top hidden-xs hidden-md">
			<i class="glyphicon glyphicon-menu-up"></i>
		</div>
	</body>
</html>