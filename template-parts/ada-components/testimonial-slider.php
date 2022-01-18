<?php
/*
 * HOW TO USE THIS SECTION
 * ------------------------------------------------------
 * This is an ADA-compliant testimonial section.
 * The shortcode atts is only changing a background image id. If a theme requires a solid/gradient color, this part will have to be adjusted.
 * The js on this page accounts for different testimonial boxes. Add as many or take away as many as necessary for this section.
 * This section should be used for a testimonial carousel of 4+ testimonials.
 * The border styles for the testimonial boxes will need to be adjusted for different numbers of testimonials.
 * The SVG quote styles are controlled in the styles of this php page.
*/
?>

<?php $atts = shortcode_atts(array(
	'bg_img_id' => ''
), $atts); ?>


<section class="testimonial-section ada lazyload section-padding" data-bg-img="<?= wp_get_attachment_image_src($atts['bg_img_id'], 'full')[0]; ?>">
	<div class="content-width">
		<h2>Testimonials</h2>
		
		
		<testimonial-app>

			<button class="left-button" onclick="changeSlides('down')" aria-label="change testimonial slides displayed decending" for="#testimonial-container">←</button>
			<button class="right-button" onclick="changeSlides('up')" aria-label="change testimonial slides displayed acending" for="#testimonial-container">→</button>

			<div class="testimonial-container" id="testimonial-container">


				<div class="testimonial-box" data-slide="1">
					<div class="title-container">
						<div class="svg-container">
							<svg xmlns="httpw://www.w3.org/2000/svg" viewBox="0 0 89 73" width="89" height="73">
								<path id="quote1" class="quote" d="M2 72L2 38.28C2.15 24.93 12.86 1.4 38.29 1.15C38.29 9.63 38 16 38 16C28.78 16.27 19.18 25.55 19 38C23.83 37.83 38 38 38 38L38 72L2 72Z"/>
								<path id="quote2" class="quote" d="M51 72L51 38.28C51.15 24.93 61.86 1.4 87.29 1.15C87.29 9.63 87 16 87 16C77.78 16.27 68.18 25.55 68 38C72.83 37.83 87 38 87 38L87 72L51 72Z"/>
							</svg>
						</div>
						<span>IN AN ACCIDENT AT WORK</span>
					</div>
					<p class="testimonial-words">Alex Carpio has been my attorney since the beginning in August of 2012. I was in an accident at work and I explained everything. At that point he said: “We’re going to continue & we’re going to go on with this because you do have a case.” I would recommend Alex Carpio very highly. He’s a great gentlemen and he listens.</p>
					<p class="name">ALBERT GARDEA</p>
				</div>


				<div class="testimonial-box" data-slide="2">
					<div class="title-container">
						<div class="svg-container">
							<svg xmlns="httpw://www.w3.org/2000/svg" viewBox="0 0 89 73" width="89" height="73">
								<path id="quote1" class="quote" d="M2 72L2 38.28C2.15 24.93 12.86 1.4 38.29 1.15C38.29 9.63 38 16 38 16C28.78 16.27 19.18 25.55 19 38C23.83 37.83 38 38 38 38L38 72L2 72Z"/>
								<path id="quote2" class="quote" d="M51 72L51 38.28C51.15 24.93 61.86 1.4 87.29 1.15C87.29 9.63 87 16 87 16C77.78 16.27 68.18 25.55 68 38C72.83 37.83 87 38 87 38L87 72L51 72Z"/>
							</svg>
						</div>
						<span>I RECOMMEND THIS FIRM TO YOU</span>
					</div>
					<p class="testimonial-words">"Hi, my name is Ron Selma and I’ve been a client for a year and a half. Snow, Carpio & Weekely, have been very professional for me and I would recommend this firm to anyone. They all are very professional."</p>
					<p class="name">- RON SELMA</p>
				</div>



				<div class="testimonial-box" data-slide="3">
					<div class="title-container">
						<div class="svg-container">
							<svg xmlns="httpw://www.w3.org/2000/svg" viewBox="0 0 89 73" width="89" height="73">
								<path id="quote1" class="quote" d="M2 72L2 38.28C2.15 24.93 12.86 1.4 38.29 1.15C38.29 9.63 38 16 38 16C28.78 16.27 19.18 25.55 19 38C23.83 37.83 38 38 38 38L38 72L2 72Z"/>
								<path id="quote2" class="quote" d="M51 72L51 38.28C51.15 24.93 61.86 1.4 87.29 1.15C87.29 9.63 87 16 87 16C77.78 16.27 68.18 25.55 68 38C72.83 37.83 87 38 87 38L87 72L51 72Z"/>
							</svg>
						</div>
						<span>INJURED ON THE JOB</span>
					</div>
					<p class="testimonial-words">"My name is Jennifer Logan & I was injured on the job in January of 2013. Chad Snow came highly recommended from an attorney that I work for. I’ve been coming here ever since I consulted with him. He helped me out."</p>
					<p class="name">- JENNIFER LOGAN</p>
				</div>



				<div class="testimonial-box" data-slide="4">
					<div class="title-container">
						<div class="svg-container">
							<svg xmlns="httpw://www.w3.org/2000/svg" viewBox="0 0 89 73" width="89" height="73">
								<path id="quote1" class="quote" d="M2 72L2 38.28C2.15 24.93 12.86 1.4 38.29 1.15C38.29 9.63 38 16 38 16C28.78 16.27 19.18 25.55 19 38C23.83 37.83 38 38 38 38L38 72L2 72Z"/>
								<path id="quote2" class="quote" d="M51 72L51 38.28C51.15 24.93 61.86 1.4 87.29 1.15C87.29 9.63 87 16 87 16C77.78 16.27 68.18 25.55 68 38C72.83 37.83 87 38 87 38L87 72L51 72Z"/>
							</svg>
						</div>
						<span>WE RECOMMEND THIS FIRM TO YOU</span>
					</div>
					<p class="testimonial-words">"Hello, my name is Jorge Ramirez and my lawyer was Alex Carpio. He is a really good lawyer and I would recommend him to a lot of people. Snow, Carpio & Weekely, have been very professional for me and my wife. Thank you Alex Carpio."</p>
					<p class="name">- JORGE RAMIREZ</p>
				</div>


				<div class="testimonial-box" data-slide="5">
					<div class="title-container">
						<div class="svg-container">
							<svg xmlns="httpw://www.w3.org/2000/svg" viewBox="0 0 89 73" width="89" height="73">
								<path id="quote1" class="quote" d="M2 72L2 38.28C2.15 24.93 12.86 1.4 38.29 1.15C38.29 9.63 38 16 38 16C28.78 16.27 19.18 25.55 19 38C23.83 37.83 38 38 38 38L38 72L2 72Z"/>
								<path id="quote2" class="quote" d="M51 72L51 38.28C51.15 24.93 61.86 1.4 87.29 1.15C87.29 9.63 87 16 87 16C77.78 16.27 68.18 25.55 68 38C72.83 37.83 87 38 87 38L87 72L51 72Z"/>
							</svg>
						</div>
						<span>title5</span>
					</div>
					<p class="testimonial-words">words5</p>
					<p class="name">name5</p>
				</div>


				<div class="testimonial-box" data-slide="6">
					<div class="title-container">
						<div class="svg-container">
							<svg xmlns="httpw://www.w3.org/2000/svg" viewBox="0 0 89 73" width="89" height="73">
								<path id="quote1" class="quote" d="M2 72L2 38.28C2.15 24.93 12.86 1.4 38.29 1.15C38.29 9.63 38 16 38 16C28.78 16.27 19.18 25.55 19 38C23.83 37.83 38 38 38 38L38 72L2 72Z"/>
								<path id="quote2" class="quote" d="M51 72L51 38.28C51.15 24.93 61.86 1.4 87.29 1.15C87.29 9.63 87 16 87 16C77.78 16.27 68.18 25.55 68 38C72.83 37.83 87 38 87 38L87 72L51 72Z"/>
							</svg>
						</div>
						<span>title6</span>
					</div>
					<p class="testimonial-words">words6</p>
					<p class="name">name6</p>
				</div>


				<div class="testimonial-box" data-slide="7">
					<div class="title-container">
						<div class="svg-container">
							<svg xmlns="httpw://www.w3.org/2000/svg" viewBox="0 0 89 73" width="89" height="73">
								<path id="quote1" class="quote" d="M2 72L2 38.28C2.15 24.93 12.86 1.4 38.29 1.15C38.29 9.63 38 16 38 16C28.78 16.27 19.18 25.55 19 38C23.83 37.83 38 38 38 38L38 72L2 72Z"/>
								<path id="quote2" class="quote" d="M51 72L51 38.28C51.15 24.93 61.86 1.4 87.29 1.15C87.29 9.63 87 16 87 16C77.78 16.27 68.18 25.55 68 38C72.83 37.83 87 38 87 38L87 72L51 72Z"/>
							</svg>
						</div>
						<span>title7</span>
					</div>
					<p class="testimonial-words">words7</p>
					<p class="name">name7</p>
				</div>



			</div>
		</testimonial-app>
		
		
	</div>
