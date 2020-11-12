<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Igoe_Theme_TR
 */

?>

</main>
<!-- gird items to arrange , maybe grid area-->
	<footer id="colophon" class="site-footer">
		
	<!-- grid item -->
		<div class="logo-wrap foot-grid-item">
			<a href="<?php echo site_url() ;?>"><img src="<?php echo site_url();  ;?>/images/svg/logo.svg" class="logo"></a>
		</div>

		<!-- grid item -->
		<div class="footer-contact foot-grid-item">
			<!-- phone, email, address -->
			<a class="f-phone" href="tel:2527141410">(252) 714-7410</a>
			<a href="mailto:customerservice@fastlending.com">Email Customer Service</a>
			<p class="m-only">Fast Lending,<br>
			LLC, 2017 Fiesta Drive<br>
			Sarasota, FL 34239</p>
			<p class="d-only">Fast Lending, LLC 2017 Fiesta Drive Sarasota, FL 34239</p> 
		</div>

		<!-- grid item -->
		<div class="policy-menu-wrap foot-grid-item">
			<a class="d-only" href="<?php echo site_url();?>/sitemap" target="_blank">SITEMAP</a>
			<a href="<?php echo site_url() ;?>/terms" target="_blank">TERMS</a>
			<a href="<?php echo site_url() ;?>/privacy-policy" target="_blank">PRIVACY POLICY</a>
			<a href="<?php echo site_url() ;?>/refund-policy" target="_blank">REFUND POLICY</a>
		</div>

		<!-- grid item -->
		<p class="copyright foot-grid-item">&copy <?php echo date("Y");?> Fast Lending. Website designed and developed by <a href="https://goigoecreative.com" target="_blank"><strong>Igoe Creative</strong></a>.</p>
		
		<!-- grid item -->
		<div class="footer-icons foot-grid-item">
 			<a href="" target="_blank"><img class="fb" src="<?php echo site_url();?>/images/facebook.png" alt=""/></a>
			<a href="" target="_blank"><img class="insta" src="<?php echo site_url();?>/images/insta.png" alt=""/></a>
			<a href="" target="_blank"><img class="tweet" src="<?php echo site_url();?>/images/tweet.png" alt=""/></a>
		</div>
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
ScrollReveal().reveal('footer', { delay: 500 });
</script>
<!-- <script src="js/jquery/dist/jquery.min.js"></script> -->
<script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "jISCXbjEZY");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>
</body>
</html>
