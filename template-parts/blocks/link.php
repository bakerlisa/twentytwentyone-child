<?php $atts = shortcode_atts(array(
	'' => ''
), $atts); ?>

<section class="home-cta section-padding">
	
</section>

<?php if(!function_exists('apply_home_cta_styles')){
	function apply_home_cta_styles(){ ?>
		<style>
			
		</style>
	<?php }
	add_action( 'wp_footer', 'apply_home_cta_styles' );
}?>