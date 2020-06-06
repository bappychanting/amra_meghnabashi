<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo title().' || '.locale('views', 'news').' || '.locale('views', $_GET['type']); ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>

<meta name="keywords" content="<?php echo $contents['keywords']; ?>">
<meta name="description" content="<?php echo $contents['slogan']; ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="text-info font-weight-bold mb-5"><i class="fas fa-newspaper pr-2"></i><?php echo locale('views', 'news'); ?></h1>
  <h4 class="my-3 font-weight-bold text-primary"><?php echo locale('views', $_GET['type']); ?></h4>

	<?php foreach ($newses['items'] as $news) { ?>

        <div class="row mt-3">
          <div class="col-lg-5 col-xl-4 mb-4">
            <div class="view overlay rounded z-depth-1">
              <img src="<?php echo $news['image_path']; ?>" class="img-fluid" alt="<?php echo $news['title']; ?>">
              <a href="<?php echo $news['image_path']; ?>" target="_blank"><div class="mask rgba-white-slight"></div></a>
            </div>
          </div>
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
            <h3 class="mb-3 font-weight-bold text-primary">
              <strong><?php echo $news['title']; ?></strong>
            </h3>
            <p class="grey-text"><?php echo strip_tags(substr($news['details'], 0, 150)); ?>...</p>
            <a href="<?php echo route('news/show', ['id' => $news['id']]); ?>" class="btn btn-warning btn-md"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'show_details'); ?></a>
          </div>
        </div>
        <hr class="mb-5">

	<?php } ?>

	<!-- Pagination -->
	<?php echo $newses['pagination']; ?>
</section>

<?php endblock() ?>