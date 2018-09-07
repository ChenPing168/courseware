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
						<?php 
							$cateModel = new \Common\Model\Cate;
							$cateData = $cateModel->get();
							//文章模型
							$arcModel = new \Common\Model\Arc;
							//压入文章总数
							foreach ($cateData as $k => $v) {
								$cateData[$k]['total'] = $arcModel->where("category_cid={$v['cid']} and is_recycle=0")->count();
							}
						
						 ?>
						<div class="_widget">
							<h4>分类列表</h4>
							<div>
								{{foreach from="$cateData" value="$v"}}
								<!--如果分类下面有文章，显示总数-->
								{{if value="$v['total']"}}
									<a href="{{U('List/index',array('cid'=>$v['cid']))}}">{{$v['cname']}} ({{$v['total']}})</a>
								{{else}}
									<!--否则就不显总数了-->
									<a href="javascript:;">{{$v['cname']}}</a>
								{{endif}}
								
								{{endforeach}}
							</div>
						</div>
						<?php 
							$tagModel = new \Common\Model\Tag;
							$tagData = $tagModel->get();
						 ?>
						<div class="_widget">
							<h4>标签云</h4>
							<div class="_tag">
								{{foreach from="$tagData" value="$v"}}
								<a href="{{U('List/index',array('tid'=>$v['tid']))}}">{{$v['tname']}}</a>
								{{endforeach}}
							</div>
						</div>
						
					</aside>
					


