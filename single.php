<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar('primary'); ?>
<!-- END SIDEBAR -->

        <div id="content" class="single">

                    <!-- the loop goes here-->
                    <?php if (have_posts()) : ?>
                        <!--<h2>Projects(index.php)</h2>-->
                      <?php while (have_posts()) : the_post(); ?>


                       <h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
                       <p>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?> </p>


                         <?php the_content('More &raquo;'); ?>
                            <?php wp_link_pages(); ?>



                            <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
                	       <?php comments_template(); ?>
                    <?php endwhile; else: ?>
                         <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
					<?php edit_post_link('Edit.', '<p><small>', '</small></p>'); ?>
        </div><!-- END CONTENT -->
</div> <!--END MAIN-->
<?php get_sidebar('secondary'); ?>
<?php get_footer(); ?>
