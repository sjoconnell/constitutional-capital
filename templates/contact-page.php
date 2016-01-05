<?php /* Template Name: Contact */ ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="contact-body">
        
        <div class="contact-body-map">
            <div class="contact-body-top-address">
                <div class="contact-body-top-address-information">
                    <h1>Placeholder Text for Contact Us Page Lorem Ipsum</h1>
                    <h2>141 W Jackson Blvd<br>Chicago, IL 60604</h2>
                    <p><span class="glyphicon glyphicon-earphone"></span>312-282-1203</p>
                    <p><span class="glyphicon glyphicon-envelope"></span>info@ccapitalbrokerage.com</p>
                </div>              
            </div>
        </div>

        <div class="contact-body-bottom">
            <p>Contact Us</p>
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