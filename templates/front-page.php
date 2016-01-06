<?php /* Template Name: Home */ ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="home-container">
        <div class="home-image-container" style="background-image:url(<?= the_field('homepage-banner-image'); ?>)">

            <div class="home-background-text">
                <p><?php the_field('homepage-banner-text');?></p>
                <a class="btn btn-default btn-lg" href="<?php echo the_field('homepage-banner-button-link');?>" role="button"><?php the_field('homepage-banner-button-text');?></a>
            </div>
        </div>

        <div class="home-container-bottom">
        
            <div class="home-container-bottom-holder">
              <img src="<?php echo get_template_directory_uri() ?>/dist/images/About-Icon-Homepage.png">
              <p>About</p>
            </div>

            <div class="home-container-bottom-holder">
              <img src="<?php echo get_template_directory_uri() ?>/dist/images/Services-Icon-Homepage.png">
              <p>Services</p>
            </div>

            <div class="home-container-bottom-holder">
              <img src="<?php echo get_template_directory_uri() ?>/dist/images/Contact-Icon-Homepage.png">
              <p>Contact Us</p>
            </div>

        </div>
    </div>
<?php endwhile; ?>
