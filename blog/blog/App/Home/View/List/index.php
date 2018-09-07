<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>hdphp教学博客-列表页</title>
		<!--描述和摘要-->
		<meta name="Description" content=""/>
		<meta name="Keywords" content=""/>
		{{include file="VIEW_PATH/Common/header.php"}}
			<section>
			<div class="container">
				<div class="row">
					<!--标签规定文档的主要内容main-->
					<main class="col-md-8">
						<article>
							<div class="_head category_title">
								<h2>
									{{if value="$_GET['cid']"}}
										分类名称：{{$name}}
									{{else}}
										标签名称：{{$name}}
									{{endif}}
									
								</h2>
								<span>
									共 {{$total}} 篇文章 
								</span>
							</div>
						</article>
						{{foreach from="$arcData" value="$v"}}
						<article>
							<div class="_head">
								<h1>{{$v['title']}}</h1>
								<span>
								作者：
								{{$v['author']}}
								</span>
								•
								<!--pubdate表⽰示发布⽇日期-->
								<time pubdate="pubdate" datetime="">{{date('Y-m-d H:i:s',$v['sendtime'])}}</time>
								•
								分类：
								<a href="{{U('List/index',array('cid'=>$v['cid']))}}">{{$v['cname']}}</a>
							</div>
							<div class="_digest">
							{{if value="$v['thumb']"}}
								<img src="{{$v['thumb']}}"  class="img-responsive" style="width: 100%;"/>
							{{endif}}
								<p>
									{{$v['digest']}}
								</p>
							</div>
							<div class="_more">
								<a href="{{U('Content/index',array('aid'=>$v['aid']))}}" class="btn btn-default">阅读全文</a>
							</div>
							<div class="_footer">
								<i class="glyphicon glyphicon-tags"></i>
								{{foreach from="$v['tag']" value="$tag"}}
									<a href="{{U('List/index',array('tid'=>$tag['tid']))}}">{{$tag['tname']}}</a>、
								{{endforeach}}
							</div>
						</article>
						{{endforeach}}
						<style type="text/css">
							#page li.active a{
								font-weight: bold;
								color: black;
							}
						</style>
						<div id="page">
							{{$page}}
						</div>
						
					</main>
				{{include file="VIEW_PATH/Common/right.php"}}
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
						<a href="">网站名称</a>
						 | 
						<a href="">版权信息</a>
						 |
						<a href="">admin@163.com</a>
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