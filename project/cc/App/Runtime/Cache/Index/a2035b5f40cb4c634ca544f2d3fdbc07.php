<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>超超商城</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/index.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/header.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/footer.css" />
	<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/Js/common.js"></script>
	<script type="text/javascript" src="__PUBLIC__/Js/index.js"></script>
</head>
<body>
	<!-- ie6提示升级浏览器 -->
<script type="text/javascript">
	if(<?php echo ($ie6); ?>){
		alert('您好，你正在使用的浏览器是IE6，本网站的页面在IE6里可能会龙飞凤舞、面目全非，所以请您升级您的浏览器或改用火狐浏览器访问。微软已经将IE浏览器升级到了IE10，您却还在使用IE6，再不升级就OUT了...')
	}
</script>

	<!-- 顶部 登录 注册 工具条 开始 -->
	<div class="toolbar">
		<div class="toolbar_cont">
			<ul class="toolbar_quick">
				<li><a href="#">帮助</a></li>
				<li><a href="#">网站公告</a></li>
				<li><a href="<?php echo U('Cart/index');?>">购物车</a></li>
				<li><a href="#">我的账户</a></li>
				<?php if(isset($_SESSION['userid'])) : ?>
				<li><a href="<?php echo U('Login/logout');?>">退出</a></li>
				<li><a href=""><?php echo $_SESSION['username'] ?></a></li>
				<?php else: ?>
				<li><a href="<?php echo U('Register/index');?>">注册</a></li>
				<li><a href="<?php echo U('Login/index');?>">登录</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
	<!-- 顶部 登录 注册 工具条 结束 -->
	<!-- 顶部 广告 开始 -->
	<div class="header_ad_box">
		<div class="header_ad">
			<a href="#"><img src="__PUBLIC__/Images/header_ad.gif" alt="" /></a>
			<i></i>
		</div>
	</div>
	<!-- 顶部 广告 结束  -->
	<!-- 头部 logo 搜索框 区块 开始 -->
	<div class="header">
		<div class="header_cont">
			<a href="__ROOT__" class="logo"></a>
			<a href="__ROOT__" class="sublogo"></a>
			<form action="" method="get" id="searchForm">
				<input type="text" id="keyword" name="keyword" value="请输入品牌或商品名称搜索" />
				<input type="submit" class="search_btn" value="" />
			</form>
			<a href="<?php echo U('Cart/index');?>" id="shopcart"><?php echo ($cart_goods_num); ?></a>
		</div>
	</div>
	<!-- 头部 logo 搜索框 区块 结束 -->
    
	<!-- 导航条菜单 开始 -->
	<div class="home_nav_wrap">
		<div class="home_nav">
			<div class="home_nav_left"><a href="__ROOT__">首页</a></div>
			<ul class="nav_items">
				<li><a href="<?php echo U('/c/4_0');?>">上衣</a></li>
				<li><a href="<?php echo U('/c/5_0');?>">裤子</a></li>
				<li><a href="<?php echo U('/c/6_0');?>">裙子</a></li>
				<li><a href="<?php echo U('/c/2_0');?>">特殊服饰</a></li>
				<li><a href="<?php echo U('/c/3_0');?>">配件</a></li>
			</ul>
		</div>
	</div>
	<!-- 导航条菜单 结束 -->
