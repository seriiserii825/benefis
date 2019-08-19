<?php
/**
 * benefis functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package benefis
 */

if ( ! function_exists( 'benefis_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function benefis_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on benefis, use a find and replace
		 * to change 'benefis' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'benefis', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'benefis' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'benefis_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'benefis_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function benefis_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'benefis_content_width', 640 );
}
add_action( 'after_setup_theme', 'benefis_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function benefis_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'benefis' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'benefis' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'benefis_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function benefis_scripts() {
	wp_enqueue_style( 'benefis-style', get_stylesheet_uri() );

	wp_enqueue_script( 'benefis-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'benefis-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'benefis_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}




/*
 * Display input on single product page
 * @return html
 */
// function kia_custom_option(){
//     $value = isset( $_POST['_custom_option'] ) ? sanitize_text_field( $_POST['_custom_option'] ) : '';
//     printf( '<input name="_custom_option" class="custom_rz" value="" placeholder="Ваш размер *" />', __( 'Ваш размер *', 'kia-plugin-textdomain' ), esc_attr( $value ) );
// }
// add_action( 'woocommerce_before_single_variation', 'kia_custom_option', 9 );





/*
 * Add custom data to the cart item
 * @param array $cart_item
 * @param int $product_id
 * @return array
 */
function kia_add_cart_item_data( $cart_item, $product_id ){

    if( isset( $_POST['_custom_option'] ) ) {
        $cart_item['custom_option'] = sanitize_text_field( $_POST['_custom_option'] );
    }

    return $cart_item;

}
add_filter( 'woocommerce_add_cart_item_data', 'kia_add_cart_item_data', 10, 2 );

/*
 * Load cart data from session
 * @param array $cart_item
 * @param array $other_data
 * @return array
 */
function kia_get_cart_item_from_session( $cart_item, $values ) {

    if ( isset( $values['custom_option'] ) ){
        $cart_item['custom_option'] = $values['custom_option'];
    }

    return $cart_item;

}
add_filter( 'woocommerce_get_cart_item_from_session', 'kia_get_cart_item_from_session', 20, 2 );

/*
 * Add meta to order item
 * @param int $item_id
 * @param array $values
 * @return void
 */
function kia_add_order_item_meta( $item_id, $values ) {

    if ( ! empty( $values['custom_option'] ) ) {
        wc_add_order_item_meta( $item_id, 'Custom size', $values['custom_option'] );           
    }
}
add_action( 'woocommerce_add_order_item_meta', 'kia_add_order_item_meta', 10, 2 );

/*
 * Get item data to display in cart
 * @param array $other_data
 * @param array $cart_item
 * @return array
 */
// function kia_get_item_data( $other_data, $cart_item ) {

//     if ( !empty( $cart_item['custom_option'] )){

//         $other_data[] = array(
//             'name' => __( 'Ваш размер', 'kia-plugin-textdomain' ),
//             'value' => sanitize_text_field( $cart_item['custom_option'] )
//         );

//     }

//     return $other_data;

// }
// add_filter( 'woocommerce_get_item_data', 'kia_get_item_data', 10, 2 );

/*
 * Show custom field in order overview
 * @param array $cart_item
 * @param array $order_item
 * @return array
 */
function kia_order_item_product( $cart_item, $order_item ){

    if( isset( $order_item['custom_option'] ) ){
        $cart_item_meta['custom_option'] = $order_item['custom_option'];
    }

    return $cart_item;

}
add_filter( 'woocommerce_order_item_product', 'kia_order_item_product', 10, 2 );

/* 
 * Add the field to order emails 
 * @param array $keys 
 * @return array 
 */ 
function kia_email_order_meta_fields( $fields ) { 
    $fields['custom_field'] = __( 'Ваш размер', 'kia-plugin-textdomain' ); 
    return $fields; 
} 
add_filter('woocommerce_email_order_meta_fields', 'kia_email_order_meta_fields');

/*
 * Order Again
 * @param array $cart_item
 * @param array $order_item
 * @param obj $order
 * @return array
 */
function kia_order_again_cart_item_data( $cart_item, $order_item, $order ){

    if( isset( $order_item['custom_option'] ) ){
        $cart_item_meta['custom_option'] = $order_item['custom_option'];
    }

    return $cart_item;

}
add_filter( 'woocommerce_order_again_cart_item_data', 'kia_order_again_cart_item_data', 10, 3 );



// Региструрем меню
register_nav_menus(array(
	'catmenu'    => 'Категории',   //Название месторасположения меню в шаблоне
	'topmenu'    => 'Основное меню'
));

// Прописываем доп. классы для работы выпадающего меню

function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'catmenu') {
    $classes[] = 'dropdown mega';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

class Child_Wrap extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);                                    
        $output .= "\n$indent<div class=\"cat-left-drop-menu\"><div class=\"cat-left-drop-menu-left\"><ul>\n";
    }
    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div></div>\n";
    }
}

// Перевод строк (PollyLang)
add_action('init', function() {
  // Шапка
  pll_register_string('Валюта', 'Валюта');
  pll_register_string('Язык', 'Язык');
  pll_register_string('Вход', 'Вход');
  pll_register_string('Регистрация', 'Регистрация');
  pll_register_string('Введите поисковой запрос', 'Введите поисковой запрос');
  pll_register_string('Поиск', 'Поиск');
  pll_register_string('Корзина', 'Корзина');
 // Карточка товара
  pll_register_string('Ребенок - Взрослый', 'Ребенок - Взрослый');
   pll_register_string('Подробнее', 'Подробнее');
});
