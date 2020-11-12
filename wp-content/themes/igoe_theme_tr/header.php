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
	<meta name="keywords" content="Loans,small business loans,same-day">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_enqueue_script("jquery");?>
	<script src="<?php echo get_template_directory_uri();?>/js/jquery/dist/jquery.min.js"></script>
	<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	<!-- Custom JS in Navigation.js -->
	<?php wp_head(); ?>
	<script>
		$(document).ready(function() {
	// $('.sub-menu').css('display','none');
    // $('.header-nav-d ul li').hover(function() {
    //     $(this).children(".sub-menu").slideToggle('slow', function() {
    //         //Animation Complete.
    //     });
    // });
});
	</script>
</head>
<?php if(is_front_page()){ ;?>
	<style>
div#userwayAccessibilityIcon.uai.uli {
    top: 8em;
}
</style>
<?php } ;?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'igoe_theme_tr' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="mobile-nav-wrap">
		<div class="logo-wrap">
			<a href="<?php echo site_url(); ?>" target=""><img src="<?php echo site_url();?>/images/svg/logo.svg" class="logo"></a>
		</div>
		<div id="bars" class="bars" onclick="bars(this)">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
	</div>
	<!-- .main-navigation == mobile nav, naming convention coming from Navigation.scss -->
		<nav id="site-navigation" class="main-navigation off">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'igoe_theme_tr' ); ?></button> -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'custom_mobile_nav',
					 'container_class'  => 'header-nav-m',
				)
				// array(
				// 	'theme_location' => 'menu-1',
				// 	'menu_id'        => 'primary-menu',
				// )
			);
			?>
		</nav><!-- #site-navigation -->
		<?php if(!is_front_page()){ ;?>
		<a class="header-logo-desktop d-only" href="<?php echo site_url();?>"><img src="<?php echo get_site_url() ;?>/images/svg/logo.svg" alt=""/></a>
	
		
		<style>

@media (min-width: 768px){
     .header-nav-wrap-d {
    display: flex;
    margin-top:0em;
    justify-content: space-between;
}
}
header .header-nav-wrap-d .top-corner-button {
	/* margin: 0; */
	text-decoration:none;
}

		</style>

<?php } ;?>



		<div class="header-nav-wrap-d">
			<a class=" header-nav-left top-corner-button" href="<?php echo site_url() ;?>/become-a-distributor">BECOME A DISTRIBUTOR</a>
			<div class="header-nav-right">
				<?php
				wp_nav_menu( array( 
					'theme_location' => 'custom_header_nav', 
					'container_class' => 'header-nav-d' ) ); 
				?>
				<a href="tel:2527141410"><img src="<?php echo site_url();?>/images/svg/phone.svg"/></a>
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
	<?php if(!is_page('home')){ ;?>
	<section class="internal-heading">
    <?php $heading = get_field('internal_heading') ;?>
    <h1><?php echo $heading ;?></h1>
	</section>
	<?php	} ;?>
	<main>
