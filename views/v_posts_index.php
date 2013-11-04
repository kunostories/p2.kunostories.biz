<?php foreach($posts as $post): ?>

	<article>
		<p>
			<!-- user's alias name is bolded -->
			<strong>
				<a href="/users/profile/<?=$post['alias']?>">
					<?=$post['alias']?>
				</a>
				sez:
			</strong>

			<!-- what the user says is inline with alias name -->
			<?=$post['content']?>

			<br>

			<!-- time post was created is muted -->
		    <time class="text-muted" datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
			    <?=Time::display($post['created'])?>
			</time>
		</p>

		<!-- line to divide each post more clearly -->
		<hr>
	</article>

<?php endforeach; ?>