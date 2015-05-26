<section class='invert-section sign-up-banner'>
  <div class='padding-top'></div>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-1'></div>
      <div class='col-sm-5'>
        <h3 class='no-margin-bottom'>
          Join Groove Today
        </h3>
        <p class='margin-bottom-sm'>
          Stay up to date with the latest.
        </p>
      </div>
      <div class='col-sm-6'>
        <div class='pull-left margin-right'>
          <a class='btn btn-default margin-bottom fancybox fancybox.ajax' href='<?php echo esc_url( get_permalink( get_page_by_title( 'modal- signup tweet' ) ) ); ?>'>
            SIGN UP
          </a>
        </div>
        <div class='pull-left'>

          <?php if( get_field('next_page_url') ) { ?>

          <?php

          $post_object = get_field('next_page_url');

          if( $post_object ): 

          // override $post
          $post = $post_object;
          setup_postdata( $post ); 

          ?>


          <a class='btn btn-wire' href='<?php the_permalink(); ?>'>
            KEEP EXPLORING 
          </a>
          <p class='text-center no-margin-bottom'>
            <small>
              [next up, <?php the_title(); ?>]
            </small>
          </p>

          
          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          <?php endif; ?>

          <?php } else { ?>

          <a class='btn btn-wire' href='<?php echo esc_url( get_permalink( get_page_by_title( 'company' ) ) ); ?>'>
            KEEP EXPLORING 
          </a>
          <p class='text-center no-margin-bottom'>
            <small>
              [next up, Our Company]
            </small>
          </p>


          <?php  } ?>

        </div>
      </div>
    </div>
  </div>
  <div class='padding-bottom'></div>
</section>