<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TOT
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
				Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<script src="http://assets.imperomedia.com/code/countdown.js" type="text/javascript"></script>
<script src="http://assets.imperomedia.com/code/nav_pulse.js" type="text/javascript"></script>

</body>
</html>