<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo title().' || Amader Meghna || '.locale('views', 'meghna_personality'); ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>

<meta name="keywords" content="<?php echo $contents['keywords'].', '.$meghna['keywords']; ?>">
<meta name="description" content="<?php echo $contents['slogan']; ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="text-info font-weight-bold mb-5"><i class="fas fa-book-reader pr-2"></i><?php echo locale('views', 'our_meghna'); ?></h1>
	<h4 class="my-3 font-weight-bold text-primary"><?php echo locale('views', 'meghna_personality'); ?></h4>

	<input class="searchBox form-control"  class="form-control" placeholder="<?php echo locale('views', 'search_something'); ?>. E.g. village">
	<div class="content_paginator">
		<?php foreach ($personalities as $personality) { ?>
			<div class="result media my-3">
				<?php echo image($personality['image_path'], $personality['name'], ['class'=>'rounded-circle mr-3', 'height'=>'130px', 'width' => '130px']); ?>
				<div class="media-body">
					<h5 class="mt-0 font-weight-bold"><?php echo $personality['name']; ?></h5>
					<i class="far fa-id-card pr-2"></i><?php echo $personality['designation']; ?>
					<br><?php echo strip_tags(substr($personality['details'], 0, 500)); ?>.....
					<br><a class="btn btn-warning btn-sm" href="<?php echo route('members/show', ['id' => $personality['id']]); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'show_details'); ?></a>
					<hr>
				</div>
			</div>
		<?php } ?>
	</div>
	<div id="pagingControls"></div>
	<div id="showingInfo" class="well" style="margin-top:20px"></div>
</section>

<?php endblock() ?>