<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar('primary'); ?>
<!-- END SIDEBAR -->

        <div id="content" class="index">

                    <!-- the loop goes here-->
                    <?php if (have_posts()) : ?>


                       
                      <?php while (have_posts()) : the_post(); ?>
                        <div class="post-box">


                           <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                           <p>Posted <?php _e('By');?> <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?> with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>


                           <?php the_content('More &raquo;'); ?>
                           <?php edit_post_link('Edit.', '<p><small>', '</small></p>'); ?>

                      </div>
                        <?php endwhile; ?>


                        <nav class="post-nav">
                                <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
                                <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
                    		</nav>


<?php endif; ?>

</div><!-- END CONTENT -->
</div> <!--END MAIN-->
<?php get_sidebar('secondary'); ?>
<?php get_footer(); ?>
