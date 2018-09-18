<?php
	// ativando suporte a imagem destacada no Wordpress
	add_theme_support('post-thumbnails');

	// ativando menus dinâmicos no Wordpress
	function register_my_menus() {
		register_nav_menus(
		array(
				'header-menu' => __('Menu do Topo')
			)
		);
	}
	add_action('init', 'register_my_menus');

	// Meus posts types
	function meus_posts_types() {
		// Habilidades
		register_post_type('habilidades',
			array(
				'labels'			=> array(
					'name'			=> __('Habilidades'),
					'singular_name'	=> __('Habilidade')
					),
				'public'			=> true,
				'has_archive'		=> true,
				'menu_icon'			=> 'dashicons-chart-line',
				'supports'			=> array('title', 'editor', 'thumbnail', 'page-attributes'),
				)

		);

	}
	add_action('init', 'meus_posts_types');