<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>hdphp教学博客-内容页</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		{{include file="VIEW_PATH/Common/header.php"}}
		<section>
			<div class="container">
				<div class="row">
					<!--标签规定文档的主要内容main-->
					<main class="col-md-8">
						<article>
							<div class="_head">
								<h1>{{$data['title']}}</h1>
								<span>
								作者：
								<a href="">{{$data['author']}}</a>
								</span>
								•
								<!--pubdate表⽰示发布⽇日期-->
								<time pubdate="pubdate" datetime="">{{date('Y-m-d H:i:s',$data['sendtime'])}}</time>
								点击次数：
								 {{$data['click']}}
							</div>
							<div class="_digest">
								{{$data['content']}}
							</div>
							<div class="_footer">
								<i class="glyphicon glyphicon-tags"></i>
								{{foreach from="$data['tag']" value="$v"}}
									<a href="{{U('List/index',array('tid'=>$v['tid']))}}">{{$v['tname']}}</a>、
								{{endforeach}}
							</div>
						</article>
						<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="{{$data['aid']}}" data-title="{{$data['title']}}" data-url="{{U('Content/index',array('aid'=>$data['aid']))}}"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"mazhenyu"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->
					</main>
					
					{{include file="VIEW_PATH/Common/right.php"}}
				</div>
				
			</div>
			

		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h4 class="_title">最新文章</h4>
						<div id="" class="_single">
							<p><a href="">解决垃圾图片处理方式</a></p>
							<time>2015-09-09</time>
						</div>
						<div class="_single">
							<p><a href="">解决垃圾图片处理方式</a></p>
							<time>2015-09-09</time>
						</div>
						<div class="_single">
							<p><a href="">解决垃圾图片处理方式</a></p>
							<time>2015-09-09</time>
						</div>
					</div>
					<div class="col-sm-4">
						<h4 class="_title">标签云</h4>
						<div id="" class="_single">
							<p><a href="">解决垃圾图片处理方式</a></p>
							<time>2015-09-09</time>
						</div>
						<div class="_single">
							<p><a href="">解决垃圾图片处理方式</a></p>
							<time>2015-09-09</time>
						</div>
						<div class="_single">
							<p><a href="">解决垃圾图片处理方式</a></p>
							<time>2015-09-09</time>
						</div>
					</div>
					<div class="col-sm-4">
						<h4 class="_title">友情链接</h4>
						<div id="" class="_single">
							<p><a href="">解决垃圾图片处理方式</a></p>
							<time>2015-09-09</time>
						</div>
						<div class="_single">
							<p><a href="">解决垃圾图片处理方式</a></p>
							<time>2015-09-09</time>
						</div>
						<div class="_single">
							<p><a href="">解决垃圾图片处理方式</a></p>
							<time>2015-09-09</time>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="footer_bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<a href="">Copyright © BLOG_EDU博客 中文网</a>
						 | 
						<a href="">京ICP备xxxxxxxxxx号 </a>
						 |
						<a href="">京公网安备xxxxxxxxxxxxxx</a>
					</div>
				</div>
			</div>
		</div>
		<!--返回顶部自己写的插件-->
		<script src="Public/Home/js/backTop.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
				//插件使用
				$('.back_top').backTop({right:30});
			})
		</script>
		<div class="back_top hidden-xs hidden-md">
			<i class="glyphicon glyphicon-menu-up"></i>
		</div>
	</body>
</html>