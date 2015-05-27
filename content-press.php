<section>
  <div class='container'>
    <div class='row'>
    	<?php $postLoopOne = new WP_Query( array( 'post_type' => 'press','category_name' => 'featured') ); ?>
            <?php while ( $postLoopOne->have_posts() ) : $postLoopOne->the_post(); ?>
      <div class='col-md-4'>
        <div class='padded'>
          <img class='img-responsive margin-bottom' src='<?php the_field('logo');?>' width='167px'>
          <div class='padding-right'>
            <p>
              <small>
                <em>
                  <?php the_field('quote');?>
                </em>
              </small>
            </p>
            <a class='bold-font-name' href='<?php the_field('article_link');?>' target="_blank">
              <small>
                read more
              </small>
            </a>
          </div>
        </div>
      </div>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</section>
<section class='no-padding'>
  <div class='row text-center'>
    <div class='col-lg-12'>
      <h3>
        In the News
      </h3>
    </div>
  </div>
</section>
<section class='off-white'>
  <div class='container'>
    <div class='row'>
    	<?php $postLoopTwo = new WP_Query( array( 'post_type' => 'press') ); ?>
            <?php while ( $postLoopTwo->have_posts() ) : $postLoopTwo->the_post(); ?>
	      <div class='col-md-6'>
	        <div class='card card-press'>
	          <img class='img-responsive margin-bottom margin-auto' src='<?php the_field('logo');?>' width='167px'>
	          <p class="press-title">
	            <?php the_field('article_title');?>
	          </p>
	          <hr>
	          <div class='row'>
	            <div class='col-xs-5'>
	              <h6 class='extra-light-text-color'>
	                <?php the_field('article_release_date');?>
	              </h6>
	            </div>
	            <div class='col-xs-7'>
	              <a class='btn btn-wire-primary pull-right' href='<?php the_field('article_link');?>' target='_blank'>
	                View Story
	                <i class='md md-launch'></i>
	              </a>
	            </div>
	          </div>
	        </div>
	      </div>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</section>