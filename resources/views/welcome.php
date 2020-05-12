<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo title().' || '.$contents['slogan']; ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>
    
  <meta name="keywords" content="<?php echo $contents['keywords']; ?>">
  <meta name="description" content="<?php echo $contents['slogan']; ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<div class="front-page-top-div">
	<div class="container text-center py-5">
		<h1 class="font-weight-bold green-text mt-5"><?php echo locale('views', 'app_title'); ?></h1>
		<h2 class="text-white mb-3"><?php echo $contents['slogan']; ?></h2>
		<button class="btn btn-danger mt-3 mb-5"><i class="fas fa-donate pr-2"></i><?php echo locale('views', 'donate_now'); ?></button>
	</div>
</div>
<div class="green accent-3 py-2">
	<div class="container py-3">
		<div class="row">
			<div class="col-sm-6">
				<h2 class="red-text font-weight-bold"><?php echo locale('views', 'who_are_we'); ?></h2>
				<p class="text-white my-3"><?php echo $contents['about_us']; ?></p>
			</div>
			<div class="col-sm-6">
				<div class="embed-responsive embed-responsive-16by9">
            		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
            	</div>
			</div>
		</div>
	</div>
</div>

<!-- Dynamic Section -->
<section class="container py-3">
	<h2 class="green-text font-weight-bold my-3 text-center"><i class="fas fa-users pr-2"></i><?php echo locale('views', 'our_members'); ?></h2>
	<div class="row">
	<?php $count = 1; foreach ($members['members'] as $member) { ?>
	<div class="col-sm-2">
		<img src="<?php echo $member['image_path']; ?>" class="rounded-circle mx-2 mt-3" alt="<?php echo $member['name']; ?>" height="100px" width="100px">
	</div>
	<?php if($count == 6){ break; } $count++; } ?>
	</div>
	<div class="row justify-content-center mt-3 mb-5">
		<a class="btn btn-danger" href="<?php echo route('members'); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'see_all_members'); ?></a>
	</div>
	<h2 class="green-text font-weight-bold my-3 text-center"><i class="fas fa-briefcase pr-2"></i><?php echo locale('views', 'our_projects'); ?></h2>
	<div class="row">
		<?php $count = 1; foreach ($projects['projects'] as $project) { ?>
		<div class="col-sm-3">
			<div class="border border-light px-3 py-4 mx-3" style='height:150px;'>
				<h5 class="green-text"><?php echo $project['name'] ?></h5><hr>
				<p class="grey-text"><?php echo strip_tags(substr($project['details'], 0, 30)); ?>...</p>
			</div>
		</div>
		<?php if($count == 4){ break; } $count++; } ?>
	</div>
	<div class="row justify-content-center mt-3 mb-5">
		<a class="btn btn-danger" href="<?php echo route('projects'); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'see_all_projects'); ?></a>
	</div>
	<h2 class="green-text font-weight-bold my-3 text-center"><i class="fas fa-newspaper pr-2"></i><?php echo locale('views', 'news'); ?></h2>
	<div class="row">
	<?php $count = 1; foreach ($newses['news'] as $news) { ?>
		<div class="col-sm-4">
			<div class="card">
				<img class="card-img-top" src="<?php echo $news['image_path'] ?>" alt="<?php echo $news['title'] ?>" height='300px'>
				<div class="card-body">
					<h4 class="card-title"><?php echo strip_tags(substr($news['title'], 0, 30)); ?></h4>
					<p class="card-text"><?php echo strip_tags(substr($news['details'], 0, 80)); ?>...</p>
				</div>
			</div>
		</div>
		<?php if($count == 3){ break; } $count++; } ?>
	</div>
	<div class="row justify-content-center mt-3 mb-5">
		<a class="btn btn-danger" href="<?php echo route('news'); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'see_all_news'); ?></a>
	</div>
</section>
<!-- #END# Dynamic Section -->

<!-- More Section -->
<section class='container py-3'>
	<h2 class="green-text font-weight-bold my-3 text-center"><?php echo locale('views', 'extra_section_title'); ?></h2>
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
</section>
<!-- #END# More Section -->

<?php endblock() ?>