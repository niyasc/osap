<style>

</style>
<div class="primary">
<div class="secondary">
	<div class="sidebar1">
		abc
	</div>
	<div class="body">
	<div style="margin: auto; text-align: center">
		<h3><?=$heading?></h3>
	</div>
		<?php
			$count = count($categories);
			$i = 0;
			echo "<table>";
			while ($count > 1) {
				echo "<tr>";
				
					echo "<td>";
					echo "<a href='software.php?id=".$categories[$i]["id"]."'>";
						echo "<div class='box'>";
						echo $categories[$i]["name"];
						echo "</div>";
					echo "</a>";
					echo "</td>";
				
					echo "<td>";
					echo "<a href='software.php?id=".$categories[$i+1]["id"]."'>";
						echo "<div class='box'>";
						echo $categories[$i+1]["name"];
						echo "</div>";
					echo "</a>";
					echo "</td>";
				echo "</tr>";
				$i += 2;
				$count -= 2;
			}
			if ($count > 0) {
				echo "<tr>";
					echo "<td colspan=2>";
						echo "<a href='software.php?id=".$categories[$i]["id"]."'>";
						echo "<div class='box' style='width: 400px'>";
						echo $categories[$i]["name"];
						echo "</div>";
						echo "</a>";
					echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		?>
		<a href="add_subcategory.php?id=<?=$id?>">Add Sub category</a>
	</div>
	<div class="sidebar2">
		abc
	</div>
</div>
</div>