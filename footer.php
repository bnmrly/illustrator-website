<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Orvis
*/

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-footer-wrapper">

				<?php orvis_social_menu(); ?>

				<div class="site-info">
					<span class="site-info__facebook"><a href="https://www.facebook.com/profile.php?id=802790050"><img class="site-info__image" src="http://jimnewcombe.co.uk/wp-content/uploads/2017/11/facebook-logo.png" alt ="facebook logo" width="30"> </a></span>
					<span class="site-info__instagram"><a href="https://www.instagram.com/jimnewcombe/"><img class="site-info__image" src="http://jimnewcombe.co.uk/wp-content/uploads/2017/11/instagram-logo.png" alt ="instagram logo" width="30"> </a></span>
					<span class="site-info__twitter"><a href="https://twitter.com/Idol_Threat"><img class="site-info__image" src="http://jimnewcombe.co.uk/wp-content/uploads/2017/11/twitter-logo.png" alt ="twitter logo" width="30" > </a></span>
					<span class="site-info__contact"><a class="site-info--link" href="mailto:jim@jimnewcombe.co.uk">jim@jimnewcombe.co.uk</a></span>

					<div class="site-info__design">
						<span class ="site-info__design--info">Site Design by<a class="site-info--link" href="http://www.benmarley.co.uk/" target="_blank"> Ben Marley</a></span>
					</div>

				</div><!-- .site-info -->
			</div><!-- .site-footer-wrapper -->
		</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
