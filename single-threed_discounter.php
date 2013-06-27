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

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
<?php
			if (has_post_thumbnail(get_the_ID())) {
				echo the_post_thumbnail('discounter-big');
			}
?>
<div style="float:left; width:400px; padding-left: 48px;">
		<div class="entry-content">
			<?php the_content(); ?>
<p><b>The Discount:</b> <?php echo get_post_meta(get_the_ID(), 'threed_discounter_discount', true); ?></p>
<h2>Contact Details</h2>
<p>
<?php
if (get_post_meta(get_the_ID(), 'threed_discounter_address1', true) !== "") {
echo get_post_meta(get_the_ID(), 'threed_discounter_address1', true) . "<br>";
}
if (get_post_meta(get_the_ID(), 'threed_discounter_address2', true) !== "") {
echo get_post_meta(get_the_ID(), 'threed_discounter_address2', true) . "<br>";
}
if (get_post_meta(get_the_ID(), 'threed_discounter_suburb', true) !== "") {
echo get_post_meta(get_the_ID(), 'threed_discounter_suburb', true);
}
?></p>
<p>
<?php
if (get_post_meta(get_the_ID(), 'threed_discounter_phone', true) !== "") {
echo get_post_meta(get_the_ID(), 'threed_discounter_phone', true);
}
?>
</p>
<p>
<?php
if (get_post_meta(get_the_ID(), 'threed_discounter_url', true) !== "") {
echo '<a href="' . get_post_meta(get_the_ID(), 'threed_discounter_url', true) . '" target="_blank">' . get_post_meta(get_the_ID(), 'threed_discounter_url', true). '</a>';
}
?>
</p>
<p>
<?php
if (get_post_meta(get_the_ID(), 'threed_discounter_email', true) !== "") {
	echo cwc_mail_shortcode( null, get_post_meta(get_the_ID(), 'threed_discounter_email', true) ) ;
}
?>
</p>



		</div><!-- .entry-content -->
</div>
<div style="clear: both"> </div>
	</article><!-- #post -->


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
