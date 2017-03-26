<?php /** Template Name: Category 2 */ get_header(); ?>
<div class="category-archive">
	<div class="blog-posts-title"><?php echo get_theme_mod('category-2-title'); ?></div>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( has_post_thumbnail() ) { ?>
				<?php get_template_part( 'content-category-2', get_post_format() );?>
			<?php } ?>
		<?php endwhile; ?>
		<div class="blog-pagination">
			<?php echo paginate_links(); ?>
		</div>
	<?php else : ?>
		<?php get_template_part( 'no-results', 'index' ); ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>