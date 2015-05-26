<?php
/*
Template Name: Modal
 */
?>



<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
 
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
?>


<div class='modal-sm modal-default'>
	<div class="text-center">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
</div>

<?php wp_footer(); ?>