<!--
	Developer: Frederick Ennin (dollar Stir)
	Developer URL: http://purplesofts.com
	
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'core.php'; ?>
	<meta charset="utf-8">
	<meta name="keywords" content="Photo Bum Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
		
	<!-- css files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- css files -->

	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//fonts-->

	
	<!-- favicon -->

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>
<body>

<!-- banner -->
<div id="home" class="w3ls-banner w3ls-banner-inner"> 
	<!-- header -->
	<?php head();?>
	<!-- //header -->
</div>
<!-- //banner -->

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
	</ol>
</nav>
<!-- //breadcrumbs -->

<!-- mail -->
<div id="mail" class="banner-bottom mail contact pt-5">
		<div class="container pt-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Contact Us</h3>
			<div class="row w3ls_banner_bottom_grids">
				<div class="col-lg-6 w3layouts_mail_grid_left">
					<div class="agileits_mail_grid_left">
						<h3>Contact Details</h3>
						<p class="mb-sm-5 mb-3"> please leave a meesage we will get in touch </p>
						<ul>
							<li><label><i class="fas fa-map-marker" aria-hidden="true"></i></label>UCC Code Building , Office suite 2, Room 2B.</li>
							<li><a href="sankofaphotographygh19@gmail.com">sankofaphotographygh19@gmail.com</a></li>
							<li><label><i class="fas fa-envelope" aria-hidden="true"></i></label><a href="sirjhay18@gmail.com">sirjhay18@gmail.com</a></li>

							
							<li><label><i class="fa fa-phone" aria-hidden="true"></i></label>+233557363411</li>
							
							<li><label><i class="fa fa-phone" aria-hidden="true"></i></label>+233561452679</li>
							<li><label><i class="fa fa-phone" aria-hidden="true"></i></label>+233243501047</li>

							

						</ul>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5 wthree_mail_pos">
					<form action="#" method="post" class="subc">
						<div class="w3_agileits_contact_left">
							<h3>Get In Touch</h3>
							<input type="text" name="name" placeholder="Your Name"  id="name">
							<input type="email" name="email" placeholder="Your Email" id="email" >
							<input type="text" name="phone" placeholder="Phone Number"  id="phone">
							<textarea placeholder="Your Message..." required="" name="message" id="message"></textarea>

							<div class="mcont">
								
							</div>

							<div class="w3_agileits_contact_right">
								<input type="submit" value="SEND MESSAGE">
							</div>

							
						</div>
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="w3_agileits_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d409238.13468062127!2d34.24871928853258!3d36.7424200891376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1527f4a4c0be6e9f%3A0x4dbef2b1f81e7d77!2sMersin%2C+Mesudiye+Mahallesi%2C+Akdeniz%2FMersin+Province%2C+Turkey!5e0!3m2!1sen!2sin!4v1490868886492"></iframe>
	</div>
<!-- //mail -->

<!-- footer -->
			<?php so();?>
<!-- //footer -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	
	<!-- //js -->

	<script src="js/SmoothScroll.min.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
	<!-- move to top-js-files -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- //move to top-js-files -->

	<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

	<script src="ajax.js"></script>

</body>
</html>