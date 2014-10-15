<div class='content'>
<form action='login.php' method='post'>

<table class='table-striped' style='width:400px'>
	<tr>
		<td style="text-align: justify;">
			<div style="font-size: 20px; background-color: 5BC0DE; padding: 4px; border-radius: 4px; color: white; text-align: justify">
			In order to maintain consistency, we don't permit user additions at the moment. Still You may suggest a software <a href="suggest.php">here</a>. After review process, proper suggestions will be added to database with your name.
			</div>
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			<h4>Login</h4>
		</td>
	</tr>
	<?php
		if(!empty($_GET["error"]))
		{
		?>
		<tr>
			<td>
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
			<input class='form-control' type='text' required='' name='uname' placeholder="Admin user name" autofocus='' autocomplete='off'/>
		</td>
	</tr>
	<tr>
		<td>
			<input class='form-control' type='password' required='' name='passwd' placeholder="Admin Password"/>
		</td>
	</tr>
	<tr>
		<td style='text-align:center'>
			<input type='submit' value='Login' class='btn btn-default'>
		</td>
	</tr>
</table>
</form>

</div>

