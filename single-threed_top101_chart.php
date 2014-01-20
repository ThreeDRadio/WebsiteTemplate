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
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">

			<h1 class="entry-title"><?php the_title(); ?></h1>

		</header>

		<div class="entry-content">

		<table>
	<tr><th>Position</th><th>Artist</th><th>Release</th><th>Origin</th></tr>
<?php
	$args = array('post_type' => 'threed_top101_entry', 
		'post_status' => 'publish', 
		'nopaging' => true,
		'orderby' => 'meta_value_num',
		'meta_key' => 'threed_top101_position', 
		'order' => 'asc',
	);

	$entries = new WP_Query($args);

	while ($entries->have_posts())
	{
		$entries->the_post();
        echo '<tr><td>' . get_post_meta(get_the_ID(), "threed_top101_position", true) . '</td>';
        echo '<td>' . get_post_meta(get_the_ID(), "threed_top101_artist", true) . '</td>';
        echo '<td>' . get_post_meta(get_the_ID(), "threed_top101_release", true) . '</td>';
        echo '<td>' . get_post_meta(get_the_ID(), "threed_top101_origin", true) . '</td></tr>';
	}
    echo '</table>';
?>
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
