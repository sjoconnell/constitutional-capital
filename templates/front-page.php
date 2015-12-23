<?php /* Template Name: Home */ ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="home-container">
        <div class="home-image-container">
            <img class="home-background" src="http://firstsage.dev/wp-content/uploads/2015/12/Bitmap3.png">
            <div class="home-background-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                <a class="btn btn-default btn-lg" href="#" role="button">SERVICES</a>
            </div>
        </div>

        <div class="home-container-bottom">
        
            <div class="home-container-bottom-holder">
              <img src="http://firstsage.dev/wp-content/uploads/2015/12/About-Eam-ea-nihil-audire-about-icon.png">
            </div>

            <div class="home-container-bottom-holder">
              <img src="http://firstsage.dev/wp-content/uploads/2015/12/Services-Talmea-nihil-audire-services-icon.png">
            </div>

            <div class="home-container-bottom-holder">
              <img src="http://firstsage.dev/wp-content/uploads/2015/12/Contact-Audire-cu-erant-orn-contact-icon.png">
            </div>

        </div>
    </div>
<?php endwhile; ?>
