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
<a href=../>
<table class="header-bg">
	<tr>
		<td class="header">
			Open Source Alternative Project
		</td>
	</tr>
		<tr>
		<td class="promo">
			Open Source Alternatives for Popular Proprietary Software
		</td>
	</tr>
	<tr>
		<td style="text-align: right">
			<?php
				if(!empty($_SESSION["uname"])){
					echo "<a href='logout.php'>logout</a>";
				}
			?>
		</td>
	</tr>
</table>
</a>
