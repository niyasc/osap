<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	print 'inif';
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
        	redirect("category.php?id=".$catid);
        }
    }
    else if(empty($_GET["id"])) {
    	//some mistake or direct access attempt
    	echo 'mistake';
    	redirect("./");
    }
    else
    {
    	print 'inelse';
        // else render form
        $cat = query("select name from category where id=?", $_GET["id"]);
        $cat = $cat[0]["name"];
        render("add_subcategory.php", ["title" => "Add Sub Category to".$cat, "category" => $cat]);
    }

?>
