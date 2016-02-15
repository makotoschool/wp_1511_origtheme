<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description')?></title>
<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<?php wp_head( );?>
</head>
<body <?php body_class( ); ?>>
<div class="container">
	<header>
		<a href="<?php echo home_url();?>">
			<h1 class="logo">
				<?php bloginfo('name'); ?>
			</h1>
		</a>
		<nav class="utility_nav">
			<ul>
			<li><a href="">NEWS</a></li>
			<li><a href="">SITEMAP</a></li>
			<li><a href="">PRIVACY</a></li>
			</ul>
		</nav>
		<div class="main_header clear">
			<h2>
				<span class="invisible">これも検索エンジン対策の見出しです</span>
			</h2>

		</div>
	</header>
	<nav class="main_nav clearfix">
		<ul>
		<li><a href="">Top</a></li>
		<li><a href="">Web</a></li>
		<li><a href="">Dtp</a></li>
		<li><a href="">Blog</a></li>
		<li><a href="">Access</a></li>
		<li><a href="">Contact</a></li>
		</ul>
	</nav>