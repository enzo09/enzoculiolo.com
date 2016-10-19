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
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <!-- / form -->
</main>
<!-- / content -->

<?php get_footer(); ?>