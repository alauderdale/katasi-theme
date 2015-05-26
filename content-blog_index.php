

<section class='blog blog-index'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
      	<?php 
					$temp = $wp_query; $wp_query= null;
					$wp_query = new WP_Query(array( 'post_type' => 'post')); $wp_query->query('showposts=5' . '&paged='.$paged);
					while ($wp_query->have_posts()) : $wp_query->the_post(); 
				?>
        	<?php get_template_part( 'content', 'post_thumb' ); ?>
        <?php endwhile; // end of the loop. ?>
      </div>
    </div>
  </div>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
				  <?php if ($paged > 1) { ?>
          <nav>
            <ul class='pager'>
              <li>
              	<?php next_posts_link('&laquo; Older'); ?>
              </li>
              <li>
                <?php previous_posts_link('Newer &raquo;'); ?>
              </li>
            </ul>
          </nav>

					<?php } else { ?>

          <nav>
            <ul class='pager'>
              <li>
              	<?php next_posts_link('&laquo; Older'); ?>
              </li>
            </ul>
          </nav>

					<?php } ?>

					<?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>

