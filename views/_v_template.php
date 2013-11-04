<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Shawn Roe" />

		<title><?php if(isset($title)) echo $title; ?></title>

		<link href="/libraries/bootstrap3.0/css/bootstrap.css" rel="stylesheet"/>
		<link rel="stylesheet" href="/css/custom.css" type="text/css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="../../assets/js/html5shiv.js"></script>
		  <script src="../../assets/js/respond.min.js"></script>
		<![endif]-->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="/libraries/bootstrap3.0/js/bootstrap.min.js"></script>
		<script src="/libraries/bootstrap/js/bootstrap-button.js" type="text/javascript">
		</script>
		<script src="/libraries/bootstrap/js/bootstrap-collapse.js" type="text/javascript">
		</script>

		<!-- Controller Specific JS/CSS -->
		<?php if(isset($client_files_head)) echo $client_files_head; ?>
		
	</head>

	<body>
		<div class="container">

			<div class="header">
				<ul class="nav nav-pills pull-right">

					<!-- user not logged in-->
					<? if(!$user): ?>
					
					<li><a href="/users/signup">Sign up</a></li>
					<li><a href="/users/login">Log in</a></li>
					
					<!-- user logged in -->
					<? else: ?>

					<li><a href="/posts/add">Say something</a></li>
					<li><a href="/posts">Posts</a></li>
					<li><a href="/posts/users">User List</a></li>
					<li><a href="/users/profile/<?=$user->alias ?>">Profile for <?=$user->alias; ?></a></li>
					<li><a href="/users/logout">Logout</a></li>
					
					<? endif; ?>
				
				</ul>
				
				<!-- logo and title link back to homepage -->
				<a class="navbar-brand" href="/">
					<img src="/img/vultor-logo50.png" alt="vultor logo">
					<img src="/img/vultor-title.png" alt="vultor title">
				</a>

			</div><!--/.header-->

			<div class="clearfix"></div>

			<div class="main-content row">

				<?php if(isset($content)) echo $content; ?>
				<?php if(isset($client_files_body)) echo $client_files_body; ?>
			
			</div> <!--/#main-content-->

			<div id="footer" class="row">
				<p>&copy; Vultor 2013</p>
			</div><!--/#footer-->

		</div> <!--/.container-->
	</body>
</html>