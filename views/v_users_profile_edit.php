<h1>Edit Profile of <?=$user->alias?></h1>

	<p class='text-danger'>
		<?=$error;?>
	</p>
	<p class='text-success'>
		<?=$success;?>
	</p>

<form method="POST" action="/users/p_edit" role="form">
	<div class="form-group">
		<label for="alias">Alias:</label>
		<input type="text" name="alias" class="form-control" value="<?=$user->alias?>" required>
	</div>

	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" name="email" class="form-control" value="<?=$user->email?>" required>
	</div>

	<div class="form-group">
		<label for="first_name">First Name:</label>
		<input type="text" name="first_name" class="form-control" value="<?=$user->first_name?>">
	</div>

	<div class="form-group">
		<label for="last_name">Last Name:</label>
		<input type="text" name="last_name" class="form-control" value="<?=$user->last_name?>">
	</div>

	<input class="btn btn-lg btn-warning" type="submit" value="Edit Profile">
</form>

<br>

<?
	 echo '<pre> This is user';
	 print_r($user);
	 echo '</pre>';

	 echo '<pre> THis is alias';
	 print_r($alias);
	 echo '</pre>';
?>
