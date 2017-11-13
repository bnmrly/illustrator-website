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

		<!-- Removed Wordpress and theme links, replaced with site info -->

		<div class="site-info">

			<span class ="facebook"><a href="https://www.facebook.com/profile.php?id=802790050&fref=ts"><img src="http://jimnewcombe.co.uk/wp-content/uploads/2016/11/facebook_logo_invert.png" alt ="facebook logo" width="30"> </a></span><!-- .facebook -->

			<span class ="instagram"><a href="https://www.instagram.com/jimnewcombe/"><img src="http://jimnewcombe.co.uk/wp-content/uploads/2016/11/instagram_logo_invert.png" alt ="instagram logo" width="30"> </a></span><!-- .instagram -->

			<span class ="twitter"><a href="https://twitter.com/Idol_Threat"><img src="http://jimnewcombe.co.uk/wp-content/uploads/2016/11/twitter_logo_invert.png" alt ="twitter logo" width="30" > </a></span><!-- .twitter -->

			<span class ="email">jim@jimnewcombe.co.uk</span><!-- .email -->
			<div class="site-design">
				<span class ="benmarley">Site Design by<a href="http://www.benmarley.co.uk/" target="_blank"> Ben Marley</a></span><!-- benmarley -->
			</div><!-- .site-design -->

		</div><!-- .site-info -->

	</div><!-- .site-footer-wrapper -->

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
