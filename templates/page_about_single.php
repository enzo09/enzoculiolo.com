<?php
/**
 * Template Name: About Me Single
 */

the_post();
?>

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
    <script src='https://www.google.com/recaptcha/api.js'></script>
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

<body data-spy="scroll" data-target="#resMainMenu" data-offset="150" id="onePage" class="activateAppearAnimation headerTransparent">

<!-- Preloader -->
<div id="preloader">
    <div id="status"> <img class="img-responsive" src="images/logo-big.png" alt="Little Neko Alabama Bootstrap 3 Parallax One Page" /> Loading... </div>
</div>
<!-- Preloader -->

<!-- Primary Page Layout
    ================================================== -->
    <!-- globalWrapper -->
    <div id="globalWrapper">
        <!-- header -->
        <header class="navbar-fixed-top" id="mainHeader" role="banner">
            <div class="container">
                <nav class="navbar navbar-default scrollMenu" role="navigation" id="resMainMenu">
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
                            <li class="active"><a href="#homeFullScreen">Home</a></li>
                            <li><a href="#about">About Me</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#services">Services</a></li>
                            <li> <a href="#contact">Contact</a> </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- header -->

        <!-- ======================================= content ======================================= -->

        <!-- slider -->
        <section id="homeFullScreen">
            <div class="maskParent">
                <div class="bgMask"></div>
                <div id="fullScreenSliderWrapper">
                    <div class="blockCenter">
                        <div id="logoBig"> <img class="img-responsive" src="images/logo-big.png" alt="Little Neko Alabama Bootstrap 3 Parallax One Page" /> </div>
                        <div class="owl-carousel nekoDataOwl" data-neko_items="1" data-neko_singleitem="true" data-neko_paginationnumbers="true" data-neko_transitionstyle="backSlide">
                            <div class="item">
                                <h1>Hello, we are ALABAMA</h1>
                            </div>
                            <div class="item">
                                <h1>We come in peace</h1>
                            </div>
                            <div class="item">
                                <h1>Are you ready to come with us?</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider -->

        <!-- about -->
        <section id="about">
            <section class="pt40 color4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4" data-nekoanim="fadeInRight" data-nekodelay="10">
                            <img src="/wp-content/themes/enzoculiolo1.0/assets/images/theme-pics/me.png" alt="Enzo A. Culiolo" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h2>Enzo A. Culiolo</h2>
                            <p>
                                Enzo is an award-winning Graphics Designer with twelve years of professional experience in marketing and advertising with expertise in creative and art direction, graphics design, UI and UX design on website and mobile applications, web design, and app design. Enzo is also a Web Developer with expertise in using Wordpress, Bootstrap, PHP, JavaScript, JQuery, and CSS framework.<br><br>
                                Enzo is passionate about great design, hard work, and close attention to details.<br><br>
                                Enzo is currently working as a Creative Manager at <a href="http://www.actigraphcorp.com">ActiGraph, LLC</a>, in Pensacola, Florida. His areas of expertise include creative direction, art direction, corporate branding, tradeshows, advertising, collaterals, app design, software design, and website design and development.<br><br>
                                Enzo has worked as an Art Director for award-winning publication <a href="http://www.lifesabeachllc.com/">Life's A Beach, LLC</a>, in Destin, Florida. His areas of expertise included art direction for magazine, advertising, collaterals, and website design and development.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- about -->

        <!-- skills -->
        <section id="skills" class="pt40 pb40">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4" data-nekoanim="fadeInUp" data-nekodelay="300">
                        <h2>What I can offer</h2>
                        <p>I offer both conventional and unconventional creative services to suit the needs of any client.</p>
                        <br>
                        <h2>Mission</h2>
                        <p>As an explorer of new, clean, and fresh designs, I thrive on new discoveries, hard work, and attention to details. I bring this same passion into every project I execute, making sure I provide the best possible end result for my clients.</p>
                        <br>
                        <h2>Goals</h2>
                        <p>I'm always looking to make the next leap forward. If your company needs a logo, a website, an ad campaign, photography, print or even marketing, I can certainly help achieve your goals.</p>
                        <br>
                        <h2>Favorite Quote</h2>
                        <p>
                            <i>“Advertising is the ability to sense, interpret... to put the very heart throbs of a business into type, paper and ink.”</i> - Leo Burnett
                        </p>
                    </div>
                    <div class="col-sm-4" data-nekoanim="fadeInUp" data-nekodelay="400">
                        <h2>Accolades</h2>
                        <p>6 Gold ADDYs including “Best of Show” as a student and one Silver ADDY as a professional.</p>
                        <br>
                        <h2>Clubs and Memberships</h2>
                        <p><a href="http://www.westerngate.toastmastersclubs.org">Western Gate</a> Toastmaster Club, in Pensacola, Florida.</p>
                        <br>
                        <h2>Born</h2>
                        <p>February 9, 1980, in Panama City, Panama.</p>
                        <br>
                        <h2>Education</h2>
                        <p>Enzo moved to the United States in 1998 at the age of eighteen, after graduating high school. He attended and graduated college with two A.A.S. degrees in Graphics Design Technology and Multimedia from <a href="http://www.nwfsc.edu/">Northwest Florida State College</a>, former Okaloosa-Walton Community College in May of 2003. He also attended and graduated with a Bachelor's of Communication Arts in Advertising from <a href="http://www.uwf.edu/">University of West Florida</a> in December of 2012.</p>
                        <br>
                        <h2>Personal</h2>
                        <p>Enzo lives with his wife and own two condos in Destin, Florida and have a little chihuahua named Sophie. He enjoys playing and watching sports, especially soccer, college football, and basketball. His favorite pass times are watching movies and being an amateur astronmer.</p>
                    </div>
                    <div class="col-sm-4" data-nekoanim="fadeInUp" data-nekodelay="200">
                        <h2>Skills</h2>
                        <h4>Creative Direction</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span>100%</span> </div>
                        </div>
                        <h4>Art Direction</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span>100%</span> </div>
                        </div>
                        <h4>Marketing</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span>100%</span> </div>
                        </div>
                        <h4>Branding</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span>100%</span> </div>
                        </div>
                        <h4>Web Development</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width:98%;"> <span>98%</span> </div>
                        </div>
                        <h4>User Interface/Experience</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"> <span>95%</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / skills -->

        <!-- portfolio -->
        <section class="parallaxSection image-1" data-stellar-background-ratio="0.5" id="portfolio">
            <div class="maskParent">
                <div class="bgMask"></div>
                <div class="paralaxText container pb30 pt40">
                    <div class="row">
                        <div class="col-md-12 text-center pt30 pb30">
                            <h2><i class="icon-th iconMedium iconRounded"></i>
                                <br /> Portfolio
                                <br /> <small>
                                Latest cool projects we've been working on
                            </small> </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio -->

        <section id="homePortfolio" class="imgHover clearfix portfolioMosaic mosaic5 mosaicMoreLink neko-hover-1 color0">
            <article>
                <figure class="minimalBox"> <img alt="" src="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/vign6.jpg" class="img-responsive">
                    <figcaption>
                        <div class="pinInfo">
                            <h3>Full width image</h3>
                            <p class="hidden-xs">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="iconLinks"> <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture"></i></a> <a href="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/zoom6.jpg" class="image-link" title="Zoom"><i class="icon-search"></i></a> </div>
                    </figcaption>
                </figure>
            </article>
            <article>
                <figure class="minimalBox"> <img alt="" src="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/vign8.jpg" class="img-responsive">
                    <figcaption>
                        <div class="pinInfo">
                            <h3>Youtube Video</h3>
                            <p class="hidden-xs">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="iconLinks"> <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-videocam"></i></a> <a href="https://www.youtube.com/watch?v=H4CtL4_By6I" class="image-iframe" title="Zoom"><i class="icon-search"></i></a> </div>
                    </figcaption>
                </figure>
            </article>
            <article>
                <figure class="minimalBox"> <img alt="" src="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/vign2.jpg" class="img-responsive">
                    <figcaption>
                        <div class="pinInfo">
                            <h3>Video Vimeo</h3>
                            <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="iconLinks"> <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-videocam"></i></a> <a href="//player.vimeo.com/video/122258599" class="image-iframe" title="Zoom"><i class="icon-search"></i></a> </div>
                    </figcaption>
                </figure>
            </article>
            <article>
                <figure class="minimalBox"> <img alt="" src="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/vign1.jpg" class="img-responsive">
                    <figcaption>
                        <div class="pinInfo">
                            <h3>Gallery</h3>
                            <p class="hidden-xs">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="iconLinks"> <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-camera"></i></a> <a href="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/zoom3.jpg" data-gallery="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/zoom1.jpg,images/portfolio/zoom2.jpg" class="image-link" title="Zoom"><i class="icon-search"></i></a> </div>
                    </figcaption>
                </figure>
            </article>
            <article>
                <figure class="minimalBox"> <img alt="" src="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/vign5.jpg" class="img-responsive">
                    <figcaption>
                        <div class="pinInfo">
                            <h3>Photo</h3>
                            <p class="hidden-xs">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="iconLinks"> <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a> <a href="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/zoom5.jpg" class="image-link" title="Zoom"><i class="icon-search"></i></a> </div>
                    </figcaption>
                </figure>
            </article>
            <article>
                <figure class="minimalBox"> <img alt="" src="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/vign7.jpg" class="img-responsive">
                    <figcaption>
                        <div class="pinInfo">
                            <h3>Photo</h3>
                            <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="iconLinks"> <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a> <a href="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/zoom7.jpg" class="image-link" title="Zoom"><i class="icon-search"></i></a> </div>
                    </figcaption>
                </figure>
            </article>
            <article>
                <figure class="minimalBox"> <img alt="" src="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/vign3.jpg" class="img-responsive">
                    <figcaption>
                        <div class="pinInfo">
                            <h3>Photo</h3>
                            <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="iconLinks"> <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a> <a href="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/zoom3.jpg" class="image-link" title="Zoom"><i class="icon-search"></i></a> </div>
                    </figcaption>
                </figure>
            </article>
            <article>
                <figure class="minimalBox"> <img alt="" src="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/vign4.jpg" class="img-responsive">
                    <figcaption>
                        <div class="pinInfo">
                            <h3>Photo</h3>
                            <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="iconLinks"> <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a> <a href="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/zoom4.jpg" class="image-link" title="Zoom"><i class="icon-search"></i></a> </div>
                    </figcaption>
                </figure>
            </article>
            <article>
                <figure class="minimalBox"> <img alt="" src="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/vign9.jpg" class="img-responsive">
                    <figcaption>
                        <div class="pinInfo">
                            <h3>Photo</h3>
                            <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="iconLinks"> <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a> <a href="/wp-content/themes/enzoculiolo1.0/assets/images/portfolio/zoom9.jpg" class="image-link" title="Zoom"><i class="icon-search"></i></a> </div>
                    </figcaption>
                </figure>
            </article>
        </section>
        <!-- works -->

        <!-- services -->
        <section id="services" class="pb40 pt40">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mb40">
                        <h1>Our Services</h1>
                        <h2 class="subTitle">Build your website now!</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <article class="boxFeatured">
                            <a href="#">
                                <i class="icon-heart iconMedium"></i>
                                <h2>Clean design</h2>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
                            </a>
                        </article>
                    </div>
                    <div class="col-sm-3">
                        <article style="opacity: 1;" class="boxFeatured">
                            <a href="#">
                                <i class="icon-rocket iconMedium"></i>
                                <h2>HTML5 &amp; CSS3</h2>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
                            </a>
                        </article>
                    </div>
                    <div class="col-sm-3">
                        <article class="boxFeatured">
                            <a href="#">
                                <i class="icon-desktop iconMedium"></i>
                                <h2>Responsive design</h2>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
                            </a>
                        </article>
                    </div>
                    <div class="col-sm-3">
                        <article class="boxFeatured">
                            <a href="#">
                                <i class="icon-search iconMedium"></i>
                                <h2>Retina ready UI</h2>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
                            </a>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <article style="opacity: 1;" class="boxFeatured">
                            <a href="#">
                                <i class="icon-camera iconMedium"></i>
                                <h2>OWl carousel</h2>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
                            </a>
                        </article>
                    </div>
                    <div class="col-sm-3">
                        <article style="opacity: 1;" class="boxFeatured">
                            <a href="#">
                                <i class="icon-link-ext-alt iconMedium"></i>
                                <h2>Magnific popup</h2>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
                            </a>
                        </article>
                    </div>
                    <div class="col-sm-3">
                        <article class="boxFeatured">
                            <a href="#">
                                <i class="icon-bold iconMedium"></i>
                                <h2>Bootstrap3</h2>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
                            </a>
                        </article>
                    </div>
                    <div class="col-sm-3">
                        <article class="boxFeatured">
                            <a href="#">
                                <i class="icon-gift iconMedium"></i>
                                <h2>Neko Framework</h2>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
                            </a>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- / services -->

        <!-- contact -->
        <section id="contact" class="pb40 pt40 color4" style="border-top: 1px solid #ddd;">
            <div class="container">
                <div class="row">
                    <?php echo do_shortcode( '[contact-form-7 id="57" title="Contact form 1"]' ); ?>
                    <!-- <div class="col-sm-4">
                        <h3>Let's Talk</h3>
                        <p>I'd love to talk about your project. You can fill out the form or contact me directly:</p>
                        <address>
                            <p>
                                <i class="icon-mail-alt"></i>&nbsp;<a href="mailto:enzo@enzoculiolo.com">enzo@enzoculiolo.com</a>
                            </p>
                        </address>
                    </div>
                    <form method="post" action="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/neko-contact-ajax-plugin/php/form-handler.php" id="contactfrm" role="form">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"  title="Please enter your name (at least 2 characters)"/>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address"/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input name="phone" class="form-control required digits" type="tel" id="phone" size="30" value="" placeholder="Enter phone" title="Please enter a valid phone number (at least 10 characters)">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="comments">Comments</label>
                                <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
                            </div>
                            <fieldset class="clearfix securityCheck">
                                <h3>Security</h3>
                                <div class="form-group">
                                    <img src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/neko-contact-ajax-plugin/php/image.php" alt="Image verification"/>
                                    <input class="required form-control"  id="verify" name="verify" type="text" >
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-8 col-md-offset-4">
                            <div class="result"></div>
                            <button name="submit" type="submit" class="btn btn-lg" id="submit"> Submit</button>
                        </div>
                    </form> -->
                </div>
            </div>
        </section>
        <!-- / contact -->

        <!-- footer -->
        <footer id="footerWrapper" class="footer">
            <section id="mainFooter">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footerWidget">
                                <h3>Mission</h3>
                                <p>
                                    As an explorer of new, clean, and fresh designs, I thrive on new discoveries, hard work, and attention to details. I bring this same passion into every project I execute, making sure I provide the best possible end result for my clients.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footerWidget">
                                <h3>Contact</h3>
                                <address>
                                    <p>
                                        <i class="icon-mail-alt"></i>&nbsp;<a href="mailto:enzo@enzoculiolo.com">enzo@enzoculiolo.com</a>
                                    </p>
                                </address>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footerWidget">
                                <h3>Socialize</h3>
                                <ul class="socialNetwork">
                                    <li><a href="http://www.twitter.com/eculiolo09" class="tips" title="" data-original-title="Twitter"><i class="icon-twitter-bird iconRounded"></i></a></li>
                                    <li><a href="https://www.linkedin.com/pub/enzo-culiolo/106/613/3b2" class="tips" title="" data-original-title="Linkedin"><i class="icon-linkedin-1 iconRounded"></i></a></li>
                                    <li><a href="https://github.com/enzo09" class="tips" title="" data-original-title="Github"><i class="icon-github iconRounded"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="footerRights">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>&copy;<?php echo date('Y'); ?> Enzo A. Culiolo. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- / footer -->
    </div>
    <!-- global wrapper -->

<!-- End Document
    ================================================== -->
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/respond/respond.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
    <!-- third party plugins  -->
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/easing/jquery.easing.1.3.js"></script>
    <!-- carousel -->
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
    <!-- pop up -->
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- isotope -->
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/isotope/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/isotope/jquery.isotope.sloppy-masonry.min.js"></script>
    <!-- form -->
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/neko-contact-ajax-plugin/js/jquery.form.js"></script>
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script>
    <!-- lightbox system -->
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- parallax -->
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/parallax/js/jquery.stellar.min.js"></script>
    <!-- sharre -->
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/jquery.sharrre-1.3.4/jquery.sharrre-1.3.4.min.js"></script>
    <!-- appear -->
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/appear/jquery.appear.js"></script>
    <!-- toucheeffect -->
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/toucheeffect/toucheffects.js"></script>
    <!-- Custom  -->
    <script type="text/javascript" src="/wp-content/themes/enzoculiolo1.0/assets/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>