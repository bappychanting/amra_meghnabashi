<!-- Footer -->
<div class="yellow lighten-4 py-2">
  <div class="container d-flex justify-content-center">
    <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo route('subscribe'); ?>">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <label class="text-muted my-1 mr-2" for="sub_email"><?php echo locale('views', 'subscribe_us'); ?></label>
      <input class="form-control" type="email" name="sub_email" id="sub_email" placeholder="example@example.com" aria-label="email" required>
      <button class="btn btn-outline-grey btn-md my-2 my-sm-0 ml-3" type="submit"><?php echo locale('views', 'submit'); ?></button>
    </form>
  </div>
</div>
<footer class="page-footer font-small blue lighten-1 pt-4">
  <div class="container container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <div class="row">
          <div class="col-sm-3">
            <?php echo image('resources/assets/img/logo.png', APP_NAME, ['class'=>'z-depth-0 img-fluid', 'style'=>'width:120px;height:120px;']); ?>
          </div>
          <div class="col-sm-9 mb-2 pl-3">
            <p class="h3 text-uppercase font-weight-bold mb-1"><?php echo locale('views', 'app_title'); ?></p>
            <p class="h6 mt-2 mb-4"><?php echo $contents['slogan']; ?></p>
            <!-- Facebook -->
            <a class="fb-ic" href="<?php echo $contents['facebook']; ?>">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic" href="<?php echo $contents['twitter']; ?>">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Youtube-->
            <a class="yt-ic" href="<?php echo $contents['youtube']; ?>">
              <i class="fab fa-youtube fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase"><?php echo locale('views', 'links'); ?></h5>
        <ul class="list-unstyled">
          <li>
            <a href="<?php echo route('meghna/history'); ?>"><?php echo locale('views', 'our_meghna'); ?></a>
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
  </div>
  <div class="footer-copyright text-center py-3">
    &copy; <?php echo date('Y'); ?> Copyright:<a href="javascript:void(0);"> AmraMeghnabashi.com</a><br>
    Design Idea &amp; Direction by <a href="https://www.facebook.com/nzamaan" target="_blank">Mohammad Nuruzzaman</a><br>
    Developed By <a href="https://www.linkedin.com/in/mahadi-hasan-966112b0/" target="_blank">Mahadi Hasan</a> Using <a href="http://mhasan.amarneta.com/codecube-framework/" target="_blank">CodeCube Framework</a>
  </div>
</footer>
<!-- Footer -->