<?php /* Template Name: Contact */ ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="contact-body">
        
        <div class="contact-body-map">
            <div class="contact-body-top-address">
                <div class="contact-body-top-address-information">
                    <h1><?php the_field('contact-info-text');?></h1>
                    <h2><?php the_field('contact-address');?></h2>
                    <p><span class="glyphicon glyphicon-earphone"></span><?php the_field('contact-number');?></p>
                    <p><span class="glyphicon glyphicon-envelope"></span><?php the_field('contact-email');?></p>
                </div>              
            </div>
        </div>

        <div class="contact-body-bottom">

<!--         <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?> -->
            <p><?php the_field('contact-form-title');?></p>
            <form>
                <div class="form-group form-contact-color">
                    <input type="email" class="form-control form-contact-name" id="exampleInputEmail1" placeholder="First & Last Name">
                </div>
                <div class="form-group form-contact-color">
                    <input type="email" class="form-control form-contact-email" id="exampleInputEmail1" placeholder="Email Address">
                </div>
                <div class="form-group form-contact-color">
                    <input type="email" class="form-control form-contact-comment" id="exampleInputEmail1" placeholder="Comment">
                </div>    
                    <button type="submit" class="btn btn-default btn-contact">Submit</button>
                </div>
            </form>    
        </div>

    </div>
<?php endwhile; ?>