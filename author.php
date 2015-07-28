<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar('primary'); ?>
<!-- END SIDEBAR -->

<div id="content" class="author">

            <!-- Set the $authorName variable -->
                    <?php
                      if(isset($_GET['author_name'])) :
                          $authorName = get_userdatabylogin($author_name);
                      else :
                          $authorName = get_userdata(intval($author));
                      endif;
                    ?>
                <h2 >Posts by <?php echo $authorName->display_name; ?></h2>
            <!-- The Loop -->
            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>
                	<!--<div class="post-box">-->

                     <ul><li id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?> <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more about <?php the_title(); ?>">  Read more &raquo;</a></p></li></ul><hr>
                <?php endwhile; ?>
          <nav class="post-nav">
               <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
               <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
           </nav>


            	<?php else : ?>
                    <p>Sorry, no posts found by <?php echo $authorName->display_name; ?></p>

<?php endif; ?>
</div><!-- END CONTENT -->
</div> <!--END MAIN-->
<?php get_sidebar('secondary'); ?>
<?php get_footer(); ?>
