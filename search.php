<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 */

get_header();

echo do_shortcode("[internal_banner]");

?>

<section id="primary" class="content-area" style="padding-bottom:100px;">
	<main id="main" class="content-width">

		<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php
				echo 'You searched for: ' . get_search_query(); 
				?>
			</h1>
<!-- 			<div class="page-description"><?php// echo get_search_query(); ?></div> -->
		</header><!-- .page-header -->

		<?php
		// Start the Loop.
		while ( have_posts() ) :
		the_post();

		/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
		get_template_part( 'template-parts/content/content', 'excerpt' );

		// End the loop.
		endwhile;

		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => '<span class="nav-prev-text">▸</span>',
				'next_text' => '<span class="nav-next-text">▸</span>',
				'screen_reader_text' => 'More Results'
			)
		);
		

		// If no content, include the "No posts found" template.
		else :
		?>
		<h1 class="page-title">
			<?php
			echo 'You searched for: ' . get_search_query(); 
			?>
		</h1>
		<?php
		get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
	</main><!-- #main -->
</section><!-- #primary -->

<?php function blog_styles(){
	get_template_part( 'template-parts/blog', 'styles' ); ?>
	<style>
		header.masthead.no-post-thumbnail{background: none;}
	</style>
<?php }
add_action('wp_footer', 'blog_styles', 100);

get_footer();
