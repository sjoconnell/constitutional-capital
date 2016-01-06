<?php /* Template Name: About */ ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="about-body">
        
        <div class="about-top">
            <p>Our team brings over 50 years worth of combined experience in the pits to deliver the best pricing on your short term interest rate trades.</p>
            <div class="white-line"></div>     
        </div>

        <div class="about-middle">
            <div class="about-middle-text">
                <h2>Headline Text About Expertise</h2>
                <p>Contentiones vix ad, deleniti tacimates cu usu. Ius ei saepe accusamus conclusionemque, elit nostrud te ius, delicata instructior no ius. Ut viris iuvaret has, at denique invidunt maiestatis sed, nam prima soluta gubergren ut. Feugiat fierent laboramus nam te, mei te recteque omittantur. Id sea vero disputationi comprehensam, essent habemus moderatius est ne.</p>
                <p>Ei mel suas wisi, id pri regione consequuntur, habeo inani disputando nam no. Ius luptatum petentium consetetur ad, id eam tempor tritani delicata. Ea sit laudem facete.</p> 
            </div>
            <div class="about-middle-image">
                <img class="about-graph" src="<?php echo get_template_directory_uri() ?>/dist/images/about-graph.png" />
            </div>       
        </div>

        <div class="about-bottom">
            <div class="about-bottom-text">
                <h2>Leadership</h2>
                <p>Ei mel suas wisi, id pri regione consequuntur, habeo inani disputando nam no. Ius luptatum petentium consetetur ad, id eam tempor tritani delicata. Ea sit laudem facete.</p>
            </div>
            <div class="about-bottom-profiles">
                <div class="about-bottom-profiles-place">
                    <div class="about-bottom-profiles-place-image">
                        <img class="about-bottom-firstleader" src="<?php echo get_template_directory_uri() ?>/dist/images/Leader-One.png">
                    </div>
                    <div class="about-bottom-profiles-place-text">
                        <h2>Name Lastname</h2>
                        <h3>TITLE</h3>
                        <p>Short bio copy, pro eu partem officiis, ut detracto mentitum qui. At vide ceteros ius, nec accusam fierent persequeris at, nec ex hinc erat soluta. Eos vocent theophrastus an, eos eu stet tollit.</p>
                    </div>                 
                </div>
                <div class="about-bottom-profiles-place">
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
                </div>              
            </div>      
        </div>
 
    </div>
<?php endwhile; ?>