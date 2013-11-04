<?php foreach($posts as $post): ?>

<article>

    <p>
    	<strong><a href="/users/profile/<?=$post['alias']?>"><?=$post['alias']?></a> sez:</strong>
    	<?=$post['content']?><br>
	    <time class="text-muted" datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
    	    <?=Time::display($post['created'])?>
    	</time>
    </p>
    <hr>

</article>

<?php endforeach; ?>