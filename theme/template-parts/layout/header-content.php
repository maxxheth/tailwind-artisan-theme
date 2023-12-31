<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<header id="masthead">

	<div>
		<?php
        if (is_front_page()) {
            ?>
			<h1><?php bloginfo('name'); ?></h1>
			<?php
        } else {
            ?>
			<p><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
			<?php
        }

        $candlelight_theme_description = get_bloginfo('description', 'display');
if ($candlelight_theme_description || is_customize_preview()) {
    ?>
			<p><?php echo $candlelight_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped?></p>
		<?php } ?>
	</div>

	<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'candlelight-theme'); ?>">
		<button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'candlelight-theme'); ?></button>

		<?php
        wp_nav_menu(
            [
                'theme_location' => 'menu-1',
                'menu_id' => 'primary-menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
            ]
        );
?>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->
