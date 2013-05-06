<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

		<img src="<?php bloginfo('template_directory'); ?>/images/ListenNow.png" alt="Listen Now!" />
		<img src="<?php bloginfo('template_directory'); ?>/images/FeaturedMusic.png" alt="Featured Music" />
		<img src="<?php bloginfo('template_directory'); ?>/images/FollowUs.png" alt="Follow Us" />

		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
