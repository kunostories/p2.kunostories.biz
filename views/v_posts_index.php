<?php foreach($posts as $post): ?>

<article>

    <h3><?=$post['alias']?> sez:</h3>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>

</article>

<?php endforeach; ?>