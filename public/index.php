<?php
    // configuration
    ini_set("display_errors", true);
    ini_set("display_warnings",true);
    error_reporting(E_ALL);
    require("../includes/config.php");
    $categories = query("select * from category");
    render("home.php",["categories" => $categories]);
?>
