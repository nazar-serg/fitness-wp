<?php

/*
	Adding Styles and Scripts
*/
function style_theme() {
	wp_dequeue_style( 'wp-block-library' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/app/css/animate.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/app/css/app.min.css' );
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js', array() );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/app/js/wow.min.js', array() );
	wp_enqueue_script( 'stickit', get_template_directory_uri() . '/app/js/jquery.stickit.min.js', array() );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/app/js/app.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'style_theme' );

/*
	Menus Registration
*/
register_nav_menus (
	array (
		'top' => 'Header Menu',
		'bottom' => 'Footer Menu'
	)
);

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
		'show_in_menu'        => null,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
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

/*
	Registering sidebars
*/
add_action( 'widgets_init', 'asidewp_sidebars' );
function asidewp_sidebars() {
	register_sidebar(
		array(
			'name' => 'Blog Sidebar',
			'id' => 'sidebar-1',
			'description' => 'Це бічна панель блогу. Ви можете додати свої віджети тут. ',
			'before_widget' => '<div class="content-area__widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<div class="content-area__widget-title">',
			'after_title' => '</div>'
		)
	);	
}


/*
	Read More
*/
function wpdocs_excerpt_more( $more ) {
    return '<br><a class="blog-article__read-more link-border-bottom" href="'.get_the_permalink().'" rel="nofollow">Докладніше</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/*
	Post preview length classes
*/
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/* 
	add title
*/
add_theme_support( 'title-tag' );




