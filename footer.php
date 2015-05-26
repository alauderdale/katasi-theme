<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>


      <footer class='global-footer'>
        <section>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-4 col-xs-12 margin-tottom'>
                <div class='logo-container'>
                  <a class='footer-logo' href='<?php bloginfo('url')?>'>
                    <?php get_template_part( 'content', 'logo' ); ?>
                  </a>
                  <p class='copyright'>
                    <small>
                      © Katasi 2015
                    </small>
                  </p>
                </div>
              </div>
              <div class='col-sm-2 col-xs-6'>
                <h6>
                  Learn More
                </h6>

                <?php wp_nav_menu( array( 
                  'theme_location' => 'learn-more', 
                  'container' => false, 
                  'menu_class' => 'list-unstyled footer-main-nav',
                  'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                )); ?>

              </div>
              <div class='col-sm-2 col-xs-6'>
                <h6>
                  About
                </h6>
                <?php wp_nav_menu( array( 
                  'theme_location' => 'about', 
                  'container' => false, 
                  'menu_class' => 'list-unstyled footer-main-nav',
                  'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                )); ?>
              </div>
              <div class='col-sm-2 col-xs-6'>
                <h6>
                  Support
                </h6>
                <?php wp_nav_menu( array( 
                  'theme_location' => 'support', 
                  'container' => false, 
                  'menu_class' => 'list-unstyled footer-main-nav',
                  'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                )); ?>
              </div>
              <div class='col-sm-2 col-xs-6'>
                <h6>
                  Get in Touch
                </h6>
                <?php wp_nav_menu( array( 
                  'theme_location' => 'contact', 
                  'container' => false, 
                  'menu_class' => 'list-unstyled footer-main-nav',
                  'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                )); ?>

                <?php wp_nav_menu( array( 
                  'theme_location' => 'footer-social', 
                  'container' => false, 
                  'menu_class' => 'social-nav-footer list-inline',
                  'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                )); ?>

              </div>
            </div>
          </div>
        </section>
      </footer>
    </div>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/classie.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/nav.js" type="text/javascript"></script>
  </body>
</html>




<?php wp_footer(); ?>

</body>
</html>
