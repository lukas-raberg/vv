<?php query_posts('cat=5'); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<article class="slab feature light-teal">
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php the_post_thumbnail('custom', array('class' => 'feature')); ?>
		<h4 class="mono xs bold white"><?php echo get_cat_name('5'); ?></h2>
		<h2 class="serif xl bold white"><?php the_title(); ?></h2>
		<h3 class="sans m regular white"><?php remove_filter( 'the_excerpt', 'wpautop' ); the_excerpt(); ?></h3>
	</a>
</article>	
<?php endwhile; ?>
<?php endif; ?>