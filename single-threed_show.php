<?php
/**
 * Template Name: Three D Show Profile 
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<?php the_post_thumbnail(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
<p><b>Hosted By:</b> <?php echo get_post_meta(get_the_ID(), 'threed_show_hosts', true); ?></p>
<p><b>Airs On: </b> <?php echo threedGetDay(get_post_meta(get_the_ID(), 'threed_show_day', true)); ?>, 
<?php
echo threedFriendlyTime( get_post_meta(get_the_ID(), 'threed_show_start', true)) . " - ";
echo threedFriendlyTime( get_post_meta(get_the_ID(), 'threed_show_end', true)) ;
?></p>
<p><b><a href="<?php echo get_post_meta(get_the_ID(), 'threed_show_url', true); ?>">Show Website</a></b></p>

				<?php

?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
