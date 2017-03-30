</div><!-- close .main-content-inner -->
<div class="sidebar col-sm-12 col-md-4">
    <?php
    if (is_page( 'contact' )) {?>
        <div class="contact-aside">
            <?php $meta_value = get_post_meta($post->ID, 'sidebar-name', true); echo '<h3>'. $meta_value .'</h3>'; ?>
            <?php $meta_value = get_post_meta($post->ID, 'sidebar-phone-number', true); echo '<h2 class="contact-phone-number">'. $meta_value .'</h2>'; ?>
            <?php $meta_value = get_post_meta($post->ID, 'sidebar-text', true); echo '<p>'. $meta_value .'</p>'; ?>
            <?php $meta_value = get_post_meta($post->ID, 'sidebar-email', true); echo '<h2 class="contact-email">'. $meta_value .'</h2>'; ?>
        </div>
    <?php } else { ?>
        <div class="sidebar-padder">
        <?php do_action( 'before_sidebar' ); ?>
        <?php dynamic_sidebar( 'sidebar-1' );?>
        <aside class="advertising">
            <img src="" alt="">
        </aside>
    <?php } ?>
</div>


