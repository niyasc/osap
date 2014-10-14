<?php

    // configuration
    require("../includes/config.php"); 
    if(empty($_SESSION["uname"])) {
    	redirect("login.php");
    }

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	print "if";
    	try {
        	$scat = $_POST["subcategory"];
        	$scatid = query("select id from subcat where name=?", $scat);
        	$scatid = $scatid[0]["id"];
        
        	$name = $_POST["name"];
        	$desc = $_POST["description"];
        	$website = $_POST["website"];
        	$platform = $_POST["platform"];
        	$submit = $_POST["submit"];
        	if ($_POST["type"] == "Free") {
        		$type = 0;
        	}
        	else {
        		$type = 1;
        	}
        	$f = query("insert into software(subcat, name, website, platform, submit, type, description) values(?, ?, ?, ?, ?, ?, ?)", $scatid, $name, $website, $platform, $submit, $type, $desc);
        	print 'again';
        	print_r($f);
        	print $f;
        	print "error";
        	redirect("./software.php?id=".$scatid);
        }
        catch(Exception $e) {
        	print_r($e);
        }
    }
  else if(empty($_GET["id"])) {
    	//some mistake or direct access attempt
    	print 'mistake';
    	//redirect("./");
    }
    else
    {
        // else render form
    		$subcat = query("select parent from subcat where id = ?", $_GET["id"]);
    		$subcat = $subcat[0]["parent"];
    		
    		$scatname = query("select name from subcat where id = ?", $_GET["id"]);
    		$scatname = $scatname[0]["name"];
    		
    		$catname = query("select name from category where id = ?", $subcat);
    		$catname = $catname[0]["name"];
    		
    		render("add_software.php", ["title" => "Add Software in ".$catname." ".$scatname, "id" => $_GET["id"], "catname"=>$catname, "scatname"=>$scatname]);
    }

?>
