<header class="banner">
    <nav class="navbar navbar-default nav-no-margin navbar-fixed-top">
      <div id="nav-container" class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?= the_field('header-logo-link', 6);?>">
            <img class="cc-logo" src="<?= the_field('header-logo', 6);?>">
          </a>

          <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>

        <div class="collapse navbar-collapse navHeaderCollapse">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            endif;
            ?>

          <a class="btn btn-default btn-lg navbar-right" href="<?= the_field('header-button-link', 6);?>" role="button"><?php the_field('header-button-text', 6);?></a>
        </div>
      </div>
    </nav>
</header>