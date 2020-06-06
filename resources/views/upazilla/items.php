<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo title().' || '.locale('views', 'upazilla_info').' || '.locale('views', 'upazilla_'.$_GET['type']); ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>

<meta name="keywords" content="<?php echo $contents['keywords'].', '.$_GET['type']; ?>">
<meta name="description" content="<?php echo $contents['slogan']; ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="text-info font-weight-bold mb-5"><i class="fas fa-book-reader pr-2"></i><?php echo locale('views', 'upazilla_info'); ?></h1>
	<h4 class="my-3 font-weight-bold text-primary"><?php echo locale('views', 'upazilla_'.$_GET['type']); ?></h4>

	<input class="searchBox form-control mb-4"  class="form-control" placeholder="<?php echo locale('views', 'search_something'); ?>">
	<div class="content_paginator">
		<?php foreach ($items as $item) { ?>
			<div class="result">
				<div class="row mt-3">
					<div class="col-lg-5 col-xl-4 mb-4">
						<div class="view overlay rounded z-depth-1">
							<img src="<?php echo $item['image_path']; ?>" class="img-fluid" alt="<?php echo $item['title']; ?>">
							<a href="<?php echo $item['image_path']; ?>" target="_blank"><div class="mask rgba-white-slight"></div></a>
						</div>
					</div>
					<div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
						<h3 class="mb-3 font-weight-bold text-primary">
							<strong><?php echo $item['title']; ?></strong>
						</h3>
						<p class="grey-text"><?php echo strip_tags(substr($item['details'], 0, 150)); ?>...</p>
						<a href="<?php echo route('news/show', ['id' => $item['id']]); ?>" class="btn btn-warning btn-md"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'show_details'); ?></a>
					</div>
				</div>
				<hr class="mb-5">
			</div>
		<?php } ?>
	</div>
	<div id="pagingControls"></div>
	<!-- <div id="showingInfo" class="well my-3"></div> -->

	
</section>

<?php endblock() ?>