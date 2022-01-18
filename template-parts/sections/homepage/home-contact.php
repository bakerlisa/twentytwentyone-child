<?php $atts = shortcode_atts(array(
	'' => ''
), $atts); ?>

<section class="home-contact section-padding">
	
</section>


<?php if(!function_exists('apply_home_contact_styles')){
function apply_home_contact_styles(){ ?>
<style>
	.gform_footer.top_label{position: relative;}
</style>

<script>
	window.addEventListener("scroll", loadForm);
	window.addEventListener("load", loadForm);
	let formLoaded = 0;

	function loadForm(){
		let sectionTop = document.querySelector(".home-contact").getBoundingClientRect().top;
		if(sectionTop - window.innerHeight < 150 && formLoaded == 0){
			fetch("<?= home_url() . '/gravity-forms/'; ?>")
				.then(response => response.text())
				.then(data => {
				document.querySelector(".home-contact").innerHTML = data;
				<?php 
					global $post;
					$post_slug = $post->post_name;
				?>
				document.querySelector(".home-contact form").setAttribute("action", "/<?= $post_slug; ?>/#gf_1");
				let newInput = document.createElement("input");
				newInput.setAttribute("style", "padding: 15px 10%; margin-top: 8px; text-transform: uppercase;font-family: var(--text-font); font-weight: 700; color: #fff; background: transparent; border-radius: 6px; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); cursor: pointer; border: none; outline: none; user-select: none; color: transparent;");
				newInput.setAttribute("class", "over-submit");
				newInput.setAttribute("onclick", "checkLabels()");
				newInput.setAttribute("tabindex", "0");
				document.querySelector("#gform_submit_button_1").setAttribute("tabindex", "-1");
				document.querySelectorAll("#gform_1 input, #gform_1 select").forEach((input)=>{
					input.addEventListener("keydown", (event)=>{
						if(event.keyCode == 13){
							event.preventDefault();
							alert("Please click the button below the form to submit your entry.");
						}
					});
				});
				document.querySelector(".gform_footer.top_label").appendChild(newInput);
			});
			formLoaded++;
		}
	}

	function checkLabels(){
		let alerted = 0;
		document.querySelectorAll(`#gform_1 input[aria-required="true"], #gform_1 textarea[aria-required="true"]`).forEach(item=>{
			if(!item.value){
				alerted++;
			}
		});
		if(alerted > 0){
			alert("Please fill out all required fields. \n Required fields are marked with an asterisk ( * )");
		}else{
			let emailId = document.querySelector("input#input_1_3").value;
			if(emailId.includes(".ru") || emailId.includes(".xyz")){
				alert("Sorry, there seems to be a problem with your submission. Please try again later or call us during business hours to reach our office staff.");
			}else{
				document.querySelector(".over-submit").remove();
				document.querySelector("#gform_submit_button_1").click();
			}
		}
	}
</script>
<?php }
	add_action( 'wp_footer', 'apply_home_contact_styles' );
}?>