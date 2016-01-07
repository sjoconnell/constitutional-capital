<?php /* Template Name: About */ ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="about-body">
        
        <div class="about-top">
            <p><?php the_field('about-banner-text');?></p>
            <div class="white-line"></div>     
        </div>

        <div class="about-middle">
            <div class="about-middle-text">
                <h2><?php the_field('about-middle-text-title');?></h2>
                <p><?php the_field('about-middle-text-top');?></p>
                <p><?php the_field('about-middle-text-bottom');?></p> 
            </div>
            <div class="about-middle-image" style="background-image:url(<?= the_field('about-middle-image'); ?>)">
            </div>       
        </div>

        <div class="about-bottom">
            <div class="about-bottom-text">
                <h2><?php the_field('about-bottom-text-title');?></h2>
                <p><?php the_field('about-bottom-text');?></p>
            </div>
            <div class="about-bottom-profiles">

                <?php while( have_rows('about-leaders') ): the_row(); ?>
                    <div class="about-bottom-profiles-place">
                        <div class="about-bottom-profiles-place-image" style="background-image:url(<?= the_sub_field('image'); ?>)">
                        </div>
                        <div class="about-bottom-profiles-place-text">
                            <h2><?php the_sub_field('name');?></h2>
                            <h3><?php the_sub_field('title');?></h3>
                            <p><?php the_sub_field('description');?></p>
                        </div>                 
                    </div>
                <?php endwhile; ?>          
            </div>      
        </div>
 
    </div>
<?php endwhile; ?>