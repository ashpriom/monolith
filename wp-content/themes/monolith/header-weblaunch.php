<?php
/**
 * @package WordPress
 * @subpackage Monolith_Theme
 */
?>

<?php
$postID = get_the_ID();
$metaTitle = get_post_meta($postID, 'meta_title', true);
$metaDesc = get_post_meta($postID, 'meta_description', true);
$templateDir = get_template_directory_uri(); $metaImage .= $templateDir ."/images/bannerhome.jpg";
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
		<meta name="author" content="Monolith">
		<meta name="copyright" content="Monolith">
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:site" content="Monolith"/>
		<meta name="twitter:title" content="<?php echo $metaTitle; ?>">
		<meta name="twitter:creator" content="Monolith"/>
		<meta name="twitter:domain" content="synstudio.ca"/>
		<meta name="twitter:image:src" content="<?php echo $metaImage; ?>">
		<meta property="og:site_name" content="Monolith">
		<meta property="og:url" content="<?php the_permalink(); ?>">
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?php echo $metaTitle; ?>">
		<meta property="og:description" content="<?php echo $metaDesc; ?>">
		<meta property="og:image" content="<?php echo $metaImage; ?>">
		<meta itemprop="name" content="<?php echo $metaTitle; ?>"/>
		<meta itemprop="description" content="<?php echo $metaDesc; ?>"/>
		<meta itemprop="image" content="<?php echo $metaImage; ?>">
		<meta name="description" content="<?php echo $metaDesc; ?>"/>
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/weblaunch.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/weblaunchResponsive.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stacktable.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:regular,700&amp;subset=latin">
	  	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin+Sans:100,100italic,300,300italic,regular,italic,600,600italic,700,700italic&amp;subset=latin,latin-ext">
    	
    	<!--[if lt IE 9]>
	      	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->

		<!--[if IE 6]>
			<style type="text/css">
				* html .group {
					height: 1%;
				}
			</style>
	  	<![endif]-->
	  	
	  	<!--[if IE 7]>
			<style type="text/css">
				*:first-child+html .group {
					min-height: 1px;
				}
			</style>
  		<![endif]-->
  		
  		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  		<![endif]-->

  		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
		<?php remove_filter ('the_content', 'wpautop'); ?>

	</head>