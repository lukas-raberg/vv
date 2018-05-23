<h3 class="sans l regular black"><?php echo get_post_meta($post->ID, 'underrubrik', true); ?></h3>

<div class="meta mono bold xs">
	<ul>
		<li id="timer"><?php echo get_post_meta($post->ID, 'time', true); ?></li>
		<li id="difficulty"><?php echo get_post_meta($post->ID, 'level', true); ?></li>
		<li id="style"><?php echo get_post_meta($post->ID, 'type', true); ?></li>
	</ul>

	<ul>
		<li id="author"><?php echo get_the_author(); ?></li>
		<li id="date"><?php the_time( get_option( 'date_format' ) ); ?></li>
		<li id="show-all">Alla inlägg av <?php the_author_posts_link(); ?></li>
	</ul>
</div>

<div class="clearboth stripe light-teal xs mono bold"><div class="icon rocket"></div><span class="black"><a href="#recipe">Hoppa direkt till receptet</a></span></div>