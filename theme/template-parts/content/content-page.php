<?php
/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
        if (! is_front_page()) {
            the_title('<h1 class="entry-title">', '</h1>');
        } else {
            the_title('<h2 class="entry-title">', '</h2>');
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

	<?php if (get_edit_post_link()) { ?>
		<footer class="entry-footer">
			<?php
    edit_post_link(
        sprintf(
            wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers. */
                __('Edit <span class="sr-only">%s</span>', 'candlelight-theme'),
                [
                    'span' => [
                        'class' => [],
                    ],
                ]
            ),
            get_the_title()
        )
    );
	    ?>
		</footer><!-- .entry-footer -->
	<?php } ?>

</article><!-- #post-<?php the_ID(); ?> -->
