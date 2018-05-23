<main class="fullpage">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail('fullpage'); } ?>
	<article class="recipe" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2 class="serif xxl black bold"><?php the_title(); ?></h2>
	<?php get_template_part( 'entry', 'meta' ); ?>
	<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
	</article>
</main>
<?php get_footer(); ?>