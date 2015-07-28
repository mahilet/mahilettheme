<footer>  <!--open footer-->


				<div id="copyright">
						<ul>
							<li> &copy; <?php bloginfo('name'); ?> <?php print (" " . date ('Y') . " "); ?> &bull; <li>
						 	<li> Web design by <a href="http://mahitletdan.com/portfolio" target="_blank">Mahilet Hailemariam</a> &bull; All rights reserved.</li>
							<li><?php wp_loginout(); ?></li>
						</ul>

				</div>
</footer>  <!--/footer-->
<div id="validation"><!--#validation-->
						<p>

							<a href="http://validator.w3.org/check?uri=referer" target="_blank">
							  <img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" width="31" height="32" alt="valid HTML5">
							 </a>
							 <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" target="_blank">
							  <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS3" height="31" width="88">
							</a>
						</p>
	</div><!--/#validation-->

		</div> <!--/#wrapper-->
<?php /* wp_footer function must be last item before closing body tag: many plugins use this hook to reference JavaScript files */ ?>
<?php wp_footer(); ?>

</body>
</html>
