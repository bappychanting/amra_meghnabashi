<div class="yellow lighten-4 py">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <nav class="nav">
          <a href="tel:<?php echo $contents['contact']; ?>" class="nav-link text-muted"><i class="fas fa-phone pr-2"></i><?php echo $contents['contact']; ?></a>
          <a href="mailto:<?php echo $contents['email']; ?>" class="nav-link text-muted"><i class="fas fa-envelope pr-2"></i><?php echo $contents['email']; ?></a>
        </nav>
      </div>
      <div class="col-6">
        <nav class="nav float-right">
          <a class="nav-link text-muted" href="<?php echo $contents['facebook']; ?>"><i class="fab fa-facebook"></i></a>
          <a class="nav-link text-muted" href="<?php echo $contents['twitter']; ?>"><i class="fab fa-twitter"></i></a>
          <a class="nav-link text-muted" href="<?php echo $contents['youtube']; ?>"><i class="fab fa-youtube"></i></a>
        </nav>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark blue lighten-1">
  <div class="container">
    <a class="navbar-brand font-weight-bold" href="<?php echo route('welcome'); ?>"><?php echo image('resources/assets/img/favicon.png', APP_NAME, ['class'=>'z-depth-0 img-fluid pr-2', 'style'=>'height:40px']); echo locale('views', 'app_title'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item <?php echo route_is('welcome') ? 'active' : '' ; ?>">
          <a class="nav-link" href="<?php echo route('welcome'); ?>"><?php echo locale('views', 'home_page'); echo route_is('welcome') ? '<span class="sr-only">(current)</span>' : '' ; ?></a>
        </li>

        <!-- Meghna Dropdown -->
        <li class="nav-item dropdown <?php echo route_is('meghna') ? 'active' : '' ; ?>">
          <a class="nav-link dropdown-toggle" id="meghnaDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo locale('views', 'our_meghna'); echo route_is('meghna') ? '<span class="sr-only">(current)</span>' : '' ; ?>
          </a>
          <div class="dropdown-menu dropdown-primary dropdown-wide dropdown-center" aria-labelledby="meghnaDropdownMenuLink">
            <div class="row">
              <div class="col-sm-4 dropdown-wide-items">
                <span class="text-primary font-weight-bold mx-2"><?php echo locale('views', 'about_meghna'); ?></span>
                <hr>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'size']); ?>"><?php echo locale('views', 'meghna_size'); ?></a>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'location']); ?>"><?php echo locale('views', 'meghna_location'); ?></a>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'bridge']); ?>"><?php echo locale('views', 'meghna_bridge'); ?></a>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'road']); ?>"><?php echo locale('views', 'meghna_road'); ?></a>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'river']); ?>"><?php echo locale('views', 'meghna_river'); ?></a>
                <hr class="d-sm-none">
              </div>
              <div class="col-sm-4 dropdown-wide-items">
                <span class="text-primary font-weight-bold text-muted mx-2"><?php echo locale('views', 'meghna_education'); ?></span>
                <hr>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'school']); ?>"><?php echo locale('views', 'meghna_school'); ?></a>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'college']); ?>"><?php echo locale('views', 'meghna_college'); ?></a>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'mosque']); ?>"><?php echo locale('views', 'meghna_mosque'); ?></a>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'madrasa']); ?>"><?php echo locale('views', 'meghna_madrasa'); ?></a>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'temple']); ?>"><?php echo locale('views', 'meghna_temple'); ?></a>
                <hr class="d-sm-none">
              </div>
              <div class="col-sm-4 dropdown-wide-items">
                <span class="text-primary font-weight-bold text-muted mx-2"><?php echo locale('views', 'others'); ?></span>
                <hr>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'arts']); ?>"><?php echo locale('views', 'meghna_arts'); ?></a>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'sports']); ?>"><?php echo locale('views', 'meghna_sports'); ?></a>
                <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'monument']); ?>"><?php echo locale('views', 'meghna_monument'); ?></a>
                <a class="dropdown-item" href="<?php echo route('meghna/people', ['type' => 'ffighter']); ?>"><?php echo locale('views', 'meghna_ffighter'); ?></a>
                <a class="dropdown-item" href="<?php echo route('meghna/people', ['type' => 'personality']); ?>"><?php echo locale('views', 'meghna_personality'); ?></a>
              </div>
            </div>
          </div>
        </li>

        <!-- Upazilla Dropdown -->
        <li class="nav-item dropdown <?php echo route_is('upazilla') ? 'active' : '' ; ?>">
          <a class="nav-link dropdown-toggle" id="upazillaDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo locale('views', 'upazilla_info'); echo route_is('upazilla') ? '<span class="sr-only">(current)</span>' : '' ; ?>
          </a>
          <div class="dropdown-menu dropdown-primary dropdown-wide dropdown-center" aria-labelledby="upazillaDropdownMenuLink">
            <div class="row">
              <div class="col-sm-4 dropdown-wide-items">
                <span class="text-primary font-weight-bold text-muted mx-2"><?php echo locale('views', 'upazilla_about'); ?></span>
                <hr>
                <a class="dropdown-item" href="<?php echo route('upazilla/items', ['type' => 'office']); ?>"><?php echo locale('views', 'upazilla_office'); ?></a>
                <a class="dropdown-item" href="<?php echo route('upazilla/items', ['type' => 'committee']); ?>"><?php echo locale('views', 'upazilla_committee'); ?></a>
                <a class="dropdown-item" href="<?php echo route('upazilla/items', ['type' => 'admin']); ?>"><?php echo locale('views', 'upazilla_admin'); ?></a>
                <a class="dropdown-item" href="<?php echo route('upazilla/people', ['type' => 'police']); ?>"><?php echo locale('views', 'upazilla_police'); ?></a>
                <hr class="d-sm-none">
              </div>
              <div class="col-sm-4 dropdown-wide-items">
                <span class="text-primary font-weight-bold text-muted mx-2"><?php echo locale('views', 'upazilla_healthcare'); ?></span>
                <hr>
                <a class="dropdown-item" href="<?php echo route('upazilla/items', ['type' => 'hospital']); ?>"><?php echo locale('views', 'upazilla_hospital'); ?></a>
                <a class="dropdown-item" href="<?php echo route('upazilla/people', ['type' => 'doctor']); ?>"><?php echo locale('views', 'upazilla_doctor'); ?></a>
                <a class="dropdown-item" href="<?php echo route('upazilla/people', ['type' => 'mdoctor']); ?>"><?php echo locale('views', 'upazilla_mdoctor'); ?></a>
                <a class="dropdown-item" href="<?php echo route('upazilla/items', ['type' => 'ambulance']); ?>"><?php echo locale('views', 'upazilla_ambulance'); ?></a>
                <hr class="d-sm-none">
              </div>
              <div class="col-sm-4 dropdown-wide-items">
                <span class="text-primary font-weight-bold text-muted mx-2"><?php echo locale('views', 'others'); ?></span>
                <hr>
                <a class="dropdown-item" href="<?php echo route('upazilla/items', ['type' => 'market']); ?>"><?php echo locale('views', 'upazilla_market'); ?></a>
                <a class="dropdown-item" href="<?php echo route('upazilla/items', ['type' => 'dock']); ?>"><?php echo locale('views', 'upazilla_dock'); ?></a>
                <a class="dropdown-item" href="<?php echo route('upazilla/items', ['type' => 'agro']); ?>"><?php echo locale('views', 'upazilla_agro'); ?></a>
                <a class="dropdown-item" href="<?php echo route('upazilla/people', ['type' => 'immigrant']); ?>"><?php echo locale('views', 'upazilla_immigrant'); ?></a>
                <a class="dropdown-item" href="<?php echo route('upazilla/items', ['type' => 'link']); ?>"><?php echo locale('views', 'upazilla_link'); ?></a>
              </div>
            </div>
          </div>
        </li>

        <!-- Gallery Dropdown -->
        <li class="nav-item dropdown <?php echo route_is('gallery') ? 'active' : '' ; ?>">
          <a class="nav-link dropdown-toggle" id="galleryDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo locale('views', 'gallery'); echo route_is('gallery') ? '<span class="sr-only">(current)</span>' : '' ; ?>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="galleryDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo route('gallery', ['type' => 'photo']); ?>"><?php echo locale('views', 'gallery_photo'); ?></a>
            <a class="dropdown-item" href="<?php echo route('gallery', ['type' => 'video']); ?>"><?php echo locale('views', 'gallery_video'); ?></a>
          </div>
        </li>

        <!-- Members Dropdown -->
        <li class="nav-item dropdown <?php echo route_is('members') ? 'active' : '' ; ?>">
          <a class="nav-link dropdown-toggle" id="memberDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo locale('views', 'members'); echo route_is('members') ? '<span class="sr-only">(current)</span>' : '' ; ?>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="memberDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo route('members', ['type' => 'adviser']); ?>"><?php echo locale('views', 'member_adviser'); ?></a>
            <a class="dropdown-item" href="<?php echo route('members', ['type' => 'vip']); ?>"><?php echo locale('views', 'member_vip'); ?></a>
            <a class="dropdown-item" href="<?php echo route('members', ['type' => 'admin']); ?>"><?php echo locale('views', 'member_admin'); ?></a>
            <a class="dropdown-item" href="<?php echo route('members', ['type' => 'volunteer']); ?>"><?php echo locale('views', 'member_volunteer'); ?></a>
            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#join_modal"><?php echo locale('views', 'be_volunteer'); ?></a>
          </div>
        </li>

        <li class="nav-item <?php echo route_is('projects') ? 'active' : '' ; ?>">
          <a class="nav-link" href="<?php echo route('projects'); ?>"><?php echo locale('views', 'projects'); echo route_is('projects') ? '<span class="sr-only">(current)</span>' : '' ; ?></a>
        </li>

        <!-- News Dropdown -->
        <li class="nav-item dropdown <?php echo route_is('news') ? 'active' : '' ; ?>">
          <a class="nav-link dropdown-toggle" id="galleryDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo locale('views', 'news'); echo route_is('news') ? '<span class="sr-only">(current)</span>' : '' ; ?>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="galleryDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo route('news', ['type' => 'program']); ?>"><?php echo locale('views', 'news_program'); ?></a>
            <a class="dropdown-item" href="<?php echo route('news', ['type' => 'upcoming']); ?>"><?php echo locale('views', 'news_upcoming'); ?></a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Join Modal -->
