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
    		$softwares = query("select id, name, platform, type from software where subcat=? order by name, platform asc", $_GET["id"]);
    		$subcat = query("select parent from subcat where id = ?", $_GET["id"]);
    		$subcat = $subcat[0]["parent"];
    		
    		$scatname = query("select name from subcat where id = ?", $_GET["id"]);
    		$scatname = $scatname[0]["name"];
    		
    		$catname = query("select name from category where id = ?", $subcat);
    		$catname = $catname[0]["name"];
    		
    		render("software.php", ["softwares" => $softwares, "title" => "Softwares in ".$catname." ".$scatname, "id" => $_GET["id"], "heading" => "<a href=category.php?id=".$subcat.">".$catname."</a> => ".$scatname]);
    	}
    	catch (Exception $e) {
    		echo $e->getMessage();
    		redirect("./");
    	}
    }
?>
