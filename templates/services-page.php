<?php /* Template Name: Services */ ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="services-body">
        
        <div class="services-top">
            <p>Services placeholder text et denique invidunt maiestatis sed, nam prima soluta gubergren ut.</p>
            <div class="white-line"></div>     
        </div>

        <div class="services-middle">
            <div class="services-middle-text">
                <h2>Placeholder Text for Services</h2>
                <p>Repudiare contentiones vix ad, deleniti tacimates cu usu. Ius ei saepe accusamus conclusionemque, elit nostrud te ius, delicata instructior no ius. Ut viris iuvaret has, at denique invidunt maiestatis sed, nam prima soluta gubergren ut.</p>
                <p>Feugiat fierent laboramus nam te, mei te recteque omittantur. Id sea vero disputationi comprehensam, essent habemus moderatius est ne.</p> 
            </div>
            <div class="services-middle-image">
                <img class="services-computer" src="<?php echo get_template_directory_uri() ?>/dist/images/Services-Computer.png">
            </div>       
        </div>

        <div class="services-bottom">
            <div class="services-bottom-text">
                <p>Placeholder text about mobile capacity</p>
            </div>
            <div class="services-bottom-image">
                <img class="services-phone-left" src="<?php echo get_template_directory_uri() ?>/dist/images/Side-Iphone.png">
                <img class="services-phone-middle" src="<?php echo get_template_directory_uri() ?>/dist/images/Center-Iphone.png">
                <img class="services-phone-right" src="<?php echo get_template_directory_uri() ?>/dist/images/Side-Iphone.png">      
            </div>
        </div>
 
    </div>
<?php endwhile; ?>