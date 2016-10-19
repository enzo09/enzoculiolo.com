<?php
/**
 * Template Name: Contact
 */

the_post();

get_header();
?>

<!-- ======================================= content ======================================= -->
<main id="content">
    <header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Contact</h1>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <ul id="navTrail">
                        <li><a href="index.html">Home</a></li>
                        <li id="navTrailLast">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div id="mapWrapper"></div>
    <!-- form -->
    <section class="pb40 pt40">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" data-nekoanim="fadeInUp" data-nekodelay="300">
                  <h3>Let's Talk</h3>
                  <p>I'd love to talk about your project. You can fill out the form or contact me directly:</p>
                  <address>
                    <p>
                        <i class="fa fa-phone" aria-hidden="true" style="margin-right:13px;"></i>850.687.0208<br>
                        <i class="fa fa-envelope" aria-hidden="true" style="margin-right:10px;"></i><a href="mailto:enzo@enzoculiolo.com">enzo@enzoculiolo.com</a>
                    </p>
                  </address>
                </div>
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <!-- / form -->
</main>
<!-- / content -->

<?php get_footer(); ?>