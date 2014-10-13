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
		<div style=" margin: auto; display: table">
			<div style="float: left; width: 450px">
				<h3>Propritary</h3>
				<?php
					foreach($softwares as $s) {
						if($s["type"] == 1) {
							echo "<a href=detailed.php?id=".$s["id"]." style='font-size: 20px'>";
							echo $s["name"]." (".$s['platform'].")";
							echo "</a>";
							echo "<br/>";
						}
					}
				?>
			</div>
			<div style="float: left; width: 450px">
				<h3>Free/Open Source</h3>
				<?php
					foreach($softwares as $s) {
						if($s["type"] == 0) {
							echo "<a href=detailed.php?id=".$s["id"]." style='font-size: 20px'>";
							echo $s["name"]." (".$s['platform'].")";
							echo "</a>";
							echo "<br/>";
						}
					}
				?>
			</div>
		</div>
		<br/>
		<div>
			<a href="add_software.php?id=<?=$id?>">Add Software</a>
		</div>
	</div>
	<div class="sidebar2">
		abc
	</div>
</div>
</div>
