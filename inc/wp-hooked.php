<?php
/**
 * Functions which enhance the theme by hooking into WordPress core actions/hooks
 *
 * @package Portfolio
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

 if(! function_exists('portfolio_setup')):
 function portfolio_setup()
{
    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on portfolio, use a find and replace
    * to change 'portfolio' to the name of your theme in all the template files.
    */
    load_theme_textdomain('portfolio', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support('title-tag');

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'primary'     => esc_html__('Primary', 'portfolio'), // Primary menu
            'footer'      => esc_html__('Footer', 'portfolio'), // Footer menu
        )
    );

    // Add support for HTML5
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

    // Set up the WordPress core custom background feature
    add_theme_support(
        'custom-background',
        apply_filters(
                'portfolio_custom_background_args',
            array(
                'default-color' => '000000',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('align-wide');
    add_theme_support('appearance-tools');
    add_theme_support('border');
    add_theme_support('custom-spacing');
    add_theme_support('custom-line-height');
    add_theme_support('link-color');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');

    /**
     * Add support for core custom logo
     *
     * @since 1.0.0
     * @return void
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

    /**
     * Registering new image sizes
     * 
     * @since 1.0.0
     * @return void
     */
    add_image_size('about_image_size', 520, 770, true);
    add_image_size('custom_medium_img', '430', '638', true);
    add_image_size('banner_three_img', '720', '796', true);
    add_image_size('testimonial_img', '440', '540', true);
    add_image_size('feature_project_img', 570, 360, true);
    add_image_size('casestudy_img', 546, 395, true);
    add_image_size('team_card_image', 384, 420, true);
    add_image_size('blog_card_image', 384, 480, true);
    }
    add_action('after_setup_theme', 'portfolio_setup');
endif;

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portfolio_content_width() {
    $GLOBALS['content_width'] = apply_filters('portfolio_content_width', 640);
}
add_action('after_setup_theme', 'portfolio_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'portfolio'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'portfolio'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'portfolio_widgets_init');

/**
 * Enqueue scripts and styles.
 */
if(! function_exists('portfolio_scripts')):
function portfolio_scripts() {
    // Vendor CSS Files
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), PORTFOLIO_VERSION);
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), PORTFOLIO_VERSION);
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), PORTFOLIO_VERSION);
    wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), PORTFOLIO_VERSION);
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), PORTFOLIO_VERSION);
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
    
    // Main CSS
    wp_enqueue_style('portfolio-main', get_template_directory_uri() . '/assets/css/main.css', array(), PORTFOLIO_VERSION, 'all');
    
    // Theme style
    wp_enqueue_style('portfolio-style', get_stylesheet_uri(), array(), PORTFOLIO_VERSION);
    wp_style_add_data('portfolio-style', 'rtl', 'replace');

    // Portfolio Frontend CSS
    wp_enqueue_style('portfolio-frontend', get_template_directory_uri() . '/css/portfolio-frontend.css', array(), PORTFOLIO_VERSION, 'all');

    // Vendor JavaScript Files
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), PORTFOLIO_VERSION, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array('jquery'), PORTFOLIO_VERSION, true);
    wp_enqueue_script('typed', get_template_directory_uri() . '/assets/vendor/typed.js/typed.umd.js', array('jquery'), PORTFOLIO_VERSION, true);
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array('jquery'), PORTFOLIO_VERSION, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array('jquery'), PORTFOLIO_VERSION, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('jquery', 'imagesloaded'), PORTFOLIO_VERSION, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array('jquery'), PORTFOLIO_VERSION, true);
    wp_enqueue_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array('jquery'), PORTFOLIO_VERSION, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array('jquery'), PORTFOLIO_VERSION, true);
    wp_enqueue_script('php-email-form', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array('jquery'), PORTFOLIO_VERSION, true);

    // Main JavaScript File
    wp_enqueue_script('portfolio-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'bootstrap', 'aos', 'typed', 'purecounter', 'waypoints', 'imagesloaded', 'isotope', 'glightbox', 'swiper'), PORTFOLIO_VERSION, true);

    // Portfolio Frontend JavaScript
    wp_enqueue_script('portfolio-frontend', get_template_directory_uri() . '/js/portfolio-frontend.js', array('jquery', 'isotope', 'imagesloaded'), PORTFOLIO_VERSION, true);

    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'portfolio_scripts');
endif;



/**
 * Custom Walker for Portfolio Menu
 */
class Portfolio_Walker_Nav_Menu extends Walker_Nav_Menu {
	
	/**
	 * Start the element output.
	 */
	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		
		// Add dropdown class if has children
		if ( in_array( 'menu-item-has-children', $classes ) ) {
			$classes[] = 'dropdown';
		}
		
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		
		$output .= $indent . '<li' . $id . $class_names .'>';
		
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' href="'   . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		
		// Get icon from menu item custom field or use default
		$icon = get_post_meta( $item->ID, '_menu_item_icon', true );
		if ( ! $icon ) {
			// Default icons based on menu item title
			$title_lower = strtolower( $item->title );
			if ( strpos( $title_lower, 'home' ) !== false ) {
				$icon = 'bi bi-house';
			} elseif ( strpos( $title_lower, 'about' ) !== false ) {
				$icon = 'bi bi-person';
			} elseif ( strpos( $title_lower, 'resume' ) !== false ) {
				$icon = 'bi bi-file-earmark-text';
			} elseif ( strpos( $title_lower, 'portfolio' ) !== false ) {
				$icon = 'bi bi-images';
			} elseif ( strpos( $title_lower, 'service' ) !== false ) {
				$icon = 'bi bi-hdd-stack';
			} elseif ( strpos( $title_lower, 'contact' ) !== false ) {
				$icon = 'bi bi-envelope';
			} else {
				$icon = 'bi bi-menu-button';
			}
		}
		
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= '<i class="' . $icon . ' navicon"></i> ';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		
		// Add dropdown toggle if has children
		if ( in_array( 'menu-item-has-children', $classes ) ) {
			$item_output .= ' <i class="bi bi-chevron-down toggle-dropdown"></i>';
		}
		
		$item_output .= '</a>';
		$item_output .= $args->after;
		
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
 * Fallback menu function
 */
function portfolio_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>';
    echo '<li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>';
    echo '<li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>';
    echo '<li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>';
    echo '<li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>';
    echo '<li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>';
    echo '<ul>';
    echo '<li><a href="#">Dropdown 1</a></li>';
    echo '<li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>';
    echo '<ul>';
    echo '<li><a href="#">Deep Dropdown 1</a></li>';
    echo '<li><a href="#">Deep Dropdown 2</a></li>';
    echo '<li><a href="#">Deep Dropdown 3</a></li>';
    echo '<li><a href="#">Deep Dropdown 4</a></li>';
    echo '<li><a href="#">Deep Dropdown 5</a></li>';
    echo '</ul>';
    echo '</li>';
    echo '<li><a href="#">Dropdown 2</a></li>';
    echo '<li><a href="#">Dropdown 3</a></li>';
    echo '<li><a href="#">Dropdown 4</a></li>';
    echo '</ul>';
    echo '</li>';
    echo '<li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>';
    echo '</ul>';
}




