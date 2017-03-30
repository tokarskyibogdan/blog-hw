<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="post-date">
                <h2><?php echo get_the_date('j'); ?></h2>
                <h3><?php echo get_the_date('F'); ?></h3>
            </div>
        <?php endif; ?>
        <div class="d-inline-block">
            <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <div class="post-meta">
                <?php if ( 'post' == get_post_type() ) : ?>
                    <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', '_tk' ), __( '1 Comment', '_tk' ), __( '% Comments', '_tk' ) ); ?></span>
                    <?php endif; ?>
                    <?php
                    $categories_list = get_the_category_list( __( ' ', '_tk' ) );
                    if ( $categories_list && _tk_categorized_blog() ) :
                        ?>
                        <span class="cat-links"><?php printf( __( '%1$s', '_tk' ), $categories_list ); ?></span>
                    <?php endif;?>
                <?php endif;?>
                <?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
            </div>
        </div>
    </div>
    <?php if ( is_search() || is_archive() ) :?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
    <?php else : ?>
        <div class="post-content">
            <?php the_content( __( 'Continue reading', '_tk' ) ); ?>
        </div>
        <?php _tk_link_pages(); ?>
    <?php endif; ?>
</article>