<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo title().' || '.$contents['slogan']; ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>
    
  <meta name="keywords" content="<?php echo $contents['keywords']; ?>">
  <meta name="description" content="<?php echo $contents['slogan']; ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<!-- Intro -->
<section class="front-page-top-div">
	<div class="container text-center py-5">
		<h1 class="text-white mt-5 mb-3"><?php echo $contents['slogan']; ?></h1>
		<a class="btn btn-danger mt-3 mb-5" href="<?php echo $contents['donate_link']; ?>" target="_blank"><i class="fas fa-donate pr-2"></i><?php echo locale('views', 'donate_now'); ?></a>
	</div>
</section>
<!-- #END# Intro -->

<!-- About Us -->
<section class="container py-5">
	<div class="row">
		<div class="col-sm-6">
			<h2 class="green-text font-weight-bold"><?php echo locale('views', 'who_are_we'); ?></h2>
			<p class="grey-text my-3"><?php echo $contents['about_us']; ?></p>
		</div>
		<div class="col-sm-6">
			<div class="embed-responsive embed-responsive-16by9">
        		<iframe class="embed-responsive-item" src="<?php echo $contents['video_src']; ?>" allowfullscreen></iframe>
        	</div>
		</div>
	</div>
	<hr>
</section>
<!-- #END# About Us -->

<!--Our Goals-->
<section class="container py-3">
<h2 class="green-text font-weight-bold text-center my-3"><?php echo locale('views', 'our_programs'); ?></h2>
<div class="row my-5">
  <div class="col-md-4">
    <div class="row">
      <div class="col-2">
        <i class="fas fa-check-circle fa-2x green-text"></i>
      </div>
      <div class="col-10">
        <h6 class="feature-title">Free for personal and commercial use</h6>
        <p class="grey-text">Our license is user-friendly. Feel free to use MDB for both private as well as commercial projects.
        </p>
        <div style="height:15px"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <i class="fas fa-check-circle fa-2x green-text"></i>
      </div>
      <div class="col-10">
        <h6 class="feature-title">400+ UI elements</h6>
        <p class="grey-text">An impressive collection of flexible components allows you to develop any project.
        </p>
        <div style="height:15px"></div>
      </div>
    </div>
  </div>
  <div class="col-md-4 flex-center">
  <?php echo image('resources/assets/img/logo.png', APP_NAME, ['class'=>'z-depth-0 img-fluid']); ?>
  </div>
  <div class="col-md-4 mt-2">
    <div class="row">
      <div class="col-2">
        <i class="fas fa-check-circle fa-2x green-text"></i>
      </div>
      <div class="col-10">
        <h6 class="feature-title">70+ CSS animations</h6>
        <p class="grey-text">Neat and easy to use animations, which will increase the interactivity of your project and delight your visitors.
        </p>
        <div style="height:15px"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <i class="fas fa-check-circle fa-2x green-text"></i>
      </div>
      <div class="col-10">
        <h6 class="feature-title">Plenty of useful templates</h6>
        <p class="grey-text">Need inspiration? Use one of our predefined templates for free.</p>
        <div style="height:15px"></div>
      </div>
    </div>
  </div>
</div>
<hr>
</section>
<!-- #END# Our Goals -->

