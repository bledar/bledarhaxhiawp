<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset='<?php bloginfo("charset");?>'>
	<title> <?php bloginfo('name'); ?></title>
	<?php wp_head();?>
	
</head>
<body>
<header>
	<h1>
	<span id="menuButon" class="flaticon-menu51"></span>
		<?php 
			bloginfo("name");
		?>
		</h1>
	</a>
	</h1>
</header>
<nav>
	<h2><?php bloginfo("name"); ?></h2>
	<?php	
	
	$args = array(
		'theme_location'=>'primary',
		'menu' => '',
		'container' => 'div',
		'container_class' => 'menu',
		'container_id' => '',
		'menu_class' => 'menu',
		'menu_id' => '',
		'echo' => true,
		'fallback_cb' => '',
		'before' => '',
		'after' => '',
		'link_before' => '',
		'link_after' => '',
		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth' => 0,
		'walker' => ''
	);
	wp_nav_menu($args)

	?>
</nav>