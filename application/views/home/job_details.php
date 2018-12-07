<!DOCTYPE html>
<html lang="en">

<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- PAGE TITLE -->
	<title>Pitechnologies</title>
	<!-- FAVI ICON -->
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/images/favi.png" sizes="32x32">
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<!-- ALL GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<!-- FONT AWESOME CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/linear-fonts.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/font-awesome.css">
	<!-- OWL CAROSEL CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/owlcarousel/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/owlcarousel/css/owl.theme.css">
	<!-- LIGHTBOX CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/lightbox.min.css">
	<!-- MAGNIFIC CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
	<!-- ANIMATE CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.min.css">
	<!-- MAIN STYLE CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
	<!-- RESPONSIVE CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<!-- START PRELOADER -->
<div class="preloader">
	<div class="status">
		<div class="status-mes"></div>
	</div>
</div>
<!-- / END PRELOADER -->

<!-- START HOMEPAGE DESIGN AREA -->
<header class="single-blog-area">
	<div class="header-top-area">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<!-- START LOGO DESIGN AREA -->
					<div class="logo">
						<a href="<?= base_url(); ?>home">
							<img src="<?= base_url(); ?>assets/images/logo.png">
						</a>
					</div>
					<!-- END LOGO DESIGN AREA -->
				</div>
				<div class="col-md-9">
					<!-- START MENU DESIGN AREA -->
					<div class="mainmenu">
						<div class="navbar navbar-nobg">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<li class="active"><a class="smoth-scroll" href="<?php echo base_url();?>home#home">Home
											<div class="ripple-wrapper"></div>
										</a>
									</li>
									<li><a class="smoth-scroll" href="<?php echo base_url();?>home#about">About</a>
									</li>
									<li><a class="smoth-scroll" href="<?php echo base_url();?>home#products">Products</a>
									</li>
									<li><a class="smoth-scroll" href="<?php echo base_url();?>home#service">Services</a>
									</li>
									<li><a class="smoth-scroll" href="<?php echo base_url();?>home#partners">Partners</a>
									</li>
									<li><a class="smoth-scroll" href="<?php echo base_url();?>home#jobs">Jobs</a>
									</li>
									<li><a class="smoth-scroll" href="<?php echo base_url();?>home#news">News</a>
									</li>
									<li><a class="smoth-scroll" href="<?php echo base_url();?>home#contact">contact</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- END MENU DESIGN AREA -->
				</div>
			</div>
		</div>
	</div>
	<div class="single-blog-heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2><?php echo $data[0]->title ;?></h2>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- / END HOMEPAGE DESIGN AREA -->

<!-- START SINGLE BLOG POST DESIGN AREA -->
<div class="single-blogarea section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!-- START POST DESIGN AREA -->
				<div class="single-blog-details wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-offset="0">
					<img src="<?php echo base_url(); ?>uploads/careers/<?=  $data[0]->image; ?>" class="img-responsive" alt="">
					<p><?=  $data[0]->description; ?></p>
				</div>
				<!-- / END POST DESIGN AREA -->

			</div>
			<!-- START SIDEBAR DESIGN AREA -->
			<div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-offset="0">
<!--				<div class="search single-sidebar">-->
<!--					<input type="text" class="form-control" placeholder="Search...">-->
<!--				</div>-->
				<div class="recent-post single-sidebar">
					<h3>Recent Jobs</h3>
					<?php
					for($i=0;$i<2;$i++){
					?>
					<div class="recent-single">
						<a href="<?php echo base_url(); ?>home/job_details/<?=$jobs[$i]->id;?>"><img src="<?php echo base_url(); ?>uploads/careers/<?=  $jobs[$i]->image; ?>" class="img-responsive" alt="image">
						</a>
						<a href="<?php echo base_url(); ?>home/job_details/<?=$jobs[$i]->id;?>"><h4><?=  $jobs[$i]->title; ?></h4></a>
<!--						<span><h6 class="text-muted"><i class="fa fa-user-secret"></i> Admin.  <i class="fa fa-umbrella"></i> General.  <i class="fa fa-calendar"></i> 20 Jan 2017.</h6></span>-->
					</div>
					<?php } ?>
				</div>
			</div>
			<!-- / END START SIDEBAR DESIGN AREA -->
		</div>
	</div>
</div>
<!-- / END SINGLE BLOG POST DESIGN AREA -->

<!-- START FOOTER DESIGN AREA -->
<footer class="footer-area wow fadeInUp" data-wow-delay="1s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="footer-social-link text-center">
					<ul>
						<li><a href="<?=$contacts[0]->facebook;?>"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?=$contacts[0]->twitter;?>"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?=$contacts[0]->google;?>"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="<?=$contacts[0]->youtube;?>"><i class="fa fa-youtube"></i></a></li>
						<li><a href="<?=$contacts[0]->linkedin;?>"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="footer-text">
					<h6>&copy;copyright | Pitechnologies 2018.Developed by Pitechnologies</h6>
				</div>

			</div>
		</div>
	</div>
</footer>
<!-- / END CONTACT DETAILS DESIGN AREA -->

<!-- START SCROOL UP DESIGN AREA -->
<div class="scroll-to-up">
	<div class="scrollup">
		<span class="lnr lnr-chevron-up"></span>
	</div>
</div>
<!-- / END SCROOL UP DESIGN AREA -->

<!-- LATEST JQUERY -->
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<!-- BOOTSTRAP JS -->
<script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- PROGRESS JS  -->
<script src="<?= base_url(); ?>assets/js/jquery.appear.js"></script>
<!-- OWL CAROUSEL JS  -->
<script src="<?= base_url(); ?>assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- MIXITUP JS -->
<script src="<?= base_url(); ?>assets/js/jquery.mixitup.js"></script>
<!-- MAGNIFICANT JS -->
<script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- STEALLER JS -->
<script src="<?= base_url(); ?>assets/js/jquery.stellar.min.js"></script>
<!-- YOUTUBE JS -->
<script src="<?= base_url(); ?>assets/js/jquery.mb.YTPlayer.min.js"></script>
<script type="text/javascript">
	$('.player').mb_YTPlayer();
</script>
<!-- COUNTER UP JS -->
<script src="<?= base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.counterup.min.js"></script>
<!-- LIGHTBOX JS -->
<script src="<?= base_url(); ?>assets/js/lightbox.min.js"></script>
<!-- WOW JS -->
<script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
<!-- scripts js -->
<script src="<?= base_url(); ?>assets/js/scripts.js"></script>
</body>

</html>
