<?php
	get_header();
?>


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

<article>


</article>

<?php
	get_footer();

?>
