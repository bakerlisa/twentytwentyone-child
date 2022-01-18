<?php
/*
 * HOW TO USE THIS SECTION
 * ------------------------------------------------------
 * This is an ADA-compliant component.
 * This code is meant to render 1, isolated toggle component. If several are needed, copy and paste into the code.
 * The header attribute is the always visible part.
 * The body attribute is the hidden-until-clicked part.
 * The unique_id attribute should be a number different from the other toggles on a page.
 * Change the styles of the background color and the color of the svg component in the CSS.
*/
?>


<?php $atts = shortcode_atts(array(
	'header' => '',
	'body' => '',
	'unique_id' => ''
), $atts); ?>


<toggle>
	<div class="top" tabindex="1" onclick="fireToggles(this)" onkeyup="keyToggleFire(this, event)" role="button" for="toggle-<?= $atts['unique_id']; ?>" aria-expanded="false">
		<svg viewBox="0 0 41 41" width="41" height="41">
			<path class="spinner" d="M9.73 31.1C7.52 33.22 6 35 6 35C17.98 46.63 41 41 41 18.45C37.96 39.89 17.16 40.04 9.73 31.1Z"/>
			<path class="spinner" d="M31.27 10.25C33.48 8.12 35 6.34 35 6.34C23.02 -5.29 0 0.34 0 22.89C3.04 1.45 23.84 1.31 31.27 10.25Z" style="&#10;"/>
			<path class="spinner" id="triangle" d="M15.12 15L20.46 22.12L25.8 15L33 15L20.46 29.24L8 15L15.12 15Z"/>
		</svg>
		<span class="header"><?= $atts['header']; ?></span>
	</div>
	<togglebody id="toggle-<?= $atts['unique_id']; ?>"><?= $atts['body']; ?></togglebody>
</toggle>


<?php if(!function_exists('apply_toggle_styles')){
	function apply_toggle_styles(){ ?>
		<style>
			toggle{margin-bottom: 25px;}
			toggle, togglebody{display: block;}
			toggle .top{background: var(--color-2); color: white; display: flex; align-items: center; padding: 10px 10px 10px 25px;}
			toggle svg{transition: transform .25s;}
			toggle.active svg{transform: rotate(180deg);}
			toggle .spinner{ fill: var(--color-3); transition: transform .25;}
			toggle .spinner#triangle{fill: var(--color-1);}
			toggle .top .header{margin-left: 25px; font-size: var(--fsize-sm); font-family: var(--heading-font);}
			toggle togglebody{overflow: hidden; height: 0; transition: padding .25s; padding: 0 50px 0 25px;}
			toggle.active togglebody{height: auto; padding: 15px 50px 15px 25px; margin-left: 70px; border-left: 5px solid var(--color-3); margin-top: 15px;}
			@media(max-width: 750px){
				toggle{margin-bottom: 10px;}
			}
		</style>

		<script>
			function fireToggles(toggle){
				toggle.parentNode.classList.toggle('active');
				if(toggle.getAttribute("aria-expanded") == "false"){
					toggle.setAttribute("aria-expanded", "true");
				}else{
					toggle.setAttribute("aria-expanded", "false");
				}
			}
			
			function keyToggleFire(toggle, e){
				if(e.keyCode == 13 || e.keyCode == 32){
					toggle.parentNode.classList.toggle('active');
					if(toggle.getAttribute("aria-expanded") == "false"){
						toggle.setAttribute("aria-expanded", "true");
					}else{
						toggle.setAttribute("aria-expanded", "false");
					}
				}
			}
		</script>
<?php }
	add_action( 'wp_footer', 'apply_toggle_styles' );
}?>