<?php /* Template Name: Services */ ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="services-body">
        
        <div class="services-top">
            <p><?php the_field('services-banner-text');?></p>
            <div class="white-line"></div>     
        </div>

        <div class="services-middle">
            <div class="services-middle-text">
                <h2><?php the_field('services-middle-text-title');?></h2>
                <p><?php the_field('services-middle-text-top');?></p>
                <p><?php the_field('services-middle-text-bottom');?></p> 
            </div>
            <div class="services-middle-image" style="background-image:url(<?= the_field('services-middle-image'); ?>)">
            </div>       
        </div>

        <div class="services-bottom">
            <div class="services-bottom-text">
                <p><?php the_field('services-bottom-text');?></p>
            </div>
            <div class="services-bottom-image">
                <img class="services-phone-left" src="<?php echo get_template_directory_uri() ?>/dist/images/Side-Iphone.png">
                <img class="services-phone-middle" src="<?php echo get_template_directory_uri() ?>/dist/images/Center-Iphone.png">
                <img class="services-phone-right" src="<?php echo get_template_directory_uri() ?>/dist/images/Side-Iphone.png">      
            </div>
        </div>
 
    </div>
<?php endwhile; ?>