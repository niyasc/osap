<?php
    // configuration
    ini_set("display_errors", true);
    ini_set("display_warnings",true);
    error_reporting(E_ALL);
    require("../includes/config.php");
    if (empty($_GET["id"])) {
    	redirect("./");
    }
    else {
    	try {
    		$details = query("select * from software where id=?", $_GET["id"]);
    		$details = $details[0];
    		
    		
    		$subcat = query("select parent from subcat where id = ?", $details["subcat"]);
    		$subcat = $subcat[0]["parent"];
    		
    		$scatname = query("select name from subcat where id = ?", $details['subcat']);
    		$scatname = $scatname[0]["name"];
    		
    		$catname = query("select name from category where id = ?", $subcat);
    		$catname = $catname[0]["name"];
    		
    		render("detailed.php", ["details" => $details, "title" => $details["name"]." in ".$catname." -> ".$scatname, "id" => $_GET["id"], "heading" => "<a href=category.php?id=".$subcat.">".$catname."</a> => <a href=software.php?id=".$details['subcat'].">".$scatname."</a> => ".$details["name"]]);
    	}
    	catch (Exception $e) {
    		echo $e->getMessage();
    		redirect("./");
    	}
    }
?>
