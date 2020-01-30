<?php include "lib_func.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>BEM STMIK IKMI CIREBON</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="BEM STMIK IKMI, BEM IKMI, BEM STMIK IKMI Cirebon, 
	BEM INDONESIA, BEM CIREBON, Badan Eksekutif Mahasiswa, Kabinet Connect" />

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Custom Theme files -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
	<link href="assets/css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
	<link href="assets/css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
	<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
	<link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<link href="assets/css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="assets/js/jquery-2.2.3.min.js"></script> 
	<!-- //js --> 
	<!-- web-fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<!-- <link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'> -->
	<!-- web-fonts --> 
	<script src="assets/js/owl.carousel.js"></script>  
	<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({ 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds 
		  items :4,
		  itemsDesktop : [640,5],
		  itemsDesktopSmall : [480,2],
		  navigation : true
	 
		}); 
	}); 
	</script>
	<script src="assets/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
	<script>
	    $(document).ready(function() {

	        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

	        $('.header-two').scrollToFixed();  
	        // previous summary up the page.

	        var summaries = $('.summary');
	        summaries.each(function(i) {
	            var summary = $(summaries[i]);
	            var next = summaries[i + 1];

	            summary.scrollToFixed({
	                marginTop: $('.header-two').outerHeight(true) + 10, 
	                zIndex: 999
	            });
	        });
	    });
	</script>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="assets/js/move-top.js"></script>
	<script type="text/javascript" src="assets/js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
		<script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
	<!-- //smooth-scrolling-of-move-up -->
	<script src="assets/js/bootstrap.js"></script>	
</head>
<body>
	<?php header_web();?>
	<!-- Login -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Login Ke Akun Anggota BEM</h3>  
			<div class="login-body">
				<form action="index.php?aksi=login" method="post">
					<input type="text" class="user" name="username" placeholder="Username" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<input type="submit" value="Login">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Remember me</label>
						<div class="forgot">
							<a href="#">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6> Not a Member? <a href="signup.php">Sign Up Now »</a> </h6> 
			<br>

			<div class="login-page-bottom social-icons">
				<h5 align="center">Temukan Kami di</h5>  
				<ul align="center">
					<li><a href="//facebook.com/BEM.IKMI" target="_blank" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="//twitter.com/bem_ikmi" target="_blank" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="//instagram.com/bemstmikikmi" target="_blank" class="fa fa-instagram icon instagram"></a></li>
					<li><a href="https://goo.gl/maps/8NesuJ5WM9feDjJJ7" target="_blank" class="fa fa-map-marker icon email"> </a></li> 
				</ul> 
			<?php  footer_web();?>
			</div>
			
		</div>
	</div>
	<!-- //Login -->  
	
</body>
</html>