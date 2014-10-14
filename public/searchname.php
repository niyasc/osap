<?php
	include_once("../includes/config.php");
	//file_put_contents("log.txt", $_GET);
	
if (isset($_GET['searchterm'])){

	$names = query("select id, name, platform from software where type=1 and name like '%".$_GET["searchterm"]."%'");
	$data = [];
	$single = [];
	if(count($names) == 0) {
		echo json_encode(["value"=>"No match Found"]);
	}
	else {
		foreach($names as $name) {
			$single['label'] = $name['name']."(".$name['platform'].")";
			$single['value'] = $name['name']."(".$name['platform'].")";
			$single['link'] = "alternative.php?id=".$name['id'];
			array_push($data, $single);
		}
		echo json_encode($data);
	}
}else {
	echo json_encode(["value"=>"No match Found"]);
}
?>
