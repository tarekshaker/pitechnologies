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
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900' rel='stylesheet'
		  type='text/css'>
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
	<!--[if lt IE 9]> -->
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<!-- LATEST JQUERY -->
	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>


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
<header id="home" class="welcome-area">
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
								<button type="button" class="navbar-toggle" data-toggle="collapse"
										data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<li class="active"><a class="smoth-scroll" href="#home">Home
											<div class="ripple-wrapper"></div>
										</a>
									</li>
									<li><a class="smoth-scroll" href="#about">About</a>
									</li>
									<li><a class="smoth-scroll" href="#products">Products</a>
									</li>
									<li><a class="smoth-scroll" href="#service">Service</a>
									</li>
									<li><a class="smoth-scroll" href="#partners">Partners</a>
									</li>
									<li><a class="smoth-scroll" href="#jobs">Jobs</a>
									</li>
									<li><a class="smoth-scroll" href="#news">News</a>
									</li>
									<li><a class="smoth-scroll" href="#contact">contact</a>
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
	<div class="welcome-slider-area">
		<div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel"
			 data-interval="5000">
			<ol class="carousel-indicators">
				<?php
				$flag = true;
				$number = 0;
				foreach ($sliders as $slider) { ?>
					<li data-target="#welcome-slide-carousel" data-slide-to="<?= $number ?>"
						class="<?= ($flag) ? 'active' : '' ?>"></li>
					<?php
					$flag = false;
					$number++;
				}
				?>
			</ol>
			<div class="carousel-inner" role="listbox">
				<?php
				$flag = true;
				$number = 0;
				foreach ($sliders as $slider) { ?>
					<div class="item <?= ($flag) ? 'active' : '' ?>">
						<div class="single-slide-item slide-<?= $slider->id; ?>"
							 style="background: url('<?= base_url(); ?>uploads/slider_images/<?= $slider->image; ?>') scroll 0 0;background-size: cover;">
							<div class="single-slide-item-table">
								<div class="single-slide-item-tablecell">
									<div class="container">
										<div class="row">
											<div class="col-md-12 text-center">
												<div class="header-text">
													<h2><?= $slider->heading; ?></h2>
													<p><?= $slider->text; ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<?php $flag = false;
				}
				?>
			</div>
		</div>
	</div>
</header>
<!-- / END HOMEPAGE DESIGN AREA -->

<!-- START ABOUT US DESIGN AREA -->
<section id="about" class="about-us-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title">
					<h2>About us</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!--			 START ABOUT US TEXT DESIGN AREA -->
			<div class="col-md-6 col-sm-6 text-center">
				<div class="block-text-skill about-text wow fadeInUp" data-wow-delay=".2s">
					<p>
						”Pi Technologies” is a privately held company founded in 2009 specialized in Information and
						Communications Technology to provide the private and public sectors with professional
						software solutions and training suits.
					</p>
					<div class="social-media-section">
						<ul>
							<li><a href="<?=$contacts[0]->facebook;?>"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?=$contacts[0]->twitter;?>"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?=$contacts[0]->google;?>"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="<?=$contacts[0]->youtube;?>"><i class="fa fa-youtube"></i></a></li>
							<li><a href="<?=$contacts[0]->linkedin;?>"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<!--			 START KEY SKILL DESIGN AREA  -->
			<div class="col-md-6 col-sm-6">
				<div class="our-skill">
					<div class="progress-bar-linear">
						<p class="progress-bar-text">Graphics Design
							<span>92%</span>
						</p>
						<div class="progress-bar">
							<span data-percent="95"></span>
						</div>
					</div>
					<div class="progress-bar-linear">
						<p class="progress-bar-text">Web design
							<span>98%</span>
						</p>
						<div class="progress-bar">
							<span data-percent="95"></span>
						</div>
					</div>
					<div class="progress-bar-linear">
						<p class="progress-bar-text">Web development
							<span>90%</span>
						</p>
						<div class="progress-bar">
							<span data-percent="90"></span>
						</div>
					</div>
				</div>
			</div>
			<!--			 / END KEY SKILL DESIGN AREA -->
		</div>


		<div class="row">
			<div class="testimonial-list wow fadeInUp">
				<?php
				foreach ($about as $about_item) { ?>
					<!-- START SINGLE TESTIMONIAL DESIGN AREA -->
					<div class="single-testimonial text-center">
						<!--<img src="<?= base_url(); ?>uploads/about/<?= $about_item->logo; ?>" alt=""> -->
						<h2 class="text-muted"><?= $about_item->title; ?></h2>
						<h4 style="color: black;"><?= $about_item->description; ?></h4>
					</div>
					<!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
				<?php } ?>
			</div>
		</div>

		<!-- START FUN FACTS DESIGN AREA -->
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="single-project-complete single-project-border">

					<span class="lnr lnr-thumbs-up"></span>
					<h2 class="counter-num">1200</h2>
					<h6 class="text-muted">project completed</h6>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-project-complete single-project-border">
					<span class="lnr lnr-smile"></span>
					<h2 class="counter-num">1000</h2>
					<h6 class="text-muted">Happy Clients</h6>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-project-complete single-project-border">
					<span class="lnr lnr-code"></span>
					<h2 class="counter-num">56090</h2>
					<h6 class="text-muted">Line Of Coding</h6>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-project-complete single-project-border">
					<span class="lnr lnr-bullhorn"></span>
					<h2 class="counter-num">3100</h2>
					<h6 class="text-muted">Awards Won</h6>
				</div>
			</div>
		</div>
		<!-- /END FUN FACTS DESIGN AREA -->
	</div>
