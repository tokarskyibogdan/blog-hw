<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
		<?php
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>
	<?php endwhile; // end of the loop. ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
