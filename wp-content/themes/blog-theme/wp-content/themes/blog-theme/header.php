<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div class="row">
			<div class="site-header-inner col-sm-12">
				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				<?php }?>
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span class="blog-name-left"><?php echo get_theme_mod('blog-name-left'); ?></span><span class="blog-name-right"><?php echo get_theme_mod('blog-name-right'); ?></span></a></h1>
                    <div class="header-search"><?php get_search_form(); ?></div>
				</div>
				<nav class="site-navigation">
                    <div class="row">
                        <div class="site-navigation-inner col-sm-12">
                            <div class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                        <span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
									<?php wp_nav_menu(
										array(
											'theme_location' 	=> 'primary',
											'depth'             => 2,
											'container'         => 'nav',
											'container_id'      => 'navbar-collapse',
											'container_class'   => 'collapse navbar-collapse',
											'menu_class' 		=> 'nav navbar-nav',
											'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
											'menu_id'			=> 'main-menu',
											'walker' 			=> new wp_bootstrap_navwalker()
										)
									); ?>
								</div>
                            </div>
						</div>
				    </nav>
			</div>
		</div>
	</div>
</header>
<div class="main-content">
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-8">

