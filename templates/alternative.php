<style>

</style>
<div class="primary">
<div class="secondary">
	<div class="sidebar1">
		abc
	</div>
	<div class="body">
		<div>
			<h3><?=$heading?></h3>
		</div>
		<div class='table table-striped table-bordered'>
		
		<?php
			foreach($software as $s) {
				echo "<div style='font-size: 20px'>";
					echo "<a href=detailed.php?id=".$s['id']." target='_blank' >".$s['name']."(".$s['platform'].")"."</a>";
				echo "</div>";
			}
		?>
		</div>
	</div>
	<div class="sidebar2">
		abc
	</div>
</div>
</div>
