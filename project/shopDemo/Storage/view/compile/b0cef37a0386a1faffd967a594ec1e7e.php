<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>

	<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Bootstrap/Css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Admin/Css/common.css" />
	<script type="text/javascript" src='<?php echo __PUBLIC__?>/jquery-1.8.2.min.js'></script>
	<script type="text/javascript">
		$(function(){
			$('[name=cid]').change(function(){
				var tid = $('option:selected').attr('tid');
				$.ajax({
					type:"post",
					url:"<?php echo U('getTypeAttr')?>",
					data:{id : tid},
					dataType:'json',
					success:function(phpData){
						//规格(可选)
						var spec = '';
						//属性（不可选）
						var attr = '';
						$.each(phpData, function(k,v) {    
							//规格
							if(v.class == 1){
								spec += '<tr class="info">' +
								'<td>'+v.taname+'</td>' +
								'<td>' +
									'<select name="spec['+v.taid+'][value][]" id=""><option value="">请选择</option>';
										$.each(v.tavalue, function(kk,vv) {    
											 spec += '<option value="'+vv+'">'+vv+'</option>';                                                      
										});
									spec += '</select></td><td>附加价格：<input type="text" name="spec['+v.taid+'][price][]" id="" /></td>' +
										'<td><span class="btn btn-success add-spec">增加规格</span></td></tr>';
							
							}else{//属性
								attr += '<tr class="info">' + 
											'<td>'+v.taname+'</td>' + 
											'<td>' + 
											'<select name="attr['+v.taid+']" id=""><option value="">请选择</option>';
												
												$.each(v.tavalue, function(kk,vv) {    
													 attr += '<option value="'+vv+'">'+vv+'</option>';                                                      
												});
												
								attr += '</select></td></tr>';
							}                                                          
						});
						
						//插入属性
						$('#attr').html(attr);
						$('#spec').html(spec);
					}
				});
			})
	
	
			//点击添加规格
			$('.add-spec').live('click',function(){
				//找到父级的tr
				var parentsTr = $(this).parents('tr');
				//把父级的tr克隆复制
				var cloneTr = parentsTr.clone();
				cloneTr.find('.add-spec').removeClass('add-spec btn-success').addClass('remove-spec btn-danger').html('删除规格');
				//插入下一行
				parentsTr.after(cloneTr);
			})
			//删除规格
			$('.remove-spec').live('click',function(){
				$(this).parents('tr').remove();
			})
		})
	</script>
	
</head>
<body>
	<div class="container-fluid">
	<div class="row-fluid">
	<div class="span12">

	<form action="" method='post'>
		<fieldset>
			<legend>添加商品</legend>
			<table class='table table-bordered table-hover'>
				<thead>
					<tr>
						<th colspan="2" class="btn btn-primary">基本信息</th>
					</tr>
				</thead>
				<tbody>
					<tr class="info">
						<td>所属分类</td>
						<td>
						
							<select name="cid">
								<option value="0">-请选择-</option>
								<?php foreach ($cate as $v){?>
									<option value="<?php echo $v['cid']?>" tid="<?php echo $v['tid']?>"><?php echo $v['_name']?></option>
								<?php }?>
							</select>
						</td>
					</tr>
					<tr class="info">
						<td>所属品牌</td>
						<td>
							<select name="bid">
								<option value="0">-请选择-</option>
								<?php foreach ($brand as $v){?>
									<option value="<?php echo $v['bid']?>"><?php echo $v['bname']?></option>
								<?php }?>
								
							</select>
						</td>
					</tr>
					<tr class="info">
						<td>商品名称</td>
						<td>
							<input type="text" name='gname'/>
						</td>
					</tr>
					<tr class="info">
						<td>单位</td>
						<td>
							<input type="text" name='unit' value='件'/>
						</td>
					</tr>
					<tr class="info">
						<td>市价场</td>
						<td>
							<input type="text" name='marketprice'/>
						</td>
					</tr>
					<tr class="info">
						<td>商城价</td>
						<td>
							<input type="text" name='shopprice'/>
						</td>
					</tr>
					<tr class="info">
						<td>点击次数</td>
						<td>
							<input type="text" name='click'/>
						</td>
					</tr>
				</tbody>
			</table>

			<p class="btn btn-primary">商品属性</p>
			<table class="table table-bordered table-hover" id='attr' class="info">
				
				
				
			</table>
			<p class="btn btn-primary">商品规格</p>
			<table class="table table-bordered table-hover" id='spec'>
				
			</table>
			<table class='table table-bordered'>
				<tr>
					<th colspan="3" class="btn btn-primary">列表图</th>
				</tr>
				<tr class="info">
					<td>上传图片</td>
					<td>
						<input type="file" name='pic' id='pic'/>
					</td>
					<td id='pic-list'></td>
				</tr>
			</table>

			<table class='table table-bordered'>
				<tr>
					<th colspan="3" class="btn btn-primary">商品图册</th>
				</tr>
				<tr class="info">
					<td>上传图片</td>
					<td>
						<input type="file" name='photo' id='photo' />
					</td>
					<td id='photo-list'></td>
				</tr>
			</table>

			<table class='table'>
				<tr class="next_show">
					<th class="btn btn-primary">商品详细</th>
				</tr>
				<tr class="hide info">
					<td>
						<textarea name="intro" id="intro"></textarea>
					</td>
				</tr>
			</table>

			<table class='table'>
				<tr class="next_show">
					<th class="btn btn-primary">售后服务</th>
				</tr>
				<tr class="hide info">
					<td>
						<textarea name="service" id="service"></textarea>
					</td>
				</tr>
			</table>
			<input type="hidden" name='tid' value='0'/>
			<input type="submit" value="确认添加" class="btn btn-primary btn-block btn-large" />
		</fieldset>
	</form>

	</div>
	</div>
	</div>
</body>
</html>