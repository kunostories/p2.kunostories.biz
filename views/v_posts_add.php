<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <form method="POST" action="/posts/p_add" role="form">
      <h2>New Post</h2>

      <p class='text-success'>
        <?=$success;?>
      </p>

      <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" rows="3" placeholder="What do you want to say?" required></textarea>
      </div>

      <input class="btn btn-lg btn-success" type="submit" value="Submit">
    </form>
  </div>
</div>