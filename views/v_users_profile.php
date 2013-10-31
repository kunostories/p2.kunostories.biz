<h1>Profile of <?=$alias['alias']?></h1>

<form>
		<div class="form-group">
			<label for="email">Email:</label>
			<?=$alias['email']?>
		</div>

		<div class="form-group">
			<label for="first_name">First Name:</label>
			<?=$alias['first_name']?>
		</div>

		<div class="form-group">
			<label for="last_name">Last Name:</label>
			<?=$alias['last_name']?>
		</div>
</form>

<!-- If there exists a connection with this user, show a unfollow link -->
    <?php if(isset($connections[$alias['user_id']])): ?>
        <a href='/posts/unfollow/<?=$alias['user_id']?>' class="btn btn-warning">Unfollow</a>

    <!-- Otherwise, show the follow link -->
    <?php else: ?>
        <a href='/posts/follow/<?=$alias['user_id']?>' class="btn btn-success">Follow</a>
    <?php endif; ?>

<br>

<?
	echo '<pre>';
	print_r($user);
	echo '</pre>';
?>