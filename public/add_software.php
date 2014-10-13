<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["name"]))
        {
            redirect("add_subcategory.php?error=Provide+a+category");
        }
        else
        {
        	print_r($_POST);
        	$catid = query("select id from category where name=?", $_POST["parent"]);
        	$catid = $catid[0]["id"];
        	
        	query("INSERT INTO subcat(name, parent) values(?, ?)", $_POST["name"], $catid);
        	?>
        		<script>
        		alert("Category added successfully");
        		</script>
        	<?php
        	redirect("software.php?id=".$catid);
        }
    }
    else if(empty($_GET["id"])) {
    	//some mistake or direct access attempt
    	redirect("./");
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
