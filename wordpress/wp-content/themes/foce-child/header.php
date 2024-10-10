<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <div class="navigation-burger">  
                <a class="site-title"href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                <button class="menu-toggl menu-burger" aria-controls="primary-menu" aria-expanded="false">
                    <span class="line" id="span1"></span>
                    <span class="line" id="span2"></span>
                    <span class="line" id="span3"></span>
                </button>
            </div>
            <div id="menu">
            <img class="logo-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-burger.png'; ?> " alt="logo Fleurs d'oranger & chats errants"> 
                <ul>
                    <li><a class="link" href="#link-story">Histoire</a></li>
                    <li><a class="link" href="#characters">Personnages</a></li>
                    <li><a class="link" href="#place">Lieu</a></li>
                    <li><a class="link" href="#studio">Studio Koukaki</a></li>
                </ul>
                <a class="footer__burger" href="#">STUDIO KOUKAKI</a>
            </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->