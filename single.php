<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header(); ?>

<section>
	<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
		the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="post-single-header">
					<div class="content-width">
						<h1><?= get_the_title(); ?></h1>
						<p class="post-info">
							Posted <time class="entry-date published updated" datetime="<?= esc_attr( get_the_date( DATE_W3C ) ); ?>"><?= esc_html( get_the_date('M j, Y') ); ?></time>
							<?php /* if you want an author with a link use this.
								<a href="<?= esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?= esc_html(get_the_author()); ?></a> */ ?>
							by <?= esc_html(get_the_author()); ?> |
							<?php $categories_list = get_the_category_list( __( ', ', 'twentynineteen' ) );
							if ( $categories_list ) { echo $categories_list; } ?>
						</p>
<!-- 						<p class="custom-share">
							<span>Sharing is caring: </span>
							<a target="_blank" rel="noopener noreferrer" title="Share on Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"><i class="fa fa-facebook"></i></a>
							<a target="_blank" rel="noopener noreferrer" title="Share on Twitter" href="https://twitter.com/intent/tweet?text=<?= urlencode(get_the_title()) ?> - <?= urlencode("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"><i class="fa fa-twitter"></i></a>
							<a target="_blank" rel="noopener noreferrer" title="Share on LinkedIn" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>&title=<?= urlencode(get_the_title()) ?>&summary=<?= urlencode(get_the_excerpt()) ?>x&source=Naqvi Law Firm"><i class="fa fa-linkedin"></i></a>
						</p> -->
					</div>
				</header>

				<div class="entry-content content-width">
					<?php
					the_content();

					?>
					
<!-- 					<p class="custom-share bottom-share">
						<span>Sharing is caring: </span>
						<a target="_blank" rel="noopener noreferrer" title="Share on Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"><i class="fa fa-facebook"></i></a>
						<a target="_blank" rel="noopener noreferrer" title="Share on Twitter" href="https://twitter.com/intent/tweet?text=<?= urlencode(get_the_title()) ?> - <?= urlencode("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"><i class="fa fa-twitter"></i></a>
						<a target="_blank" rel="noopener noreferrer" title="Share on LinkedIn" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>&title=<?= urlencode(get_the_title()) ?>&summary=<?= urlencode(get_the_excerpt()) ?>x&source=Delventhal Law Firm"><i class="fa fa-linkedin"></i></a>
					</p> -->
				</div><!-- .entry-content -->

				<?php //get_template_part( 'template-parts/post/author', 'bio' ); ?>

			</article>

		<?php /* if ( is_singular( 'attachment' ) ) {
			// Parent post navigation.
			the_post_navigation(
				array(
					// translators: %s: parent post link
					'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
				)
			);
		}  elseif ( is_singular( 'post' ) ) {
			// Previous/next post navigation.
			the_post_navigation(
				array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
					'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
					'<span class="post-title">%title</span>',
				)
			);
		}

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		} */

		endwhile; ?>

	</main>
</section>
<?php function blog_styles(){
	get_template_part( 'template-parts/blog', 'styles' );
}
add_action('wp_footer', 'blog_styles', 100); ?>

<?php get_footer(); ?>