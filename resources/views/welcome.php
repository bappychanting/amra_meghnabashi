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
<!-- <section class="front-page-top-div" style="background-size:cover;background-repeat:no-repeat;background-image:url('<?php echo $contents['header_image']; ?>');">
	<div class="header-content">
		<div class="container text-center">
			<p class="h2 text-white mb-3"><?php echo $contents['slogan']; ?></p>
			<a class="btn btn-outline-warning waves-effect mt-3" href="<?php echo $contents['donate_link']; ?>" target="_blank"><i class="fas fa-donate pr-2"></i><?php echo locale('views', 'donate_now'); ?></a>
		</div>
	</div>
</section> -->
<section class="py-5" style="background-size:cover;background-repeat:no-repeat;background-image:url('<?php echo $contents['header_image']; ?>');">
	<div class="container text-center my-5 py-5">
		<p class="h1 text-white my-5"><?php echo $contents['slogan']; ?></p>
	</div>
</section>
<!-- #END# Intro -->

<!-- Our Achievements -->
<section class='grey lighten-3 py-3'>
	<div class="container">
		<div class="row features-small wow fadeIn text-center">
			<div class="col-xl-3 col-lg-6">
				<p>
					<span class="h1 text-primary timer" data-from="0" data-to="<?php echo $contents['programs']; ?>" data-speed="5000" data-refresh-interval="50"></span>
					<br><span class="py-1">Programs<?php // echo locale('views', 'programs'); ?></span>
				</p>
			</div>
			<div class="col-xl-3 col-lg-6">
				<p>
					<span class="h1 text-primary timer" data-from="0" data-to="<?php echo $contents['beneficiaries']; ?>" data-speed="5000" data-refresh-interval="50"></span>
					<br><span class="py-1">Beneficiaries<?php // echo locale('views', 'beneficiaries'); ?></span>
				</p>
			</div>
			<div class="col-xl-3 col-lg-6">
				<p>
					<span class="h1 text-primary timer" data-from="0" data-to="<?php echo $contents['reached']; ?>" data-speed="5000" data-refresh-interval="50"></span><span class="h1 text-primary">&#37;</span>
					<br><span class="py-1">Reached<?php // echo locale('views', 'reached'); ?></span>
				</p>
			</div>
			<div class="col-xl-3 col-lg-6">
				<p>
					<span class="h1 text-primary timer" data-from="0" data-to="<?php echo $contents['job_scholarship']; ?>" data-speed="5000" data-refresh-interval="50"></span><span class="h1 text-primary">&#43;</span>
					<br><span class="py-1">Jobs & Scholarships<?php // locale('views', 'job_scholarship'); ?></span>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- #END# Our Achievements -->

<!-- About Us -->
<section class="container pt-3">
	<p class="h3 text-info font-weight-bold text-center my-3"><?php echo locale('views', 'who_are_we'); ?></p>
	<div class="row">
		<div class="col-sm-6">
			<p class="text-justify"><?php echo $contents['about_us']; ?></p>
		</div>
		<div class="col-sm-6" style="margin-top:3px;">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="<?php echo $contents['video_src']; ?>" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<hr>
</section>
<!-- #END# About Us -->

