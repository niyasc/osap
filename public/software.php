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
    		
    		$id = $_GET["id"];
    		
    		$platforms = [];
    		
    		$final = [];
    		
    		foreach($softwares as $software)
    		{
    			$platform = query("select c.name from software a, software_platform b,platform c where a.id = b.software_id and b.platform_id = c.id and a.id = ?", $software["id"]);
    			/*echo $software["name"];
    			print_r($platform);
    			echo "<br>";*/
    			$software["platforms"] = $platform;
    			/*print_r($software["platform"]);
    			echo "<br>";
    			echo "-------<br>";*/
    			array_push($final, $software);
    		}
    		
    		
    		render("software.php", ["softwares" => $final, "title" => "Softwares in ".$catname." ".$scatname, "id" => $_GET["id"], "heading" => "<a href=category.php?id=".$subcat.">".$catname."</a> => ".$scatname]);
    	}
    	catch (Exception $e) {
    		echo $e->getMessage();
    		redirect("./");
    	}
    }
?>
