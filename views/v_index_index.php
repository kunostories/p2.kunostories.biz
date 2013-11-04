<div class="row">
	<div class="col-sm-12">
		<header class="center">
			<p class="lead">A microblog for Vultures and Condors!</p>
		</header>
	</div>
</div>

<div class="row">
	<div class="col-sm-5 well">
		<?php if(!$user): ?>
	        <!-- Display the login module -->
			<?=$signup_module ?>

		<?php else: ?>

			<h2>Fresh Posts</h2>
			<!-- Display the 5 newest posts-->
			<a href="/posts" class="btn btn-lg btn-danger">View posts</a>

		<?php endif; ?>
	</div>
	<div class="col-sm-5 col-sm-offset-2 well">
		<?php if(!$user): ?>
	        <!-- Display the login module -->
			<?=$login_module ?>

		<?php else: ?>

			<h2>Welcome <?=$user->alias ?> </h2>
			<!-- Display the 5 newest posts of user's interests-->
			<a href="/posts/add" class="btn btn-lg btn-warning">Say something</a>

		<?php endif; ?>
	</div>
</div>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<h4>Extra features:</h4>
		<ol>
			<li>Edit your profile, including Alias, Location and Age</li>
			<li>View other users' profiles, and follow/unfollow the user from their profile page</li>
		</ol>
	</div>
</div>