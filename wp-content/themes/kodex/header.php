<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/kodex/assets/css/style.css" type="text/css" media="all">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<header>
    <nev id="supermenu" class="contact">
        <?php
        $args = array(
            'theme_location' => 'super',
            'menu_id' => 'super-Menu',
            'container' => false,
        );
        wp_nav_menu($args);
        ?>
        <?php
        $args = array(
            'theme_location' => 'phone',
            'menu_id' => 'phone-Menu',
            'container' => false,
        );
        wp_nav_menu($args);
        ?>
    </nev>
    <nav id="mainMenu">
        <?php
        $args = array(
            'theme_location' => 'Main',
            'menu_id' => 'Main-Menu',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>',
        );
        wp_nav_menu($args);
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src=" <?= get_site_icon_url()?>" alt="لوگو سایت">
        </a>
    </nav>
</header>