<!-- Dynamic -->
<section class="container py-3">
	<ul class="pagination-sm content-paginate"></ul>
	<p class="h3 text-info font-weight-bold my-3 text-center"><i class="fas fa-users pr-2"></i><?php echo locale('views', 'our_members'); ?></p>
	<div class="owl-carousel">
		<?php foreach ($members['advisers'] as $adviser) { ?>
			<div>
				<a href="<?php echo route('members/show', ['id' => $adviser['id']]); ?>" title="<?php echo $adviser['name']; ?>" class="link-unstyled">
					<?php echo image($adviser['image_path'], $adviser['name'], ['class'=>'rounded-circle mt-3', 'height'=>'150px']); ?>
				</a>
			</div>
		<?php } ?>
		<?php foreach ($members['admins'] as $admin) { ?>
			<div>
				<a href="<?php echo route('members/show', ['id' => $admin['id']]); ?>" title="<?php echo $admin['name']; ?>" class="link-unstyled">
					<?php echo image($admin['image_path'], $admin['name'], ['class'=>'rounded-circle mt-3', 'height'=>'150px']); ?>
				</a>
			</div>
		<?php } ?>
	</div>
	<div class="row justify-content-center my-3">
		<a class="btn btn-warning btn-md" href="<?php echo route('members'); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'see_all_members'); ?></a>
	</div>
	<p class="h3 text-info font-weight-bold my-4 text-center"><i class="fas fa-briefcase pr-2"></i><?php echo locale('views', 'our_projects'); ?></p>
	<!-- <div id="project-carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php $i=0; foreach ($projects['projects'] as $key=>$project) { ?>
			<li data-target="#project-carousel" data-slide-to="<?php echo $key; ?>" <?php echo $key==0 ? 'class="active"' : '' ; ?>></li>
			<?php $i++; if($i==4) break; } ?>
		</ol>
		<div class="carousel-inner" role="listbox">
			<?php $i=0; foreach ($projects['projects'] as $key=>$project) { ?>
			<div class="carousel-item <?php echo $key==0 ? 'active' : '' ; ?>">
				<div class="view">
					<img class="d-block w-100" src="<?php echo $project['image_path'] ?>" alt="<?php echo $project['name'] ?>">
					<div class="mask rgba-black-light"></div>
				</div>
				<div class="carousel-caption">
					<a href="<?php echo route('projects/show', ['id' => $project['id']]); ?>" class="link-unstyled">
						<h3 class="h3-responsive"><?php echo $project['name']; ?></h3>
						<p><?php echo strip_tags(substr($project['details'], 0, 80)); ?>...</p>
					</a>
				</div>
			</div>
			<?php $i++; if($i==4) break; } ?>
		</div>
		<a class="carousel-control-prev" href="#project-carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#project-carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> -->
	<div class="row">
		<?php $i=0; foreach ($projects['projects'] as $project) { ?>
		<div class="col-sm-3 mb-3">
			<a href="<?php echo route('projects/show', ['id' => $project['id']]); ?>" class="link-unstyled">
				<div class="card">
					<img class="card-img-top" src="<?php echo $project['image_path'] ?>" alt="<?php echo $project['name'] ?>" height='120px'>
					<div class="card-body">
						<h6 class="card-title text-primary"><?php echo $project['name']; ?></h6>
						<span class="card-text"><?php echo strip_tags(substr($project['details'], 0, 80)); ?>...</span>
					</div>
				</div>
			</a>
		</div>
		<?php $i++; if($i==4) break; } ?>
	</div>
	<div class="row justify-content-center my-3">
		<a class="btn btn-warning btn-md" href="<?php echo route('projects'); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'see_all_projects'); ?></a>
	</div>
	<hr>
	<p class="h3 text-info font-weight-bold my-4 text-center"><i class="fas fa-newspaper pr-2"></i><?php echo locale('views', 'news'); ?></p>
	<div class="row">
	<?php $i=0; foreach ($newses['news'] as $news) { ?>
		<div class="col-sm-4 mb-3">
			<a href="<?php echo route('news/show', ['id' => $news['id']]); ?>" class="link-unstyled">
				<div class="card">
					<img class="card-img-top" src="<?php echo $news['image_path'] ?>" alt="<?php echo $news['title'] ?>" height='150px'>
					<div class="card-body">
						<h6 class="card-title text-primary"><?php echo substr($news['title'], 0, 70); ?>..</h6>
						<span class="card-text"><?php echo strip_tags(substr($news['details'], 0, 100)); ?>...</span>
					</div>
				</div>
			</a>
		</div>
		<?php $i++; if($i==3) break; } ?>
	</div>
	<div class="row justify-content-center my-3">
		<a class="btn btn-warning btn-md" href="<?php echo route('news'); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'see_all_news'); ?></a>
	</div>
	<hr>
</section>
<!-- #END# Dynamic -->

<!--Our Goals-->
<section class="container py-3">
	<p class="h3 text-info font-weight-bold mb-4 text-center"><i class="fas fa-praying-hands pr-2"></i><?php echo locale('views', 'our_programs'); ?></p>
	<div class="row">
		<div class="col-md-4"><?php echo $contents['our_programs_1'] ?></div>
		<div class="col-md-4">
			<?php echo image('resources/assets/img/logo.png', APP_NAME, ['class'=>'z-depth-0 img-fluid img-thumbnail mb-3']); ?>
		</div>
		<div class="col-md-4"><?php echo $contents['our_programs_2'] ?></div>
		<div class="col-md-12 text-center">
			<a class="font-weight-bold text-primary h5" data-toggle="collapse" href="#advisers" aria-expanded="false" aria-controls="advisers">
				<?php echo locale('views', 'read_more'); ?>
			</a>
		</div>
	</div>
	<div class="collapse mt-3" id="advisers">
		<?php echo $contents['our_programs_3'] ?>
	</div>
	<div class="mb-3"></div>
</section>
<!-- #END# Our Goals -->

<?php endblock() ?>