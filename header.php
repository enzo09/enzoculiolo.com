<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
<!-- Title
    ================================================== -->
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="This is my personal website to showcase my work, provide services, and get inspired.">
    <meta name="keywords" content="Enzo Culiolo, Enzo, Culiolo">
    <meta name="author" content="Enzo A. Culiolo">

<!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Favicon
    ================================================== -->
    <link rel="shortcut icon" href="/wp-content/themes/enzoculiolo1.0/assets/images/ec-favicon-red.ico">
    <link rel="ec-favicon-red" href="/wp-content/themes/enzoculiolo1.0/assets/images/ec-favicon-red.png">
    <link rel="ec-favicon-red" sizes="72x72" href="/wp-content/themes/enzoculiolo1.0/assets/images/ec-favicon-red-72x72.png">
    <link rel="ec-favicon-red" sizes="114x114" href="/wp-content/themes/enzoculiolo1.0/assets/images/ec-favicon-red-114x114.png">
    <link rel="ec-favicon-red" sizes="144x144" href="/wp-content/themes/enzoculiolo1.0/assets/images/ec-favicon-red-144x144.png">

<!-- CSS
    ================================================== -->
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/enzoculiolo1.0/assets/bootstrap/css/bootstrap.min.css">
    <!-- Web Font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/animation-framework/animate.css" />
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/isotope/css/style.css">
    <!-- Pop Up -->
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/magnific-popup/magnific-popup.css" />
    <!-- nekoAnim -->
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/appear/nekoAnim.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/owl.carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/owl.carousel/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/owl.carousel/owl-carousel/owl.theme.css">
    <!-- Icon Fonts -->
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/enzoculiolo1.0/assets/font-icons/custom-icons/css/custom-icons.css">
    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/enzoculiolo1.0/assets/css/layout.css">
    <link type="text/css" id="colors" rel="stylesheet" href="/wp-content/themes/enzoculiolo1.0/assets/css/colors.css">
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/enzoculiolo1.0/assets/css/custom.css">
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/enzoculiolo1.0/style.css">
    <!-- Scripts -->
    <script src="/wp-content/themes/enzoculiolo1.0/assets/js/modernizr-2.6.1.min.js"></script>
    <!-- Old IE Browser Scripts -->
    <!--[if lt IE 9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Wordpress Head
    ================================================== -->
    <?php wp_head(); ?>

<!-- Track Pages in Google Analytics
    ================================================== -->
    <?php include_once("includes/analyticstracking.php") ?>

</head>

<body class="header4">

<!-- Primary Page Layout
    ================================================== -->
    <!-- globalWrapper -->
    <div id="globalWrapper" class="localscroll">
        <header class="navbar-fixed-top">
            <!-- pre header -->
            <div id="preHeader" class="hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <ul class="quickMenu">
                            	<li><a href="template-about.html">Home</a></li>
                                <li><a href="template-about.html">About</a></li>
                                <li><a href="template-team.html">Portfolio</a></li>
                                <li><a href="template-contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-6">
                            <div id="contactBloc" class="clearfix">
                                <!-- social icons -->
                                <ul class="socialNetwork">
                                    <li><a href="#" class="tips" title="follow me on Facebook"><i class="icon-facebook-1"></i></a></li>
                                    <li><a href="#" class="tips" title="follow me on Twitter"><i class="icon-twitter-bird"></i></a></li>
                                    <li> <a href="#" class="tips" title="follow me on Google+"><i class="icon-gplus-1"></i></a> </li>
                                    <li> <a href="#" class="tips" title="follow me on Linkedin"><i class="icon-linkedin-1"></i></a> </li>
                                    <li> <a href="#" class="tips" title="follow me on Dribble"><i class="icon-dribbble"></i></a> </li>
                                </ul>
                                <!-- social icons -->

                                <!-- phone -->
                                <span class="contactPhone"><i class="icon-mobile"></i>850.850.0208</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / pre header -->

            <!-- header -->
            <div id="mainHeader" role="banner">
                <div class="container">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <!-- responsive navigation -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            	<span class="sr-only">Toggle navigation</span>
                            	<span class="icon-bar"></span>
                            	<span class="icon-bar"></span>
                            	<span class="icon-bar"></span>
                            </button>
                            <!-- Logo -->
                            <a class="navbar-brand" href="/">
                            	<img src="/wp-content/themes/enzoculiolo1.0/assets/images/ec-logo-red.png" alt="Enzo Culiolo Logo" />
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="mainMenu">
                            <!-- Main navigation -->
                            <ul class="nav navbar-nav pull-right">
                                <!-- Links -->
								<?php wp_nav_menu(array(
									'menu'            => 'Site Menu',
									'container'       => false,
									'items_wrap'      => '%3$s',
									'link_attr_data'  => array('toggle' => 'hasSubMenu'),
									'link_attr_class' => 'firstLevel',
									'walker'          => new main_site_walker_nav_menu()
								)); ?>
								<!-- End Links -->
                            </ul>
                            <!-- End main navigation -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- / header -->
