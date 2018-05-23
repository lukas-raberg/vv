<section class="entry-content">
	<p class="sans m bold"><?php echo the_excerpt(); ?></p>	
	<p class="sans s regular"><?php the_content(); ?></p>
	<?php get_template_part('entry-list'); ?>
</section>