<div class="modal fade" id="join_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header blue lighten-1 text-white">
        <h4 class="modal-title w-100" id="myModalLabel"><?php echo locale('views', 'be_volunteer'); ?></h4>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo route('members/join'); ?>" enctype="multipart/form-data"> 

          <div class="input-group my-4">
            <div class="custom-file">
              <input type="file" name="member_image" class="custom-file-input" id="member_image" aria-describedby="inputGroupFileAddon01" required>
              <label class="custom-file-label" for="member_image"><?php echo locale('views', 'image'); ?></label>
            </div>
          </div>

          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

          <div class="md-form">
            <label for="inp-name"><?php echo locale('views', 'name'); ?></label>
            <input type="text" id="inp-name" name="name" class="form-control" maxlength="50" minlength="2" required>
          </div>

          <div class="md-form">
            <label for="inp-email"><?php echo locale('views', 'email'); ?></label>
            <input type="email" id="inp-email" name="email" class="form-control" required>
          </div>

          <div class="md-form">
            <label for="inp-phone"><?php echo locale('views', 'phone'); ?></label>
            <input type="text" id="inp-phone" name="phone" class="form-control" maxlength="50" minlength="2" required>
          </div>

          <div class="md-form">
            <label for="inp-address"><?php echo locale('views', 'address'); ?></label>
            <input type="text" id="inp-address" name="address" class="form-control" maxlength="50" minlength="2" required>
          </div>

          <div class="md-form">
            <label for="inp-details"><?php echo locale('views', 'details'); ?></label>
            <textarea id="inp-details" name="details" class="form-control md-textarea"></textarea>
          </div>

          <button type="submit" class="btn btn-primary mr-5"><?php echo locale('views', 'submit'); ?></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal"><?php echo locale('views', 'close'); ?></button>
      </div>
    </div>
  </div>
</div>
<!-- #END# Join Modal -->