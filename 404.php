<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package boiler
 */

get_header(); ?>



		<section class='header-section' style='background:#0F3B4D no-repeat scroll center top; '>
		  <div class='container'>
		    <div class='row'>
		      <div class='col-sm-1'></div>
		      <div class='col-sm-10'>
		        <h2>
		          <?php _e( 'Oops! That page can&rsquo;t be found.', 'boiler' ); ?>
		        </h2>
		      </div>
		      <div class='col-sm-1'></div>
		    </div>
		  </div>
		</section>
		<section>
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 text-center">
    				<p>
							Let's head home and try again.
						</p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
							Take Me Home
						</a>
					</div>
				</div>
			</div>
		</section>





<?php get_footer(); ?>

<?php get_footer(); ?>