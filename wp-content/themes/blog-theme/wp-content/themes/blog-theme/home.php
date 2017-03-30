<?php /** Template Name: Homepage Themplate */ get_header(); ?>
    <div class="swiper-container">
    <div class="swiper-wrapper slider">
		<?php query_posts('post_type=slides&posts_per_page=6'); ?>
		<?php if(have_posts()) : while (have_posts() ) : the_post(); ?>

                    <div class="swiper-slide slide">
                        <?php the_post_thumbnail(); ?>
                        <div class="slide-content">
                            <h2 class="slide-title"><?php echo the_title();?></h2>
                            <p class="slide-excerpt"><?php the_excerpt();?></p>
                        </div>
                    </div>

		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
	<div class="blog-posts-title"><?php echo get_theme_mod('blog-posts-title'); ?></div>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content-blog-page', get_post_format() ); ?>
		<?php endwhile; ?>
	<div class="blog-pagination">
		<?php echo paginate_links(); ?>
	</div>
	<?php else : ?>
		<?php get_template_part( 'no-results', 'index' ); ?>
	<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>