<?php
/*
Template Name: Contact
 */
?>

<?php get_header(); ?>


<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
 
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
?>

  <?php get_template_part( 'content', 'page_header' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>

  <section>
    <div class='container'>
      <div class='row'>
        <div class='col-md-2'></div>
        <div class='col-md-8'>
          <div class='card double-margin-bottom' style='margin-top:-130px;'>
            <div class='row'>
              <div class='col-md-1'></div>
              <div class='col-md-10'>
                <?php the_content();?>
              </div>
            </div>
          </div>
          <div class='text-center'>
            <h6>
              Location
            </h6>
            <p class='text-color'>
              <small>
                <?php the_field('contact_location');?>
              </small>
              <div class='col-md-1'></div>
            </p>
          </div>
        </div>
        <div class='col-md-2'></div>
      </div>
    </div>
  </section>


	<?php endwhile; // end of the loop. ?>
	<?php get_template_part( 'content', 'sign_up' ); ?>


<?php get_footer(); ?>