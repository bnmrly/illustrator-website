<?php
/*
Template Name: fiction-single-page
*/

get_header(); ?>
<div id="primary" class="content-area">
	<div class="back-fiction">
		<p>
			<a href="http://jimnewcombe.co.uk/fiction/">Back to <b>Fiction</b></a>
		</p>
	</div><!-- back-fiction -->

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
