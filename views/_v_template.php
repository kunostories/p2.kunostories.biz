<!DOCTYPE html>
<html lang="en">
 <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php if(isset($description)) echo $description; ?>" />
	<meta name="author" content="Shawn Roe" />
	<!-- <link rel="icon" type="image/ico" href="favicon.ico"> -->

	<title><?php if(isset($title)) echo $title; ?></title>

	<link href="/libraries/bootstrap3.0/css/bootstrap.css" rel="stylesheet"/>
	<link rel="stylesheet" href="/css/custom.css" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
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
  <div class="container rounded-corners-2">
    <div class="header">
    	<a href="/"><img src="/img/vultor-logo80.png" alt="vultor logo"></a>
          <ul class="nav nav-pills pull-right">
          	<? if(!$user): ?>
            <li><a href="/users/signup">Sign Up</a></li>
            <li><a href="/users/login">Login</a></li>
            <? else: ?>
            <li><a href="#posts/browse">Browse</a></li>
            <li><a href="users/profile">Profile</a></li>
            <li><a href="/users/logout">Logout</a></li>
            <? endif; ?>
          </ul>
    </div>

    <div class="main-content">

		<?php if(isset($content)) echo $content; ?>

		<?php if(isset($client_files_body)) echo $client_files_body; ?>
	
	</div> <!--/#main-content-->

  </div> <!--/#container-->

 </body>
</html>