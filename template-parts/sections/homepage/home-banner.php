<?php $atts = shortcode_atts(array(
	'' => ''
), $atts); ?>

<section class="home-banner section-padding">
	
</section>

<?php if(!function_exists('apply_home_banner_styles')){
	function apply_home_banner_styles(){ ?>
		<style>
			
		</style>
	<?php }
	add_action( 'wp_footer', 'apply_home_banner_styles' );
}?>