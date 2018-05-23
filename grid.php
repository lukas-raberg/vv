<main id="article collection" role="" class="grid">
<?php query_posts('cat=3,4&posts_per_page=10'); ?>
<?php while (have_posts()) : the_post(); ?>
	<article id="" role="" class="module card">
		<?php the_post_thumbnail('custom', array('class' => 'card')); ?>
		<h4 class="mono xs bold black"><?php
$category = get_the_category();
echo $category[0]->cat_name;
?></h4>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<h2 class="serif m bold black"><?php the_title(); ?></h2>
			<h3 class="sans s regular black"><?php the_excerpt(); ?></h3>
		</a>
	</article>
<?php endwhile; ?>
</main>