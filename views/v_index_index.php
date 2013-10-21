<header>
	<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>
	<h2>A microblog for people interested in things<h2>
	<h3>(not just people and #hashtags)</h3>
</header>

<p>
	<a href="users/signup" title="Register for an account">Create an alias</a> or<br>
	<a href="users/login" title="login">Login</a> if you're interested in things.
</p>

<p>
	Things like:
</p>

<ul>
	<li>Game of War</li>
	<li>Web design</li>
	<li>Stocks</li>
</ul>

<p>
	With an alias (aka. an account), you will be able to:
</p>

<ul>
	<li>Post about interesting things</li>
	<li>Follow interests</li>
	<li>Follow interesting people</li>
	<li>Unfollow boring things / people</li>
	<li>View the world (of interesting things and people)</li>
</ul>

<p>
	This message is being triggered via the c_index.php controller, within the index() method.
</p>
