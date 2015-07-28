<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar('primary'); ?>
<!-- END SIDEBAR -->

        <div id="content" class="page">
                    <!-- the loop goes here-->
                    <?php if (have_posts()) : ?>

                      <?php while (have_posts()) : the_post(); ?>


                        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>



                       <?php the_content('More &raquo;'); ?>
                       <?php edit_post_link('Edit.', '<p><small>', '</small></p>'); ?>
                        <?php endwhile; ?>



<?php endif; ?>
</div><!-- END CONTENT -->
</div> <!--END MAIN-->
<?php get_sidebar('secondary'); ?>
<?php get_footer(); ?>
