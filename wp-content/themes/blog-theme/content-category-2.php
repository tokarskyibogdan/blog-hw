<div class="col-sm-6">
    <a href="<?php echo get_post_permalink(); ?>">
    <article class="category-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_post_thumbnail() ?>
        <h3 class="category-post-title"><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
    </article>
    </a>
</div>