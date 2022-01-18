<?php $atts = shortcode_atts(array(
	'' => ''
), $atts); ?>

<section class="internal-sidebar section-padding">
	
</section>

<?php if(!function_exists('apply_internal_sidebar_styles')){
	function apply_internal_sidebar_styles(){ ?>
		<style>
			
		</style>
	<?php }
	add_action( 'wp_footer', 'apply_internal_sidebar_styles' );
}?>