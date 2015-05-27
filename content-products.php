	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h3>
						<?php the_field('product_title_section_1');?>
					</h3>
					<p>
						<?php the_field('product_subtext_section_1');?>
					</p>

				</div>
				<div class="col-md-7"><img class="img-responsive text-center margin-auto margin-bottom" src="<?php the_field('product_image_section_1');?>" alt="" width="360" /></div>
			</div>
		</div>
	</section>
	<div class="container">

		<hr />

	</div>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>
						<?php the_field('product_title_section_2');?>
					</h3>
					<small>
						<?php the_field('product_subtext_section_2');?>
					</small>

					<img class="img-responsive text-center margin-auto groove-car" src="<?php the_field('product_image_section_2');?>" alt="" width="640" />

				</div>
			</div>
			<?php the_field('product_icons');?>
		</div>
	</section>