<?php /** Template Name: Contact page */ get_header(); ?>
<div class="row contact-section-content">
    <div class="col-xs-12 col-md-4">
        <?php $meta_value = get_post_meta($post->ID, 'contact-main-title', true); echo '<h1>'. $meta_value .'</h1>'; ?>
        <?php $meta_value = get_post_meta($post->ID, 'contact-description-title', true); echo '<h4>'. $meta_value .'</h4>'; ?>
        <?php $meta_value = get_post_meta($post->ID, 'contact-description', true); echo '<p>'. $meta_value .'</p>'; ?>
    </div>
    <div class="hidden-xs col-md-8">
        <img src="http://dev-tokasrskyi.pantheonsite.io/wp-content/uploads/2017/03/layer-22.png" alt="">
    </div>
</div>
<div class="contact-form">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>