<!-- Our Achievements -->
<section class='container py-3'>
	<h2 class="green-text font-weight-bold my-3 text-center"><?php echo locale('views', 'our_achievements'); ?></h2>
	<div class="row features-small mt-5 wow fadeIn">
	  <div class="col-xl-3 col-lg-6">
	    <div class="row">
	      <div class="col-2">
	        <i class="fab fa-firefox fa-2x mb-1 green-text" aria-hidden="true"></i>
	      </div>
	      <div class="col-10 mb-2 pl-3">
	        <h5 class="feature-title font-bold mb-1">Cross-browser compatibility</h5>
	        <p class="grey-text mt-2">Chrome, Firefox, IE, Safari, Opera, Microsoft Edge - MDB loves all browsers; all browsers love MDB.
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="col-xl-3 col-lg-6">
	    <div class="row">
	      <div class="col-2">
	        <i class="fas fa-level-up-alt fa-2x mb-1 green-text" aria-hidden="true"></i>
	      </div>
	      <div class="col-10 mb-2">
	        <h5 class="feature-title font-bold mb-1">Frequent updates</h5>
	        <p class="grey-text mt-2">MDB becomes better every month. We love the project and enhance as much as possible.
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="col-xl-3 col-lg-6">
	    <div class="row">
	      <div class="col-2">
	        <i class="fas fa-comments fa-2x mb-1 green-text" aria-hidden="true"></i>
	      </div>
	      <div class="col-10 mb-2">
	        <h5 class="feature-title font-bold mb-1">Active community</h5>
	        <p class="grey-text mt-2">Our society grows day by day. Visit our forum and check how it is to be a part of our family.
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="col-xl-3 col-lg-6">
	    <div class="row">
	      <div class="col-2">
	        <i class="fas fa-code fa-2x mb-1 green-text" aria-hidden="true"></i>
	      </div>
	      <div class="col-10 mb-2">
	        <h5 class="feature-title font-bold mb-1">jQuery 3.x</h5>
	        <p class="grey-text mt-2">MDB is integrated with newest jQuery. Therefore you can use all the latest features which come along with
	          it.
	        </p>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row features-small mt-4 wow fadeIn">
	  <div class="col-xl-3 col-lg-6">
	    <div class="row">
	      <div class="col-2">
	        <i class="fas fa-cubes fa-2x mb-1 green-text" aria-hidden="true"></i>
	      </div>
	      <div class="col-10 mb-2">
	        <h5 class="feature-title font-bold mb-1">Modularity</h5>
	        <p class="grey-text mt-2">Material Design for Bootstrap comes with both, compiled, ready to use libraries including all features as
	          well as modules for CSS (SASS files) and JS.</p>
	      </div>
	    </div>
	  </div>
	  <div class="col-xl-3 col-lg-6">
	    <div class="row">
	      <div class="col-2">
	        <i class="fas fa-question fa-2x mb-1 green-text" aria-hidden="true"></i>
	      </div>
	      <div class="col-10 mb-2">
	        <h5 class="feature-title font-bold mb-1">Technical support</h5>
	        <p class="grey-text mt-2">We care about reliability. If you have any questions - do not hesitate to contact us.
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="col-xl-3 col-lg-6">
	    <div class="row">
	      <div class="col-2">
	        <i class="fas fa-th fa-2x mb-1 green-text" aria-hidden="true"></i>
	      </div>
	      <div class="col-10 mb-2">
	        <h5 class="feature-title font-bold mb-1">Flexbox</h5>
	        <p class="grey-text mt-2">MDB fully supports Flex Box. You can forget about alignment issues.</p>
	      </div>
	    </div>
	  </div>
	  <div class="col-xl-3 col-lg-6">
	    <div class="row">
	      <div class="col-2">
	        <i class="far fa-file-code fa-2x mb-1 green-text" aria-hidden="true"></i>
	      </div>
	      <div class="col-10 mb-2">
	        <h5 class="feature-title font-bold mb-1">SASS files</h5>
	        <p class="grey-text mt-2">Arranged and well documented .scss files can't wait until you compile them.</p>
	      </div>
	    </div>
	  </div>
	</div>
	<hr>
</section>
<!-- #END# Our Achievements -->

<!-- Dynamic -->
<section class="container py-3">
	<ul class="pagination-sm content-paginate"></ul>
	<h2 class="green-text font-weight-bold mt-3 mb-4 text-center"><i class="fas fa-users pr-2"></i><?php echo locale('views', 'our_members'); ?></h2>
	<div class="members-section scroll">
		<div class="row">
		<?php foreach ($members as $member) { ?>
		<div class="col-sm-2">
			<a href="<?php echo route('members/show', ['id' => $member['id']]); ?>" title="<?php echo $member['name']; ?>" class="link-unstyled">
	    		<?php echo image($member['image_path'], $member['name'], ['class'=>'rounded-circle mx-2 mt-3', 'height'=>'100px', 'width' => '100px']); ?>
			</a>
		</div>
		<?php } ?>
		</div>
	</div>
	<div class="row justify-content-center my-5">
		<a class="btn btn-danger btn-md" href="<?php echo route('members'); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'see_all_members'); ?></a>
	</div>
	<h2 class="green-text font-weight-bold mt-3 mb-4 text-center"><i class="fas fa-briefcase pr-2"></i><?php echo locale('views', 'our_projects'); ?></h2>
	<div class="projects-section scroll">
		<div class="row">
			<?php foreach ($projects['projects'] as $project) { ?>
			<div class="col-sm-3 mb-3">
				<a href="<?php echo route('projects/show', ['id' => $project['id']]); ?>" class="link-unstyled">
					<div class="card">
						<img class="card-img-top" src="<?php echo $project['image_path'] ?>" alt="<?php echo $project['name'] ?>" height='150px'>
						<div class="card-body">
							<h4 class="card-title red-text"><?php echo $project['name'] ?></h4>
							<span class="card-text"><?php echo strip_tags(substr($project['details'], 0, 80)); ?>...</span>
						</div>
					</div>
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="row justify-content-center my-5">
		<a class="btn btn-danger btn-md" href="<?php echo route('projects'); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'see_all_projects'); ?></a>
	</div>
	<h2 class="green-text font-weight-bold mt-3 mb-4 text-center"><i class="fas fa-newspaper pr-2"></i><?php echo locale('views', 'news'); ?></h2>
	<div class="news-section scroll">
		<div class="row">
		<?php foreach ($newses['news'] as $news) { ?>
			<div class="col-sm-4 mb-3">
				<a href="<?php echo route('news/show', ['id' => $news['id']]); ?>" class="link-unstyled">
					<div class="card">
						<img class="card-img-top" src="<?php echo $news['image_path'] ?>" alt="<?php echo $news['title'] ?>" height='200px'>
						<div class="card-body">
							<h4 class="card-title"><?php echo substr($news['title'], 0, 30); ?></h4>
							<span class="card-text"><?php echo strip_tags(substr($news['details'], 0, 80)); ?>...</span>
						</div>
					</div>
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="row justify-content-center my-5">
		<a class="btn btn-danger btn-md" href="<?php echo route('news'); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'see_all_news'); ?></a>
	</div>
</section>
<!-- #END# Dynamic -->

<?php endblock() ?>