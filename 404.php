<?php
/**
 * The template for displaying 404 page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 */

get_header();
echo do_shortcode("[internal_banner]");
// the_archive_title( '<h1>', '</h1>' );
// ?>
<section class="section-padding">
	<div class="content-width">
		<h2>Sorry, you seemed to reach a page that doesn't exist.</h2>
		<p><a href="<?= get_permalink(22); ?>">Click here</a> to see our list of practice areas.</p>
	</div>
</section>

<?php
	function blog_styles(){
	get_template_part( 'template-parts/blog', 'styles' );
}
add_action('wp_footer', 'blog_styles', 100);

get_footer();
