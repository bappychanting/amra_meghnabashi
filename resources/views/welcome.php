<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="front-page-top-div">
	<div class="container text-white py-5">
		<h1 class="font-weight-bold mt-5 mb-3">Lorem ipsum dolor sit amet.</h1>
		<button class="btn btn-danger mt-3 mb-5">DONATE NOW!</button>
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
		<h6>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</h6>
		<div class="row justify-content-center">
			<button class="btn btn-danger">See All Members</button>
		</div>
	</div>
</div>

<div class="container py-3">
	<h2 class="green-text font-weight-bold my-3 text-center">Our Projects</h2>
	<div class="row">
		<?php $count = 1; foreach ($projects['projects'] as $project) { ?>
		<div class="col-sm-3">
			<div class="border border-light px-3 py-4 mx-3" style='height:150px;'>
				<h5 class="green-text"><?php echo $project['name'] ?></h5>
				<hr>
				<p class="card-text"><?php echo strip_tags(substr($project['details'], 0, 30)); ?></p>
			</div>
		</div>
		<?php if($count == 4){ break; } $count++; } ?>
	</div>
	<div class="row justify-content-center mt-3 mb-5">
		<button class="btn btn-danger">Find Out More</button>
	</div>
	<h2 class="green-text font-weight-bold my-3 text-center">News</h2>
	<div class="row">
		<?php $count = 1; foreach ($newses['news'] as $news) { ?>
			<div class="col-sm-4">
				<div class="card">
					<img class="card-img-top" src="<?php echo $news['image_path'] ?>" alt="<?php echo $news['title'] ?>" height='300px'>
					<div class="card-body">
						<h4 class="card-title"><?php echo strip_tags(substr($news['title'], 0, 30)); ?></h4>
						<p class="card-text"><?php echo strip_tags(substr($news['details'], 0, 30)); ?></p>
					</div>
				</div>
			</div>
			<?php if($count == 3){ break; } $count++; } ?>
		</div>
		<div class="row justify-content-center mt-3 mb-5">
			<button class="btn btn-danger">Find Out More</button>
		</div>
	</div>

<?php endblock() ?>