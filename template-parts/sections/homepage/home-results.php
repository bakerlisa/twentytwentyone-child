<?php $atts = shortcode_atts(array(
	'' => ''
), $atts); ?>

<section class="home-results section-padding">
	
</section>

<?php if(!function_exists('apply_home_results_styles')){
	function apply_home_results_styles(){ ?>
		<style>
			
		</style>
	<?php }
	add_action( 'wp_footer', 'apply_home_results_styles' );
}?>