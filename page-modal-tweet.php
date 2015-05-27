<?php
/*
Template Name: Modal Tweet
 */
?>


<!-- permalink encoding -->

<?php
ob_start();
site_url( );
$permalink = ob_get_clean();
?>

<!-- end -->



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
      <h4 class='half-margin-bottom'>
          Share the Love  <span class="social-font-name" style="font-size:2em;">L</span>
      </h4>
      <p>
       <em>
        "
          <?php the_field('tweet_text')?>
        "
      </em>
  </p>
  <form>
      <div class='form-group'>
        <a class="btn btn-block btn-primary fancybox fancybox.ajax" href="<?php echo esc_url( get_permalink( get_page_by_title( 'modal- signup form' ) ) ); ?>" onclick="window.open('http://twitter.com/share?url=<?php echo (urlencode($permalink)); ?>&text=<?php the_field('tweet_text')?>', 'newwindow', 'width=300, height=250');  $.fancybox.close();  return false;">
            tweet & Sign up
        </a>
    </div>
    <div class='form-group'>
        <a class="fancybox fancybox.ajax" href="<?php echo esc_url( get_permalink( get_page_by_title( 'modal- signup form' ) ) ); ?>" onclick="$.fancybox.close();">
            I Don't want to tweet, just sign up
        </a>
    </div>
</form>
<?php endwhile; // end of the loop. ?>
</div>
</div>

<?php wp_footer(); ?>