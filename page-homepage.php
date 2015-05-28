<?php
/*
Template Name: Homepage
 */
?>


<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

  <style type="text/css">

  .main-nav{
    background-color:rgba(0,0,0,.5);
  }

  </style>

	<section class='invert-section text-center home-video home-section'>
	  <div class='container'>
	    <div class='row'>
	      <div class='col-lg-12'>
	        <h1>
	          <?php the_field('header_title');?>
	        </h1>
	        <p class='lead'>
	          <em>
	            <?php the_field('header_subtext');?>
	          </em>
	        </p>
	        <div class='padding-top'>
	          <a class='btn btn-primary fancybox fancybox.ajax' href='<?php echo esc_url( get_permalink( get_page_by_title( 'modal- signup tweet' ) ) ); ?>'>
	            Join the Groovement
	          </a>
	        </div>
	        <a class='down-link' href='#ssinfo'>
	          <i class='md md-keyboard-arrow-down'></i>
	        </a>
	      </div>
	    </div>
	  </div>
	  <video autoplay='autoplay' loop='loop'>
	    <source src='<?php the_field('background_video_url');?>'></source>
	    <img src='/images/home_bg_placeholder@2x.png'>
	  </video>
	</section>
	<section class='text-center' id='ssinfo'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-2'></div>
        <div class='col-md-8'>
          <h3>
            <?php the_field('home_press_title');?>
          </h3>
          <p>
            <?php the_field('home_press_subtext');?>
          </p>
        </div>
        <div class='col-md-2'></div>
      </div>
    </div>
  </section>
  <section class='press-slider'>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-12'>
          <ul id='logo-slider'>
          	<?php $postLoopOne = new WP_Query( array( 'post_type' => 'press','category_name' => 'home') ); ?>
            <?php while ( $postLoopOne->have_posts() ) : $postLoopOne->the_post(); ?>
            <li data-src='' data-thumb='<?php the_field('logo');?>'>
              <div class='row'>
                <div class='col-sm-6'>
                  <a class='fb-video' href='<?php the_field('video_url');?>' target="_blank">
                    <img class='img-responsive margin-bottom margin-auto slider-featured-img' src='<?php the_field('video_thumbnail');?>'>
                  </a>
                </div>
                <div class='col-sm-6'>
                  <div class='padded'>
                    <p class='lead'>
                      <?php the_field('quote');?>
                    </p>
                    <a href="<?php the_field('article_link');?>" class='btn btn-wire-primary' target="_blank">
                      View Story
                      <i class='md md-launch'></i>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <?php endwhile; // end of the loop. ?>
          </ul>
        </div>
      </div>
    </div>
  </section>  
	<?php endwhile; // end of the loop. ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php the_field('tech_section');?>
	<section class='text-center no-padding-bottom'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-2'></div>
        <div class='col-md-8'>
          <h3>
            <?php the_field('game_title');?>
          </h3>
          <p>
            <?php the_field('game_subtext');?>
          </p>
          <a class='btn btn-primary fancybox fancybox.ajax' href='<?php the_field('game_invite_link');?>'>Add to waiting list</a>
          <img class='double-padding-top img-responsive margin-auto' src='<?php the_field('game_image');?>'>
        </div>
      </div>
    </div>
  </section>
	<?php endwhile; // end of the loop. ?>
	<?php get_template_part( 'content', 'sign_up' ); ?>


<?php get_footer(); ?>