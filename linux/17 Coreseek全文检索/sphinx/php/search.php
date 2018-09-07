<?php
	if(!isset($_GET['word']))exit;
	$sphinx = new SphinxClient();//实例化对象
	$sphinx->setServer("localhost",9312);//连接服务器
	$sphinx->setMatchMode(SPH_MATCH_ANY);//设置搜索模式
	$searchWord =$_GET['word'];//搜索词
	$ids = $sphinx->query($searchWord);//执行搜索
	echo "<pre>";
	print_r($ids);//打印结果信息
	$ids = array_keys($ids['matches']);//搜索到的记录主键值
	$db = new Mysqli("localhost","root","admin888","houdunwang");//连接数据库
	$db->query("set names utf8");//设置字符集
	$result = $db->query("select title,content from news where id in (".implode(",",$ids).")");//从数据库中查询结果
	$rows =array();
	if($result){
		$opts = array("before_match"=>"<span style='color:#f00'>","after_match"=>"</span>");//设置搜索词前后包裹标签
		while($row=$result->fetch_assoc()){
			//$row数组必须为字符串
			$rows[]=$sphinx->buildExcerpts($row,'main',$searchWord,$opts);
		}
	}
	?>
	<?php foreach($rows as $field):?>
	<li style="border-bottom:solid 1px #dcdcdc;padding:15px;">
		<?php echo $field[0];?>
		<p>
			<?php echo $field[1];?>
		</p>
	</li>
<?php endforeach;?>