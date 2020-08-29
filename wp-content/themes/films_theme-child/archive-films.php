<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package films_theme
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php if ( have_posts() ) : ?>

			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</div>
					</div>
				</div>
				
			</section><!-- .page-header -->
		<section>
			<div class="container">
				<div class="row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					

				else :

					

				endif;
				?>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php

get_footer();
?>