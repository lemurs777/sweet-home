<?php
/**
 * Lemurs Agency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lemurs_Agency
 */




if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}




/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
 
require get_template_directory() . '/inc/navigations.php';

function lemurs_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Lemurs Agency, use a find and replace
		* to change 'lemurs' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'lemurs', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'lemurs' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'lemurs_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'lemurs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lemurs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lemurs_content_width', 640 );
}
add_action( 'after_setup_theme', 'lemurs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lemurs_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lemurs' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lemurs' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lemurs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lemurs_scripts() {
	wp_enqueue_style( 'lemurs-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lemurs-style', 'rtl', 'replace' );

	wp_enqueue_script( 'lemurs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lemurs_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Настройки темы',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	
}


/* ----------- Custom Post Type -------------*/
function custom_post_type() {
    $labels_service = array(
        'name'                => _x( 'Services', 'Post Type General Name', 'VAL' ),
        'singular_name'       => _x( 'Услуги', 'Post Type Singular Name', 'VAL' ),
        'menu_name'           => __( 'Services', 'VAL' ),
        'parent_item_colon'   => __( 'Родительская услуга', 'VAL' ),
        'all_items'           => __( 'Все услуги ', 'VAL' ),
        'view_item'           => __( 'Смотреть услуги', 'VAL' ),
        'add_new_item'        => __( 'Добавить новую услугу', 'VAL' ),
        'add_new'             => __( 'Добавить новую', 'VAL' ),
        'edit_item'           => __( 'Изменить', 'VAL' ),
        'update_item'         => __( 'Изменить', 'VAL' ),
        'search_items'        => __( 'Искать услуги', 'VAL' ),
        'not_found'           => __( 'Не найдено', 'VAL' ),
        'not_found_in_trash'  => __( 'Не найдено в корзине', 'VAL' ),
    );
    $args_service = array(
        'label'               => __( 'services', 'VAL' ),
        'description'         => __( 'services', 'VAL' ),
        'labels'              => $labels_service,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
    register_post_type( 'services', $args_service );
    
        $labels_portfolio = array(
        'name'                => _x( 'Portfolio', 'Post Type General Name', 'VAL' ),
        'singular_name'       => _x( 'Портфолио', 'Post Type Singular Name', 'VAL' ),
        'menu_name'           => __( 'Portfolios', 'VAL' ),
        'parent_item_colon'   => __( '', 'VAL' ),
        'all_items'           => __( 'Все проекты ', 'VAL' ),
        'view_item'           => __( 'Смотреть портфолио', 'VAL' ),
        'add_new_item'        => __( 'Добавить новый проект', 'VAL' ),
        'add_new'             => __( 'Добавить новый', 'VAL' ),
        'edit_item'           => __( 'Изменить', 'VAL' ),
        'update_item'         => __( 'Изменить', 'VAL' ),
        'search_items'        => __( 'Искать проект', 'VAL' ),
        'not_found'           => __( 'Не найдено', 'VAL' ),
        'not_found_in_trash'  => __( 'Не найдено в корзине', 'VAL' ),
    );
    $args_portfolio = array(
        'label'               => __( 'portfolio', 'VAL' ),
        'description'         => __( 'portfolio', 'VAL' ),
        'labels'              => $labels_portfolio,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'category' ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
    register_post_type( 'portfolio', $args_portfolio );

}
add_action( 'init', 'custom_post_type', 0 );


add_action('init', function() {
  pll_register_string('val_translation', 'Обговорити проект');
  pll_register_string('val_translation' , 'Посмотреть все');
  pll_register_string('val_translation' , 'от');
  pll_register_string('val_translation' , 'Заказать услугу');
  pll_register_string('val_translation' , 'Все');
  pll_register_string('val_translation', 'Портфолио');
  pll_register_string('val_translation', 'Подробнее');
  pll_register_string('val_translation' ,'О нас');
  pll_register_string('val_translation','Открыть');
  pll_register_string('val_translation', 'Контакты');
  pll_register_string('val_translation', 'Адрес');
  pll_register_string('val_translation','Телефон');
  pll_register_string('val_translation','Почта');
  pll_register_string('val_translation','Назад');
  pll_register_string('val_translation','Вперед');
  pll_register_string('val_translation', 'Рассчитайте стоимость вашего проекта');
  pll_register_string('val_translation' , 'Услуги');
  pll_register_string('val_translation' , 'Хочу так же');
  
});