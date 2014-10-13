<?php

    // configuration
    require("../includes/config.php"); 
    if(empty($_SESSION["uname"])) {
    	redirect("login.php");
    }

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["name"]))
        {
            redirect("add_category.php?error=Provide+a+category");
        }
        else
        {
        	query("INSERT INTO category(name) values(?)", $_POST["name"]);
        	?>
        		<script>
        		alert("Category added successfully");
        		</script>
        	<?php
        	redirect("index.php");
        }
    }
    else
    {
        // else render form
        render("add_category.php", ["title" => "Add Category"]);
    }

?>
