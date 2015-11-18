<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage enzoculiolo1.0
 * @since 2015
 */

get_header(); ?>

	<main id="content">

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post(); ?>

		<section class="pt40 pb40">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>
		<?php

	// End the loop.
	endwhile;
	?>

	</main><!-- .site-main -->

<?php get_footer(); ?>