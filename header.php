<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="is-fullheight">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"
          integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
    />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<?php bulmapress_skip_link_screen_reader_text(); ?>
		<header id="header">
			<nav id="site-navigation" class="navbar" role="navigation">
				<div class="navbar-brand">
					<?php bulmapress_home_link('navbar-item'); ?>
					<?php bulmapress_blog_description('navbar-item is-muted'); ?>
					<?php bulmapress_menu_toggle(); ?>
				</div>
				<div class="navbar-menu">
					<div class="navbar-start"></div>
					<?php bulmapress_navigation(); ?>
				</div>
			</nav>
		</header>

		<div id="content" class="site-content">


