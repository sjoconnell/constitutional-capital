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
<!--                 <div class="about-bottom-profiles-place">
                    <div class="about-bottom-profiles-place-image">
                        <img class="about-bottom-firstleader" src="<?php echo get_template_directory_uri() ?>/dist/images/Leader-Two.png">
                    </div>
                    <div class="about-bottom-profiles-place-text">
                        <h2>Name Lastname</h2>
                        <h3>TITLE</h3>
                        <p>Short bio copy, pro eu partem officiis, ut detracto mentitum qui. At vide ceteros ius, nec accusam fierent persequeris at, nec ex hinc erat soluta. Eos vocent theophrastus an, eos eu stet tollit.</p>
                    </div>                 
                </div>
                <div class="about-bottom-profiles-place">
                    <div class="about-bottom-profiles-place-image">
                        <img class="about-bottom-firstleader" src="<?php echo get_template_directory_uri() ?>/dist/images/Leader-Three.png">
                    </div>
                    <div class="about-bottom-profiles-place-text">
                        <h2>Name Lastname</h2>
                        <h3>TITLE</h3>
                        <p>Short bio copy, pro eu partem officiis, ut detracto mentitum qui. At vide ceteros ius, nec accusam fierent persequeris at, nec ex hinc erat soluta. Eos vocent theophrastus an, eos eu stet tollit.</p>
                    </div>                 
                </div>    -->           
            </div>      
        </div>
 
    </div>
<?php endwhile; ?>