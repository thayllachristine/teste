<?php
	// ativando suporte a imagem destacada no Wordpress
	add_theme_support('post-thumbnails');

	// ativando menus dinâmicos no Wordpress
	function register_my_menus() {
		register_nav_menus(
		array(
				'hader-menu' => __('Menu do Topo')
			)
		);
	}
	add_action('init', 'register_my_menus');
?>