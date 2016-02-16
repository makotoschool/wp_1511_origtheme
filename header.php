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
		<?php 
		wp_nav_menu(array(
				'theme_location'=>'utility',	
				'container'=>'nav',
				'container_class'=>'utility_nav'
		));	
		?>
		<div class="main_header clear">
			<h2>
				<span class="invisible">これも検索エンジン対策の見出しです</span>
			</h2>

		</div>
	</header>
	<?php 
		wp_nav_menu(array(
				'theme_location'=>'mainnavi',	
				'container'=>'nav',
				'container_class'=>'main_nav clearfix'
		));	
	?>
	