</section>
<!-- / END ABOUT US DESIGN AREA -->

<!-- START BLOG DESIGN AREA -->
<section id="products" class="blog-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title">
					<h2>Products</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- START SINGLE BLOG DESIGN AREA -->
			<?php

			foreach ($products as $product) { ?>
				<div class="col-md-<?php
				if (count($products) > 0 && count($products) <= 1) {
					echo 12;
				} elseif (count($products) > 1 && count($products) <= 2) {
					echo 6;
				} elseif (count($products) > 2 && count($products) <= 3) {
					echo 4;
				} else {
					echo 3;
				}
				?> col-sm-12 wow fadeInUp" data-wow-delay=".2s">
					<div class="single-blog">
						<div class="blog-description text-center">
							<img src="<?php echo base_url(); ?>uploads/products/<?= $product->image; ?>" alt="">
							<div class="blog-image">
							</div>
							<h2><?= $product->title; ?></h2>

							<div id="prod_desc<?= $product->id ?>">
								<?= $product->description; ?>
							</div>
							<a href="<?php echo base_url(); ?>home/product_details/<?= $product->id ?>">Read more</a>
						</div>
					</div>
				</div>

			<?php } ?>
			<!-- / END SINGLE BLOG DESIGN AREA -->
		</div>
	</div>

	<style>
		.blog-description p {
			display: block;
			/* Fallback for non-webkit */
			display: -webkit-box;
			max-width: 400px;
			height: 120px;
			/* Fallback for non-webkit */
			margin: 0 auto;
			font-size: 15px;
			line-height: 1.6;
			-webkit-line-clamp: 5;
			-webkit-box-orient: vertical;
			overflow: hidden;
			text-overflow: ellipsis;
		}
	</style>


</section>
<!-- / END BLOG DESIGN AREA -->

