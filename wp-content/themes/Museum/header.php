<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<title>
		<?php if ( is_home() ) { ?><?php bloginfo('description'); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php echo $s; ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php wp_title(''); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_category() ) { ?>Archive <?php single_cat_title(); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_month() ) { ?>Archive <?php the_time('F'); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_tag() ) { ?><?php single_tag_title();?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_404() ) { ?>Sorry, not found! | <? bloginfo('name'); ?><?php } ?>
	</title>
	
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo('template_url'); ?>/print.css" rel="stylesheet" type="text/css" media="print" />
	
	<?php if (is_single()) { ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
	<?php } ?>
	
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon24.ico" />
	<!--[if !IE]>
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/ie/favico.ico" />
	<![endif]-->
	
	<?php 
	//Comment threading and paging
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php 
	//Load Stuff into the head
	wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3047504-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
  })();
</script>

<div class="container">
	<h1 id="company"><a href="<?php bloginfo(home);?>">812studio</a></h1>
	<ul id="nav">
		<?php wp_list_pages('title_li=&exclude=196'); ?>
	</ul>