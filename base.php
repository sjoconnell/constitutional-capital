<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
        <div class="mobile-header-menu">
          <div class="mobile-header-menu-toprow">
            <i class="fa fa-times fa-4x"></i>
          </div>
          <?php
            if (has_nav_menu('mobile_navigation')) :
              wp_nav_menu(['theme_location' => 'mobile_navigation', 'menu_class' => 'mobile-nav']);
            endif;
            ?>
        </div>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
<!-- <div class="wrap container" role="document">
      <div class="content row">
        <main class="main"> -->
          <?php include Wrapper\template_path(); ?>
        <!-- </main>/.main -->
      <!-- </div>/.content -->
    <!-- </div>/.wrap -->

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
