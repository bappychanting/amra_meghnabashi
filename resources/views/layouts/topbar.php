<div class="yellow lighten-4 py">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <nav class="nav">
          <a href="javascript:void(0);" class="nav-link text-muted"><i class="fas fa-phone pr-2"></i><?php echo $contents['contact']; ?></a>
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
    <a class="navbar-brand font-weight-bold" href="<?php echo route('welcome'); ?>"><?php echo image('resources/assets/img/favicon.png', APP_NAME, ['class'=>'z-depth-0 img-fluid pr-2', 'style'=>'width:40px;height:40px;']); echo locale('views', 'app_title'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <ul class="navbar-nav ml-auto">
        <!-- Meghna Dropdown -->
        <li class="nav-item dropdown <?php echo route_is('meghna') ? 'active' : '' ; ?>">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo locale('views', 'our_meghna'); echo route_is('members') ? '<span class="sr-only">(current)</span>' : '' ; ?>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo route('meghna/history'); ?>"><?php echo locale('views', 'meghna_history'); ?></a>
            <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'school']); ?>"><?php echo locale('views', 'meghna_school'); ?></a>
            <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'college']); ?>"><?php echo locale('views', 'meghna_college'); ?></a>
            <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'mosque']); ?>"><?php echo locale('views', 'meghna_mosque'); ?></a>
            <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'madrasa']); ?>"><?php echo locale('views', 'meghna_madrasa'); ?></a>
            <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'market']); ?>"><?php echo locale('views', 'meghna_market'); ?></a>
            <a class="dropdown-item" href="<?php echo route('meghna/items', ['type' => 'monument']); ?>"><?php echo locale('views', 'meghna_monument'); ?></a>
            <a class="dropdown-item" href="<?php echo route('meghna/personalities'); ?>"><?php echo locale('views', 'meghna_personality'); ?></a>
          </div>
        </li>
        <!-- Members Dropdown -->
        <li class="nav-item dropdown <?php echo route_is('members') ? 'active' : '' ; ?>">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo locale('views', 'members'); echo route_is('members') ? '<span class="sr-only">(current)</span>' : '' ; ?>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo route('members'); ?>"><?php echo locale('views', 'see_all_members'); ?></a>
            <a class="dropdown-item" href="<?php echo route('members', ['type' => 'advisers']); ?>"><?php echo locale('views', 'advisers'); ?></a>
            <a class="dropdown-item" href="<?php echo route('members', ['type' => 'admins']); ?>"><?php echo locale('views', 'admins'); ?></a>
            <a class="dropdown-item" href="<?php echo route('members', ['type' => 'vips']); ?>"><?php echo locale('views', 'vips'); ?></a>
            <a class="dropdown-item" href="<?php echo route('members', ['type' => 'volunteers']); ?>"><?php echo locale('views', 'volunteers'); ?></a>
            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#join_modal"><?php echo locale('views', 'be_volunteer'); ?></a>
          </div>
        </li>
        <li class="nav-item <?php echo route_is('projects') ? 'active' : '' ; ?>">
          <a class="nav-link" href="<?php echo route('projects'); ?>"><?php echo locale('views', 'projects'); echo route_is('projects') ? '<span class="sr-only">(current)</span>' : '' ; ?></a>
        </li>
        <li class="nav-item <?php echo route_is('news') ? 'active' : '' ; ?>">
          <a class="nav-link" href="<?php echo route('news'); ?>"><?php echo locale('views', 'news'); echo route_is('news') ? '<span class="sr-only">(current)</span>' : '' ; ?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Join Modal -->
<div class="modal fade" id="join_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel"><?php echo locale('views', 'be_volunteer'); ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo route('members/join'); ?>"> 

          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

          <div class="form-label-group my-3">
            <label>Donation Date</label>
            <input type="date" name="donation_date" class="form-control" required>
          </div>

          <button type="submit" class="btn btn-primary mr-5"><?php echo locale('views', 'submit'); ?></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-white btn-sm" data-dismiss="modal"><?php echo locale('views', 'close'); ?></button>
      </div>
    </div>
  </div>
</div>
<!-- #END# Join Modal -->