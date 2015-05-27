<section class='no-padding-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12 text-center'>
        <ul class='nav nav-pills list-centered'>
          <li>
            <a href='#sscompany'>
              Company
            </a>
          </li>
          <li>
            <a href='#ssteam'>
              Team
            </a>
          </li>
          <li>
            <a href='#ssjobs'>
              Careers
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id='sscompany'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-2'></div>
      <div class='col-md-8 text-center'>
        <h3>
          About Katasi
        </h3>
        <p>
          <?php the_field('about_text');?>
        </p>
      </div>
      <div class='col-md-2'></div>
    </div>
  </div>
</section>
<div class='container'>
  <hr>
</div>
<section id='ssteam'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12 text-center'>
        <h3>
          All Star Team
        </h3>
      </div>
    </div>
    <div class='row'>
      <?php $postLoopOne = new WP_Query( array( 'post_type' => 'person') ); ?>
            <?php while ( $postLoopOne->have_posts() ) : $postLoopOne->the_post(); ?>
      <div class='col-md-4 col-sm-6'>
        <div class='team-member-thumb'>
          <div class='padded'>
            <img class='img-responsive margin-bottom' src='<?php the_field('member_image');?>'>
            <p class='extra-bold-font-name no-margin-bottom text-color'>
              <?php the_title();?>
              <span class='extra-light-text-color'>
                <?php the_field('title');?>
              </span>
            </p>
            <div class='divider-sm'></div>
            <?php the_content();?>
          </div>
        </div>
      </div>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</section>
<div class='container'>
  <hr>
</div>
<?php while ( have_posts() ) : the_post(); ?>
<section id='ssjobs'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-6'>
        <img class='img-responsive text-center margin-auto margin-bottom' src='<?php the_field('jobs_image');?>' width='355'>
      </div>
      <div class='col-md-5'>
        <h3>
          <?php the_field('jobs_title');?>
        </h3>
        <p>
          <small>
            <?php the_field('jobs_subtext');?>
          </small>
        </p>
      </div>
      <div class='col-md-1'></div>
    </div>
  </div>
</section>
<?php endwhile; // end of the loop. ?>
<div class='container'>
  <hr>
</div>
<section id='team'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12 text-center'>
        <h3>
          Open Positions
        </h3>
      </div>
    </div>
    <div class='row'>
      <div class='col-lg-12'></div>
    </div>
  </div>
</section>
<div aria-multiselectable='true' class='panel-group' id='jobs-accordion' role='tablist'>
  <?php $postLoopOne = new WP_Query( array( 'post_type' => 'job') ); ?>
            <?php while ( $postLoopOne->have_posts() ) : $postLoopOne->the_post(); ?>
  <div class='panel panel-default'>
    <div class='panel-heading' role='tab'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-12'>
            <a aria-controls='collapse-0' aria-expanded='false' class='collapsed' data-parent='#jobs-accordion' data-toggle='collapse' href='#collapse-0'>
              <hr>
              <h4>
                <?php the_title();?>
              </h4>
              <p>
                <small>
                  <?php the_field('job_location');?>
                </small>
              </p>
              <div class='text-right close-icon'>
                +
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class='clearfix'></div>
    <div class='panel-collapse collapse' id='collapse-0' role='tabpanel'>
      <div class='panel-body'>
        <div class='container'>
          <div class='row'>
            <div class='col-md-4 col-md-push-8'>
              <div class='padding-bottom'>
                <a class='btn btn-wire-primary pull-right btn-block-md' href='mailto:<?php the_field('apply_email');?>'>
                  Apply by Email
                </a>
                <div class='clearfix'></div>
              </div>
            </div>
            <div class='col-md-8 col-md-pull-4'>
              <?php the_content();?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; // end of the loop. ?>
</div>