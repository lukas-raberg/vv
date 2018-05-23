<main id="article collection" role="" class="grid">
<?php query_posts('cat=3,4&posts_per_page=10'); ?>
<?php while (have_posts()) : the_post(); ?>
	<article id="" role="" class="module card">
		<?php the_post_thumbnail('custom', array('class' => 'card')); ?>
		<h4 class="mono xs bold black"><?php the_category(', '); ?></h4>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<h2 class="serif m bold black"><?php the_title(); ?></h2>
			<h3 class="sans s regular black"><?php the_excerpt(); ?></h3>
		</a>
	</article>
<?php endwhile; ?>
</main>

<?php query_posts('cat=5'); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<article class="slab feature light-teal">
	<?php the_post_thumbnail('custom', array('class' => 'feature')); ?>
		<div class="loud">
			<hr class="over">
			<h4 class="mono xs bold white"><?php echo get_cat_name('5'); ?></h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<h2 class="serif m bold white"><?php the_title(); ?></h2>
					<h3 class="sans l regular white"><?php the_excerpt(); ?></h3>
				</a>
			<hr class="under">
		</div>
	</article>	
<?php endwhile; ?>
<?php endif; ?>

<main id="article collection" role="" class="grid">
<?php query_posts('cat=3,4&posts_per_page=10'); ?>
<?php while (have_posts()) : the_post(); ?>
	<article id="" role="" class="module card">
		<?php the_post_thumbnail('custom', array('class' => 'card')); ?>
		<h4 class="mono xs bold black"><?php the_category(', '); ?></h4>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<h2 class="serif m bold black"><?php the_title(); ?></h2>
			<h3 class="sans s regular black"><?php the_excerpt(); ?></h3>
		</a>
	</article>
<?php endwhile; ?>
</main>
