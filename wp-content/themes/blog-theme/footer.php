<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
					<span>© Copyright 2012</span>
				</div><!-- close .site-info -->
				<ul class="social-links">
					<?php if(true === get_theme_mod('fb-checkbox')) : { ?>
						<li class="social-fb"><a href="<?php echo get_theme_mod('fb-link'); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
					<?php } endif; ?>
					<?php if(true === get_theme_mod('tm-checkbox')) : { ?>
						<li class="social-tm"><a href="<?php echo get_theme_mod('tm-link'); ?>"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a></li>
					<?php } endif; ?>
					<?php if(true === get_theme_mod('ln-checkbox')) : { ?>
						<li class="social-in"><a href="<?php echo get_theme_mod('ln-link'); ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
					<?php } endif; ?>
					<?php if(true === get_theme_mod('gl-checkbox')) : { ?>
						<li class="social-gl"><a href="<?php echo get_theme_mod('gl-link'); ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
					<?php } endif; ?>
					<?php if(true === get_theme_mod('tw-checkbox')) : { ?>
						<li class="social-tw"><a href="<?php echo get_theme_mod('tw-link'); ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
					<?php } endif; ?>
				</ul>
			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
