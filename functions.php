<?php
/**
 * Redux Framework
 */
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/includes/redux-framework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/includes/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/includes/redux-framework/redux-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/includes/redux-framework/redux-config.php' );
}

/**
 *
 * Unyson and default plugins automatic install
 *
 */
require_once(dirname( __FILE__ ) . '/includes/required_plugins.php');
/**
 *
 * UiD Post-types
 *
 */
require_once(dirname( __FILE__ ) . '/includes/atec-post_types.php');


// Including Bootstrap css and style css into the theme
if (!function_exists('atec_enqueue_styles')) {
    function atec_enqueue_styles() {
        wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style('fontawesome', get_stylesheet_directory_uri().'/css/font-awesome.min.css');
        wp_enqueue_style('style', get_stylesheet_directory_uri().'/css/style.css');
    }
    add_action('wp_enqueue_scripts', 'atec_enqueue_styles');
}

// Including Bootstrap css and style css into the theme
if (!function_exists('atec_enqueue_scripts')) {
    function atec_enqueue_scripts() {
        wp_enqueue_script('main', '/wp-content/themes/atec/js/main.js', ['jquery'], false, true);

    }
    add_action('wp_enqueue_scripts', 'atec_enqueue_scripts');
}

// Including Bootstrap css and style css into the theme
if (!function_exists('atec_enqueue_scripts')) {
    function atec_enqueue_scripts() {
       // wp_enqueue_script('bootstrap', '/wp-content/themes/atec/js/bootstrap.min.js', ['jquery'], false, true);
        wp_enqueue_script('main', '/wp-content/themes/atec/js/main.js', ['jquery'], false, true);

    }
    add_action('wp_enqueue_scripts', 'atec_enqueue_scripts');
}

function enqueue_load_bootstrap() {
    // Add bootstrap CSS
    wp_register_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, NULL, 'all' );
    wp_enqueue_style( 'bootstrap-css' );

    // Add popper js
    wp_register_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', ['jquery'], NULL, true );
    wp_enqueue_script( 'popper-js' );

    // Add bootstrap js
    wp_register_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['jquery'], NULL, true );
    wp_enqueue_script( 'bootstrap-js' );
}

// Add integrity and cross origin attributes to the bootstrap css.
function add_bootstrap_css_attributes( $html, $handle ) {
    if ( $handle === 'bootstrap-css' ) {
        return str_replace( '/>', 'integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />', $html );
    }
    return $html;
}
add_filter( 'style_loader_tag', 'add_bootstrap_css_attributes', 10, 2 );

// Add integrity and cross origin attributes to the bootstrap script.
function add_bootstrap_script_attributes( $html, $handle ) {
    if ( $handle === 'bootstrap-js' ) {
        return str_replace( '></script>', ' integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>', $html );
    }
    return $html;
}
add_filter('script_loader_tag', 'add_bootstrap_script_attributes', 10, 2);

// Add integrity and cross origin attributes to the popper script.
function add_popper_script_attributes( $html, $handle ) {
    if ( $handle === 'popper-js' ) {
        return str_replace( '></script>', ' integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>', $html );
    }
    return $html;
}
add_filter('script_loader_tag', 'add_popper_script_attributes', 10, 2);

add_action( 'wp_enqueue_scripts', 'enqueue_load_bootstrap' );


/**
 * Enqueue scripts and styles.
 */
function Atec_scripts() {
	wp_enqueue_style( 'Atec-style', get_stylesheet_uri() );
	wp_enqueue_script( 'Atec-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'Atec-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'Atec_scripts' );




/**
 * Setup Theme Functions
 *
 */
if (!function_exists('atec_theme_setup')):
    function atec_theme_setup() {

        load_theme_textdomain('bootstrapwp', get_template_directory() . '/lang');

        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array( 'aside', 'image', 'gallery', 'link', 'quote', 'status', 'video', 'audio', 'chat' ));

        // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'Atec' ),
        'footer' => esc_html__( 'Footer Menu', 'Atec' ),
	) );
    }
endif;
add_action('after_setup_theme', 'atec_theme_setup');

/**
 * Define post thumbnail size.
 *
 */
