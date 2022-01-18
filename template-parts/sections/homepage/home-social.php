<?php $atts = shortcode_atts(array(
	'' => ''
), $atts); ?>

<section class="home-social section-padding">
	
</section>

<?php if(!function_exists('apply_home_social_styles')){
	function apply_home_social_styles(){ ?>
		<style>
			
		</style>
	<?php }
	add_action( 'wp_footer', 'apply_home_social_styles' );
}?>