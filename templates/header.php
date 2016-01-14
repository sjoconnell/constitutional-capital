<header class="banner">
    <nav class="navbar navbar-default nav-no-margin navbar-fixed-top">
      <div id="nav-container" class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?= the_field('header-logo-link', 6);?>">
            <img class="cc-logo" src="<?= the_field('header-logo', 6);?>">
          </a>

          <div class="hamburger-menu mobile-menu-icon">
            <i class="fa fa-bars fa-3x"></i>
          </div>


        </div>

        <div class="main-header-nav">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            endif;
            ?>
        </div>

        <div class="main-header-nav-button">
          <a class="btn btn-default btn-lg navbar-right" href="<?= the_field('header-button-link', 6);?>" role="button"><?php the_field('header-button-text', 6);?></a>
        </div>

      </div>
    </nav>
</header>