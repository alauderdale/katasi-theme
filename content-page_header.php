<?php
/**
 * @package boiler
 */
?>



<section class='header-section' style='background:<?php the_field('header_background_color');?> url(<?php the_field('header_background_image');?>) no-repeat scroll center top; '>
  <div class='container'>
    <div class='row'>
      <div class='col-md-1'></div>
      <div class='col-md-10'>
        <h1>
          <?php the_field('header_title');?>
        </h1>
        <div class='row'>
          <div class='col-md-2'></div>
          <div class='col-md-8'>
            <p class='lead'>
              <em>
                <?php the_field('header_subtext');?>
              </em>
            </p>
          </div>
          <div class='col-md-2'></div>
        </div>
      </div>
      <div class='col-md-1'></div>
    </div>
  </div>
</section>


