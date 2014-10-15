<?php

    // configuration
    require("../includes/config.php");
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["text"])) {
        	echo "You made an empty suggestion, click <a href='./'>here</a> to return to home page";
        }
        else {
        	query("insert into suggestion(text) values(?)", $_POST["text"]);
        	echo "Your suggestion has submitted successfully, click <a href='./'>here</a> to return to home page";
        }
    }
    else
    {
        // else render form
        render("suggest.php", ["title" => "Suggest A Software"]);
    }

?>