</section>

<?php if(!function_exists('apply_testimonial_slider_styles')){
	function apply_testimonial_slider_styles(){ ?>
		<style>
			.testimonial-section{color: white; background-color: #222;}
			.testimonial-section h2{text-align: center;}
			
			.quote {fill: none; stroke: #ffffff; stroke-width: 1;}
			testimonial-app{ position: relative; padding: 2%; display: block; }
			testimonial-app button{ position: absolute; z-index:1; top: 50%; background: none; border: none; display: block; transform: translateY(-50%) scaleY(1.9); color: white; font-size: 25px; font-weight: 100; cursor: pointer; outline: none; }
			.left-button{left: 0;}
			.right-button{ right: 0; }
			.testimonial-container{ display: flex; justify-content: center; }
			.testimonial-box{ display: none; width: 33%; padding: 3%; color: white; }
			.testimonial-box.active{ display: block; }
			.testimonial-box.active:nth-child(3n + 2), .testimonial-box.active:last-child{ border: 1px solid white; border-top: none; border-bottom: none; }
			.testimonial-box .title-container{ display: flex; align-items: flex-end; text-transform: uppercase; font-size: 25px; justify-content: space-between; }
			.testimonial-box .title-container .svg-container{ width: 25%; }
			.testimonial-box .title-container svg{ margin-right: 15px; width: 70px; height: auto; max-width: 100%; }
			.testimonial-box .title-container span{ width: 70%; }

			@media(max-width: 1000px){
				.testimonial-box.active:nth-child(3n + 2), .testimonial-box.active:last-child{ border: none; }
				.testimonial-box.active:nth-child(2n + 0){ border-left: 1px solid white; }
				.testimonial-box.active:last-child{ border-left: 1px solid white; border-right: 1px solid white; }
				.testimonial-box{ width: 50%; }
			}

			@media(max-width: 750px){
				testimonial-app{ padding: 2% 10%; }
				.testimonial-box{ width: 100%; }
				.testimonial-box.active:nth-child(3n + 2), .testimonial-box.active:last-child, .testimonial-box.active:nth-child(2n + 0){ border: none; }
			}
	</style>


	<script>
		// adjusts the number of slides to show based on screen size
		let slidesToShow;

		// adds "active" class to testimonials on load based on variable slidesToShow
		window.addEventListener('load', ()=>{
			slidesToChange();
			let testimonials = document.querySelectorAll(".testimonial-box");
			let counter = 0;
			while(counter < slidesToShow){
				testimonials[counter].classList.add("active");
				counter++;
			}
		});

		//resets active slides on resize
		window.addEventListener("resize", ()=>{
			slidesToChange();
			let testimonials = document.querySelectorAll(".testimonial-box");
			testimonials.forEach(item=>{
				item.classList.remove("active");
			});
			let counter = 0;
			while(counter < slidesToShow){
				testimonials[counter].classList.add("active");
				counter++;
			}
		});

		// changes slides based on screen size
		function slidesToChange(){
			if(window.innerWidth > 1000){
				slidesToShow = 3;
			}else if(window.innerWidth > 750){
				slidesToShow = 2;
			}else{
				slidesToShow = 1;
			}
		}

		//changes the slides in testimonial slider
		// argument "direction" is tied to the buttons switching up or down
		function changeSlides(direction){
			let activeSlides = document.querySelectorAll(".testimonial-box.active");
			let firstActiveSlide = activeSlides[0];
			let firstActiveSlideNumber = firstActiveSlide.dataset.slide;
			let lastActiveSlide = activeSlides[activeSlides.length -1];
			let lastActiveSlideNumber = lastActiveSlide.dataset.slide;
			let allSlides = document.querySelectorAll(".testimonial-box");  
			activeSlides.forEach(slide=>{
				slide.classList.remove("active");
			});


			if(direction == "up"){
				if(Number(lastActiveSlideNumber) + slidesToShow > allSlides.length){
					let slidesOver = (Number(lastActiveSlideNumber) + slidesToShow) - allSlides.length;
					let slidesMore = slidesToShow - slidesOver;
					if(slidesOver == slidesToShow){
						lastActiveSlideNumber = 0;
						for(let i = 1; i < slidesToShow + 1; i++){
							document.querySelector(`.testimonial-box[data-slide="${Number(lastActiveSlideNumber) + i}"]`).classList.add("active");
						}
					}else{
						for(let i = 1; i < slidesMore + 1; i++){
							document.querySelector(`.testimonial-box[data-slide="${Number(lastActiveSlideNumber) + i}"]`).classList.add("active");
						}
					}

				}else{
					for(let i = 1; i < slidesToShow + 1; i++){
						document.querySelector(`.testimonial-box[data-slide="${Number(lastActiveSlideNumber) + i}"]`).classList.add("active");
					}
				}


			}else if(direction == "down"){
				let slidesDown = slidesToShow;
				if(Number(firstActiveSlideNumber) - 1 == 0){
					if(slidesToShow == 1){
						slidesDown = 1;
					}else if(allSlides.length % slidesToShow > 0){
						slidesDown = allSlides.length % slidesToShow;
					}
					for(let i = allSlides.length; i > allSlides.length - slidesDown; i--){
						document.querySelector(`.testimonial-box[data-slide="${i}"]`).classList.add("active");
					}


				}else{
					for(let i = 0; i < slidesToShow; i++){
						document.querySelector(`.testimonial-box[data-slide="${Number(firstActiveSlideNumber) - slidesToShow + i}"]`).classList.add("active");
					}
				}
			}

		}
	</script>
<?php }
	add_action( 'wp_footer', 'apply_testimonial_slider_styles' );
} ?>