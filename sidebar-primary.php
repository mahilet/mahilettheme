 <aside id="primary"> <!-- open #side primary-->



	<?php if ( is_active_sidebar( 'primary' ) ) : ?>

		<?php dynamic_sidebar( 'primary' ); ?>

	<?php else : ?>


						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/side-2.jpg" alt="sidebar image" /></a>
						<p>My favorite subject is <a href="https://wordpress.org/"> WordPress</p>
						<h3>Things to be aware of:</h3>
						<p>
							I have a dream: a dream of being a software Engineer who specialize in Web Development and database creation. With the certificate I will get from Seattle Central I should be able to get entry level work in one of these fields</p>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/side-1.jpg" alt="sidebar image" />
						<h3>Quote of the day:</h3>
						<blockquote> Think before you leap!</blockquote>

	<?php endif; ?>

</aside><!-- /#side primary-->
