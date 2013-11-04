<div class="row">
	<div class="col-sm-12">

		<!-- lead subtitle -->
		<header class="center">
			<p class="lead">
				A microblog for Vultures and Condors!
			</p>
		</header>

	</div>
</div>

<div class="row">

	<!-- left column-->
	<div class="col-sm-5 well">

		<!-- user not logged in display sign up module -->
		<?php if(!$user): ?>

			<?=$signup_module ?>

		<!-- user logged in, display button to view posts -->
		<?php else: ?>

			<h2>View Posts</h2>
			<a href="/posts" class="btn btn-lg btn-danger">View posts</a>

		<?php endif; ?>

	</div>

	<!-- right column-->
	<div class="col-sm-5 col-sm-offset-2 well">

		<!-- user not logged in display log in module -->
		<?php if(!$user): ?>
	    
			<?=$login_module ?>

		<!-- user logged in, welcome and display button to add a post -->
		<?php else: ?>
	
			<h2>Welcome <?=$user->alias ?></h2>
			<a href="/posts/add" class="btn btn-lg btn-warning">Say something</a>

		<?php endif; ?>

	</div>
</div> <!--/.row-->

<div class="row">

	<!-- centered column displaying extra features -->
	<div class="col-sm-6 col-sm-offset-3">

		<h4>Extra features:</h4>
		<ol>
			<li>Edit your profile, including Alias, Location and Age</li>
			<li>View other users' profiles, and follow/unfollow the user from their profile page</li>
		</ol>

	</div>
</div> <!--/.row--> 