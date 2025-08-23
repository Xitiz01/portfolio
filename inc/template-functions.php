<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package portfolio
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
if(! function_exists('portfolio_doctype')) :
    /**
     * Doctype Declaration
    */
    function portfolio_doctype()
    { ?>
		<?php
    }
endif;
add_action('portfolio_doctype', 'portfolio_doctype');

if(! function_exists('portfolio_head')) :
    /**
     * Before wp_head
    */
    function portfolio_head()
    { ?>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php
    }
endif;
add_action('portfolio_before_wp_head', 'portfolio_head');  


if(! function_exists('portfolio_page_start')) :
  /**
   * Page Start
  */
  function portfolio_page_start()
  { ?>
  <body <?php body_class(); ?>>
  <?php
  }
endif;
add_action('portfolio_page_start', 'portfolio_page_start', 20);


if(! function_exists('portfolio_header_inclusion')) :
    /**
     * Header Function
     */
    function portfolio_header_inclusion()
    {
        // Allow filtering of the directory and template part slug
        $header_directory = apply_filters('portfolio_header_directory', 'template-parts/');
        $header_template  = apply_filters('portfolio_header_template', 'header');

        // Load the template part
        get_template_part(trailingslashit($header_directory) . $header_template);
    }
endif;
add_action('portfolio_header', 'portfolio_header_inclusion', 10);


function portfolio_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Add index-page class for the portfolio template
	if ( is_front_page() || is_home() ) {
		$classes[] = 'index-page';
	}

	return $classes;
}
add_filter( 'body_class', 'portfolio_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function portfolio_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'portfolio_pingback_header' );



// Footer Functions

if(! function_exists('portfolio_footer_start')) {
  /**
   * Footer Start
  */
  function portfolio_footer_start()
  { ?>
  <footer id="footer" class="footer position-relative" itemscope itemtype="http://schema.org/WPFooter">
  <?php
  }
}
add_action('portfolio_footer', 'portfolio_footer_start', 20);

// Footer Bottom Functions
if (! function_exists('portfolio_footer_bottom')) {
  /**
   * Footer Bottom has footer left and right
   * -Left: Calling functions footer_copyright, toggle_author_link and toggle_wp_link
   * -Right: Calling functions footer_navigation and privacy_policy_link
   *
   *
   * @return void
   */
  function portfolio_footer_bottom()
  {
    // Get footer options
    $copyright_text = get_option( 'footer_copyright_text', '© Copyright iPortfolio All Rights Reserved' );
    $designed_by_text = get_option( 'footer_designed_by', 'Designed by Kshitiz Khanal' );
    $designed_by_url = get_option( 'footer_designed_by_url', '#' );
    
    ?>
    <div class="container">
      <div class="copyright text-center ">
        <p><?php echo wp_kses_post( $copyright_text ); ?></p>
      </div>
      <div class="credits">
        <?php if ( ! empty( $designed_by_text ) ) : ?>
          <?php if ( $designed_by_url && $designed_by_url !== '#' ) : ?>
            <?php echo esc_html( str_replace( 'Designed by ', '', $designed_by_text ) ); ?> <a href="<?php echo esc_url( $designed_by_url ); ?>"><?php echo esc_html( str_replace( 'Designed by ', '', $designed_by_text ) ); ?></a>
          <?php else : ?>
            <?php echo esc_html( $designed_by_text ); ?>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
    <?php
  }
}

add_action('portfolio_footer', 'portfolio_footer_bottom', 40);

if(! function_exists('portfolio_footer_end')) {
  /**
   * Footer end
  */
  function portfolio_footer_end()
  { ?>
  </footer> 
  <?php
  }
}
add_action('portfolio_footer', 'portfolio_footer_end', 50);

if(! function_exists('portfolio_page_end')) {
  /**
   * Page End
   *
   * @return void
   */
  function portfolio_page_end()
  { ?>
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  
<?php
  }
}
add_action('portfolio_after_footer', 'portfolio_page_end', 10);


// This function allows admins to upload lottie files
function allow_lottie_for_admins($mimes) {
  // Check if user is admin
  if (current_user_can('manage_options')) {
      $mimes['json'] = 'application/json';
  }
  return $mimes;
}
add_filter('upload_mimes', 'allow_lottie_for_admins');
