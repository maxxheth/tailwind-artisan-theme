<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<footer id="colophon">

	<?php if (is_active_sidebar('sidebar-1')) { ?>
		<aside role="complementary" aria-label="<?php esc_attr_e('Footer', 'candlelight-theme'); ?>">
			<?php dynamic_sidebar('sidebar-1'); ?>
		</aside>
	<?php } ?>

	<?php if (has_nav_menu('menu-2')) { ?>
		<nav aria-label="<?php esc_attr_e('Footer Menu', 'candlelight-theme'); ?>">
			<?php
            wp_nav_menu(
                [
                    'theme_location' => 'menu-2',
                    'menu_class' => 'footer-menu',
                    'depth' => 1,
                ]
            );
	    ?>
		</nav>
	<?php } ?>

	<div>
		<?php
        $candlelight_theme_blog_info = get_bloginfo('name');
if (! empty($candlelight_theme_blog_info)) {
    ?>
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>,
			<?php
}

/* translators: 1: WordPress link, 2: WordPress. */
printf(
    '<a href="%1$s">proudly powered by %2$s</a>.',
    esc_url(__('https://wordpress.org/', 'candlelight-theme')),
    'WordPress'
);
?>
	</div>

</footer><!-- #colophon -->
