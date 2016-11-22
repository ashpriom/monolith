<?php
/*
 * Displays all of the <head> section and everything up till <div id="content">
*/
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta name="google-site-verification" content="s1T9Dm7DTnfmmmghEDUcbkF1tAkopEuVgHHlrAljLIA" />
	<?php wp_head(); ?>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "Monolith",
			"alternateName": "Monolith Technology",
			"url": "http://monolith.technology",
			"logo": "http://monolith.technology/wp-content/uploads/2016/11/monolith-r.jpg",
			"contactPoint": 
				[
			  		{
			    		"@type": "ContactPoint",
			    		"telephone": "+1-438-929-2026",
			    		"contactType": "emergency",
			    		"availableLanguage": 
			    			[
      							"English"
      						]
			  		}
			  	],
			  	"sameAs": [
				    "https://www.facebook.com/monolith.technology/",
				    "https://twitter.com/monolith_tech/"
				]	  	
		}
	</script>	
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'graphy' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php graphy_logo(); ?>
			<?php graphy_site_title(); ?>
			<?php if ( has_nav_menu( 'header-social' ) ) : ?>
				<nav id="header-social-link" class="header-social-link social-link">
					<?php wp_nav_menu( array( 'theme_location' => 'header-social', 'depth' => 1, 'link_before'  => '<span class="screen-reader-text">', 'link_after'  => '</span>' ) ); ?>
				</nav><!-- #header-social-link -->
			<?php endif; ?>
		</div><!-- .site-branding -->

		<?php if ( ! get_theme_mod( 'graphy_hide_navigation' ) ) : ?>
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle"><span class="menu-text"><?php esc_html_e( 'Menu', 'graphy' ); ?></span></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<?php if ( ! get_theme_mod( 'graphy_hide_search' ) ) : ?>
				<?php get_search_form(); ?>
				<?php endif; ?>
			</nav><!-- #site-navigation -->
		<?php endif; ?>

		<?php if ( is_home() && get_header_image() ) : ?>

		<div id="header-image" class="header-image">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</div><!-- #header-image -->

		<?php elseif ( is_page() && has_post_thumbnail() ) : ?>

		<div id="header-image" class="header-image">
			<?php the_post_thumbnail( 'graphy-page-thumbnail' ); ?>
		</div><!-- #header-image -->

		<?php endif; ?>



	</header><!-- #masthead -->



	<div id="content" class="site-content">

