<?php
/**
 * Template Name: About Me Single
 */

the_post();

get_header();
?>

<!-- ======================================= content ======================================= -->
<main id="content">
	<!-- slider -->
    <section>
        <div class="owl-carousel neko-data-owl owl-animated" data-neko_items="1" data-neko_singleitem="true" data-neko_paginationnumbers="false" data-neko_transitionstyle="fade" data-neko_autoheight="true">
            <!-- owl carousel item 2 -->
            <div class="item">
                <div class="bgMask opacity-4"></div>
            	<img src="/wp-content/themes/enzoculiolo1.0/assets/images/slider/owl-animated/bg1-balcony-view.jpg" alt="image" class="full-width" />
            </div>
            <!-- / owl carousel item 2 -->
            <!-- owl carousel item 2 -->
            <div class="item">
                <div class="bgMask opacity-5"></div>
                <img src="/wp-content/themes/enzoculiolo1.0/assets/images/slider/owl-animated/bg2.jpg" alt="image" class="full-width" />
            </div>
            <!-- / owl carousel item 2 -->
            <!-- owl carousel item 3 -->
            <div class="item">
                <div class="bgMask opacity-2"></div>
                <img src="/wp-content/themes/enzoculiolo1.0/assets/images/slider/owl-animated/bg3.jpg" alt="image" class="full-width" />
            </div>
            <!-- / owl carousel item 3 -->
        </div>
    </section>
    <!-- slider -->

    <!-- intro -->
	<section class="pt40 pb40">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Recent News</h2>
					<img src="/wp-content/themes/enzoculiolo1.0/assets/images/slider/carousel/corporate-mini-3.jpg" alt="ALABAMA template" class="img-responsive mb15"/>
				</div>
				<div class="col-md-6">
					<h2>Vision</h2>
					<p>
						This did not seem to encourage the witness at all: he kept shifting from one foot to the other, looking uneasily at the Queen, and in his confusion he bit a large piece out of his teacup instead of the bread-and-butter.
					</p>
					<h3>Pursuing this route will enable us to efficiently standardize</h3>
					<p>
						The targeted, tactical and nimble attitude; this is why a visionary emotional intelligence enhances target pre-plans ahead of schedule. Core meeting and requirement strategically structure a measure, whereas the enablers generate cornerstones reaped from our double-digit improvement
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- / intro -->
</main>
<!-- / content -->

<?php get_footer(); ?>