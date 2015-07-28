<?php get_header(); ?>

<div id="content3" class="attachment">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php $attachment_link = get_the_attachment_link($post->ID, true, array(940, 1000)); // This also populates the iconsize for the next line ?>
				<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 50 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>
				<div class="post" id="post-<?php the_ID(); ?>">
						<p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><?php /*echo basename($post->guid);*/ ?></p>
						<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
						<!-- next/back -->
						<nav class="post-nav">
									<p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
									<p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
					</nav>


				</div>
        <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
						<p class="postmetadata alt clear"><small><?php edit_post_link('Edit this entry.','',''); ?></small></p>

			<?php endwhile; else: ?>
				<p>Sorry, no attachments matched your criteria.</p>
			<?php endif; ?>
	</div>
</div> <!--END MAIN-->

<?php get_footer(); ?>
