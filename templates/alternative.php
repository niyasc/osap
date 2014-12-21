<style>

</style>
<div class="primary">
<div class="secondary">
	<div class="sidebar1">
		abc
	</div>
	<div class="body">
		<?php
			include("search.php");
		?>
		<div>
			<h3><?=$heading?></h3>
		</div>
		<div class='table table-striped table-bordered' style="text-align: left">
		<ul>
		
		<?php
			foreach($software as $s) {
				$str = "";
				foreach($s["platforms"] as $platform)
				{
					$str = $str.$platform["name"].", ";
				}
				$str = substr($str,0, -2);
				echo "<li><div style='font-size: 20px'>";
					echo "<a href=detailed.php?id=".$s['id']." >".$s['name']."(".$str.")"."</a>";
				echo "</div></li>";
			
			}
		?>
		</ul>
		</div>
	</div>
	<div class="sidebar2">
		abc
	</div>
</div>
</div>
