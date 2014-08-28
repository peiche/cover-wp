<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Cover
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<?php

$has_image = '';
if ( ( is_single() && '' != get_the_post_thumbnail()) || is_home() || is_archive() || is_author() ) {
    $has_image = 'has-featured-image';
}

?>

<body <?php body_class( $has_image ); ?>>

<?php // do_action(‘ase_theme_body_inside_top’); ?>

<header class="header headroom headroom--top"> <?php // priming the pump, as it were ?>
    <div class="pull-left">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title"><?php bloginfo( 'name' ); ?></a>
        <span class="site-description"><?php bloginfo( 'description' ); ?></span>
    </div>
    
    <div class="pull-right">
        <a class="toggle-overlay" data-overlay-class="menu-area" href="#"><i class="fa fa-fw fa-bars"></i></a>
    </div>
</header>

<div id="menu-area" class="overlay">
    <a href="#" class="overlay-close right"><i class="fa fa-fw fa-times"></i></a>
    <nav class="main-navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
    <nav class="social-navigation hide"> <!-- remove .hide class to show -->
        <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
    </nav>
    
	<?php if ( is_active_sidebar( 'overlay' ) ) { ?>
        <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'overlay' ); ?>
        </div><!-- #secondary -->
    <?php } ?>
</div>