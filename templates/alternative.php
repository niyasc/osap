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
		<div class='table table-striped table-bordered'>
		<ul>
		
		<?php
			foreach($software as $s) {
				$str = "";
				foreach($s["platforms"] as $platform)
				{
					$str = $str.$platform["name"]."  ";
				}
				echo "<li><div style='font-size: 20px'>";
					echo "<a href=detailed.php?id=".$s['id']." target='_blank' >".$s['name']."(".$str.")"."</a>";
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
