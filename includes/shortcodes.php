<?php
/************* THEME SHORTCODES *****************/
//icon
function icon($atts, $content){ ob_start();
    $atts = shortcode_atts(
        array(
            'type' => '',
        ), $atts, 'icon' );
    $type = $atts['type'];

    if($type){  
        include( locate_template( '/template-parts/svgs/'.$type.'.php' ) );
    }
    return ob_get_clean();
}
add_shortcode( 'icon', 'icon' );

/*********************************
 **********ADA-SPECIFIC***********
 *********************************/
//[awards_slider]
function awards_slider($atts){
	ob_start();
	include(locate_template( 'template-parts/ada-components/awards-slider.php' ));
	return ob_get_clean();
}
add_shortcode( 'awards_slider' , 'awards_slider' );

//[testimonial_slider]
function testimonial_slider($atts){
	ob_start();
	include(locate_template( 'template-parts/ada-components/testimonial-slider.php' ));
	return ob_get_clean();
}
add_shortcode( 'testimonial_slider' , 'testimonial_slider' );

//[faq_toggles]
function faq_toggles($atts){
	ob_start();
	include(locate_template( 'template-parts/ada-components/toggles.php' ));
	return ob_get_clean();
}
add_shortcode( 'faq_toggles' , 'faq_toggles' );



/****************************************
 **********STANDARD SHORTCODES***********
 ****************************************/

function home_awards($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/homepage/home-awards.php' ));
	return ob_get_clean();
}
add_shortcode( 'home_awards' , 'home_awards' );

function home_banner($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/homepage/home-banner.php' ));
	return ob_get_clean();
}
add_shortcode( 'home_banner' , 'home_banner' );

function home_contact($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/homepage/home-contact.php' ));
	return ob_get_clean();
}
add_shortcode( 'home_contact' , 'home_contact' );

function home_cta($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/homepage/home-cta.php' ));
	return ob_get_clean();
}
add_shortcode( 'home_cta' , 'home_cta' );

function home_news($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/homepage/home-news.php' ));
	return ob_get_clean();
}
add_shortcode( 'home_news' , 'home_news' );

function home_pas($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/homepage/home-pas.php' ));
	return ob_get_clean();
}
add_shortcode( 'home_pas' , 'home_pas' );

function home_results($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/homepage/home-results.php' ));
	return ob_get_clean();
}
add_shortcode( 'home_results' , 'home_results' );

function home_social($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/homepage/home-social.php' ));
	return ob_get_clean();
}
add_shortcode( 'home_social' , 'home_social' );

function home_team($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/homepage/home-team.php' ));
	return ob_get_clean();
}
add_shortcode( 'home_team' , 'home_team' );

function home_testimonials($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/homepage/home-testimonials.php' ));
	return ob_get_clean();
}
add_shortcode( 'home_testimonials' , 'home_testimonials' );

function internal_banner($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/internal/internal-banner.php' ));
	return ob_get_clean();
}
add_shortcode( 'internal_banner' , 'internal_banner' );

function internal_cta($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/internal/internal-cta.php' ));
	return ob_get_clean();
}
add_shortcode( 'internal_cta' , 'internal_cta' );

function internal_fullwidth($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/internal/internal-fullwidth.php' ));
	return ob_get_clean();
}
add_shortcode( 'internal_fullwidth' , 'internal_fullwidth' );

function internal_pas($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/internal/internal-pas.php' ));
	return ob_get_clean();
}
add_shortcode( 'internal_pas' , 'internal_pas' );

function internal_sidebar($atts){
	ob_start();
	include(locate_template( 'template-parts/sections/internal/internal-sidebar.php' ));
	return ob_get_clean();
}
add_shortcode( 'internal_sidebar' , 'internal_sidebar' );

function nifty_sitemap($atts){
	ob_start();
	include(locate_template( 'template-parts/pages/sitemap.php' ));
	return ob_get_clean();
}
add_shortcode( 'nifty_sitemap' , 'nifty_sitemap' );


/****************************************
 ***********CUSTOM SHORTCODES************
 ****************************************/