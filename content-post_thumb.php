<div class='post-thumb'>
  <div class='row padding-top'>
    <div class='col-md-8'>
      <h4>
        <a href='<?php the_permalink();?>'>
          <?php the_title();?>
        </a>
      </h4>
      <h6 class='extra-light-text-color'>
        posted on <?php the_date();?> by <?php the_author();?> in  <?php echo get_the_category_list(','); ?>
      </h6>
      <p>
        Curabitur vitae commodo ipsum. Maecenas non sapien auctor, gravida lectus quis, malesuada mi. Pellentesque accumsan rutrum odio, a scelerisque ligula pellentesque id. Nam auctor purus eget diam blandit, in semper urna commodo. Sed nec luctus est....
      </p>
      <a class='btn btn-wire-primary margin-bottom' href='<?php the_permalink();?>'>
        •••
      </a>
    </div>
    <div class='col-md-1'></div>
    <div class='col-md-3'>
      <?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <a href='<?php the_permalink();?>'>
        <img 
        class='img-responsive margin-bottom margin-top' 
        src='<?php echo $image[0]; ?>' 
        width='169'>
      </a>
<?php endif; ?>
    </div>
  </div>
  <hr>
</div>