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

$months = array('January','February','March','April','May','June','July','August','September','October','November','December');

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title">Top 20+1</h1>
			<h2>For week ending: 
<?php
echo $months[get_post_meta(get_the_ID(), 'threed_month', true)] . ' ';
echo get_post_meta(get_the_ID(), 'threed_day', true) . ' ' ;
echo get_post_meta(get_the_ID(), 'threed_year', true);

?>
</h2>
		</header>

		<div class="entry-content">
		<table>
	<tr><th>Position</th><th>Artist</th><th>Release</th><th>Origin</th><th>Last Week</th></tr>
<?php
	for ($i = 1; $i<=21; $i++) {
		$artist =  get_post_meta(get_the_ID(), "artist$i", true);
		$release = get_post_meta(get_the_ID(), "release$i", true);
		$origin =  get_post_meta(get_the_ID(), "origin$i", true);
		$lastweek= get_post_meta(get_the_ID(), "lastweek$i", true);
		echo '<tr>';
		echo '<td>' . $i . '</td>';
		echo '<td>' . $artist . '</td>';
		echo '<td>' . $release. '</td>';
		echo '<td>' . $origin. '</td>';
		echo '<td>' . $lastweek. '</td>';
		echo '<tr>';
	}
?>
	</table>
		</div><!-- .entry-content -->


				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . 'Previous Chart' . '</span>' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '<span class="meta-nav">' . 'Next Chart' . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>
	</article><!-- #post -->
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
