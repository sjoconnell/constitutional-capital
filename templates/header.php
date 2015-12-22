<header class="banner">
    <nav class="navbar navbar-default">
      <div id="nav-container" class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://firstsage.dev/">
            <img class="cc-logo" src="http://firstsage.dev/wp-content/uploads/2015/12/Bitmap-Copy.png">
          </a>
        </div>

        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>

        <a class="btn btn-default btn-lg navbar-right" href="http://firstsage.dev/contact" role="button">Contact Us</a>

      </div>
    </nav>
</header>