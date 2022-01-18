<section class="home-testimonials section-padding">
	
</section>

<?php if(!function_exists('apply_home_testimonials_styles')){
	function apply_home_testimonials_styles(){ ?>
		<style>
			
		</style>
	<?php }
	add_action( 'wp_footer', 'apply_home_testimonials_styles' );
}?>