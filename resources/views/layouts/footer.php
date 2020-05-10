<footer>
  <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <h1 class="font-weight-bold"><?php echo APP_NAME; ?></h1>
          <p id="site-footer-slogan">Student Relationship Management System</p>
        </div>
        <div class="col-sm-4">
          <h5 class="my-3"><i class="fas fa-map-marker-alt mr-3"></i><span  id="site-footer-address"></span></h5>
          <h5 class="my-3"><i class="fas fa-envelope mr-3"></i><span  id="site-footer-mail"></span></h5>
          <h5 class="tmy-3"><i class="fas fa-phone mr-3"></i><span  id="site-footer-contact"></span></h5>
        </div>
        <div class="col-sm-3">
          <p class="strong"><b>Follow Us On Social Media</b></p>
          <ul class="list-inline">
            <li class="list-inline-item"><h4 class="mr-3"><a href="javascript:void(0);" class="text-light" id="site-footer-facebook-link" target="_blank"><i class="fab fa-facebook"></i></a></h4></li>
            <li class="list-inline-item"><h4 class="mr-3"><a href="javascript:void(0);" class="text-light" id="site-footer-twitter-link" target="_blank"><i class="fab fa-twitter"></i></a></h4></li>
            <li class="list-inline-item"><h4 class="mr-3"><a href="javascript:void(0);" class="text-light" id="site-footer-youtube-link" target="_blank"><i class="fab fa-youtube"></i></a></h4></li>
          </ul>
          <p class="m-0 mt-3 text-light"><a href="<?php // echo route('about'); ?>">Learn More About Us</a></p>
        </div>
      </div>
      <hr>
      <p class="m-0 mt-3 text-center text-light">Copyright &copy; <?php echo APP_NAME; ?></p>
      <p class="m-0 mt-3 text-center text-light">Powered By <a href="<?php echo route('admin/signin'); ?>">Administrator Group</a></p>
  </div>
  <!-- /.container -->
</footer>