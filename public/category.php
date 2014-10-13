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
    		$categories = query("select * from subcat where parent=?", $_GET["id"]);
    		$cat = query("select name from category where id=?", $_GET["id"]);
    		render("category.php", ["categories" => $categories, "title" => $cat, "id" => $_GET["id"]]);
    	}
    	catch (Exception $e) {
    		echo $e->getMessage();
    		redirect("./");
    	}
    }
?>
