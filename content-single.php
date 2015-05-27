<?php
/**
 * @package boiler
 */
?>

<!-- permalink encoding -->

 <?php
ob_start();
the_permalink();
$permalink = ob_get_clean();
?>

<!-- end -->


<style>
  .main-nav{
  	background-color:rgba(0,0,0,.5);
  }
</style>
<section class='single-header-section' style='background: #0F3B4D url(<?php the_field('background_image');?>) no-repeat scroll center center; background-size:cover;'>
  <div class='title-wrapper'>
    <div class='container'>
      <div class='row'>
      	<div class='col-md-1'></div>
        <div class='col-md-10'>
          <h3>
            <?php the_title(); ?>
          </h3>
          <p>
            posted on <?php the_date();?> by <?php the_author();?> in  <?php echo get_the_category_list(','); ?>
          </p>
        </div>
        <div class='col-md-1'></div>
      </div>
    </div>
  </div>
</section>
<section class='blog blog-single'>
  <div class='container'>
  	<div class="row">
  		<div class='col-md-1'></div>
  		<div class='col-md-10'>
		    <div class='row'>
		      <div class='col-md-11 col-md-push-1'>
		        <div class='row'>
		          <div class='col-md-10'>
		            <?php the_content(); ?>
		          </div>
		          <div class='col-md-2'></div>
		        </div>
		      </div>
		      <div class='col-md-1 col-md-pull-11'>
		        <div class='social-btn-group'>
		          <div class='fix-social affix' data-offset-top='350' data-offset-bottom='650' data-spy='affix'>
		            <h6 class='share-text extra-light-text-color'>
		              SHARE
		            </h6>
		            <div aria-label='...' class='btn-group btn-group-vertical' role='group'>
		              <a class='btn btn-default'  onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo (urlencode($permalink)); ?>', 'newwindow', 'width=500, height=250');  return false;"   href='#'>
		                F
		              </a>
		              <a class='btn btn-default' target="_blank"  onclick="window.open('http://twitter.com/share?url=<?php echo (urlencode($permalink)); ?>&text=<?php the_title()?>', 'newwindow', 'width=300, height=250');  return false;" href='#'>
		                L
		              </a>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
	    </div>
	    <div class='col-md-1'></div>
  </div>
</section>


