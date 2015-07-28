<?php get_header(); ?>
<?php get_sidebar('primary'); ?>
<div id="content">

	<h2>Error 404</h2>
	<h4>Sorry!</h4>
    <p>This page cannot be found.  Please try again or contact me if you think there is an error with this site.</p>

    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>
    <?php get_search_form(); ?>

</div><!-- END CONTENT -->
</div> <!--END MAIN-->
<?php get_sidebar('secondary'); ?>
<?php get_footer(); ?>