<div class='content'>
<form action='add_software.php?id="<?=$id?>"' method='post'>

<table class='table-striped' style='width:400px'>
	<tr>
		<td colspan=2 style="text-align:center">
			<h4>Add Software</h4>
		</td>
	</tr>
	<?php
		if(!empty($_GET["error"]))
		{
		?>
		<tr>
			<td style='text-align:center'>
				<div class='label label-danger'>
				<?=$_GET["error"]?>
				</div>
			</td>
		</tr>
		<?php
		}
	?>
	<tr>
		<td>
			Category
		</td>
		<td>
			<input class='form-control' type='text' required='' name='Category' value=<?=$catname?> readonly />
		</td>
	</tr>
	<tr>
		<td>
			Sub category
		</td>
		<td>
			<input class='form-control' type='text' required='' name='SubCategory' value="<?=$scatname?>" readonly/>
		</td>
	</tr>
	<tr>
		<td style='text-align:center' colspan=2>
			<input type='submit' value='Add Software' class='btn btn-default'>
		</td>
	</tr>
</table>
</form>

</div>

