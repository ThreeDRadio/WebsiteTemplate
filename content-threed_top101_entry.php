
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
<div class="top101-position">
<?php
echo get_post_meta(get_the_ID(), 'threed_top101_position', true);
?>
</div>
<div class="top101-h1">
			<?php the_post_thumbnail(); ?>
			<h1 class="entry-title">
<?php
echo get_post_meta(get_the_ID(), 'threed_top101_artist', true) . ' - ';
echo get_post_meta(get_the_ID(), 'threed_top101_release', true);
?>
</h1>
<?php
echo get_post_meta(get_the_ID(), 'threed_top101_origin', true);
?>
    - 
    <a href="<?php echo get_permalink(get_post_meta(get_the_ID(), 'threed_top101_chart_parent', true))?>">view chart</a>
</div>
<div style="clear:both;"></div>
		</header><!-- .entry-header -->
	</article><!-- #post -->
