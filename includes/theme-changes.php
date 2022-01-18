<?php
// unhook all styles and scripts from parent for blank slate template
function child_deregister_parent() {
	wp_dequeue_style( 'twenty-twenty-one-style' );
	wp_deregister_style( 'twenty-twenty-one-style' );
	wp_dequeue_style( 'twenty-twenty-one-print-style' );
	wp_deregister_style( 'twenty-twenty-one-print-style' );

	wp_dequeue_script( 'wp-emoji-release.min.js' );
	wp_deregister_script( 'wp-emoji-release.min.js' );
	wp_dequeue_script( 'wp-embed' );
	wp_deregister_script( 'wp-embed' );
	wp_dequeue_script( 'twenty-twenty-one-responsive-embeds-script' );
	wp_deregister_script( 'twenty-twenty-one-responsive-embeds-script' );
	wp_dequeue_script( 'twenty-twenty-one-primary-navigation-script' );
	wp_dequeue_style( 'wpsl-styles' );
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS

	wp_enqueue_style( 'nifty-child-theme-style', get_stylesheet_directory_uri().'/style.css');
	// wp_enqueue_style( 'animation-style', get_stylesheet_directory_uri().'/template-parts/animations.css');

	// 	just in case we need jquery later
// 	wp_deregister_script('jquery');
// 	wp_dequeue_script('jquery');
// 	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
// 	wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'child_deregister_parent', 11 );

function remove_twenty_twenty_one_add_sub_menu_toggle() {
	remove_filter('walker_nav_menu_start_el', 'twenty_twenty_one_add_sub_menu_toggle');
}
add_action('after_setup_theme', 'remove_twenty_twenty_one_add_sub_menu_toggle');

// image src change for custom lazy loading
add_filter('wp_get_attachment_image_attributes', 'add_data_url_for_lazy_load', 10, 3);
function add_data_url_for_lazy_load( $attr, $attachment ){
	if(!array_key_exists('data-url', $attr)){
		$attr['data-url'] = $attr['src'];
		$attr['data-srcset'] = $attr['srcset'];
		$attr['src'] = '';
		$attr['srcset'] = '';
	}
	if(!array_key_exists('loading', $attr)){
		$attr['loading'] = 'lazy';
	}
	return $attr;
}

// iframe src change for custom lazy loading
add_filter('the_content', 'edit_iframe_srcs');
function edit_iframe_srcs($content){
	return preg_replace( '|(<iframe.*)(src)|', '$1data-url', $content );
}

// edit search widget
function edit_search_form($text) {
	$text = str_replace('value="Search"', 'value="Go"', $text);
	return $text;
}
add_filter('get_search_form', 'edit_search_form');

// PM safe scripts to add to footer.
function custom_foot_scripts() {
	require_once( get_stylesheet_directory() . '/pm-safe/footer-scripts.php' );
}
add_action( 'wp_footer', 'custom_foot_scripts', 500 );

// PM safe scripts to add to header.
function custom_head_scripts() {
	require_once( get_stylesheet_directory() . '/pm-safe/header-scripts.php' );
}
add_action( 'wp_head', 'custom_head_scripts', 100 );

// PM safe scripts to add after opening body tag.
function custom_after_body_scripts(){
	require_once( get_stylesheet_directory() . '/pm-safe/after-body-scripts.php' );
}
add_action( 'after_body', 'custom_after_body_scripts' );

// scripts to add to footer
function theme_foot_scripts() { ?>

<script>		
	// Lazy loading for image tags, background images & iframes.
	// The class 'lazyload' is for background images specifically & should use 'data-bg-img'
	window.addEventListener('load', elementLazyLoad);
	elementLazyLoad();
	window.addEventListener('scroll', elementLazyLoad);
	function elementLazyLoad(){
		var lazyLoadElems = document.querySelectorAll('img, iframe, .lazyload,.activator');
		lazyLoadElems.forEach((item)=>{
			var getTop = item.getBoundingClientRect().top;
			var getHeight = item.getBoundingClientRect().height;
			var imageOffset = getTop - window.innerHeight;

			if(item.classList.contains('activator')){
			    //scroll animations
			    var animationOffset = item.getBoundingClientRect().top - window.innerHeight;
			    let aniOffset = '-250';
			    if(item.classList.contains('footer-title ') || item.classList.contains('newsletter') || item.classList.contains('disclaimer-wrapper')){
			        aniOffset = '-25';
			    }
			    if(animationOffset <= aniOffset){   
			        item.classList.add('active');
			    }
			}

			if(item.hasAttribute("data-url")){
				if(imageOffset <= 150 && getTop > 0 || getTop >= -getHeight && imageOffset <= 150){
					var attrbs = item.getAttribute('data-url');
					item.setAttribute("src", attrbs);
					item.removeAttribute('data-url');
					if(item.hasAttribute("data-srcset")){
						var attrbs = item.getAttribute('data-srcset');
						item.setAttribute("srcset", attrbs);
						item.removeAttribute('data-srcset');
					}
				}
			} else if(item.hasAttribute("data-bg-img")){
				if(imageOffset <= 150 && getTop > 0 || getTop >= -getHeight && imageOffset <= 150){
					var style = item.getAttribute('style');
					if(style == null) style = "";
					var attrbs = item.getAttribute('data-bg-img');
					item.setAttribute("style", "background-image:url("+ attrbs +");"+ style);
					item.removeAttribute('data-bg-img');
					item.classList.remove("lazyload");
				}
			}
		});
	}
	
	//lazyload animation/svg stylesheet
	// setTimeout(function(){
	// 	(function() {
	// 	    var cssMain = document.createElement('link');
	// 	    cssMain.href = '/wp-content/themes/twentytwentyone-child/template-parts/animations.css';
	// 	    cssMain.rel = 'stylesheet';
	// 	    cssMain.type = 'text/css';
	// 	    document.getElementsByTagName('head')[0].appendChild(cssMain);
	// 	})();
	// },2000);
</script>

<?php }
add_action( 'wp_footer', 'theme_foot_scripts', 500 );

/**
 * This fixes a pretty annoying issue; so keep it in.
 * Filters the content to remove any extra paragraph or break tags
 * caused by shortcodes.
 *
 * @since 1.0.0
 *
 * @param string $content  String of HTML content.
 * @return string $content Amended string of HTML content.
 */

function tgm_io_shortcode_empty_paragraph_fix( $content ) {
	$array = array(
		'<p>['    => '[',
		']</p>'   => ']',
		']<br />' => ']'
	);
	return strtr( $content, $array ); 
}
add_filter( 'the_content', 'tgm_io_shortcode_empty_paragraph_fix' );

// Removes [...] from excepts.
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Makes excerpt shorter (20 characters)
add_filter( 'excerpt_length', function($length) {
	return 20;
} );

// Use this to lazyload a shortcode. Duplicate for several.
// add_action('wp_head', 'myplugin_ajaxurl');
// function myplugin_ajaxurl() {
//     echo '<script type="text/javascript">
//             var ajaxurl = "' . admin_url('admin-ajax.php') . '";
//          </script>';
// }

// add_action( 'wp_ajax_nopriv_handle_shortcode_gform1', 'handle_shortcode_gform1' );
// add_action( 'wp_ajax_handle_shortcode_gform1', 'handle_shortcode_gform1' );
// add_action( 'wp_ajax_my_action_handle_shortcode_gform1', 'handle_shortcode_gform1' );
// add_action( 'wp_ajax_nopriv_my_action_handle_shortcode_gform1', 'handle_shortcode_gform1' );

// function handle_shortcode_gform1( ) {
//     $shortcode = $_REQUEST[gravityform];
//     echo apply_shortcodes('[gravityform id="1" title="false" description="false"]');
//     wp_die();
// }