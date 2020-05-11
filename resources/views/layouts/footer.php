<!-- Footer -->
<div class="green text-white py-2">
  <div class="container d-flex justify-content-center">
    <form class="form-inline my-2 my-lg-0">
      <label class="text-uppercase my-1 mr-2" for="sub_email"><?php echo locale('views', 'subscribe_us'); ?></label>
      <input class="form-control" type="email" id="sub_email" placeholder="example@example.com" aria-label="email" required>
      <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Submit</button>
    </form>
  </div>
</div>
<footer class="page-footer font-small  green darken-4 pt-4">
  <div class="container container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <h2 class="text-uppercase font-weight-bold"><i class="fas fa-home red-text pr-2"></i><?php echo locale('views', 'app_title'); ?></h2>
        <h6><?php echo $contents['slogan']; ?></h6>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase"><?php echo locale('views', 'links'); ?></h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!"><?php echo locale('views', 'members'); ?></a>
          </li>
          <li>
            <a href="#!"><?php echo locale('views', 'projects'); ?></a>
          </li>
          <li>
            <a href="#!"><?php echo locale('views', 'news'); ?></a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase"><?php echo locale('views', 'contact_us'); ?></h5>
        <p><i class="fas fa-envelope pr-2"></i><?php echo $contents['email']; ?></p>
        <p><i class="fas fa-phone pr-2"></i><?php echo $contents['contact']; ?></p>
        <p><i class="fas fa-map-marker-alt pr-2"></i><?php echo $contents['address']; ?></p>
      </div>
    </div>
    <div class="text-center mb-3">
      <h5 class="text-uppercase"><?php echo locale('views', 'join_us'); ?></h5>
      <nav class="nav justify-content-center">
        <a class="nav-link text-white" href="<?php echo $contents['facebook']; ?>"><i class="fab fa-facebook"></i></a>
        <a class="nav-link text-white" href="<?php echo $contents['twitter']; ?>"><i class="fab fa-twitter"></i></a>
        <a class="nav-link text-white" href="<?php echo $contents['youtube']; ?>"><i class="fab fa-youtube"></i></a>
      </nav>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© <?php echo date('Y'); ?> Copyright:
    <a href="https://mdbootstrap.com/"> AmraMeghnabashi.com</a>
  </div>
</footer>
<!-- Footer -->