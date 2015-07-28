<?php get_header(); ?>
<?php get_sidebar('primary'); ?>


<div id="content">

	<?php if (have_posts()) : ?>

		<h2 >Search Results</h2>
    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-box">
    	 <!--  <h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4> -->
       <ul><li id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> Posted on <?php the_time('F jS, Y') ?><p><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more about <?php the_title(); ?>">  Read more &raquo;</a></p></li></ul>


       </div><!-- /.post-box -->
    <?php endwhile; ?>

	<?php else : ?>
		<p>No Searches found! Please use the search form below to search other contents.</p>
    <div id = "search3">
    	<?php get_search_form(); ?>
      </div>



<?php endif; ?>
</div><!-- END CONTENT -->
</div> <!--END MAIN-->
<?php get_sidebar('secondary'); ?>
<?php get_footer(); ?>
