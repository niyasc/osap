<div class='content'>
<form action='add_category.php' method='post'>

<table class='table-striped' style='width:400px'>
	<tr>
		<td style="text-align:center">
			<h4>Add Category</h4>
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
			<input class='form-control' type='text' required='' name='name' placeholder="Category name" autofocus='' autocomplete='off'/>
		</td>
	</tr>
	<tr>
		<td style='text-align:center'>
			<input type='submit' value='Add Category' class='btn btn-default'>
		</td>
	</tr>
</table>
</form>

</div>

