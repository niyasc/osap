<?php
	
	require("../includes/config.php");
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    	$id = $_GET['id'];
    	
    	$source = query("select name from software where id = ?", $id);
    	$source = $source[0]['name'];
    	
    	$subcat = query("select subcat from software where id = ?", $id);
    	$subcat = $subcat[0]['subcat'];
    	
    	$softwares = query("select id, name, platform from software where type = 0 and subcat= ? order by name, platform", $subcat);
    	
    	$final = [];
    		
    	foreach($softwares as $software)
    	{
    		$platform = query("select c.name from software a, software_platform b,platform c where a.id = b.software_id and b.platform_id = c.id and a.id = ?", $software["id"]);
  		$software["platforms"] = $platform;
    		array_push($final, $software);
    	}
    	
    	render("alternative.php", ["title" => "Alternatives for ".$source, "heading"=> "Open Source Alternatives for <a href=detailed.php?id=".$id." >".$source."</a>", "software" => $final]);
    	
    }
    else {
    	redirect("./");
    }
	
?>