<!-- START SERVICES DESIGN AREA -->
<section id="service" class="service-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title">
					<h2>our services</h2>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- START SINGLE SERVICES DESIGN AREA -->
			<?php foreach ($services as $service) { ?>

				<a href="<?php echo base_url(); ?>home/service_details/<?= $service->id ?>">
					<div class="col-md-<?php
					if (count($services) > 0 && count($services) <= 1) {
						echo 12;
					} elseif (count($services) > 1 && count($services) <= 2) {
						echo 6;
					} elseif (count($services) > 2 && count($services) <= 3) {
						echo 4;
					} else {
						echo 3;
					}
					?> col-sm-12 col-xs-12 col-xxs-12 service_icon_info_top">
						<div class="service_icon">
							<span class="fa fa-<?= $service->logo; ?>"></span>
							<h5><?= $service->title; ?></h5>
						</div>
						<div class="service-overlay">
							<span class="fa fa-<?= $service->logo; ?>"></span>
							<h5><?= $service->title; ?></h5>
							<div><?= $service->description; ?></div>
						</div>
					</div>
				</a>
				<!-- / END SINGLE SERVICES DESIGN AREA -->
			<?php } ?>
		</div>
	</div>

	<style>
		.service-overlay div {
			display: block;
			/* Fallback for non-webkit */
			display: -webkit-box;
			max-width: 400px;
			height: 112px;
			/* Fallback for non-webkit */
			margin: 0 auto;
			font-size: 14px;
			line-height: 1.6;
			-webkit-line-clamp: 5;
			-webkit-box-orient: vertical;
			overflow: hidden;
			text-overflow: ellipsis;
			margin-bottom: 20px;
		}
	</style>

</section>
<!-- / END SERVICES DESIGN AREA -->

<!-- START PARTNERS DESIGN AREA -->
<section id="partners" class="testimonial-area section-padding" data-stellar-background-ratio="0.6">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title white-title">
					<h2>Our Partners</h2>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="testimonial-list wow fadeInUp">
				<!-- START SINGLE TESTIMONIAL DESIGN AREA -->
				<?php foreach ($partners as $partner) {
					?>
					<div class="single-testimonial text-center">
						<img src="<?= base_url(); ?>uploads/partners/<?= $partner->image; ?>" alt="">
						<h2 class="text-muted"><?= $partner->title; ?></h2>
						<p><?= $partner->description; ?></p>
					</div>
					<!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
				<?php } ?>
			</div>

		</div>
	</div>
</section>
<!-- / END PARTNERS DESIGN AREA -->

<!-- START CAREERS DESIGN AREA -->
<div id="jobs" class="why-chhose-us-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title">
					<h2>Jobs</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!--Default Service Block-->
			<?php foreach ($jobs as $job) { ?>
				<a href="<?php echo base_url(); ?>home/job_details/<?= $job->id ?>">
					<div class="default-service-block item-margin-bot-10 col-md-<?php
					if (count($jobs) > 0 && count($jobs) <= 1) {
						echo 12;
					} elseif (count($jobs) > 1 && count($jobs) <= 2) {
						echo 6;
					} elseif (count($jobs) > 2 && count($jobs) <= 3) {
						echo 4;
					} else {
						echo 3;
					}
					?> col-sm-12 col-xs-12">
						<div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
							 style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
							<div class="icon-box"><i class="fa fa-<?=$job->logo;?>"></i></div>
							<h3><?=$job->title;?></h3>
							<!--		<div class="text"><?=$job->description;?>
						</div> -->
						</div>
					</div>
				</a>

			<?php } ?>

		</div>
	</div>
	<style>
		.inner-box div {
			display: block;
			/* Fallback for non-webkit */
			display: -webkit-box;
			max-width: 400px;
			height: 72px;
			/* Fallback for non-webkit */
			margin: 0 auto;
			font-size: 15px;
			line-height: 1.6;
			-webkit-line-clamp: 3;
			-webkit-box-orient: vertical;
			overflow: hidden;
			text-overflow: ellipsis;
		}
	</style>
</div>
<!-- / END CAREERS DESIGN AREA -->


