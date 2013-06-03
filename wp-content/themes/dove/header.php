<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	
	 <html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title('&mdash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        
        <!-- Add CSS Files Here -->
       <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css" type="text/css" />
		
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
	    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/app.css" type="text/css" />
	    
	    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fc-webicons.css" type="text/css" />
		
		 <!-- Add Wordpress RSS Here -->
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		
		<?php wp_head(); ?>
		<!-- Add Java Script Files Here -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/vendor/custom.modernizr.js"></script>
		
		
		 <!-- Add Wordpress Pnig Here -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        
        <!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
		<!-- Favicons -->
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-114x114.png">
        
     	<?php wp_head(); ?>
  
    </head>
  
<body <?php body_class(); ?>>
	
<header>
<div class="row">
	
<div class="large-3 columns">
<div class="logo"> <a href="/">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" title="Dove Furniture & Kitchens" alt="Dove Furniture & Kitchens" />
          </a></div>
</div>
<div class="large-9 columns">
	<p class="right number"><span>Call Us:</span> 01757 249 171</p>
	</div>
<div class="large-9 columns">
<div class="contain-to-grid">
	
<nav class="top-bar">
	
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
     
         
      
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul>
 
    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <?php wp_nav_menu(array('theme_location'=>'headertop-menu'));?>
      <!-- Right Nav Section -->
    
    </section>
  </nav>
 

</div>

</div>
</div>

</header>	

<div class="featured-image columns <?php the_field('no_image'); ?>" >
	<span style="background: url(<?php the_field('header_image'); ?>)no-repeat;"></span>
	
</div>
