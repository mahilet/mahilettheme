<aside id="secondary"><!--#open side secondary-->

	<?php if ( is_active_sidebar( 'secondary' ) ) : ?>

		<?php dynamic_sidebar( 'secondary' ); ?>

	<?php else : ?>


        <!-- Begin Categories -->
		<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>
    	<!-- End Categories -->

			<!-- Begin archives -->
	<h3>Archives</h3>
	<ul>
		<?php wp_get_archives('type=yearly'); ?>
	</ul>
		<!-- End archives -->



	<?php endif; ?>

</aside><!-- / #side secondary> -->
