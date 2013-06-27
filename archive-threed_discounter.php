<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<header class="entry-header">
			<h1 class="entry-title">Discounters</h1>
		</header>

		<div class="entry-content">
<p>Three D subscribers are eligible for VIP treatment from a wide range of businesses around South Australia. The current discounters are listed below, simply show your subscriber card! Our Discounters are ever changing, so check back here often for the latest deals.</p>
</div>

<div class="discounter-list">
<ul>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();


				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
?>
				<li><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></li>

<?php
			endwhile;

?>
</ul>
</div>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();


				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="site-content-boom">
<?php
			if (has_post_thumbnail(get_the_ID())) {
				echo the_post_thumbnail('discounter-thumb');
			}
			else {
				echo '<div class="attachment-discounter-thumb"></div>';
			}
?>
<div style="float:left; width:520px; padding-left: 24px;">
		<div class="entry-content">
		<div class="discounter-title">
			<h2 class="discounter-title"><?php the_title(); ?></h2>
		</div>
<p><?php echo get_post_meta(get_the_ID(), 'threed_discounter_discount', true); ?><br>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">More info</a>
				</p>
		</div><!-- .entry-content -->
</div>
	</div><!-- #post -->
<div style="clear: both;"></div>

<?php
			endwhile;

?>

<?php

			twentytwelve_content_nav( 'nav-below' );
			?>


		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
