<h1>Edit Profile of <?=$alias['alias']?></h1>

	<p class='text-danger'>
		<?=$error;?>
	</p>
		<p class='text-success'>
		<?=$success;?>
	</p>

<form method="POST" action="/users/p_edit" role="form">
	<div class="form-group">
		<label for="alias">Alias:</label>
		<input type="text" name="alias" class="form-control" value="<?=$alias['alias']?>" required>
	</div>

	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" name="email" class="form-control" value="<?=$alias['email']?>" required>
	</div>

	<div class="form-group">
		<label for="first_name">First Name:</label>
		<input type="text" name="first_name" class="form-control" value="<?=$alias['first_name']?>">
	</div>

	<div class="form-group">
		<label for="last_name">Last Name:</label>
		<input type="text" name="last_name" class="form-control" value="<?=$alias['last_name']?>">
	</div>

	<input class="btn btn-lg btn-warning" type="submit" value="Submit">
</form>

<br>
