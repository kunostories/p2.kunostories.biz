<?php foreach($users as $user): ?>

    <!-- Print this user's name -->
    <h4>
        <a href="/users/profile/<?=$user['alias']?>">
            <?=$user['alias']?>
        </a>
    </h4>

    <!-- If there exists a connection with this user, show a unfollow link -->
    <?php if(isset($connections[$user['user_id']])): ?>
    
        <a href='/posts/unfollow/<?=$user['user_id']?>' class="btn btn-warning">
            Unfollow
        </a>

    <!-- Otherwise, show the follow link -->
    <?php else: ?>
    
        <a href='/posts/follow/<?=$user['user_id']?>' class="btn btn-success">
            Follow
        </a>
    
    <?php endif; ?>

    <br>

<?php endforeach; ?>