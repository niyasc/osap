<?php
	
	require("../includes/config.php");
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    	$id = $_GET['id'];
    	
    	$source = query("select name from software where id = ?", $id);
    	$source = $source[0]['name'];
    	
    	$subcat = query("select subcat from software where id = ?", $id);
    	$subcat = $subcat[0]['subcat'];
    	
    	$software = query("select id, name, platform from software where type = 0 and subcat= ?", $subcat);
    	
    	render("alternative.php", ["title" => "Alternatives for ".$source, "heading"=> "Alternatives for <a href=detailed.php?id=".$id." target='_blank'>".$source."</a>", "software" => $software]);
    	
    }
    else {
    	redirect("./");
    }
	
?>
