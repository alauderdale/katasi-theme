<section>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h3 class="text-center">Our Story</h3>
				<p>
				<?php the_field('story_text');?>
			</p>
			</div>
		</div>
	</div>
</section>
<section class="no-padding-bottom no-padding-top">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3>
					Our Beliefs
				</h3>
			</div>
		</div>
	</div>
</section>
<div class="container">

	<hr />

</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-6"><img class="alert-img img-responsive text-center margin-auto margin-bottom" src="<?php the_field('mission_image_section_1');?>" alt="" width="275" /></div>
					<div class="col-md-6">
						<div class="padded">
							<h3>
								<?php the_field('mission_title_section_1');?>
							</h3>
							<small>
								<?php the_field('mission_text_section_1');?>
								<a class='fancybox fancybox.ajax' href='<?php echo esc_url( get_permalink( get_page_by_title( 'modal- signup tweet' ) ) ); ?>'>
	            		Join Groove and keep our roads safe.
	          		</a>
							</small>

						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<div class="container">
	<hr />
</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-6 col-md-push-6"><img class="img-responsive text-center margin-auto margin-bottom" src="<?php the_field('mission_image_section_2');?>" alt="" width="309" /></div>
					<div class="col-md-6 col-md-pull-6">
						<div class="padded">
							<h3>
								<?php the_field('mission_title_section_2');?>
							</h3>
							<small>
								<?php the_field('mission_text_section_2');?>
							</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</section>
<div class="container">
	<hr />
</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-6"><img class="img-responsive text-center margin-auto margin-bottom" src="<?php the_field('mission_image_section_3');?>" alt="" width="400" /></div>
					<div class="col-md-6">
						<div class="padded">
							<h3>
								<?php the_field('mission_title_section_3');?>
							</h3>
							<small>
								<?php the_field('mission_text_section_3');?>
							</small>

						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>