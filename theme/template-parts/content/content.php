<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
        if (is_sticky() && is_home() && ! is_paged()) {
            printf('<span">%s</span>', esc_html_x('Featured', 'post', 'candlelight-theme'));
        }
        if (is_singular()) {
            the_title('<h1 class="entry-title">', '</h1>');
        } else {
            the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
        }
?>
	</header><!-- .entry-header -->

	<?php candlelight_theme_post_thumbnail(); ?>

	<div <?php candlelight_theme_content_class('entry-content'); ?>>
		<?php
the_content();

wp_link_pages(
    [
        'before' => '<div>'.__('Pages:', 'candlelight-theme'),
        'after' => '</div>',
    ]
);
?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php candlelight_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->