function atec_images() {
    //set_post_thumbnail_size(260, 180); // 260px wide x 180px high
    add_image_size('image-small', 300, 225, true); 
    add_image_size('image-blog', 450, 340, true); 
}

atec_images();




// load custom walker menu class file
    require 'includes/class-bootstrapwp_walker_nav_menu.php';

/**
 *
 *  Removing unnecessary console log messages
 *
 */

// Removing annoying "Migrate installed bla bla bla" from console log
function jquery_migrate_silencer() {
    // create function copy
    $silencer = '<script>window.console.logger = window.console.log; ';
    // modify original function to filter and use function copy
    $silencer .= 'window.console.log = function(tolog) {';
    // bug out if empty to prevent error
    $silencer .= 'if (tolog == null) {return;} ';
    // filter messages containing string
    $silencer .= 'if (tolog.indexOf("Migrate is installed") == -1) {';
    $silencer .= 'console.logger(tolog);} ';
    $silencer .= '}</script>';
    return $silencer;
}

// Frontend, use script_loader_tag filter
add_filter('script_loader_tag','jquery_migrate_load_silencer', 10, 2);
function jquery_migrate_load_silencer($tag, $handle) {
    if ($handle == 'jquery-migrate') {
        $silencer = jquery_migrate_silencer();
        // prepend to jquery migrate loading
        $tag = $silencer.$tag;
    }
    return $tag;
}

// Backend, hook to admin_print_scripts
add_action('admin_print_scripts','jquery_migrate_echo_silencer');
function jquery_migrate_echo_silencer() {echo jquery_migrate_silencer();}


/**
 *
 * Remove WP version from frontend
 *
 */

// Remove WP Version From Styles
add_filter( 'style_loader_src', 'wp_remove_version_frontend', 9999 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'wp_remove_version_frontend', 9999 );