<!-- <div style="width:1200px; background:#999; border:1px solid #F00; background:#FFC; margin:10px auto; font-size:15px; line-height:1.5em; color:#00C;padding:10px 0px;">
&nbsp;&nbsp;&nbsp;&nbsp;后盾实训为保证每个同学都能独立开发网站项目，熟练掌握所学知识，为后面的高薪就业打下良好的基础，所以我们不分组做项目，绝不会出现几个人一组，而每人只做部分项目内容的情况，后盾学员作品均为学员独立 开发完成，更不会出现老师的二次加工，后盾不吹嘘，用事实说话！<br />
&nbsp;&nbsp;&nbsp;&nbsp;由于涉及到作者隐私问题，本演示部分功能未开放演示。
</div>
<a href="http://bbs.houdunwang.com/thread-43457-1-1.html" target="_blank"><img src="http://www.houdunwang.com/ad/ad1200.jpg" style="display:block;margin:10px auto;" /></a> -->
	<!-- 品牌推荐等子导航 开始 -->
	<div class="sub_nav_wrap">
		<div class="sub_nav">
			<div class="sub_nav_left">全部女装分类</div>
			<ul class="sub_nav_items">
				<li><a href="#locate_brand_aim">品牌推荐</a></li>
				<li><a href="<?php echo U('/c/4_0');?>">帮你挑</a></li>
				<li><a href="#fashion_new_aim">潮流新品</a></li>
				<li><a href="<?php echo U('/c/4_0');?>">时尚专辑</a></li>
			</ul>
		</div>
	</div>
	<!-- 品牌推荐等子导航 结束 -->
	<!-- 主体区域 开始 -->
	<div class="main">
		<!-- 左侧分类导航 开始 -->
		<div class="left_nav">
			<!-- 热销商品 区块 开始 -->
			<dl>
				<dt>
					<i class="i_1"></i>
					热销商品
				</dt>
				<dd>
					<a href="<?php echo U('/c/6_0');?>">连衣裙</a>
					<a href="<?php echo U('/c/6_0');?>">半身裙</a>
					<a href="<?php echo U('/c/6_0');?>">飘逸长裙</a>
					<a href="<?php echo U('/c/14_0');?>">雪纺衫</a>
					<a href="<?php echo U('/c/18_0');?>">防晒衫</a>
					<a href="<?php echo U('/c/13_0');?>">短袖T恤</a>
				</dd>
			</dl>
			<!-- 热销商品 区块 结束 -->
			<p class="sp">
				<s></s>
				<b></b>
			</p>
			<!-- 上衣 区块 开始 -->
			<dl class="hover">
				<dt>
					<i class="i_2"></i>
					上衣
					<strong></strong>
				</dt>
				<dd>
					<a href="<?php echo U('/c/15_0');?>">短袖衬衫</a>
					<a href="<?php echo U('/c/16_0');?>">蕾丝衫</a>
					<a href="<?php echo U('/c/17_0');?>">吊带背心</a>
					<a href="<?php echo U('/c/22_0');?>">小西装</a>
					<a href="<?php echo U('/c/13_0');?>">卡通T恤</a>
					<a href="<?php echo U('/c/14_0');?>">雪纺小背心</a>
				</dd>
				<!-- 上衣 区块 的 隐藏菜单 开始 -->
				<div class="hide_nav">
					<dl>
						<dt><a href="<?php echo U('/c/4_0');?>">上衣</a></dt>
						<dd>
							<ul>
								<?php if(is_array($jacket)): foreach($jacket as $key=>$v): ?><li><a href="<?php echo U('/c/'.$v['cid'].'_0');?>"><?php echo ($v["cname"]); ?></a></li><?php endforeach; endif; ?>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="<?php echo U('/c/13_0');?>">T恤热销</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/13_0');?>">短袖T恤</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">卡通T恤</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">打底T恤</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">印花T恤</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">露肩T恤</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">条纹T恤</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">长Tee</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">情侣T恤</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">蕾丝拼接T</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">短款Tee</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">修身T恤</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">宽松T恤</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">蝙蝠袖T恤</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="<?php echo U('/c/14_0');?>">最热雪纺蕾丝</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/14_0');?>">雪纺衫</a></li>
								<li><a href="<?php echo U('/c/14_0');?>">蕾丝衫</a></li>
								<li><a href="<?php echo U('/c/14_0');?>">雪纺衬衫</a></li>
								<li><a href="<?php echo U('/c/14_0');?>">雪纺小背心</a></li>
								<li><a href="<?php echo U('/c/14_0');?>">防晒雪纺衫</a></li>
								<li><a href="<?php echo U('/c/14_0');?>">蕾丝开衫</a></li>
								<li><a href="<?php echo U('/c/14_0');?>">蕾丝罩衫</a></li>
								<li><a href="<?php echo U('/c/14_0');?>">蕾丝小吊带</a></li>
								<li><a href="<?php echo U('/c/14_0');?>">镂空雪纺衫</a></li>
								<li><a href="<?php echo U('/c/14_0');?>">印花雪纺衫</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="#">推荐搭配</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/6_0');?>">蓬蓬裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">高腰裙</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">牛仔短裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">高腰短裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">九分裤</a></li>
							</ul>
						</dd>
					</dl>	
				</div>
				<!-- 上衣 区块 的 隐藏菜单 结束 -->
			</dl>
			<!-- 上衣 区块 结束 -->
			<p class="sp">
				<s></s>
				<b></b>
			</p>
			<!-- 裤子 区块 开始 -->
			<dl class="hover">
				<dt>
					<i class="i_3"></i>
					裤子
					<strong></strong>
				</dt>
				<dd>
					<a href="<?php echo U('/c/5_0');?>">九分裤</a>
					<a href="<?php echo U('/c/5_0');?>">牛仔裤</a>
					<a href="<?php echo U('/c/5_0');?>">休闲裤</a>
					<a href="<?php echo U('/c/5_0');?>">高腰短裤</a>
					<a href="<?php echo U('/c/5_0');?>">小脚裤</a>
					<a href="<?php echo U('/c/5_0');?>">连体裤</a>
				</dd>
				<!-- 裤子 区块 的 隐藏菜单 开始 -->
				<div class="hide_nav">
					<dl>
						<dt><a href="<?php echo U('/c/5_0');?>">裤子</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/5_0');?>">短裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">七分裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">九分裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">长裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">牛仔裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">休闲裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">打底裤</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="<?php echo U('/c/5_0');?>">短裤热销</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/5_0');?>">牛仔短裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">休闲短裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">高腰短裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">连体短裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">印花短裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">裙裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">蕾丝短裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">松紧腰短裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">糖果色短裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">防走光短裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">卷边短裤</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="<?php echo U('/c/5_0');?>">裤型</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/5_0');?>">小脚铅笔裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">直筒裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">哈伦裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">复古微喇裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">宽松阔腿裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">连体裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">背带裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">工装裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">垮裤</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="#">推荐搭配</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/13_0');?>">卡通T恤</a></li>
								<li><a href="<?php echo U('/c/13_0');?>">短款Tee</a></li>
								<li><a href="<?php echo U('/c/17_0');?>">雪纺背心</a></li>
								<li><a href="<?php echo U('/c/16_0');?>">蕾丝衫</a></li>
								<li><a href="<?php echo U('/c/15_0');?>">短袖衬衫</a></li>
							</ul>
						</dd>
					</dl>	
				</div>
				<!-- 裤子 区块 的 隐藏菜单 结束 -->
			</dl>
			<!-- 裤子 区块 结束 -->
			<p class="sp">
				<s></s>
				<b></b>
			</p>
			<!-- 裙子 区块 开始 -->
			<dl class="hover">
				<dt>
					<i class="i_4"></i>
					裙子
					<strong></strong>
				</dt>
				<dd>
					<a href="<?php echo U('/c/6_0');?>">雪纺裙</a>
					<a href="<?php echo U('/c/6_0');?>">蕾丝裙</a>
					<a href="<?php echo U('/c/6_0');?>">蓬蓬裙</a>
					<a href="<?php echo U('/c/6_0');?>">不规则裙</a>
					<a href="<?php echo U('/c/6_0');?>">短裙</a>
					<a href="<?php echo U('/c/6_0');?>">高腰裙</a>
				</dd>
				<!-- 裙子 区块 的 隐藏菜单 开始 -->
				<div class="hide_nav">
					<dl>
						<dt><a href="<?php echo U('/c/6_0');?>">裙子</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/6_0');?>">连衣裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">半身裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">长裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">短裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">OL职业中裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">蓬蓬裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">不规则裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">高腰裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">A字裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">包臀裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">百褶裙</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="<?php echo U('/c/6_0');?>">连衣裙热销</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/6_0');?>">雪纺连衣裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">蕾丝连衣裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">印花连衣裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">背心裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">吊带沙滩裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">牛仔连衣裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">通勤连衣裙</a></li>
								<li><a href="<?php echo U('/c/6_0');?>">娃娃领连衣裙</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="#">推荐搭配</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/18_0');?>">防晒衫</a></li>
								<li><a href="<?php echo U('/c/16_0');?>">蕾丝罩衫</a></li>
								<li><a href="<?php echo U('/c/23_0');?>">马甲</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">打底裤</a></li>
								<li><a href="<?php echo U('/c/5_0');?>">防走光短裤</a></li>
							</ul>
						</dd>
					</dl>	
				</div>
				<!-- 裙子 区块 的 隐藏菜单 结束 -->
			</dl>
			<!-- 裙子 区块 结束 -->
			<p class="sp">
				<s></s>
				<b></b>
			</p>
			<!-- 特殊服饰 区块 开始 -->
			<dl class="hover">
				<dt>
					<i class="i_5"></i>
					特殊服饰
					<strong></strong>
				</dt>
				<dd>
					<a href="<?php echo U('/c/7_0');?>">休闲套装</a>
					<a href="<?php echo U('/c/8_0');?>">婚纱</a>
					<a href="<?php echo U('/c/2_0');?>">大码裙</a>
					<a href="<?php echo U('/c/2_0');?>">妈妈装</a>
					<a href="<?php echo U('/c/7_0');?>">职业套装</a>
					<a href="<?php echo U('/c/8_0');?>">晚礼服</a>
				</dd>
				<!-- 特殊服饰 区块 的 隐藏菜单 开始 -->
				<div class="hide_nav">
					<dl>
						<dt><a href="<?php echo U('/c/7_0');?>">套装</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/7_0');?>">休闲套装</a></li>
								<li><a href="<?php echo U('/c/7_0');?>">制服</a></li>
								<li><a href="<?php echo U('/c/7_0');?>">职业套装</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="<?php echo U('/c/2_0');?>">特殊服饰</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/2_0');?>">民族服装</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">舞台装</a></li>
								<li><a href="<?php echo U('/c/8_0');?>">婚纱</a></li>
								<li><a href="<?php echo U('/c/8_0');?>">礼服/晚装</a></li>
								<li><a href="<?php echo U('/c/9_0');?>">旗袍</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="<?php echo U('/c/2_0');?>">大码女装</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/2_0');?>">大码T恤</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码针织毛衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码卫衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码小西装</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码皮衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码风衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码呢大衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码羽绒服</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码棉衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码连衣裙</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码半身裙</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码休闲裤</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码连体裤</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">大码打底裤</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="<?php echo U('/c/2_0');?>">妈妈装</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/2_0');?>">T恤</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">衬衫</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">针织毛衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">小西装</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">风衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">皮衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">呢大衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">羽绒服</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">棉衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">连衣裙</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="<?php echo U('/c/2_0');?>">运动女人</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/2_0');?>">运动T恤</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">运动套装</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">泳装</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">瑜伽服</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">运动裙</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">运动裤</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">女性冲锋衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">女性速干衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">女性皮肤风衣</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">户外T恤</a></li>
								<li><a href="<?php echo U('/c/2_0');?>">舞蹈套装</a></li>
							</ul>
						</dd>
					</dl>	
				</div>
				<!-- 特殊服饰 区块 的 隐藏菜单 结束 -->
			</dl>
			<!-- 特殊服饰 区块 结束 -->
			<p class="sp">
				<s></s>
				<b></b>
			</p>
			<!-- 配件 区块 开始 -->
			<dl class="hover">
				<dt>
					<i class="i_6"></i>
					配件
					<strong></strong>
				</dt>
				<dd>
					<a href="<?php echo U('/c/10_0');?>">草帽</a>
					<a href="<?php echo U('/c/11_0');?>">遮阳丝巾</a>
					<a href="<?php echo U('/c/10_0');?>">鸭舌帽</a>
				</dd>
				<!-- 配件 区块 的 隐藏菜单 开始 -->
				<div class="hide_nav">
					<dl>
						<dt><a href="<?php echo U('/c/10_0');?>">帽子</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/10_0');?>">鸭舌帽/棒球帽/货车帽</a></li>
								<li><a href="<?php echo U('/c/10_0');?>">毛线帽/针织帽</a></li>
								<li><a href="<?php echo U('/c/10_0');?>">空顶帽</a></li>
								<li><a href="<?php echo U('/c/10_0');?>">草帽/大沿帽</a></li>
								<li><a href="<?php echo U('/c/10_0');?>">礼帽/渔夫帽</a></li>
								<li><a href="<?php echo U('/c/10_0');?>">贝雷帽</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="<?php echo U('/c/11_0');?>">围巾/丝巾/披肩</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/11_0');?>">围巾</a></li>
								<li><a href="<?php echo U('/c/11_0');?>">丝巾</a></li>
								<li><a href="<?php echo U('/c/11_0');?>">披肩</a></li>
							</ul>
						</dd>
					</dl>
					<p class="hide_sp">
						<s></s>
						<b></b>
					</p>
					<dl>
						<dt><a href="<?php echo U('/c/3_0');?>">其他小物</a></dt>
						<dd>
							<ul>
								<li><a href="<?php echo U('/c/3_0');?>">眼镜框架</a></li>
								<li><a href="<?php echo U('/c/3_0');?>">太阳镜</a></li>
								<li><a href="<?php echo U('/c/3_0');?>">婚纱配件</a></li>
								<li><a href="<?php echo U('/c/3_0');?>">手套</a></li>
								<li><a href="<?php echo U('/c/3_0');?>">保暖耳套</a></li>
								<li><a href="<?php echo U('/c/3_0');?>">袖套</a></li>
								<li><a href="<?php echo U('/c/3_0');?>">制衣布料</a></li>
								<li><a href="<?php echo U('/c/3_0');?>">鞋垫</a></li>
							</ul>
						</dd>
					</dl>	
				</div>
				<!-- 配件 区块 的 隐藏菜单 结束 -->
			</dl>
			<!-- 配件 区块 结束 -->
		</div>
		<!-- 左侧分类导航 结束 -->

		<!-- 主体右侧内容区域 开始 -->
		<div class="right">
			<!-- 轮换板 开始 -->
			<div class="slide_banner">
				<ul class="slide_img">
					<li class="slide_img_cur"><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/play1.jpg" alt="" /></a></li>
					<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/play2.jpg" alt="" /></a></li>
					<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/play3.jpg" alt="" /></a></li>
					<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/play4.jpg" alt="" /></a></li>
					<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/play5.jpg" alt="" /></a></li>
					<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/play6.jpg" alt="" /></a></li>
				</ul>
				<ul class="slide_ctrl">
					<li class="slide_ctrl_cur">•</li>
					<li>•</li>
					<li>•</li>
					<li>•</li>
					<li>•</li>
					<li>•</li>
				</ul>
				<div class="slide_prev"></div><div class="slide_next"></div>
			</div>
			<!-- 轮换板 结束 -->
			<!-- 轮换板右侧 开始 -->
			<div class="nb">
				<h3></h3>
				<ul>
					<li>
						<i class="icon_chao"></i>
						<h4><a href="<?php echo U('/c/13_0');?>">夏日潮T19元</a></h4>
						<span>T恤魔力大比拼</span>
					</li>
					<li>
						<i class="icon_chao"></i>
						<h4><a href="<?php echo U('/c/14_0');?>">夏日清凉雪纺衫</a></h4>
						<span>不得不看的必备单品</span>
					</li>
					<li>
						<i class="icon_xin"></i>
						<h4><a href="<?php echo U('/c/4_0');?>">热荐TOP50新品</a></h4>
						<span>5折新品尝鲜</span>
					</li>
					<li>
						<i class="icon_cu"></i>
						<h4><a href="<?php echo U('/c/4_0');?>">潮流专辑</a></h4>
						<span>主题风格美衣任你选</span>
					</li>
				</ul>
			</div>
			<!-- 轮换板右侧 结束 -->
			<!-- 品牌推荐 开始 -->
			<div class="brand" id="locate_brand_aim">
				<h2>精选品牌推荐</h2>
				<p>每周为您推荐精选的品牌！</p>
				<div>
					<a href="<?php echo U('/c/6_0');?>">连衣裙品牌</a>
					<a href="<?php echo U('/c/13_0');?>">T恤品牌</a>
					<a href="<?php echo U('/c/5_0');?>">短裤品牌</a>
					<a href="<?php echo U('/c/4_0');?>">更多品牌>></a>
				</div>
				<ul>
					<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/brand1.jpg" alt="" /></a></li>
					<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/brand2.jpg" alt="" /></a></li>
					<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/brand3.jpg" alt="" /></a></li>
					<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/brand4.jpg" alt="" /></a></li>
					<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/brand5.jpg" alt="" /></a></li>
				</ul>
			</div>
			<!-- 品牌推荐 结束 -->
			<!-- 潮流新品秀 开始 -->
			<div class="fashion" id="fashion_new_aim">
				<h2>潮流新品秀</h2>
				<p>本周上新5877件</p>
				<h3>本季扮潮元素</h3>
				<div class="movie">
					<i id="arrow_left"></i>
					<i id="arrow_right"></i>
					<div class="movie_box">
						<a href="<?php echo U('/c/7_0');?>" class="stat1"><img src="__PUBLIC__/Images/movie1.jpg" alt="" /><b></b></a>
						<a href="<?php echo U('/c/13_0');?>" class="stat2"><img src="__PUBLIC__/Images/movie2.jpg" alt="" /><b></b></a>
						<a href="<?php echo U('/c/6_0');?>" class="stat3"><img src="__PUBLIC__/Images/movie3.jpg" alt="" /><b></b></a>
						<a href="<?php echo U('/c/15_0');?>" class="stat4"><img src="__PUBLIC__/Images/movie4.jpg" alt="" /><b></b></a>
						<a href="<?php echo U('/c/14_0');?>" class="stat5"><img src="__PUBLIC__/Images/movie5.jpg" alt="" /><b></b></a>
					</div>
				</div>
				<div class="popular">
					<ul class="popular_img">
						<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/fashion1.jpg" alt="" /><span>印花专区</span></a></li>
						<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/fashion2.jpg" alt="" /><span>蕾丝控</span></a></li>
						<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/fashion3.jpg" alt="" /><span>条纹热荐</span></a></li>
						<li><a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/fashion4.jpg" alt="" /><span>荧光色</span></a></li>
					</ul>
					<ul class="popular_text">
						<li><a href="<?php echo U('/c/4_0');?>">牛仔</a></li>
						<li><a href="<?php echo U('/c/4_0');?>">雪纺</a></li>
						<li><a href="<?php echo U('/c/4_0');?>">镂空</a></li>
						<li><a href="<?php echo U('/c/4_0');?>">复古风</a></li>
						<li><a href="<?php echo U('/c/4_0');?>">娃娃领</a></li>
						<li><a href="<?php echo U('/c/4_0');?>">通勤风</a></li>
						<li><a href="<?php echo U('/c/4_0');?>">拼接</a></li>
						<li><a href="<?php echo U('/c/4_0');?>">甜美风</a></li>
						<li><a href="<?php echo U('/c/4_0');?>">条纹</a></li>
					</ul>
				</div>
			</div>
			<!-- 潮流新品秀 结束 -->
			<!-- 中间长条广告 开始 -->
			<a href="<?php echo U('/c/13_0');?>" id="big_ad"><img src="__PUBLIC__/Images/big_ad.jpg" alt="" /></a>
			<!-- 中间长条广告 结束 -->

			<!-- 乐活少女 区块 开始， 包括 糖果色短裤、个性卡通T恤、印花雪纺衫 切换页 -->
			<div class="tabs" id="girls_clothes_aim">
				<ul class="tabs_title">
					<li><a href="#nolink" class="girls_title"><b></b><i></i></a></li>
					<li><a href="#nolink"><i></i>糖果色短裤</a></li>
					<li><a href="#nolink"><i></i>个性卡通T恤</a></li>
					<li><a href="#nolink">印花雪纺衫</a></li>
				</ul>
				<div class="tabs_title_below">
					<div class="tabs_con">
						<!-- 乐活少女 tab页内容 开始 -->
						<ul class="tabs_con_cur switch">
							<li class="tabs_con_1_1">
								<a href="<?php echo U('/c/6_0');?>">
									<img src="__PUBLIC__/Images/girls_1_1.jpg" alt="" />
									<span><strong>碎花短裙</strong><em>夏日短裙出彩全靠小印花</em></span>
									<b></b>
								</a>
							</li>
							<li class="tabs_con_1_2">
								<a href="<?php echo U('/c/15_0');?>">
									<img src="__PUBLIC__/Images/girls_1_2.jpg" alt="" />
								</a>
								<div class="detail">
									<div>
										<h4>夏季流行元素</h4>
										<i>变身迷人甜心</i>
									</div>
									<p>
										<a href="<?php echo U('/c/4_0');?>">显瘦</a>
										<a href="<?php echo U('/c/4_0');?>">雪纺</a>
										<a href="<?php echo U('/c/4_0');?>">印花</a>
										<a href="<?php echo U('/c/4_0');?>">甜美</a>
										<a href="<?php echo U('/c/4_0');?>">波点</a>
										<a href="<?php echo U('/c/4_0');?>">日系</a>
									</p>
								</div>
							</li>
							<li class="tabs_con_1_3">
								<a href="<?php echo U('/c/6_0');?>">
									<img src="__PUBLIC__/Images/girls_1_3.jpg" alt="" />
									<span><strong>连衣裙</strong><em>今夏新宠棉质连衣裙</em></span>
									<b></b>
								</a>
							</li>
							<li class="tabs_con_1_4">
								<a href="<?php echo U('/c/13_0');?>">
									<img src="__PUBLIC__/Images/girls_1_4.jpg" alt="" />
									<span><strong>百搭T恤</strong><em>超萌T恤恋上夏日天</em></span>
									<b></b>
								</a>
							</li>
							<li class="tabs_con_1_5">
								<a href="<?php echo U('/c/18_0');?>">
									<img src="__PUBLIC__/Images/girls_1_5.jpg" alt="" />
									<span><strong>防晒衫</strong><em>防晒美白两不误</em></span>
									<b></b>
								</a>
							</li>
							<li class="tabs_con_1_6" id="girls_play">
								<p><b class="tabs_con_1_6_dot_cur">•</b><b>•</b></p>
								<div>
									<ul class="tabs_con_1_6_cur">
										<li>
											<a href="<?php echo U('/c/3_0');?>">
												<img src="__PUBLIC__/Images/girls_subtab_1.jpg" alt="" />
												<h6>太阳镜</h6>
												<s>夏日出街炫酷单品</s>
											</a>
										</li>
										<li>
											<a href="<?php echo U('/c/3_0');?>">
												<img src="__PUBLIC__/Images/girls_subtab_2.jpg" alt="" />
												<h6>遮阳帽</h6>
												<s>好想去度假</s>
											</a>
										</li>
										<li>
											<a href="<?php echo U('/c/3_0');?>">
												<img src="__PUBLIC__/Images/girls_subtab_1.jpg" alt="" />
												<h6>太阳镜</h6>
												<s>夏日出街炫酷单品</s>
											</a>
										</li>
									</ul>
									<ul>
										<li>
											<a href="<?php echo U('/c/3_0');?>">
												<img src="__PUBLIC__/Images/girls_subtab_2.jpg" alt="" />
												<h6>遮阳帽</h6>
												<s>好想去度假</s>
											</a>
										</li>
										<li>
											<a href="<?php echo U('/c/3_0');?>">
												<img src="__PUBLIC__/Images/girls_subtab_1.jpg" alt="" />
												<h6>太阳镜</h6>
												<s>夏日出街炫酷单品</s>
											</a>
										</li>
										<li>
											<a href="<?php echo U('/c/3_0');?>">
												<img src="__PUBLIC__/Images/girls_subtab_2.jpg" alt="" />
												<h6>遮阳帽</h6>
												<s>好想去度假</s>
											</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
						<!-- 乐活少女 tab页内容 结束 -->
						<!-- 糖果色短裤 tab标签页 内容 开始 -->
						<ul class="tabs_con_extra switch">
							<?php if(is_array($data1)): foreach($data1 as $key=>$v): ?><li>
								<a href="<?php echo U('Show/index', array('gid' => $v['gid']));?>">
									<img _src="__UPLOADS__/Pic/<?php echo ($v["pic"]); ?>" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="<?php echo U('Show/index', array('gid' => $v['gid']));?>">特价清仓两件包邮...</a><span>&yen;<?php echo ($v["shopprice"]); ?></span></p>
							</li><?php endforeach; endif; ?>
							<!-- <li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">特价清仓两件包邮...</a><span>&yen;19.90</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">特价清仓两件包邮...</a><span>&yen;19.90</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">特价清仓两件包邮...</a><span>&yen;19.90</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">特价清仓两件包邮...</a><span>&yen;19.90</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">特价清仓两件包邮...</a><span>&yen;19.90</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">特价清仓两件包邮...</a><span>&yen;19.90</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">特价清仓两件包邮...</a><span>&yen;19.90</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">特价清仓两件包邮...</a><span>&yen;19.90</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">特价清仓两件包邮...</a><span>&yen;19.90</span></p>
							</li> -->
						</ul>
						<!-- 糖果色短裤 tab标签页 内容 结束 -->
						<!-- 个性卡通T恤 tab标签页 内容 开始 -->
						<ul class="tabs_con_extra switch">
							<?php if(is_array($data2)): foreach($data2 as $key=>$v): ?><li>
								<a href="<?php echo U('Show/index', array('gid' => $v['gid']));?>">
									<img _src="__UPLOADS__/Pic/<?php echo ($v["pic"]); ?>" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="<?php echo U('Show/index', array('gid' => $v['gid']));?>">货到付款2013夏装...</a><span>&yen;<?php echo ($v["shopprice"]); ?></span></p>
							</li><?php endforeach; endif; ?>
							<!-- <li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">货到付款2013夏装...</a><span>&yen;29.50</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">货到付款2013夏装...</a><span>&yen;29.50</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">货到付款2013夏装...</a><span>&yen;29.50</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">货到付款2013夏装...</a><span>&yen;29.50</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">货到付款2013夏装...</a><span>&yen;29.50</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">货到付款2013夏装...</a><span>&yen;29.50</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">货到付款2013夏装...</a><span>&yen;29.50</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">货到付款2013夏装...</a><span>&yen;29.50</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">货到付款2013夏装...</a><span>&yen;29.50</span></p>
							</li> -->
						</ul>
						<!-- 个性卡通T恤 tab标签页 内容 结束 -->
						<!-- 印花雪纺衫 tab标签页 内容 开始 -->
						<ul class="tabs_con_extra switch">
							<?php if(is_array($data3)): foreach($data3 as $key=>$v): ?><li>
								<a href="<?php echo U('Show/index', array('gid' => $v['gid']));?>">
									<img _src="__UPLOADS__/Pic/<?php echo ($v["pic"]); ?>" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="<?php echo U('Show/index', array('gid' => $v['gid']));?>">2013夏装新品 荧...</a><span>&yen;<?php echo ($v["shopprice"]); ?></span></p>
							</li><?php endforeach; endif; ?>
							<!-- <li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装新品 荧...</a><span>&yen;66.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装新品 荧...</a><span>&yen;66.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装新品 荧...</a><span>&yen;66.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装新品 荧...</a><span>&yen;66.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装新品 荧...</a><span>&yen;66.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装新品 荧...</a><span>&yen;66.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装新品 荧...</a><span>&yen;66.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装新品 荧...</a><span>&yen;66.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/girls_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装新品 荧...</a><span>&yen;66.00</span></p>
							</li> -->
						</ul>
						<!-- 印花雪纺衫 tab标签页 内容 结束 -->
					</div>
					<!-- 乐活少女 品牌图标区块 开始 -->
					<div class="tabs_brand">
						<ul>
							<li>
								<div>
									<img src="__PUBLIC__/Images/girls_brand_icon_1.jpg" alt="" />
									<span>新甜美主义</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/girls_brand_img_1.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/girls_brand_icon_2.gif" alt="" />
									<span>欧美欧洲站</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/girls_brand_img_2.gif" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/girls_brand_icon_3.jpg" alt="" />
									<span>原创品牌</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/girls_brand_img_3.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/girls_brand_icon_4.jpg" alt="" />
									<span>百分之一</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/girls_brand_img_4.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/girls_brand_icon_5.jpg" alt="" />
									<span>甜美混搭</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/girls_brand_img_5.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/girls_brand_icon_6.jpg" alt="" />
									<span>满88包邮</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/girls_brand_img_6.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/girls_brand_icon_7.jpg" alt="" />
									<span>高贵典雅</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/girls_brand_img_7.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/girls_brand_icon_8.jpg" alt="" />
									<span>美丽女孩</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/girls_brand_img_8.jpg" alt="" /></a>
							</li>
						</ul>
						<p><a href="<?php echo U('/c/4_0');?>">更多品牌</a><span></span></p>
					</div>
					<!-- 乐活少女 品牌图标区块 结束 -->
				</div>
			</div>
			<!-- 乐活少女 区块 结束 -->
			<!-- 魅力女人 区块 开始， 包括 背心连衣裙、美白防晒衫、优雅OL衬衣 切换页 -->
			<div class="tabs" id="ladies_clothes_aim">
				<ul class="tabs_title">
					<li><a href="#nolink" class="ladies_title"><b></b><i></i></a></li>
					<li><a href="#nolink"><i></i>背心连衣裙</a></li>
					<li><a href="#nolink"><i></i>美白防晒衫</a></li>
					<li><a href="#nolink">优雅OL衬衣</a></li>
				</ul>
				<div class="tabs_title_below">
					<div class="tabs_con">
						<!-- 魅力女人 tab页内容 开始 -->
						<ul class="tabs_con_cur switch">
							<li class="tabs_con_1_1">
								<a href="<?php echo U('/c/14_0');?>">
									<img src="__PUBLIC__/Images/ladies_1_1.jpg" alt="" />
									<span><strong>雪纺衫</strong><em>清爽雪纺衫！炎夏降温LOOK</em></span>
									<b></b>
								</a>
							</li>
							<li class="tabs_con_1_2">
								<a href="<?php echo U('/c/16_0');?>">
									<img src="__PUBLIC__/Images/ladies_1_2.jpg" alt="" />
								</a>
								<div class="detail">
									<div>
										<h4>轻熟流行风尚</h4>
										<i>OL气质转型</i>
									</div>
									<p>
										<a href="<?php echo U('/c/4_0');?>">条纹</a>
										<a href="<?php echo U('/c/4_0');?>">通勤</a>
										<a href="<?php echo U('/c/4_0');?>">英伦</a>
										<a href="<?php echo U('/c/4_0');?>">名媛</a>
										<a href="<?php echo U('/c/4_0');?>">简约</a>
										<a href="<?php echo U('/c/4_0');?>">优雅</a>
									</p>
								</div>
							</li>
							<li class="tabs_con_1_3">
								<a href="<?php echo U('/c/6_0');?>">
									<img src="__PUBLIC__/Images/ladies_1_3.jpg" alt="" />
									<span><strong>连衣裙</strong><em>文艺范儿棉麻连衣裙大搜罗</em></span>
									<b></b>
								</a>
							</li>
							<li class="tabs_con_1_4">
								<a href="<?php echo U('/c/13_0');?>">
									<img src="__PUBLIC__/Images/ladies_1_4.jpg" alt="" />
									<span><strong>印花T恤</strong><em>惹眼图案T恤恋上街头潮女</em></span>
									<b></b>
								</a>
							</li>
							<li class="tabs_con_1_5">
								<a href="<?php echo U('/c/6_0');?>">
									<img src="__PUBLIC__/Images/ladies_1_5.jpg" alt="" />
									<span><strong>优雅短裙</strong><em>包臀短裙大秀性感美腿</em></span>
									<b></b>
								</a>
							</li>
							<li class="tabs_con_1_6" id="ladies_play">
								<p><b class="tabs_con_1_6_dot_cur">•</b><b>•</b></p>
								<div>
									<ul class="tabs_con_1_6_cur">
										<li>
											<a href="<?php echo U('/c/3_0');?>">
												<img src="__PUBLIC__/Images/ladies_subtab_1.jpg" alt="" />
												<h6>太阳镜</h6>
												<s>夏日出街炫酷单品</s>
											</a>
										</li>
										<li>
											<a href="<?php echo U('/c/3_0');?>">
												<img src="__PUBLIC__/Images/ladies_subtab_2.jpg" alt="" />
												<h6>遮阳帽</h6>
												<s>好想去度假</s>
											</a>
										</li>
										<li>
											<a href="<?php echo U('/c/3_0');?>">
												<img src="__PUBLIC__/Images/ladies_subtab_1.jpg" alt="" />
												<h6>太阳镜</h6>
												<s>夏日出街炫酷单品</s>
											</a>
										</li>
									</ul>
									<ul>
										<li>
											<a href="<?php echo U('/c/3_0');?>">
												<img src="__PUBLIC__/Images/ladies_subtab_2.jpg" alt="" />
												<h6>遮阳帽</h6>
												<s>好想去度假</s>
											</a>
										</li>
										<li>
											<a href="<?php echo U('/c/3_0');?>">
												<img src="__PUBLIC__/Images/ladies_subtab_1.jpg" alt="" />
												<h6>太阳镜</h6>
												<s>夏日出街炫酷单品</s>
											</a>
										</li>
										<li>
											<a href="<?php echo U('/c/3_0');?>">
												<img src="__PUBLIC__/Images/ladies_subtab_2.jpg" alt="" />
												<h6>遮阳帽</h6>
												<s>好想去度假</s>
											</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
						<!-- 魅力女人 tab页内容 结束 -->
						<!-- 背心连衣裙 tab标签页 内容 开始 -->
						<ul class="tabs_con_extra switch">
							<?php if(is_array($data3)): foreach($data3 as $key=>$v): ?><li>
								<a href="<?php echo U('Show/index', array('gid' => $v['gid']));?>">
									<img _src="__UPLOADS__/Pic/<?php echo ($v["pic"]); ?>" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="<?php echo U('Show/index', array('gid' => $v['gid']));?>">紫唯依梦 2013夏...</a><span>&yen;<?php echo ($v["shopprice"]); ?></span></p>
							</li><?php endforeach; endif; ?>
							<!-- <li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">紫唯依梦 2013夏...</a><span>&yen;64.99</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">紫唯依梦 2013夏...</a><span>&yen;64.99</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">紫唯依梦 2013夏...</a><span>&yen;64.99</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">紫唯依梦 2013夏...</a><span>&yen;64.99</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">紫唯依梦 2013夏...</a><span>&yen;64.99</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">紫唯依梦 2013夏...</a><span>&yen;64.99</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">紫唯依梦 2013夏...</a><span>&yen;64.99</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">紫唯依梦 2013夏...</a><span>&yen;64.99</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_2_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">紫唯依梦 2013夏...</a><span>&yen;64.99</span></p>
							</li> -->
						</ul>
						<!-- 背心连衣裙 tab标签页 内容 结束 -->
						<!-- 美白防晒衫 tab标签页 内容 开始 -->
						<ul class="tabs_con_extra switch">
							<?php if(is_array($data2)): foreach($data2 as $key=>$v): ?><li>
								<a href="<?php echo U('Show/index', array('gid' => $v['gid']));?>">
									<img _src="__UPLOADS__/Pic/<?php echo ($v["pic"]); ?>" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="<?php echo U('Show/index', array('gid' => $v['gid']));?>">RGLT正品 夏装新...</a><span>&yen;<?php echo ($v["shopprice"]); ?></span></p>
							</li><?php endforeach; endif; ?>
							<!-- <li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">RGLT正品 夏装新...</a><span>&yen;19.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">RGLT正品 夏装新...</a><span>&yen;19.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">RGLT正品 夏装新...</a><span>&yen;19.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">RGLT正品 夏装新...</a><span>&yen;19.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">RGLT正品 夏装新...</a><span>&yen;19.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">RGLT正品 夏装新...</a><span>&yen;19.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">RGLT正品 夏装新...</a><span>&yen;19.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">RGLT正品 夏装新...</a><span>&yen;19.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_3_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">RGLT正品 夏装新...</a><span>&yen;19.00</span></p>
							</li> -->
						</ul>
						<!-- 美白防晒衫 tab标签页 内容 结束 -->
						<!-- 优雅OL衬衣 tab标签页 内容 开始 -->
						<ul class="tabs_con_extra switch">
							<?php if(is_array($data1)): foreach($data1 as $key=>$v): ?><li>
								<a href="<?php echo U('Show/index', array('gid' => $v['gid']));?>">
									<img _src="__UPLOADS__/Pic/<?php echo ($v["pic"]); ?>" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="<?php echo U('Show/index', array('gid' => $v['gid']));?>">2013夏装衬衫女短...</a><span>&yen;<?php echo ($v["shopprice"]); ?></span></p>
							</li><?php endforeach; endif; ?>
							<!-- <li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装衬衫女短...</a><span>&yen;39.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装衬衫女短...</a><span>&yen;39.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装衬衫女短...</a><span>&yen;39.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装衬衫女短...</a><span>&yen;39.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装衬衫女短...</a><span>&yen;39.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装衬衫女短...</a><span>&yen;39.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装衬衫女短...</a><span>&yen;39.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装衬衫女短...</a><span>&yen;39.00</span></p>
							</li>
							<li>
								<a href="#">
									<img _src="__PUBLIC__/Images/ladies_4_1.jpg" src="__PUBLIC__/Images/loading.gif" alt="" />
								</a>
								<b></b>
								<p><a href="#">2013夏装衬衫女短...</a><span>&yen;39.00</span></p>
							</li> -->
						</ul>
						<!-- 优雅OL衬衣 tab标签页 内容 结束 -->
					</div>
					<!-- 魅力女人 品牌图标区块 开始 -->
					<div class="tabs_brand">
						<ul>
							<li>
								<div>
									<img src="__PUBLIC__/Images/ladies_brand_icon_1.jpg" alt="" />
									<span>新甜美主义</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/ladies_brand_img_1.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/ladies_brand_icon_2.jpg" alt="" />
									<span>欧美欧洲站</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/ladies_brand_img_2.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/ladies_brand_icon_3.jpg" alt="" />
									<span>原创品牌</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/ladies_brand_img_3.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/ladies_brand_icon_4.jpg" alt="" />
									<span>百分之一</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/ladies_brand_img_4.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/ladies_brand_icon_5.jpg" alt="" />
									<span>甜美混搭</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/ladies_brand_img_5.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/ladies_brand_icon_6.jpg" alt="" />
									<span>满88包邮</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/ladies_brand_img_6.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/ladies_brand_icon_7.jpg" alt="" />
									<span>高贵典雅</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/ladies_brand_img_7.jpg" alt="" /></a>
							</li>
							<li>
								<div>
									<img src="__PUBLIC__/Images/ladies_brand_icon_8.jpg" alt="" />
									<span>美丽女孩</span>
								</div>
								<a href="<?php echo U('/c/4_0');?>"><img src="__PUBLIC__/Images/ladies_brand_img_8.jpg" alt="" /></a>
							</li>
						</ul>
						<p><a href="<?php echo U('/c/4_0');?>">更多品牌</a><span></span></p>
					</div>
					<!-- 魅力女人 品牌图标区块 结束 -->
				</div>
			</div>
			<!-- 魅力女人 区块 结束 -->

			<!-- 畅销人气榜 区块 开始 -->
			<div class="hot" id="hot_list_aim">
				<div class="hot_title">
					<h2>畅销人气榜</h2>
					<ul>
						<li class="hot_title_cur"><a href="#nolink">人气上衣</a></li>
						<li><a href="#nolink">人气裤装</a></li>
						<li><a href="#nolink">人气裙装</a></li>
					</ul>
				</div>
				<div class="hot_word">
					<h3>热搜词</h3>
					<ul>
						<li><a href="<?php echo U('/c/6_0');?>"><strong>雪纺连衣裙</strong><em>1,767,700次</em></a></li>
						<li><a href="<?php echo U('/c/14_0');?>"><strong>雪纺衫</strong><em>1,373,270次</em></a></li>
						<li><a href="<?php echo U('/c/6_0');?>"><strong>长裙</strong><em>794,060次</em></a></li>
						<li><a href="<?php echo U('/c/13_0');?>"><strong>T恤</strong><em>243,890次</em></a></li>
						<li><a href="<?php echo U('/c/15_0');?>"><strong>衬衫</strong><em>234,500次</em></a></li>
						<li><a href="<?php echo U('/c/4_0');?>"><strong>情侣装</strong><em>93,446次</em></a></li>
						<li><a href="<?php echo U('/c/2_0');?>"><strong>大码女装</strong><em>84,733次</em></a></li>
						<li><a href="<?php echo U('/c/22_0');?>"><strong>小西装</strong><em>67,534次</em></a></li>
						<li><a href="<?php echo U('/c/5_0');?>"><strong>牛仔裤</strong><em>63,552次</em></a></li>
						<li><a href="<?php echo U('/c/4_0');?>"><strong>短外套</strong><em>58,921次</em></a></li>
					</ul>
				</div>
				<div class="hot_goods">
					<h3>热搜商品</h3>
					<div class="hot_visible">
						<!-- 人气上衣排行榜图片 开始 -->
						<div class="visible_box visible_box_cur">
							<ul class="hot_toptenz">
								<li class="gold">
									<a href="<?php echo U('/c/4_0');?>">
										<img src="__PUBLIC__/Images/jacket_1.jpg" alt="" />
									</a>
									<strong></strong>
									<i>1</i>
									<b></b>
									<p>&yen;78.00</p>
									<div>热销<span>2728</span>件</div>
								</li>
								<li class="silver">
									<a href="<?php echo U('/c/4_0');?>">
										<img src="__PUBLIC__/Images/jacket_2.jpg" alt="" />
									</a>
									<strong></strong>
									<i>2</i>
									<b></b>
									<p>&yen;29.00</p>
									<div>热销<span>2125</span>件</div>
								</li>
								<li class="copper">
									<a href="<?php echo U('/c/4_0');?>">
										<img src="__PUBLIC__/Images/jacket_3.jpg" alt="" />
									</a>
									<strong></strong>
									<i>3</i>
									<b></b>
									<p>&yen;138.00</p>
									<div>热销<span>2068</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/4_0');?>">
										<img src="__PUBLIC__/Images/jacket_4.jpg" alt="" />
									</a>
									<em>4</em>
									<b></b>
									<p>&yen;80.00</p>
									<div>热销<span>1533</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/4_0');?>">
										<img src="__PUBLIC__/Images/jacket_5.jpg" alt="" />
									</a>
									<em>5</em>
									<b></b>
									<p>&yen;38.00</p>
									<div>热销<span>943</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/4_0');?>">
										<img src="__PUBLIC__/Images/jacket_6.jpg" alt="" />
									</a>
									<em>6</em>
									<b></b>
									<p>&yen;29.00</p>
									<div>热销<span>728</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/4_0');?>">
										<img src="__PUBLIC__/Images/jacket_7.jpg" alt="" />
									</a>
									<em>7</em>
									<b></b>
									<p>&yen;129.00</p>
									<div>热销<span>628</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/4_0');?>">
										<img src="__PUBLIC__/Images/jacket_8.jpg" alt="" />
									</a>
									<em>8</em>
									<b></b>
									<p>&yen;290.00</p>
									<div>热销<span>528</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/4_0');?>">
										<img src="__PUBLIC__/Images/jacket_9.jpg" alt="" />
									</a>
									<em>9</em>
									<b></b>
									<p>&yen;36.00</p>
									<div>热销<span>428</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/4_0');?>">
										<img src="__PUBLIC__/Images/jacket_10.jpg" alt="" />
									</a>
									<em>10</em>
									<b></b>
									<p>&yen;88.00</p>
									<div>热销<span>366</span>件</div>
								</li>
							</ul>
							<s class="hot_left"></s><s class="hot_right"></s>
						</div>
						<!-- 人气上衣排行榜图片 结束 -->
						<!-- 人气裤装排行榜图片 开始 -->
						<div class="visible_box">
							<ul class="hot_toptenz">
								<li class="gold">
									<a href="<?php echo U('/c/5_0');?>">
										<img src="__PUBLIC__/Images/trousers_1.jpg" alt="" />
									</a>
									<strong></strong>
									<i>1</i>
									<b></b>
									<p>&yen;78.00</p>
									<div>热销<span>2728</span>件</div>
								</li>
								<li class="silver">
									<a href="<?php echo U('/c/5_0');?>">
										<img src="__PUBLIC__/Images/trousers_2.jpg" alt="" />
									</a>
									<strong></strong>
									<i>2</i>
									<b></b>
									<p>&yen;29.00</p>
									<div>热销<span>2125</span>件</div>
								</li>
								<li class="copper">
									<a href="<?php echo U('/c/5_0');?>">
										<img src="__PUBLIC__/Images/trousers_3.jpg" alt="" />
									</a>
									<strong></strong>
									<i>3</i>
									<b></b>
									<p>&yen;138.00</p>
									<div>热销<span>2068</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/5_0');?>">
										<img src="__PUBLIC__/Images/trousers_4.jpg" alt="" />
									</a>
									<em>4</em>
									<b></b>
									<p>&yen;80.00</p>
									<div>热销<span>1533</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/5_0');?>">
										<img src="__PUBLIC__/Images/trousers_5.jpg" alt="" />
									</a>
									<em>5</em>
									<b></b>
									<p>&yen;38.00</p>
									<div>热销<span>943</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/5_0');?>">
										<img src="__PUBLIC__/Images/trousers_6.jpg" alt="" />
									</a>
									<em>6</em>
									<b></b>
									<p>&yen;29.00</p>
									<div>热销<span>728</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/5_0');?>">
										<img src="__PUBLIC__/Images/trousers_7.jpg" alt="" />
									</a>
									<em>7</em>
									<b></b>
									<p>&yen;129.00</p>
									<div>热销<span>628</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/5_0');?>">
										<img src="__PUBLIC__/Images/trousers_8.jpg" alt="" />
									</a>
									<em>8</em>
									<b></b>
									<p>&yen;290.00</p>
									<div>热销<span>528</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/5_0');?>">
										<img src="__PUBLIC__/Images/trousers_9.jpg" alt="" />
									</a>
									<em>9</em>
									<b></b>
									<p>&yen;36.00</p>
									<div>热销<span>428</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/5_0');?>">
										<img src="__PUBLIC__/Images/trousers_10.jpg" alt="" />
									</a>
									<em>10</em>
									<b></b>
									<p>&yen;88.00</p>
									<div>热销<span>366</span>件</div>
								</li>
							</ul>
							<s class="hot_left"></s><s class="hot_right"></s>
						</div>
						<!-- 人气裤装排行榜图片 结束 -->
						<!-- 人气裙装排行榜图片 开始 -->
						<div class="visible_box">
							<ul class="hot_toptenz">
								<li class="gold">
									<a href="<?php echo U('/c/6_0');?>">
										<img src="__PUBLIC__/Images/skirt_1.jpg" alt="" />
									</a>
									<strong></strong>
									<i>1</i>
									<b></b>
									<p>&yen;78.00</p>
									<div>热销<span>2728</span>件</div>
								</li>
								<li class="silver">
									<a href="<?php echo U('/c/6_0');?>">
										<img src="__PUBLIC__/Images/skirt_2.jpg" alt="" />
									</a>
									<strong></strong>
									<i>2</i>
									<b></b>
									<p>&yen;29.00</p>
									<div>热销<span>2125</span>件</div>
								</li>
								<li class="copper">
									<a href="<?php echo U('/c/6_0');?>">
										<img src="__PUBLIC__/Images/skirt_3.jpg" alt="" />
									</a>
									<strong></strong>
									<i>3</i>
									<b></b>
									<p>&yen;138.00</p>
									<div>热销<span>2068</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/6_0');?>">
										<img src="__PUBLIC__/Images/skirt_4.jpg" alt="" />
									</a>
									<em>4</em>
									<b></b>
									<p>&yen;80.00</p>
									<div>热销<span>1533</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/6_0');?>">
										<img src="__PUBLIC__/Images/skirt_5.jpg" alt="" />
									</a>
									<em>5</em>
									<b></b>
									<p>&yen;38.00</p>
									<div>热销<span>943</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/6_0');?>">
										<img src="__PUBLIC__/Images/skirt_6.jpg" alt="" />
									</a>
									<em>6</em>
									<b></b>
									<p>&yen;29.00</p>
									<div>热销<span>728</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/6_0');?>">
										<img src="__PUBLIC__/Images/skirt_7.jpg" alt="" />
									</a>
									<em>7</em>
									<b></b>
									<p>&yen;129.00</p>
									<div>热销<span>628</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/6_0');?>">
										<img src="__PUBLIC__/Images/skirt_8.jpg" alt="" />
									</a>
									<em>8</em>
									<b></b>
									<p>&yen;290.00</p>
									<div>热销<span>528</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/6_0');?>">
										<img src="__PUBLIC__/Images/skirt_9.jpg" alt="" />
									</a>
									<em>9</em>
									<b></b>
									<p>&yen;36.00</p>
									<div>热销<span>428</span>件</div>
								</li>
								<li>
									<a href="<?php echo U('/c/6_0');?>">
										<img src="__PUBLIC__/Images/skirt_10.jpg" alt="" />
									</a>
									<em>10</em>
									<b></b>
									<p>&yen;88.00</p>
									<div>热销<span>366</span>件</div>
								</li>
							</ul>
							<s class="hot_left"></s><s class="hot_right"></s>
						</div>
						<!-- 人气裙装排行榜图片 结束 -->
					</div>
				</div>
			</div>
			<!-- 畅销人气榜 区块 结束 -->

			<!-- 包邮疯狂购 区块 开始 -->
			<div class="freepost">
				<div class="freepost_title">
					<h2>包邮疯狂购</h2>
					<a href="#">更多包邮商品<i></i></a>
				</div>
				<div class="freepost_con">
					<strong class="freepost_left"></strong><strong class="freepost_right"></strong>
					<ul class="freepost_cur">
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_1.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">超级显瘦气质连衣裙</a>
							<p class="freepost_price"><span>&yen;98.00</span><a href="#">包邮</a></p>
						</li>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_2.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">防晒衣空调衫女装休闲</a>
							<p class="freepost_price"><span>&yen;24.00</span><a href="#">包邮</a></p>
						</li>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_3.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">水溶绣花蕾丝芭蕾公...</a>
							<p class="freepost_price"><span>&yen;144.00</span><a href="#">包邮</a></p>
						</li>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_4.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">正品 显瘦连衣裙188元</a>
							<p class="freepost_price"><span>&yen;188.00</span><a href="#">包邮</a></p>
						</li>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_5.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">清新盘花雪纺连衣裙</a>
							<p class="freepost_price"><span>&yen;103.30</span><a href="#">包邮</a></p>
						</li>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_6.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">促销 冰丝印花显瘦...</a>
							<p class="freepost_price"><span>&yen;128.00</span><a href="#">包邮</a></p>
						</li>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_7.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">夏装假两件碎花雪纺...</a>
							<p class="freepost_price"><span>&yen;123.00</span><a href="#">包邮</a></p>
						</li>
					</ul>
					<ul>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_8.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">夏装新韩版印花短袖...</a>
							<p class="freepost_price"><span>&yen;111.00</span><a href="#">包邮</a></p>
						</li>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_9.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">夏季复古高腰显瘦系...</a>
							<p class="freepost_price"><span>&yen;88.00</span><a href="#">包邮</a></p>
						</li>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_10.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">韩版新款短袖雪纺连...</a>
							<p class="freepost_price"><span>&yen;66.00</span><a href="#">包邮</a></p>
						</li>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_11.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">夏装新拼接不规则雪...</a>
							<p class="freepost_price"><span>&yen;166.00</span><a href="#">包邮</a></p>
						</li>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_12.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">夏季网纱拼色休闲套装</a>
							<p class="freepost_price"><span>&yen;99.00</span><a href="#">包邮</a></p>
						</li>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_13.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">包邮 蕾丝雪纺拼接裙</a>
							<p class="freepost_price"><span>&yen;66.00</span><a href="#">包邮</a></p>
						</li>
						<li>
							<a href="<?php echo U('/c/4_0');?>">
								<img src="__PUBLIC__/Images/freepost_14.jpg" alt="" />
							</a>
							<a href="<?php echo U('/c/4_0');?>" class="freepost_des">韩版新款印花拼接雪...</a>
							<p class="freepost_price"><span>&yen;122.00</span><a href="#">包邮</a></p>
						</li>
					</ul>
				</div>
			</div>
			<!-- 包邮疯狂购 区块 结束 -->

		</div>
		<!-- 主体右侧内容区域 结束 -->

	</div>
	<!-- 主体区域 结束 -->

		<!-- 页脚 开始 -->
	<!-- 承诺 图标 开始 -->
	<div class="promise">
		<p class="promise_left"><a href="#"></a></p>
		<p class="promise_middle"><a href="#"></a></p>
		<p class="promise_right"><a href="#"></a></p>
	</div>
	<!-- 承诺 图标 结束 -->
	<!-- 新手指南、购物保障、支付方式、服务中心 区块 开始 -->
	<div class="service">
		<div class="newer_guide">
			<dl>
				<dt>新手指南</dt>
				<dd>
					<p><a href="#">新人购物指南</a></p>
					<p><a href="#">消费者维权中心</a></p>
				</dd>
			</dl>
		</div>
		<div class="shop_secure">
			<dl>
				<dt>购物保障</dt>
				<dd>
					<p><a href="#">全场正品</a></p>
					<p><a href="#">先行赔付</a></p>
					<p><a href="#">快速发货</a></p>
					<p><a href="#">7天免邮包退</a></p>
				</dd>
			</dl>
		</div>
		<div class="pay_method">
			<dl>
				<dt>支付方式</dt>
				<dd>
					<p><a href="#">支付宝余额支付</a></p>
				</dd>
			</dl>
		</div>
		<div class="service_center">
			<dl>
				<dt>服务中心</dt>
				<dd>
					<p><a href="#">网购规则</a></p>
					<p><a href="#">客服</a></p>
				</dd>
			</dl>
		</div>
	</div>
	<!-- 新手指南、购物保障、支付方式、服务中心 区块 结束 -->
	<!-- 页脚公司信息 区块 开始 -->
	<div class="footer">
		<div class="footer_con">
			<p class="introduce">
				<a href="#">CC女装城简介</a> |
				<a href="#">客服中心</a> |
				<a href="#">支付宝支付</a> |
				<a href="#">网站地图</a> |
				<a href="#">友链申请</a> |
				<a href="#">用户协议</a> |
				<a href="#">版权说明</a> 
			</p>
			<p class="copy">Copyright &copy; 2013 - 2014 CCSHOP. All Rights Reserved CC女装城 版权所有</p>
			<p class="trust"><a href="#"><img src="__PUBLIC__/Images/trust.png" alt="" /></a></p>
		</div>
	</div>
	<!-- 页脚公司信息 区块 结束 -->
	<!-- 页脚 结束 -->

	<!-- 回顶部 按钮 开始 -->
	<div class="back"></div>
	<!-- 回顶部 按钮 结束 -->

	
	<!-- 右侧固定定位快速定位小区块 开始 -->
	<div class="locate">
		<ul>
			<li><a href="#locate_brand_aim" id="locate_brand">精选品牌</a></li>
			<li><a href="javascript:void(0);" id="choose_foryou">帮你挑</a></li>
			<li><a href="#fashion_new_aim" id="fashion_new">潮流新品</a></li>
			<li><a href="javascript:void(0);" id="fashion_special">时尚专辑</a></li>
			<li><a href="#girls_clothes_aim" id="girls_clothes">少女服饰</a></li>
			<li><a href="#ladies_clothes_aim" id="ladies_clothes">女人服饰</a></li>
			<li><a href="#hot_list_aim" id="hot_list">畅销排行</a></li>
		</ul>
	</div>
	<!-- 右侧固定定位快速定位小区块 结束 -->

</body>
</html>