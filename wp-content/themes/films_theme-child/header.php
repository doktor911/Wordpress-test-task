<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package films_theme
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
<section id="header" class="header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-2">
				<?php the_custom_logo(); ?>
			</div>
			<div class="col-xs-12 col-md-10 main_menu">
				<nav id="site-navigation" class="main-navigation">
			
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>

		</div>
		
		  <div class="burger_btn" >
		      <div class="bar1"></div>
			  <div class="bar2"></div>
			  <div class="bar3"></div>
		  </div>
		
	</div>
	<div class="mob_menu">
		
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
			
		
	</div>
</section>

