<form method="POST" action="/posts/p_add" role="form">
  <h2>New Post</h2>
    <?php if(isset($error)): ?>
      <div>
        <p class="text-danger">
        	Sorry, your post failed. Please try again.
        </p>
      </div>
      <br>
	    <?php endif; ?>

	    <div class="form-group">
		    <label for="content">Content</label>
		    <textarea name="content" id="content" class="form-control" rows="3" placeholder="What do you want to say?" required></textarea>
		</div>

    <input class="btn btn-lg btn-success" type="submit" value="Submit">
</form>