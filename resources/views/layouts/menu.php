<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark default-color">
  <div class="container">

    <!-- Navbar brand -->
      <a class="navbar-brand font-weight-bold" href="<?php echo route('welcome'); ?>"><?php echo title(); ?></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <a class="nav-link" href="#">Members
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li>

    </ul>
    <!-- Links -->
    
  </div>
  <!-- Collapsible content -->
</div>

</nav>
<!--/.Navbar-->