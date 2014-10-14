<div class='content'>
<form action='add_software.php?id=<?=$id?>' method='post'>

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
			<input class='form-control' type='text' required='' name='category' value=<?=$catname?> readonly />
		</td>
	</tr>
	<tr>
		<td>
			Sub category
		</td>
		<td>
			<input class='form-control' type='text' required='' name='subcategory' value="<?=$scatname?>" readonly/>
		</td>
	</tr>
	<tr>
		<td>
			Software Name
		</td>
		<td>
			<input class='form-control' type='text' required='' name='name' autocomplete="off" autofocus="" placeholder="Software Name"/>
		</td>
	</tr>
	<tr>
		<td>
			Description
		</td>
		<td>
			<textarea name="description">
			</textarea>
		</td>
	</tr>
	<tr>
		<td>
			Website
		</td>
		<td>
			<input class='form-control' type='text' required='' name='website' autocomplete="off" autfocus="" placeholder="Website"/>
		</td>
	</tr>
	<tr>
		<td>
			Platform
		</td>
		<td>
			<select name="platform" required="">
				<option>GNU/Linux</option>
				<option>Windows</option>
				<option>Mac OS</option>
				<option>Android</option>
				<option>Windows Phone</option>
				<option>iPhone</option>
				<option>Online-Web based</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			Submitted By
		</td>
		<td>
			<input class='form-control' type='text' required='' name='submit' autocomplete="off" autfocus="" placeholder="Submitted by" value="admin" readonly/>
		</td>
	</tr>
	<tr>
		<td>
			Type
		</td>
		<td>
			<select name="type" required="">
				<option>Free</option>
				<option>Proprietary</option>
			</select>
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

