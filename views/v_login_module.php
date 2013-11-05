		<!-- begin log in module form -->
		<form method="POST" action="/users/p_login" role="form">
			<h2>Log in</h2>
			
			<!-- show error message if set -->
			<?php if(isset($error)): ?>
			
			<div>
				<p class="text-danger">
					<?=$error ?>
				</p>
			</div>
			
			<br>
			
			<?php endif; ?>

			<!-- log in with alias and password -->
			<div class="form-group">
				<label>Alias</label>
				<input type="text" name="alias" class="form-control" placeholder="alias name" required>
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="password" required>
			</div>

			<input class="btn btn-lg btn-primary" type="submit" value="Log in">
			
		</form>
