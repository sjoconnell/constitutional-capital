<?php /* Template Name: Home */ ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="home-container">
        <div class="home-image-container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.54902), rgba(0, 0, 0, 0.54902)), url(<?= the_field('homepage-banner-image'); ?>)">

            <div class="home-background-text">
                <p><?php the_field('homepage-banner-text');?></p>
                <a class="btn btn-default btn-lg" href="<?php echo the_field('homepage-banner-button-link');?>" role="button"><?php the_field('homepage-banner-button-text');?></a>
            </div>
        </div>

        <div class="home-container-bottom">
        
          <?php while( have_rows('homepage-bottom') ): the_row(); ?>
              <div class="home-container-bottom-holder">
                <div class="home-container-bottom-holder-image" style="background-image:url(<?= the_sub_field('icons'); ?>)">
                  
                </div>
                <p><?php the_sub_field('icon-text');?></p>
              </div>
          <?php endwhile; ?>

        </div>
    </div>
<?php endwhile; ?>
