<?php
/**
 * The template for displaying the footer.
 *
 * Contains all content after the main content area and sidebar
 *
 * @package zeeDynamic
 */

?>
	
	</div><!-- #content -->
	
	<?php do_action( 'zeedynamic_before_footer' ); ?>

	<div id="footer" class="footer-wrap">
	
		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div>
			<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
			<style>
	@import url('https://fonts.googleapis.com/css?family=Comfortaa');
	</style>
			<BLOCKQUOTE>
			<UL>
			<LI><b><a href="https://ffdk.academy/impressum/" target="_self" rel="noopener"> Impressum</a></b>
			<LI><b><a href="https://ffdk.academy/datenschutzerklaerung/" target="_self" rel="noopener"> Datenschutzerklärung</a></b>
			<LI><b>Quelle des Themes: <a href="https://themezee.com/themes/zeedynamic/" target="_blank" rel="noopener"> zeeDynamic</a></b>			
			</UL>
			</BLOCKQUOTE>
			</div>
			<div id="footer-text" class="site-info">
			</div><!-- .site-info -->
			
		</footer><!-- #colophon -->
		
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>