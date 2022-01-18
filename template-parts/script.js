// lazyload css file
(function() {
    // load main.css
    var cssMain = document.createElement('link');
    cssMain.href = '/wp-content/themes/twentytwentyone-child/template-parts/animations.css';
    cssMain.rel = 'stylesheet';
    cssMain.type = 'text/css';
    document.getElementsByTagName('head')[0].appendChild(cssMain);
})();

function checkTheBox(e){
	let mobileMenuControl = document.querySelector("#mobile-nav-input");
	if(e.keyCode === 13 || e.keyCode === 34 ){
		if(mobileMenuControl.checked){
			mobileMenuControl.checked = false;
		}else{
			mobileMenuControl.checked = true;
		}
	}
}

window.onscroll = function() {myFunctionScroll()};
function myFunctionScroll() {
	var windowWidth = window.innerWidth;
	if(windowWidth){	
		if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
			document.querySelector(".masthead").classList.add("small-nav");
		}else{
			document.querySelector(".masthead").classList.remove("small-nav");	
		}
	}
}