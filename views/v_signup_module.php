<!-- begin sign up module form -->
		<form method="POST" action="/users/p_signup" role="form">
			<h2>Sign up</h2>

			<!-- sign up with alias, email, and password -->
			<div class="form-group">
				<label>Alias</label>
				<input type="text" name="alias" class="form-control" placeholder="alias name" required>
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="your@email.com" required>
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="password" required>
			</div>

			<input class="btn btn-lg btn-success" type="submit" value="Sign up">
		</form>