<!-- Footer -->
<div class="yellow lighten-4 py-2">
  <div class="container d-flex justify-content-center">
    <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo route('subscribe'); ?>">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <label class="text-uppercase my-1 mr-2" for="sub_email"><?php echo locale('views', 'subscribe_us'); ?></label>
      <input class="form-control" type="email" name="sub_email" id="sub_email" placeholder="example@example.com" aria-label="email" required>
      <button class="btn btn-outline-dark btn-md my-2 my-sm-0 ml-3" type="submit">Submit</button>
    </form>
  </div>
</div>
<footer class="page-footer font-small blue lighten-1 pt-4">
  <div class="container container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <h2 class="text-uppercase font-weight-bold"><?php echo image('resources/assets/img/favicon.png', APP_NAME, ['class'=>'z-depth-0 img-fluid pr-2', 'style'=>'width:50px;height:50px;']); echo locale('views', 'app_title'); ?></h2>
        <h6><?php echo $contents['slogan']; ?></h6>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase"><?php echo locale('views', 'links'); ?></h5>
        <ul class="list-unstyled">
          <li>
            <a href="<?php echo route('meghna'); ?>"><?php echo locale('views', 'our_meghna'); ?></a>
          </li>
          <li>
            <a href="<?php echo route('members'); ?>"><?php echo locale('views', 'members'); ?></a>
          </li>
          <li>
            <a href="<?php echo route('projects'); ?>"><?php echo locale('views', 'projects'); ?></a>
          </li>
          <li>
            <a href="<?php echo route('news'); ?>"><?php echo locale('views', 'news'); ?></a>
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
  <div class="footer-copyright text-center py-3">
    © <?php echo date('Y'); ?> Copyright:<a href="javascript:void(0);"> AmraMeghnabashi.com</a>
    <br>
    Developed By <a href="https://www.linkedin.com/in/mahadi-hasan-966112b0/" target="_blank">Mahadi Hasan</a> Using <a href="http://mhasan.amarneta.com/codecube-framework/" target="_blank">CodeCube Framework</a>
  </div>
</footer>
<!-- Footer -->