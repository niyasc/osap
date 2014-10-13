<style>
div {
	border: 1px solid black;
}
</style>
<div class="primary">
<div class="secondary">
	<div class="sidebar1">
		abc
	</div>
	<div class="body">
	<div style="margin: auto">
		<h3>
			<?=$heading?>
		</h3>
	</div>
	<table class='table table-striped table-bordered' style="width: 720px">
		<tr>
			<td>
				<span style="font-weight: bold">
				Type
				<span>
			</td>
			<td>
				<span style="font-weight: bold">
				<?php
					if($details['type'] == 0) {
						echo "Free";
					}else {
						echo "Proprietary";
					}
				?>
				</span>
			</td>
		</tr>
		<tr>
			<td>
				<span style="font-weight: bold">
				Website
				</span>
			</td>
			<td>
				<span style="font-weight: bold">
				<a href="<?=$details['website']?>" target="_blank" >
				<?=$details['website']?>
				</a>
				</span>
			</td>
		</tr>
		<tr>
			<td>
			<span style="font-weight: bold">
				Description
			</span>
			</td>
			<td>
				<span style="font-weight: bold; text-align: justify">
				<?=$details['description']?>
				</span>
			</td>
		</tr>
		<tr>
			<td>
			<span style="font-weight: bold">
				Platform
			</span>
			</td>
			<td>
			<span style="font-weight: bold">
				<?=$details['platform']?>
			</span>
			</td>
		</tr>
	</table>
						
	</div>
	<div class="sidebar2">
		abc
	</div>
</div>
</div>
