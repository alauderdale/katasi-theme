<?php
/*
Template Name: Full width
 */
?>


<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'page_header' ); ?>
		<?php the_content(); ?>

	<?php endwhile; // end of the loop. ?>
	<?php get_template_part( 'content', 'sign_up' ); ?>


<?php get_footer(); ?>
