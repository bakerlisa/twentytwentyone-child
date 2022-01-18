<?php
/* Blog styles should all be here with the blog
 * HTML being in /template-parts/content/content-blog
 * 
 */
?>

<style>
	/* Main Blog Index */
	
	/*Blog Header Styles*/
	<?php
	if(!is_archive() || !is_search() ){ ?>
		header.masthead.no-post-thumbnail{background: white;}
	<?php } ?>
	/* Blog */
	.masthead + h1{text-align:center;}
	.blog-with-sidebar{align-items:start !important;padding-bottom:50px; padding-top: 6%;}
	.blog-with-sidebar > main{width:75%;}
	.blog-with-sidebar > #sidebar{width:25%;padding-left: 1em;}
	.blog-with-sidebar h2:not(.screen-reader-text){text-align:left;font-size:2em;margin: 5px 0;}
	.blog-with-sidebar article{padding: 2%;border: 1px solid #CCC;margin-bottom: 3em;}
	.blog-with-sidebar article .indiv-post{align-items: stretch;}
	.blog-with-sidebar article .indiv-post > div:first-child{width: 40%; max-height: 400px; background-position: center center; background-size: cover; background-repeat: no-repeat;}
	.blog-with-sidebar article .indiv-post > div:last-child{width: 60%; padding-left: 2%;}
	@media(max-width:750px){
		.blog-with-sidebar{flex-direction:column;}
		.blog-with-sidebar > *{width:100% !important;}
	}
	a.entry-date{border: 1px solid black;padding: .25em .75em;float: left;margin: .3em .4em 0 0;transform:scale(.85);}
	a.entry-date span{display:block;color:black;text-align:center;line-height:1em;}
	a.entry-date span:nth-child(1), .entry-date span:nth-child(3){font-size:.8em;}
	a.entry-date span:nth-child(2){font-size:2em;}
	.post-info{font-size: .9em;line-height: 1.5em; padding-top: 10px;}
	.navigation.pagination h2{font-size:1em;text-align:left;margin:50px 0 5px;color: #a1a1a1;}
	.pagination .page-numbers .svg-icon{vertical-align: middle;}
	.pagination .page-numbers:not(.dots){padding:3px 9px;border:1px solid #ffc423;border-radius: 3px;}
	.pagination .page-numbers:not(.current):not(.dots):not(:hover){background:#ffc423; color:white;}
	.pagination .nav-prev-text{transform:rotate(180deg);display: inline-block;vertical-align: middle;line-height: 0;}
	/* Blog singles */
	body.single-post .entry-content h2{text-align:left;}
	.entry-content.content-width{width:750px; max-width: 100%;}
	.post-single-header	.custom-share{padding:0;}
	.post-single-header	.custom-share span{color: white;}
	.post-single-header.has-img .custom-share span{color:#222;}
	.custom-share span{font-size:.8em;}
	.custom-share a{font-size:1.25em;background:rgba(0, 0, 0, .5);height:30px;width:30px;border-radius:50%;display: inline-block;text-align: center;color:white;margin:0 2px;}
	.custom-share a:hover{color:#ffc423;}
	.custom-share i{vertical-align:bottom;}
	.custom-share.bottom-share{margin-top:2em;text-align:right;}
	.post-single-header{z-index:0;padding: 15em 0 5em;position:relative;margin-bottom: 6em;background-image:radial-gradient(ellipse at center, #223e87 0%, #101e42 100%);}
	.post-single-header.has-img:after{z-index:0;background:rgba(255,255,255,.85);content:"";width:100%;height:100%;position:absolute; top:0;left:0;}
	.post-single-header.has-img > .content-width{position: relative;}
	.post-single-header h1{margin:0;text-align:left;color:#ffc423;}
	.post-single-header.has-img h1{color: #223e87;}
	.post-single-header:not(.has-img):before, .post-single-header:not(.has-img):after{content: "";width: 100%;height: 100%;left: 0;position: absolute;top: 0;z-index: -1;}
	.post-single-header:not(.has-img):before{background: repeating-linear-gradient(45deg, transparent, transparent 1px, rgba(0, 0, 0, 0.2) 1px, rgba(255, 255, 255, 0.1) 10px);}
	.post-single-header:not(.has-img):after{background: repeating-linear-gradient(-45deg, transparent, transparent 1px, rgba(0, 0, 0, 0.2) 1px, rgba(255, 255, 255, 0.1) 10px);}
	.post-single-header > div{z-index:1;}
	.post-single-header .post-info{color: white;}
	.post-single-header.has-img .post-info, .post-single-header.has-img .post-info a{color:#222;}
	.post-single-header .post-info a{text-decoration:underline;}
	/* blog sidebar */
	#sidebar h2{margin-top: 25px;font-size: 1.3em;color: #333;}
	#sidebar ul{padding:0; margin: 0;}
	#sidebar li{list-style:none;font-size: 1em;padding: 0 0 7px;border-bottom: 1px solid #f1f1f1;margin-bottom: 7px;}
	#sidebar li a{color: #555;}
	#categories-2 li{border: 0;}
	#categories-2 li a{text-decoration: underline; color: #555;}
	#sidebar li:last-child{border-bottom:0;}
	.search-form{position:relative; display: flex;}
	.search-form label{display: none;}
	.search-form input[type="text"]{width: 85%; border: 1px solid #eee; border-right: none; padding-left: 10px; font-size: 1em; font-family: "Open Sans", sans-serif;}
	.search-form .screen-reader-text{display:none;}
	.search-form input[type="search"]{font-size: .8em;line-height: 2em;background: #f1f1f1;color: #555;border: 0;padding: .25em 3em .25em .5em;width: 100%;}
	.search-form input[type="submit"]{cursor: pointer; border: 0; padding: 1.5em .5em; width: 20%; color: transparent; background: #ffc423; position: relative; display: block; justify-content: center; align-items: center; background-image: url(<?= wp_get_attachment_image_src(1365, 'full')[0]; ?>); background-repeat: no-repeat; background-position: center center;}
	#sidebar #gform_fields_2 > li.gfield{padding-right: 0!important; border: none; margin-top: 0; padding: 0;}
	#sidebar .gform_wrapper .top_label .gfield_label, .gform_wrapper legend.gfield_label{display: none;}
	#sidebar .gform_wrapper .gform_footer{margin: 0;}
	#sidebar #gform_2 .gform_footer.top_label{text-align: left!important; padding-top:0;}
	@media(max-width: 810px){
		.post-single-header{padding: 3em 0;}
	}
	@media(max-width: 750px){
		.blog-with-sidebar > #sidebar{padding: 0; margin-top: 4em;}
		#text-3{display: none;}
	}
	@media(max-width: 500px){
		.indiv-post{flex-direction: column;}
		.indiv-post > div{width: 100%!important;}
		.indiv-post > div:first-child{height: 58vw;}
	}
</style>