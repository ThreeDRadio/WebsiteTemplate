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

	<div id="primary" class="site-content-full">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
<?php
			if (has_post_thumbnail(get_the_ID())) {
				echo the_post_thumbnail('threed-show-profile');
			}
			else {
				echo '<div class="show-profile-image">';
					echo '<img src="';
				bloginfo('template_directory');
				echo '/images/NoImage.png" alt="No Show Art"/>';
				echo '</div>';
			}
?>
<div style="float:left; width:580px; padding-left: 48px;">
		<div class="entry-content">
			<?php the_content(); ?>
<p><b>Hosted By:</b> <?php echo get_post_meta(get_the_ID(), 'threed_show_hosts', true); ?></p>
<p><b>Airs On: </b> <?php echo threedGetDay(get_post_meta(get_the_ID(), 'threed_show_day', true)); ?>, 
<?php
echo threedFriendlyTime( get_post_meta(get_the_ID(), 'threed_show_start', true)) . " - ";
echo threedFriendlyTime( get_post_meta(get_the_ID(), 'threed_show_end', true)) ;
?></p>
		</div><!-- .entry-content -->
</div>
	</article><!-- #post -->


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
