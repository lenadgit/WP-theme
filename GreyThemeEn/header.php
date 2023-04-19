<?php get_header(); ?>

<!DOCTYPE html>
<html xmlns = "http://www.w3.org/1999xhtml" lang="ru">
<head profile = "http://qmpq.org/xfm/11">
<title>
	<?php bloginfo('name'); ?>
	<?php wp_title(); ?>	
</title>
<meta charset="UTF-8"/>
<meta http-equiv = "X-UA-Compatible" content = "<?php bloginfo('html_type'); ?>" charset = "<?php bloginfo('charset'); ?>" />
<meta name = "generator" content = "WordPress <?php bloginfo('version'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media = "screen" />
<link rel = "stylesheet" href = "<?php bloginfo('template_url'); ?>/stylequeries.css" type = "text/css" media = "screen"/>
<link rel = "alternate" type = "application/rss+xml" title = "Atom 0.3" href = "<?php bloginfo('atom_url'); ?>" />
<link rel = "pingback" href = "<?php bloginfo('pingback_url'); ?>" />

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="respond.min.js"></script>
    <![endif]-->

   <?php wp_get_archives('type=monthly&format=link'); ?>
   <?php comments_popup_script(); ?>
   <?php wp_head(); ?> 
</head>

<body>
<div id = "wrapper">
<div id = "header">
	<p class = "headertext"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>
	<p class = "headertextsmall"><?php bloginfo('description'); ?></p>
</div>
	
<div id = "mainblock">
	<div class = "menu">
	<?php wp_list_pages('title_li'); ?>

	<form class = "block-search" action = "<?php bloginfo('url'); ?>" method="get"   name="searchform" id="searchform">
		<input type = "text" class = "searchfield" name="s" id="s" value = "<?php the_search_query(); ?>"/>
		<input type = "submit" class="searchbutton" value = ""/>
	</form>			
	</div>