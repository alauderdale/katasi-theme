
  <form class='navbar-form social-nav' role='search'>
    <div class='form-group'>
      <a class='btn btn-wire btn-join-us' href='/'>
        Join Us
      </a>
    </div>
    <div class='form-group'>
      <a class='btn social-font-name btn-facebook btn-social' href='https://app.getcoopt.com/login'>
        F
      </a>
    </div>
    <div class='form-group'>
      <a class='btn social-font-name btn-twitter btn-social' href='https://app.getcoopt.com/login'>
        L
      </a>
    </div>
  </form>
  <?php wp_nav_menu( array( 
  'theme_location' => 'primary', 
  'container' => false, 
  'menu_class' => 'nav main-links',
  'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
  )); ?>