
<?php while ( have_posts() ) : the_post(); ?>


<?php get_template_part( 'content', 'sign_up_inner' ); ?>


<?php endwhile; // end of the loop. ?>