<?php /* Template Name: Home */ ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="home-container">
        <div class="home-image-container">
            <img class="home-background" src="<?php echo get_template_directory_uri() ?>/dist/images/homepage-background.png">
            <div class="home-background-text">
                <p><?php the_field('homepage-banner-text');?></p>
                <a class="btn btn-default btn-lg" href="<?php the_field('homepage-banner-button-link');?>" role="button"><?php the_field('homepage-banner-button-text');?></a>
            </div>
        </div>

        <div class="home-container-bottom">
        
            <div class="home-container-bottom-holder">
              <img src="<?php echo get_template_directory_uri() ?>/dist/images/About-Icon-Homepage.png">
            </div>

            <div class="home-container-bottom-holder">
              <img src="<?php echo get_template_directory_uri() ?>/dist/images/Services-Icon-Homepage.png">
            </div>

            <div class="home-container-bottom-holder">
              <img src="<?php echo get_template_directory_uri() ?>/dist/images/Contact-Icon-Homepage.png">
            </div>

        </div>
    </div>
<?php endwhile; ?>
