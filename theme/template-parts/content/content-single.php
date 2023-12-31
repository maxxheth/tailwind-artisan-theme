<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

		<?php if (! is_page()) { ?>
			<div class="entry-meta">
				<?php candlelight_theme_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php } ?>
	</header><!-- .entry-header -->

	<?php candlelight_theme_post_thumbnail(); ?>

	<div <?php candlelight_theme_content_class('entry-content'); ?>>
		<?php
        the_content(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers. */
                    __('Continue reading<span class="sr-only"> "%s"</span>', 'candlelight-theme'),
                    [
                        'span' => [
                            'class' => [],
                        ],
                    ]
                ),
                get_the_title()
            )
        );

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
