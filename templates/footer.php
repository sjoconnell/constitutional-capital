<footer class="content-info">
  <div id="footer-container" class="container-fluid">
    <div class="address-footer">
        <img src="<?= the_field('footer-logo', 6);?>">
        <p class="footer-street-address"><?php the_field('footer-address', 6);?></p>
        <p class="footer-phone-number"><?php the_field('footer-number', 6);?></p>
        <p class="footer-sitemap">sitemap | all rights reserved</p>
    </div>

    <div class="form-footer">
        <p>Sign up for our mailing list</p>

        <form class="form-inline">
          <div class="form-group form-footer-color" >
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">

            <button type="submit" class="btn btn-default footer-form-button-mobile"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>
          </div>
          <button type="submit" class="btn btn-default footer-form-button">Submit</button>

<!--           <button type="submit" class="btn btn-default footer-form-button-mobile"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button> -->
        </form>

        <div class="social-footer">
            <?php while( have_rows('footer-social', 6) ): the_row(); ?>
                <div class="social-icon-background">
                    <img src="<?= the_sub_field('icon-image', 6);?>">
                </div>
            <?php endwhile; ?>
        </div>

    </div>

  </div>
</footer>
