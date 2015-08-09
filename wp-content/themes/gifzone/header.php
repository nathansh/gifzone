<!doctype html>
<!--[if IE 8 ]>    <html class="ie ie8 lt-ie6 lt-ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 lt-ie6 lt-ie7 lt-ie8 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="<?php bloginfo('language') ?>"><!--<![endif]-->
<head>

	<title><?php d7_document_title(); ?></title>

	<?php include "partials/share_meta.php"; ?>

	<meta name="description" content="<?php bloginfo('description') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>

    <!-- This bit of the uggliest code you've ever seen deals an icon font loading issue in IE8 -->
    <!--[if IE 8]>
        <style>html.ie-force-pseudo-refresh :before,html.ie-force-pseudo-refresh :after {content : none !important;}</style>
        <script>window.attachEvent&&!window.addEventListener&&window.attachEvent("onload",function(){var a=document.documentElement,b=a.className;a.className=b+" ie-force-pseudo-refresh",setTimeout(function(){a.className=b},10)});</script>
    <![endif]-->

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico?ver=2">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo get_bloginfo('rss2_url'); ?>" />

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<div class="l-container">
		<header class="masthead">
			<h1 class="site-name"><span class="site-name__icon">💂</span><a href="<?php bloginfo('url'); ?>" class="site-name__text"><?php bloginfo('name'); ?></a></h1>
		</header><!-- #masthead -->
	</div>
