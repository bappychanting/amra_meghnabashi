<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="front-page-top-div">
	<div class="container text-white py-5">
		<h1 class="font-weight-bold mt-5 mb-3"><?php echo $contents['slogan']; ?></h1>
		<button class="btn btn-danger mt-3 mb-5"><i class="fas fa-donate pr-2"></i>DONATE NOW!</button>
	</div>
</div>
<div class="green accent-3 py-2">
	<div class="container py-3">
		<h5 class="text-white">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</h5>
		<h4 class="font-weight-bold red-text">Lorem ipsum dolor sit amet</h4>
	</div>
</div>

<div class="mb-3 grey lighten-4">
	<div class="container py-3">
		<p class="text-muted font-weight-bold my-3"><?php echo $contents['about_us']; ?></p>
	</div>
</div>

<div class="container py-3">
	<div class="row">
	<?php $count = 1; foreach ($members['members'] as $member) { ?>
	<div class="col-sm-2">
		<img src="<?php echo $member['image_path']; ?>" class="rounded-circle mx-2 mt-3" alt="<?php echo $member['name']; ?>" height="100px" width="100px">
	</div>
	<?php if($count == 6){ break; } $count++; } ?>
	</div>
	<div class="row justify-content-center mt-3 mb-5">
		<a class="btn btn-danger" href="<?php echo route('members'); ?>"><i class="fas fa-external-link-alt pr-2"></i>See All Members</a>
	</div>
	<h2 class="green-text font-weight-bold my-3 text-center"><i class="fas fa-briefcase pr-2"></i>Our Projects</h2>
	<div class="row">
		<?php $count = 1; foreach ($projects['projects'] as $project) { ?>
		<div class="col-sm-3">
			<div class="border border-light px-3 py-4 mx-3" style='height:150px;'>
				<h5 class="green-text"><?php echo $project['name'] ?></h5>
				<hr>
				<p><?php echo strip_tags(substr($project['details'], 0, 30)); ?>...</p>
			</div>
		</div>
		<?php if($count == 4){ break; } $count++; } ?>
	</div>
	<div class="row justify-content-center mt-3 mb-5">
		<a class="btn btn-danger" href="<?php echo route('projects'); ?>"><i class="fas fa-external-link-alt pr-2"></i>See All Projects</a>
	</div>
	<h2 class="green-text font-weight-bold my-3 text-center"><i class="fas fa-newspaper pr-2"></i>News</h2>
	<div class="row">
		<?php $count = 1; foreach ($newses['news'] as $news) { ?>
			<div class="col-sm-4">
				<div class="card">
					<img class="card-img-top" src="<?php echo $news['image_path'] ?>" alt="<?php echo $news['title'] ?>" height='300px'>
					<div class="card-body">
						<h4 class="card-title"><?php echo strip_tags(substr($news['title'], 0, 30)); ?></h4>
						<p class="card-text"><?php echo strip_tags(substr($news['details'], 0, 30)); ?>...</p>
					</div>
				</div>
			</div>
			<?php if($count == 3){ break; } $count++; } ?>
		</div>
		<div class="row justify-content-center mt-3 mb-5">
			<a class="btn btn-danger" href="<?php echo route('news'); ?>"><i class="fas fa-external-link-alt pr-2"></i>See All News</a>
		</div>
	</div>

<?php endblock() ?>