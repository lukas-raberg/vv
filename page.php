<?php get_header(); ?>
	<section id="content" role="main" class="fullpage">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="page-header">
			<h1 class="mono center xxl"><?php the_title(); ?></h1> 
		</div>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<section class="page-container">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				<p class="serif m regular"><?php the_content(); ?></p>
				<div class="entry-links"><?php wp_link_pages(); ?></div>
			</section>
		</article>
		<?php edit_post_link(); ?>
<!--	<?php if ( ! post_password_required() ) comments_template( '', true ); ?> -->
	<?php endwhile; endif; ?>
	</section>
<?php get_footer(); ?>