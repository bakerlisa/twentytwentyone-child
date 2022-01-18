<script>
	var parentWrapper = document.querySelectorAll('.slider');

	for(i=0;i<parentWrapper.length;i++){
		var allSlides = parentWrapper[i].querySelectorAll('.slides');
		var windowWidth = window.innerWidth;
		parentWrapper[i].setAttribute('data-total',allSlides.length);
	}

	//on arrow click
	function arrowSlide(direction){
		var maxSlides = event.target.closest('.slider').getAttribute('data-total');
		var slideOn = event.target.closest('.slider').getAttribute('data-slide-on');
		var parentEle = event.target.closest('.slider');


    	if(direction == "right"){
    		// sets the slide we now want visible compared to the total number we can have
    		if(maxSlides < (slideOn+1)){
    			slideOn = 1;
    		}else{
    			slideOn++;
    		}

    		//desktop values
    		var newSlideOn = slideOn;
    		if(maxSlides < (newSlideOn+1)){
    			newSlideOn = 1;

    		}else{
    			newSlideOn++;
    		}
    		parentEle.setAttribute('data-slide-on',slideOn);

		}//end right
		else if(direction == "left"){
			// if left arrow clicked
			// sets the slide we now want visible compared to the total number we can have
			if((slideOn - 1) < 1){
				slideOn = maxSlides;
			}else{
				slideOn--;
			}

			// desktop values
			var newSlideOn = slideOn;
			if((newSlideOn - 1) < 1){
				newSlideOn = maxSlides;
			}else{
				newSlideOn--;
			}

			parentEle.setAttribute('data-slide-on',slideOn);
		}//end left	
		//toggle active class
		var activeSlide = parentEle.querySelector('.slides.active');
		if(activeSlide){
			activeSlide.classList.remove('active');
		}
		setTimeout(function(){
			parentEle.querySelector('.slides:nth-child('+slideOn+')').classList.add('active');
		},250);	

		// desktop
		var desktopSlide = parentEle.querySelector('.slides.desktop');
		if(desktopSlide){
			desktopSlide.classList.remove('desktop');
		}	
		setTimeout(function(){
			parentEle.querySelector('.slides:nth-child('+newSlideOn+')').classList.add('desktop');
		},250);	
	}//end function
</script>

<style>
	body .dots{display: flex; align-items: center;justify-content: center;flex-wrap: wrap; position: absolute; bottom: 0;left: 0;right: 0; text-align: center;}
	body .dots svg{height: 20px !important; text-align: center; position: relative; top: 22px;}
	body .dots .left:hover,.testimonials-wrapper .right:hover{opacity: 65; cursor: pointer;}
		body .dots .left{width: 60px;height: 60px; background-color:var(--gray);}
			body .dots .left svg{transform: scaleX(-1);}
		body .dots .right{width: 60px;height: 60px; background-color:var(--yellow);}

		@media all and (max-width: 480px){
			body .dots{position: initial; width: 100%}
			body .dots .left{position: absolute;    position: absolute; top: 50%; transform: translateY(10px); left: 0; height: 35px; width: 40px}
			body .dots .right{position: absolute;    position: absolute; top: 50%; transform: translateY(10px); right: 0; height: 35px; width: 40px}
			 body .dots svg{height: 16px; top: 7px}
		}
</style>