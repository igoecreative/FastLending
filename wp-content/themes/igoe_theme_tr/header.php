<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Igoe_Theme_TR
 */

?>
<!doctype html> 
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_enqueue_script("jquery");?>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script> -->
	<script src="<?php echo get_template_directory_uri();?>/js/jquery/dist/jquery.min.js"></script>
	<!-- Custom JS in Navigation.js -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php// wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'igoe_theme_tr' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="mobile-nav-wrap">
		<div class="logo-wrap">
			<a href="<?php echo site_url(); ?>" target=""><img src="<?php echo site_url();?>/images/logo1-c.png" class="logo"></a>
		</div>
		<div id="bars" class="bars" onclick="bars(this)">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
	</div>
	
		<nav id="site-navigation" class="main-navigation desktop-only">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'igoe_theme_tr' ); ?></button> -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<div class="header-nav-wrap-d">
			<a class=" header-nav-left top-corner-button">BECOME A DISTRIBUTER</a>
			<div class="header-nav-right">
				<?php
				wp_nav_menu( array( 
					'theme_location' => 'custom_header_nav', 
					'container_class' => 'header-nav-d' ) ); 
				?>
				<img src="<?php echo site_url();?>/images/phone.png"/>
			</div>
		</div>
		<div class="header-img">
			<?php echo the_post_thumbnail( 'post-thumbnail', ['class' => 'header-image desktop-only', 'title' => 'Feature image'] ); ?>
			<?php $mobile_hero = get_field('mobile_hero');
			if( !empty($mobile_hero)) : ?>
			<img class="mobile-hero mobile-only" src="<?php echo esc_url($mobile_hero['url']);?>" alt="<?php echo esc_attr($mobile_hero['alt']);?>" />
			<?php endif; ?>
		</div>
	</header><!-- #masthead -->
	<main>