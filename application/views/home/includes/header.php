<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin - <?= isset ($page_title)?$page_title: ' Admin'  ;?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url(); ?>assets/new/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>assets/new/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
   <!-- <link href="<?= base_url(); ?>assets/new/build/css/custom.min.css" rel="stylesheet"> -->
    <!-- jQuery -->
    <link href="<?= base_url(); ?>assets/home/css/home_style.css" rel="stylesheet">


    <script src="<?= base_url(); ?>assets/new/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>assets/new/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <style type="text/css">
    @font-face {
    font-family: "Cairo";
    font-weight: normal;
    src: url(<?= base_url(); ?>assets/home/css/fonts/Cairo-Regular.ttf) format("truetype");
    }
    @font-face {
    font-family: "Cairo";
    font-weight: bold;
    src: url(<?= base_url(); ?>assets/home/css/fonts/Cairo-Bold.ttf) format("truetype");
    }
    .logo{position: absolute;z-index: 9999;top:10px;left: 100px;}
    </style>

  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">
  <!--  <img src="<?= base_url(); ?>assets/home/images/pitechnologies_logo.png"> -->

<!--end navigation-->
<!-- 1st section-->

 <div class="wrapper">
  <div class="logo">
      <img src="<?= base_url(); ?>assets/home/images/logo.png">
  </div>
<div class="navbar navbar-inverse navbar-fixed-left">
  <ul class="nav navbar-nav" id = "sidebar">
    <li class="<?= ($name =='home')? 'active' : '' ?>"><a href="<?= base_url(); ?>Home" style="margin: 0px 0 0 0;"><i class="fa fa-home"></i><p>Home</p></a></li>
    <li class="<?= ($name =='about')? 'active' : '' ?>"><a href="<?= base_url(); ?>Home/about"><i class="fa fa-info-circle"></i><p>About</p></a></li>
    <li class="<?= ($name =='products')? 'active' : '' ?>"><a href="<?= base_url(); ?>Home/products"><i class="fa fa-th-large"></i><p>Products</p></a></li>
   <li  class="<?= ($name =='services2')? 'active' : '' ?>"><a href="<?= base_url(); ?>Home/services"><i class="fa fa-gift"></i><p>Services</p></a></li>
    <li class="<?= ($name =='partners')? 'active' : '' ?>"><a href="<?= base_url(); ?>Home/partners"><i class="fa fa-mortar-board"></i><p>Partners</p></a></li>
   <li   class="<?= ($name =='careers')? 'active' : '' ?>"><a href="<?= base_url(); ?>Home/careers"><i class="fa fa-briefcase"></i><p>Careers</p></a></li>
   <li  class="<?= ($name =='news')? 'active' : '' ?>"><a href="<?= base_url(); ?>Home/news"><i class="fa fa-newspaper-o"></i><p>News</p></a></li>
   <li class="<?= ($name =='sales')? 'active' : '' ?>"><a href="<?= base_url(); ?>Home/sales"><i class="fa fa-money"></i><p>Sales</p></a></li>
   <!--<li><a href="#contact"><i class="fa fa-phone-square"></i><p>Contacts</p></a></li>!-->

   <li class="<?= ($name =='contact')? 'active' : '' ?>"><a href="<?= base_url(); ?>Home/contact_view"><i class="fa fa-phone-square"></i><p>Contacts</p></a></li>
  </ul>

</div>



<!-- 2nd section-->
  <!-- <div class="container" id="info">
 <div class="row">
   <h2>Link 2</h2>
 </div>
</div> -->
    <!--3rd section-->
 <!--   <div class="container" id="love">
 <div class="row">
   <h2>Link 3</h2>
 </div>
</div> -->
    <!--4th section-->
<!--    <div class="container" id="work">
 <div class="row">
   <h2>Link 4</h2>
 </div>
</div> -->
    <!--5th section-->
<!--    <div class="container" id="careers">
 <div class="row">
   <h2>Link 5</h2>
 </div>
</div> -->
    <!--6th section-->
<!--    <div class="container" id="sales">
 <div class="row">
   <h2>Link 6</h2>
 </div>
</div> -->
    <!--7th section-->
<!--    <div class="container" id="contact">
 <div class="row">
   <h2>Link 7</h2>
 </div>
</div>
</div> -->
