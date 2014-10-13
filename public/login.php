<?php

    // configuration
    require("../includes/config.php");
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["uname"]))
        {
            redirect("login.php?error=Provide+mahall+username");
        }
        else if (empty($_POST["passwd"]))
        {
            apologize("login.php?error=Provide+mahall+password");
        }

        if($_POST["uname"] == "admin" and $_POST["passwd"]=="secret") {
        	$_SESSION["uname"] = $_POST["uname"];
        	print "login done";
        	print_r($_SESSION);
        	redirect("./");
        }
        else
        	redirect("login.php?error=Invalid+mahall+username+or+password.");
    }
    else
    {
        // else render form
        render("login_form.php", ["title" => "Log In"]);
    }

?>
