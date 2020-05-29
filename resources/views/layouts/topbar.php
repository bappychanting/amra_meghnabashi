<div class="yellow lighten-4 py">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <nav class="nav">
          <a href="javascript:void(0);" class="nav-link"><i class="fas fa-phone pr-2"></i><?php echo $contents['contact']; ?></a>
          <a href="mailto:<?php echo $contents['email']; ?>" class="nav-link"><i class="fas fa-envelope pr-2"></i><?php echo $contents['email']; ?></a>
        </nav>
      </div>
      <div class="col-6">
        <nav class="nav float-right">
          <a class="nav-link" href="<?php echo $contents['facebook']; ?>"><i class="fab fa-facebook"></i></a>
          <a class="nav-link" href="<?php echo $contents['twitter']; ?>"><i class="fab fa-twitter"></i></a>
          <a class="nav-link" href="<?php echo $contents['youtube']; ?>"><i class="fab fa-youtube"></i></a>
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
        <li class="nav-item <?php echo route_is('meghna') ? 'active' : '' ; ?>">
          <a class="nav-link" href="<?php echo route('meghna'); ?>"><?php echo locale('views', 'our_meghna'); echo route_is('meghna') ? '<span class="sr-only">(current)</span>' : '' ; ?></a>
        </li>
        <li class="nav-item <?php echo route_is('members') ? 'active' : '' ; ?>">
          <a class="nav-link" href="<?php echo route('members'); ?>"><?php echo locale('views', 'members'); echo route_is('members') ? '<span class="sr-only">(current)</span>' : '' ; ?></a>
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