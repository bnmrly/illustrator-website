<?php
/*
Template Name: poem-single-page
*/

get_header(); ?>
	<div id="primary" class="content-area">
		<div class="back">
			<p>
				<a class="back__link" href="http://jimnewcombe.co.uk/poetry/">Back to <b> Poetry</b></a>
			</p>
		</div><!-- back-poetry -->
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
