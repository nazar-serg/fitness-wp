<?php

/*
	Adding Styles
*/
function style_theme() {
	wp_dequeue_style( 'wp-block-library' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/app/css/animate.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/app/css/app.min.css' );
}

add_action( 'wp_enqueue_scripts', 'style_theme' );

/*
	Adding scripts
*/
function scripts_theme() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/app/js/wow.min.js', array('jquery') );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/app/js/app.min.js', array('jquery') );
}

add_action( 'wp_footer', 'scripts_theme' );

/*
	Menu Registration
*/
function headerMenu() {
    register_nav_menu( 'top', 'Header Menu' );
}

add_action( 'after_setup_theme', 'headerMenu' );

/*
    New trainer menu
*/
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'post_type_name', [
		'label'  => null,
		'labels' => [
			'name'               => '____', // основное название для типа записи
			'singular_name'      => 'Тренера', // название для одной записи этого типа
			'add_new'            => 'Добавить нового тренера', // для добавления новой записи
			'add_new_item'       => 'Добавление ____', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование ____', // для редактирования типа записи
			'new_item'           => 'Новое ____', // текст новой записи
			'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
			'search_items'       => 'Искать ____', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Тренера', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

/*
    Adding images
*/
add_theme_support( 'post-thumbnails' );

/*
	Logo size
*/
add_theme_support( 'custom-logo' );

/*
	Adding a class to "a"
*/
function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

/*
	Adding a class to "li"
*/
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);