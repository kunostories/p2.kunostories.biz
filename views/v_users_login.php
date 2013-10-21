<form method="POST" action="/users/p_login" role="form">
  <legend>Login</legend>
    <?php if(isset($error)): ?>
      <div>
        <p class="text-danger">
        	Login failed. Please check your email or password and try again.
        </p>
      </div>
      <br>
	    <?php endif; ?>

	    <div class="form-group">
	    <label for="email">Email</label>
	    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
	</div>

	<div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" name="password" class="form-control" placeholder="password" required>
	</div>

    <input class="btn btn-lg btn-primary" type="submit" value="Log in">
</form>
