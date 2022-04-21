<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leave Your Reviews</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" type="text/css" href="dist/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="dist/css/main.css" />

</head>
<body>

<!-- app -->
<div id="app">

	<!-- header -->
	<header>
		
		<!-- logo -->
		<section id="logo">
			<img src="dist/images/logo.png" alt="logo">
		</section>
		<!-- logo -->

		<!-- intro  -->
		<section id="intro">

			<div id="copy">
				<p>We're excited to know that you were pleased with your visit to Summerville Ford! If you could spare a few minutes, would you mind leaving a few details about your experience. You can click either of the profiles below to leave a review. Feedback lets us and future customers know what we're doing right. Feel free to tell us who helped you while you were here and what they did to make you feel like you were our number-one priority. We'll make sure the appropriate team members get the recognition they deserve! Thanks again for choosing Summerville Ford, and we look forward to reading your review.</p>
			</div>

			<div id="about">
				
				<!-- icon -->
				<div class="icon">
					<i class="fa-solid fa-address-card"></i>
				</div>
				<!-- icon -->

	   
			<!-- actions -->
			<div id="actions">
				<p><a href="#"><i class="fa-solid fa-address-card"></i></a></p>
				<p>|</p>
				<p><a href="#"><i class="fa-solid fa-car"></i></a></p>
				<p>|</p>
				<p><a href="#"><i class="fa-solid fa-location-dot"></i></a></p>

			</div>
			<!-- actions -->                

				<h1>Summerville Ford</h1>
				<p>Sales: 877-789-3664</p>
				<p>9700 Dorchester Road, Summerville, SC 29485</p>
			
			
	 

			
			
			</div>

 <!-- experience -->
	<section id="experience">
		<h2>How would you rate your experience?</h2>

		<!-- stars -->
		<section id="stars">
			<i class="fa-solid fa-star-sharp"></i>
			<i class="fa-solid fa-star-sharp"></i>
			<i class="fa-solid fa-star-sharp"></i>
			<i class="fa-solid fa-star-sharp"></i>
			<i class="fa-solid fa-star-sharp"></i>
		</section>
		<!-- stars -->

	</section>    
	<!-- experience -->


		</section>
		<!-- intro  -->



	<section id="circles">
		<i class="fa-solid fa-circle accent"></i>
		<i class="fa-solid fa-circle accent"></i>
		<i class="fa-solid fa-circle accent"></i>
		<i class="fa-solid fa-circle accent"></i>
		<i class="fa-solid fa-circle accent"></i>
		<i class="fa-solid fa-circle accent"></i>

	</section>



	</header>
	<!-- header -->

	<!-- main -->
	<section id="main">
	
   

	
	<!-- services -->
	<section id="services">
	
		<!-- service -->
		<div class="service">
			<i class="fa-brands fa-facebook brand"></i>
			<p>Leave us a Review on Facebook</p>
		</div>
		<!-- service -->
	
		<!-- service -->
		<div class="service">
			<i class="fa-brands fa-google brand"></i>
			<p>Leave us a Review on Google</p>
		</div>
		<!-- service -->
	   
	
	</section>    
	<!-- services -->






	</section>
	<!-- main -->

	<!-- feedback -->
	<section id="feedback">

		<section id="feedback-about">

			<h2>Have comments or suggestions?</h2>
		
			<!-- multistep form -->
			<form id="feedback-form">
  
  			
				<!-- fieldsets -->
  				<fieldset>
				    <button class="button next">
						Feedback
						<i class="fa-solid fa-message-dots"></i>
					</button>
    			</fieldset>
  				<fieldset>
        			<input type="text" name="name" placeholder="James Smith" />
					<label>
    					<span class="label-text">Full Name</span>
  					</label>
				    <button class="button next">
						Next
						<i class="fa-solid fa-square-carret-right"></i>
					</button>
    			</fieldset>
    		
  				<fieldset>
        			<input type="text" name="name" placeholder="james@email.com" />
					<label>
    					<span class="label-text">Email Address</span>
  					</label>
				    <button class="button next">
						Next
						<i class="fa-solid fa-square-carret-right"></i>
					</button>
    			</fieldset>
    		
  				<fieldset>
        			<input type="text" name="name" placeholder="555-123-4567" />
					<label>
    					<span class="label-text">Phone Number</span>
  					</label>
				    <button class="button next">
						Next
						<i class="fa-solid fa-square-carret-right"></i>
					</button>
    			</fieldset>
  				<fieldset>
					<textarea textarea="" id="comment" name="comment" placeholder="Feedback" cols="45" rows="2" maxlength="65525" required></textarea>
				    <button class="button next">
						Next
						<i class="fa-solid fa-square-carret-right"></i>
					</button>
    			</fieldset>
    		
				<fieldset>
    				<!--<input type="button" name="previous" class="previous action-button" value="Previous" />-->
				    <button class="button">
						Submit
						<i class="fa-solid fa-square-carret-right"></i>
					</button>
 				</fieldset>
  			</form>
		</section>
	</section>
	<!-- feedback -->







   






</div>
<!-- app -->




   




<script src="dist/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- <script defer src="dist/js/all.min.js"></script> -->

<script src="dist/js/main-min.js" data-format="basic" data-id="2"></script>


</body>
<script type="text/javascript">


//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(e){
	e.preventDefault();
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity, 'display': 'flex'});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});    

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})



</script>
</html>