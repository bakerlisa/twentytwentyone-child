<?php
/**
 * Template part for displaying post for the blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<section class="content-width flex blog-with-sidebar">
	<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="flex indiv-post">
				<div class="featured-image-container lazyload" data-bg-img="<?php if(has_post_thumbnail()){ echo get_the_post_thumbnail_url(); } else { echo wp_get_attachment_image_src( 1364, 'full' )[0]; } ?>"></div>
				<div>
					<header class="entry-header">
						<?php
							if ( is_singular() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
							else :
							the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
							endif;
						?>
					</header><!-- .entry-header -->
					<div class="entry-content">	
						<p class="post-info">
							Posted by <?= esc_html(get_the_author()); ?> |
							<?php $categories_list = get_the_category_list( __( ', ', 'twentynineteen' ) );
				if ( $categories_list ) { echo $categories_list; } ?>
						</p>

						<p class="post-except"><?= get_the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="yellow-button">Read More</a>
					</div>
				</div>
			</div>
		</article><!-- #post-${ID} -->

		<?php }

			the_posts_pagination(
				array(
					'mid_size'  => 2,
					'prev_text' => '<span class="nav-prev-text">▸</span>',
					'next_text' => '<span class="nav-next-text">▸</span>',
					'screen_reader_text' => 'Older Posts'
				)
			);

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

	</main>
	<?php get_sidebar(); ?>
</section>
