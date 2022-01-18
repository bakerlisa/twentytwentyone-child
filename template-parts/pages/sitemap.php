<?php
$atts = shortcode_atts(array(
	'exclude' => ''
), $atts);

$args = array(
	'exclude' => $atts['exclude']
);
$args2 = array(
	'exclude' => $atts['exclude'],
	'numberposts' => -1
);

$posts = get_posts($args2);
$pages = get_pages($args);
?>
<section class="nifty-sitemap">
<h2 style="margin: 0;">Pages</h2>
<hr>
<ul>
	<?php foreach($pages as $page){
		echo '<li><a href="' . get_permalink($page->ID). '">' . $page->post_title . '</a></li>';
	}?>
</ul>


<h2 style="margin-bottom: 0;">Posts</h2>
<hr>
<ul>
	<?php foreach($posts as $post){
		echo '<li><a href="' . get_permalink($post->ID). '">' . $post->post_title . '</a></li>';
	}?>
</ul>
</section>

<?php if(!function_exists('apply_sitemap_styles')){
	function apply_sitemap_styles(){ ?>
		<style>
			.nifty-sitemap ul li{text-transform: uppercase; padding-right: 15px;}
		</style>
	<?php }
	add_action( 'wp_footer', 'apply_sitemap_styles' );
}?>
