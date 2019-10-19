<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<style>

</style>

<script src="http://cancerpathways.org/jquery-1.11.3.min.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
<![endif]-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic' rel='stylesheet' type='text/css'>
<?php

if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function zerif_old_render_title() {
?>
<title><?php wp_title( '-', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'zerif_old_render_title' );
endif;

wp_head(); ?>

</head>

<?php if(isset($_POST['scrollPosition'])): ?>

	<body <?php body_class(); ?> onLoad="window.scrollTo(0,<?php echo intval($_POST['scrollPosition']); ?>)">

<?php else: ?>

	<body <?php body_class(); ?> >

<?php endif; 

	global $wp_customize;
	
	/* Preloader */

	if(is_front_page() && !isset( $wp_customize ) && get_option( 'show_on_front' ) != 'page' ): 
 
		$zerif_disable_preloader = get_theme_mod('zerif_disable_preloader');
		
		if( isset($zerif_disable_preloader) && ($zerif_disable_preloader != 1)):
			echo '<div class="preloader">';
				echo '<div class="status">&nbsp;</div>';
			echo '</div>';
		endif;	

	endif; ?>


<div id="mobilebgfix">
	<div class="mobile-bg-fix-img-wrap">
		<div class="mobile-bg-fix-img"></div>
	</div>
	<div class="mobile-bg-fix-whole-site">


<header id="home" class="header">

	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">

		<div class="container">
<div class="socialmediadiv"><div style="display: inline-block; vertical-align: top;
margin-top:0px;">
<div id="searchform">
<form role="search" method="get" class="search-form" style="display: inline-block; height: 20px; -webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Press enter to search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	
</form></div></div>
<a href="javascript:toggleDiv('searchform');"><span class="searchbutton"></span></a>
<a href="<?php the_field('youtube' , '231') ?>" target="_blank"><span class="youtube"></span></a><a href="<?php the_field('twitter' , '231') ?>" target="_blank"><span class="twitter"></span></a>
<a href="<?php the_field('linkedin' , '231') ?>" target="_blank"><span class="linkedin"></span></a>
<a href="<?php the_field('facebook' , '231') ?>" target="_blank"><span class="facebook"></span></a>
<a href="<?php the_field('instagram' , '231') ?>" target="_blank"><span class="instagram"></span></a></div>
			<div class="navbar-header responsive-logo">

				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

				<span class="sr-only"><?php _e('Toggle navigation','zerif-lite'); ?></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				</button>

				<?php

					$zerif_logo = get_theme_mod('zerif_logo');

					if(isset($zerif_logo) && $zerif_logo != ""):

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

							echo '<img src="'.$zerif_logo.'" alt="'.get_bloginfo('title').'">';

						echo '</a>';

					else:

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';
						
							if( file_exists(get_stylesheet_directory()."/images/logo.png")):
							
								echo '<img src="'.get_stylesheet_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'">';
							
							else:
								
								echo '<img src="'.get_template_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'">';
								
							endif;

						echo '</a>';

					endif;

				?>

			</div>

			<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation"   id="site-navigation">
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'zerif-lite' ); ?></a>
				<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list',  'fallback_cb'     => 'zerif_wp_page_menu')); ?>
			</nav>

<script>
/*
 * http://css-tricks.com/forums/discussion/24993/help-with-jquery-magicline-navigation
 */

$(function() {
  
  var $el, leftPos, newWidth,
      $mainNav = $("#navbar-nav li");
  
  $mainNav.append("<li id='magic-line'></li>");
  var $magicLine = $("#magic-line");
 
  
  
  
  $magicLine
    .width($("").width())
    .css("left", $("a").position().left)
    .data("origLeft", $magicLine.position().left)
    .data("origWidth", $magicLine.width());
 
});
</script>

<script>
    function showonlyone(thechosenone) {

         $('.newboxes').each(function(index) {

              if ($(this).attr("id") == thechosenone) {

                   $(this).show(200);

              }

              else {

                   $(this).hide(600);

              }

         });

    }
	</script>
<script type="text/javascript">
$('#stickybox').affix({
  offset: {
    top: 150
  }
});</script>
    
    <script type="text/javascript">

function toggleDiv(divId) {

   $("#"+divId).each(function(index) {

              if ($(this).attr("id") == divId) {

                   $(this).toggle(200);

              }

           

         });

    }

</script>
		</div>

	</div>
	<!-- / END TOP BAR -->