// Function to remove version numbers
function wp_remove_version_frontend( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
// Remove WP version from meta and rss
function wp_remove_version() {
    return '';
}
add_filter('the_generator', 'wp_remove_version');


/**
 *
 *  Yoast W3C validation fixes
 *
 */

add_filter( 'wpseo_breadcrumb_single_link', 'breadcrumb_fix' , 10, 2 );
function breadcrumb_fix( $output, $crumb ){
    if ( is_array( $crumb ) && $crumb !== array() ) {
        if( strpos( $output, '<span class="breadcrumb_last"' ) !== false  ||   strpos( $output, '<strong class="breadcrumb_last"' ) !== false ) {
            $output = '<a property="v:title" rel="v:url" href="'. $crumb['url']. '" >';
            $output.= $crumb['text'];
            $output.= '</a>';
        }
    }
    return $output;
}

add_filter ('wpseo_breadcrumb_output','breadcrumb_v_fix');
function breadcrumb_v_fix ($link_output) {
    $link_output = preg_replace(array('#<span xmlns:v="http://rdf.data-vocabulary.org/\#">#','#<span typeof="v:Breadcrumb"><a href="(.*?)" .*?'.'>(.*?)</a></span>#','#<span typeof="v:Breadcrumb">(.*?)</span>#','# property=".*?"#','#</span>$#'), array('','<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="$1" itemprop="url"><span itemprop="title">$2</span></a></span>','<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">$1</span></span>','',''), $link_output);
    return $link_output;
}

/**
 *
 *  Adding custom styles to TinyMCE for Unyson
 *
 */

// Callback function to insert 'styleselect' into the $buttons array
if ( ! function_exists( '_filter_mce_theme_format_insert_button' ) ) {
    function _filter_mce_theme_format_insert_button( $buttons ) {
        array_unshift( $buttons, 'styleselect' );
        return $buttons;
    } //_filter_mce_theme_format_insert_button()
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', '_filter_mce_theme_format_insert_button' );
// Callback function to filter the MCE settings
if ( ! function_exists( '_filter_mce_theme_format_add_styles' ) ) {
    function _filter_mce_theme_format_add_styles( $init_array ) {
        // Define the style_formats array
        $style_formats = array(
            // Each array child is a format with it's own settings
//            array(
//                'title'   => esc_html__( 'Excerpt', '' ),
//                'block'   => 'p',
//                'classes' => 'entry-excerpt',
//                'wrapper' => false,
//            ),
            array(
                'title'   => esc_html__( 'First word', '' ),
                'block'   => 'span',
                'classes' => 'first-word',
                'wrapper' => false,
            ),
            array(
                'title'   => esc_html__( 'Green divider', '' ),
                'block'   => 'span',
                'classes' => 'green-text-divider',
                'wrapper' => false,
            ),
            array(
                'title'   => esc_html__( 'Cyan text color', '' ),
                'inline'  => 'span',
                'classes' => 'color-cyan',
                'wrapper' => false,
            ),
        );
        // Insert the array, JSON ENCODED, into 'style_formats'
        $init_array['style_formats'] = json_encode( $style_formats );
        return $init_array;
    } //_filter_mce_theme_format_add_styles()
}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', '_filter_mce_theme_format_add_styles' );


//Making jQuery Google API
if ( ! is_admin() ) {
    add_action( 'wp_enqueue_scripts', function(){
        wp_deregister_script( 'jquery' );
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, '3.4.1');
        wp_enqueue_script( 'jquery');
    });
}
/**
 *
 *  Removing xmlrpc ping back
 *
 */
add_filter( 'xmlrpc_methods', function( $methods ) {
    unset( $methods['pingback.ping'] );
    return $methods;
});

// remove x-pingback HTTP header
add_filter('wp_headers', function($headers) {
    unset($headers['X-Pingback']);
    return $headers;
});


/**
 *
 *  Custom error message for login
 *
 */

function custom_login_error_message(){
    return "Invalid username or password. Please try again.";
}
add_filter( "login_errors", "custom_login_error_message" );





/**
 * Adds custom classes to the array of body classes.
 *
 */
function atec_body_classes($classes)
{
    if (!is_multi_author()) {
        $classes[] = 'single-author';
    }
    return $classes;
}
add_filter('body_class', 'atec_body_classes');


/**
 * Add post ID attribute to image attachment pages prev/next navigation.
 *
 */
function bootstrapwp_enhanced_image_navigation($url)
{
    global $post;
    if (wp_attachment_is_image($post->ID)) {
        $url = $url . '#main';
    }
    return $url;
}
add_filter('attachment_link', 'bootstrapwp_enhanced_image_navigation');



/**
 *
 *  Remove junk from head
 *
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
return false;
}

// Changing excerpt more, linking post, assigning CSS class
function et_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'et_excerpt_length');


function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">Pročitajte više</a></div>';
}
add_filter('excerpt_more', 'et_excerpt_more');


// NUMBERED PAGINATION
function atec_numeric_posts_nav() {
        if( is_singular() )
            return;
        global $wp_query;

        /** Stop execution if there's only 1 page */
        if( $wp_query->max_num_pages <= 1 )
            return;
     
        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
        $max   = intval( $wp_query->max_num_pages );
     
        /** Add current page to the array */
        if ( $paged >= 1 )
            $links[] = $paged;

        /** Add the pages around the current page to the array */
        if ( $paged >= 3 ) {
            $links[] = $paged - 1;
            $links[] = $paged - 2;
        }

        if ( ( $paged + 2 ) <= $max ) {
            $links[] = $paged + 2;
            $links[] = $paged + 1;
        }
     
        echo '<div class="navigation"><ul>' . "\n";

        /** Previous Post Link */
        if ( get_previous_posts_link() )
            printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
     
        /** Link to first page, plus ellipses if necessary */
        if ( ! in_array( 1, $links ) ) {
            $class = 1 == $paged ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
            if ( ! in_array( 2, $links ) )
                echo '<li>…</li>';
        }

     

        /** Link to current page, plus 2 pages in either direction if necessary */
        sort( $links );
        foreach ( (array) $links as $link ) {
            $class = $paged == $link ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
        }


        /** Link to last page, plus ellipses if necessary */
        if ( ! in_array( $max, $links ) ) {
            if ( ! in_array( $max - 1, $links ) )
                echo '<li>…</li>' . "\n";

            $class = $paged == $max ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
        }
     

        /** Next Post Link */
        if ( get_next_posts_link() )
            printf( '<li>%s</li>' . "\n", get_next_posts_link() );
        echo '</ul></div>' . "\n";
    }