<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pitechnologies Admin</title>

    <!-- Bootstrap -->
    <link href="<?= base_url(); ?>assets/new/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>assets/new/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>assets/new/build/css/custom.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/new/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>assets/new/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

  </head>

  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col" style="color:gray;">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a target="_blank" href="<?= base_url(); ?>" class="site_title"><i class="fa fa-paw"></i> <span><?=ucwords($this->session->userdata("admin_full_name"))?></span></a>
            </div>

            <div class="clearfix"></div>
            <?php
             $logo = base_url() . 'assets/nav/logo.png';?>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3 style="visibility: hidden;">.</h3>
                <ul class="nav side-menu">
                    <li><a href="<?= base_url(); ?>admin/slider" ><i class="fa fa-home"></i> Home Page slider </a></li>
                    <li><a href="<?= base_url(); ?>admin/about" ><i class="fa fa-info-circle"></i> About us </a></li>
                    <li><a href="<?= base_url(); ?>admin/products" ><i class="fa fa-info-circle"></i> Products </a></li>
                    <li><a href="<?= base_url(); ?>admin/services" ><i class="fa fa-gift"></i> Services </a></li>
                    <li><a href="<?= base_url(); ?>admin/partners" ><i class="fa fa-gift"></i> Partners </a></li>
                    <li><a href="<?= base_url(); ?>admin/news" ><i class="fa fa-newspaper-o"></i> News </a></li>
					<li><a href="<?= base_url(); ?>admin/careers"><i class="fa fa-briefcase"></i><p>Careers</p></a></li>
					<li><a href="<?= base_url(); ?>admin/jobs"><i class="fa fa-briefcase"></i><p>Jobs</p></a></li>
                    <li><a href="<?= base_url(); ?>admin/visitor_contacts" ><i class="fa fa-fax"></i> Visitor Contacts </a></li>
                    <li><a href="<?= base_url(); ?>admin/our_contacts" ><i class="fa fa-phone-square"></i> Contact Info </a></li>
               </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a href="logout" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?= $logo;?>" alt=""><?=ucwords($this->session->userdata("admin_full_name"))?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?= base_url();?>logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>

                  </ul>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
