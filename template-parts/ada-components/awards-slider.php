<?php
/*
 * HOW TO USE THIS SECTION
 * ------------------------------------------------------
 * This is an ADA-compliant component.
 * To change the background of the section, adjust that in styles. This is a generally static section, so it doesn't need to be controlled by shortcode attributes.
 * Open a photoshop file and set the height to 150px. Add appropriate length to accommodate all awards. Export the image as a png, compress with tinypng.com, and upload it to media.
 * Change the attachment image src id of .background-move with the new image id.
 * Under the .image-list element, change the h2 to read whatever you would like.
 * Make sure to appropriately delineate each award added to the png file in the list items.
 * Change the background and colors of .image-list to match the styles of the site design (if necessary).
 * Everything else should remain the same to avoid CSL problems and to avoid breaking ADA standards.
*/
?>

<section tabindex="1" class="awards-slider ada" onkeyup="pauseAnimation(event, this)" onclick="pauseAnimation(event, this, 'click')" role="button" aria-expanded="false" for="awards-display" style="height: 150px;">
	<div class="background-move lazyload" style="height: 150px;" data-bg-img="<?= wp_get_attachment_image_src( 43, 'full' )[0]; ?>"></div>
	<div class="image-list" style="display: none;" id="awards-display">
		<h2>Our Awards</h2>
		<ul>
			<li>Item 1</li>
			<li>Item 2</li>
			<li>Item 3</li>
			<li>Item 4</li>
			<li>Item 5</li>
			<li>Item 6</li>
			<li>Item 7</li>
			<li>Item 8</li>
			<li>Item 9</li>
			<li>Item 10</li>
			<li>Item 11</li>
			<li>Item 12</li>
		</ul>
	</div>
	
</section>

<?php if(!function_exists('apply_awards_slider_styles')){
	function apply_awards_slider_styles(){ ?>
		<style>
			.awards-slider{display: block; position: relative;}
			.awards-slider .background-move{animation: bgMove 45s linear 0s infinite;}
			.awards-slider .background-move.active{animation-play-state: paused;}
			.awards-slider .image-list{position: absolute; left: 0; top: 0; margin: 0; padding: 25px 0;}
			.awards-slider .image-list.active{display: flex!important; align-items: center; background: rgba(255, 255, 255, .9); width: 100%; height: 100%; overflow: scroll; flex-direction: column; backdrop-filter: blur(5px);}
			.awards-slider .image-list{display: inline-block;}
			
			
			@keyframes bgMove{
				0%{background-position: 0 0;}
				100%{background-position: -2269px 0;}
			}
		</style>

		<script>
			function pauseAnimation(e, awardsSlider, click = null){
				e.preventDefault();
				if(e.keyCode == 13 || e.keyCode == 32 || e.keyCode == 9 || click != null){
					document.querySelector(".background-move").classList.toggle("active");
					document.querySelector(".image-list").classList.toggle("active");
				}
				if(awardsSlider.getAttribute("aria-expanded") == 'true'){
					awardsSlider.setAttribute("aria-expanded",'false');
				}else if((awardsSlider.getAttribute("aria-expanded") == 'false')){
					awardsSlider.setAttribute("aria-expanded",'true');
				}
			}
		</script>
	<?php }
	add_action( 'wp_footer', 'apply_awards_slider_styles' );
}?>