<!-- START NEWS DESIGN AREA -->
<section id="news" class="blog-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title">
					<h2>Latest News</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- START SINGLE BLOG DESIGN AREA -->
			<?php foreach ($news as $new) { ?>
			<div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-delay=".2s">
				<div class="single-blog">
					<div class="blog-description text-center">
						<img src="<?php echo base_url(); ?>uploads/news/<?= $new->image; ?>" alt="" style="width: 100%;height: 200px;">
						<div class="blog-image">
							<div class="time">
								<h2><?php $date = DateTime::createFromFormat("Y-m-d", $new->start_date); echo $date->format("d"); ?> <span><?php echo $date->format("M");?></span></h2>
							</div>
						</div>
						<h4 style="font-size: 14px;"><?= $new->title;?></h4>
						<h6 class="text-muted text-center"><i class="fa fa-user-secret"></i><?= $new->author;?>   <i class="fa fa-calendar"></i> <?=$new->start_date;?></h6>
						<div id="news_desc<?= $new->id ?>">
							<?= $new->description; ?>
						</div>
						<a href="<?php echo base_url();?>home/news_details/<?=$new->id; ?>">Read more</a>
					</div>
				</div>
			</div>
			<?php } ?>
			<!-- / END SINGLE BLOG DESIGN AREA -->
		</div>
	</div>


	<style>
		.blog-description p {
			display: block;
			/* Fallback for non-webkit */
			display: -webkit-box;
			max-width: 400px;
			height: 120px;
			/* Fallback for non-webkit */
			margin: 0 auto;
			font-size: 15px;
			line-height: 1.6;
			-webkit-line-clamp: 5;
			-webkit-box-orient: vertical;
			overflow: hidden;
			text-overflow: ellipsis;
		}
	</style>
</section>
<!-- / END NEWS DESIGN AREA -->


<!-- START CONTACT DESIGN AREA -->
<section id="contact" class="contact-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title">
					<h2>contact us</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- START CONTACT DETAILS DESIGN AREA -->
			<div class="contact-details-area wow fadeInUp" data-wow-delay=".2s">
				<div class="col-md-4 col-sm-12">
					<div class="single-contact-details text-center">
						<span class="lnr lnr-phone-handset"></span>
						<h4>phone</h4>
						<p class="text-muted"><?= $contacts[0]->phone;?></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="single-contact-details text-center">
						<span class="lnr lnr-envelope"></span>
						<h4>E-mail</h4>
						<p class="text-muted"><?= $contacts[0]->email?></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="single-contact-details text-center">
						<span class="lnr lnr-map-marker"></span>
						<h4>Address</h4>
						<p class="text-muted"><?= $contacts[0]->address?></p>
					</div>
				</div>
			</div>
			<!-- / END CONTACT DETAILS DESIGN AREA -->
		</div>

		<div class="row">
			<div id="map" style="display: block; width: 100%;"></div>
		</div>


		<div class="iframe-container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.30649716461!2d30.973893215055632!3d30.028063581888244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145859e554bcd821%3A0xc8f4abb061a22e08!2sPiTechnologies!5e0!3m2!1sen!2seg!4v1530792127890" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<div class="row contact-form-design-area wow fadeInUp">
			<!-- START CONTACT FORM DESIGN AREA -->
			<div class="col-md-12">
				<div class="contact-form">
					<div class="row">
						<div class="jsError"></div>

							<?php echo form_open('home/contact_fn', array('class'=>'jsform')); ?>
							<div class="form-group col-md-6">
								<p>Name</p>
								<input type="text" name="name" class="form-control" id="first-name"
									   required="required">
							</div>
							<div class="form-group col-md-6">
								<p>email</p>
								<input type="email" name="email" class="form-control" id="email"
									   required="required">
							</div>
							<div class="form-group col-md-6">
								<p>Phone</p>
								<input type="tel" name="phone" class="form-control" id="phone"
									   pattern="^[0-9+s()]*$" required="required"><span class="validity"></span>
							</div>
							<div class="form-group col-md-6">
								<p>Subject</p>
								<input type="text" name="subject" class="form-control" id="subject"
									   required="required">
							</div>
							<div class="form-group col-md-12">
								<p>message</p>
								<textarea rows="6" name="message" class="form-control" id="description"
										  required="required"></textarea>
							</div>
							<div class="col-md-12 text-center">
								<button id="submit" type="submit">Send Message</button>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<!-- /END  CONTACT DETAILS DESIGN AREA -->
		</div>
	</div>
</section>
<!-- / END CONTACT DESIGN AREA -->

<script>
	$(document).ready(function(){
		$('form.jsform').on('submit', function(form){
			form.preventDefault();
			$.post('<?=base_url();?>'+'home/contact_fn', $('form.jsform').serialize(), function(data){
				$('div.jsError').html(data);
			});
		});
	});
</script>
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
