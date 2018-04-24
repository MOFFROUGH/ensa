
<footer id="footer" class="footer">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
				<div class="footer-single">
					<h6>Subscribe </h6>
					<form action="#" class="subscribe">
						<input type="text" name="subscribe" id="subscribe">
						<input type="submit" value="&#8594;" id="subs">
					</form>
					<p>Get our monthly specials on people around you. </p>
				</div>
			</div>


			<div class="col-md-offset-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
				<div class="footer-single">
					<h6>Support</h6>
					<ul>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Home</a></li>
						<li><a href="#">Sign Up</a></li>
					</ul>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<p class="copyright text-center">
					Copyright © 2018 <a href="http://eNSA.com/">eNSA</a>. All rights reserved.  <a href="http://eNSA.com/">eNSA</a>
				</p>
			</div>
		</div>
	</div>
</footer>

<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

<!-- Essential jQuery Plugins
================================================== -->
<!-- Main jQuery -->
<script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
<!-- Single Page Nav -->
<script src="{{asset('assets/js/jquery.singlePageNav.min.js')}}"></script>
<!-- Twitter Bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- jquery.fancybox.pack -->
<script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>
<!-- jquery.mixitup.min -->
<script src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>
<!-- jquery.parallax -->
<script src="{{asset('assets/js/jquery.parallax-1.1.3.js')}}"></script>
<!-- jquery.countTo -->
<script src="{{asset('assets/js/jquery-countTo.js')}}"></script>
<!-- jquery.appear -->
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<!-- Contact form validation -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
{{-- <!-- Google Map -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> --}}
<!-- jquery easing -->
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<!-- jquery easing -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
{{-- <script src="{{asset('tour/build/js/bootstrap-tour-standalone.min.js')}}"></script> --}}
<script>
var wow = new WOW ({
	boxClass:     'wow',      // animated element css class (default is wow)
	animateClass: 'animated', // animation css class (default is animated)
	offset:       120,          // distance to the element when triggering the animation (default is 0)
	mobile:       false,       // trigger animations on mobile devices (default is true)
	live:         true        // act on asynchronously loaded content (default is true)
}
);
wow.init();
</script>
<!-- Custom Functions -->
<script src="{{asset('assets/js/custom.js')}}"></script>

<script type="text/javascript">
$(function(){
	/* ========================================================================= */
	/*	Contact Form
	/* ========================================================================= */

	$('#contact-form').validate({
		rules: {
			name: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			message: {
				required: true
			}
		},
		messages: {
			name: {
				required: "come on, you have a name don't you?",
				minlength: "your name must consist of at least 2 characters"
			},
			email: {
				required: "no email, no message"
			},
			message: {
				required: "um...yea, you have to write something to send this form.",
				minlength: "thats all? really?"
			}
		},
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				type:"POST",
				data: $(form).serialize(),
				url:"process.php",
				success: function() {
					$('#contact-form :input').attr('disabled', 'disabled');
					$('#contact-form').fadeTo( "slow", 0.15, function() {
						$(this).find(':input').attr('disabled', 'disabled');
						$(this).find('label').css('cursor','default');
						$('#success').fadeIn();
					});
				},
				error: function() {
					$('#contact-form').fadeTo( "slow", 0.15, function() {
						$('#error').fadeIn();
					});
				}
			});
		}
	});
});

</script>
{{-- <script>
(function(){

var tour = new Tour({
storage : false
});

tour.addSteps([
{
element: "#slider",
title: "Start here",
content: "This area shows all the sliders and thinsg you can do on the home view"
},
{
element: "#about",
title: "About eNSA",
content: "This explains how the system works and any contacts we might use"
},
{
element: "#login",
title: "Login to your account",
content: "Click here to navigate to our login page"
}

]);

// Initialize the tour
tour.init();

// Start the tour
tour.start();

}());
</script> --}}
