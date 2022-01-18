<?php 
	$atts = shortcode_atts(
		array(
		    'img_id' => '',
		    'youtube_url' => '',
		), $atts, 'cta_two_code' );
	$img_id = $atts['img_id'];
	$youtube_url = $atts['youtube_url']; ?>

<div class="indv-video lazyload" onclick="playVideo('<?= $youtube_url ?>')">	
	<?= wp_get_attachment_image($img_id, 'full', false, array('alt' => '', 'class' => '')); ?> 
</div>

<?php if(!function_exists('video_styles')){  
	function video_styles(){ ?>
		<div class="popup-vd-wrapper">
			<div>
				<i class="fa fa-times" onclick="exitVideo()"></i>
				<iframe width="560" height="315" src="about:blank" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	<style>
		/*popup video */
		.popup-vd-wrapper{display: none; position: fixed; top:0; left:0; right:0; height:100%; width:100%; z-index:10000000000;}
			.popup-vd-wrapper.active{display: flex; align-items: center; justify-content: center;}
		.popup-vd-wrapper:before{content:''; height:100%; width:100%; background-color: rgba(0,0,0,.5); position: fixed; top:0; left:0; z-index:10000000;}
		.popup-vd-wrapper div {height:100%; max-height:480px; width:100%; max-width:700px; margin:0 auto;}
		.popup-vd-wrapper iframe{position: relative; margin:0 auto; z-index:10000000000000; border:none; display: block;height:100%; max-height:450px; width:100%; max-width:700px;}
		.popup-vd-wrapper .fa.fa-times{color:white; font-size:30px; position: relative; z-index:1000000000; text-align: right; display: block;}
			.popup-vd-wrapper .fa.fa-times:hover{color:#69bfd9; cursor: pointer;}

		.video .content-width{display: flex; flex-wrap: wrap; align-items: center; justify-content: center;}
		.video .video-title{width:50%; padding-right:10px; color:#353c4b;}
		.video .video-title span{display: block;}
		.video .text{width:50%; padding-left:10px;}

		/*indv vd*/
		.video-wrapper{padding:0 125px; width:100%; display: flex; flex-wrap:wrap; align-items: center; justify-content: center; margin-top:75px; margin-bottom:75px; position: relative;}
		.indv-video{width:calc(33.33% - 20px); margin:0 10px; position: relative; transform-origin: center; transform:scale(1);}
			.indv-video img{max-width:100%; height:auto;}
		@media all and (max-width:1200px){
			.video-wrapper{padding:0;}
		}	
		@media all and (max-width:1000px){
			.video{overflow: hidden;}
			.video .video-title, .video .text{width:100%;}
				.video .video-title{padding-bottom:25px;}
				.video .video-title span{display: initial;}
			.video .content-width{padding:25px;}
			.video-wrapper{margin-top:25px; margin-bottom:25px;}
			
		}
		@media all and (max-width:690px){
			.video-wrapper{margin:15px 0 0 0;}
		}
		@media all and (max-width:480px){
			.indv-video{width:100%; margin:10px 0;}
		}
	</style>
	
	<script>
		function playVideo(youtubeurl){
		    let newURL = youtubeurl + '?rel=0&autoplay=1';
		    let parentElement = event.target.parentElement;
		    document.querySelector('.popup-vd-wrapper').classList.add('active');
		    document.querySelector('.popup-vd-wrapper iframe').src = newURL;
		}

		function exitVideo(){
			document.querySelector('.popup-vd-wrapper').classList.remove('active');
			document.querySelector('.popup-vd-wrapper iframe').src = '';	
		}
	</script>
<?php } add_action('wp_footer', 'video_styles', 100); }  ?>	
