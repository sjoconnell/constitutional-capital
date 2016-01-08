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
          </div>
          <button type="submit" class="btn btn-default footer-form-button">Submit</button>
        </form>

        <div class="social-footer">
            <div class="social-icon-background">
                <img src="http://firstsage.dev/wp-content/uploads/2015/12/Bitmap1.png">
            </div>
            <div class="social-icon-background">
                <img src="http://firstsage.dev/wp-content/uploads/2015/12/Bitmap2.png">
            </div>
            <div class="social-icon-background">
                <img src="http://firstsage.dev/wp-content/uploads/2015/12/Bitmap.png">
            </div>
        </div>

    </div>

  </div>
</footer>
