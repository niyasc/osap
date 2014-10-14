<header>
        <?php if (isset($title)): ?>
            <title>Open Source Alternative Project : <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Open Source Alternative Project</title>
        <?php endif ?>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        
<script src="./js/jquery.min.js"></script>
<script src="./js/jquery-ui.js"></script>
<link rel="stylesheet" href="./css/jquery-ui.css">
        
</header>


<div class="header-bg">
	<a href="../" style="text-decoration: none; color: inherit">
	<div class="header">
			Open Source Alternative Project
	</div>
	<div class="promo">
			Open Source Alternatives for Popular Proprietary Software
	</div>
	</a>
	<div style="text-align: center; font-weight: bold">
			Beta Version
	</div>
	<div style="text-align: right">
			<?php
				if(!empty($_SESSION["uname"])){
					echo "<a href='logout.php'>logout</a>";
				}
			?>
	</div>
</div>

