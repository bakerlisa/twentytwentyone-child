<?php
// Ajax Form actions
function render_form() {
	if(isset($_GET['form_id'])){
		gravity_form( $_GET['form_id'], false, false, false,false, $ajax = true, '456', $echo = true );
 	} else {
 		return "ERROR: MISSING FORM ID.";
 	}
    die();
}
add_action( 'wp_ajax_nopriv_render_form', 'render_form' );
add_action( 'wp_ajax_render_form', 'render_form' );

/* 
// Instagram Ajax actions
// function render_insta(){ ob_clean();
// 	echo do_shortcode('[instagram-feed]');
//     die();
// }
// add_action( 'wp_ajax_nopriv_render_insta', 'render_insta' );
// add_action( 'wp_ajax_render_insta', 'render_insta' );


// Footer Form Ajax actions
// function render_footer_form(){ ob_clean();
// 	gravity_form( 3, false, false, false,false, $ajax = true, '926', $echo = true );
//     die();
// }
// add_action( 'wp_ajax_nopriv_render_footer_form', 'render_footer_form' );
// add_action( 'wp_ajax_render_footer_form', 'render_footer_form' );

*/

?>
