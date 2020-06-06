<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo 'Projects || '.title(); ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>
    
  <meta name="keywords" content="<?php echo $contents['keywords']; ?>">
  <meta name="description" content="<?php echo $contents['slogan']; ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="text-info font-weight-bold mb-5"><i class="fas fa-briefcase pr-2"></i><?php echo locale('views', 'our_projects'); ?></h1>

	<?php foreach ($projects['projects'] as $project) { ?>

        <div class="row mt-3">
          <div class="col-lg-5 col-xl-4 mb-4">
            <div class="view overlay rounded z-depth-1">
              <img src="<?php echo $project['image_path']; ?>" class="img-fluid" alt="<?php echo $project['name']; ?>">
              <a href="<?php echo route('projects/show', ['id' => $project['id']]); ?>"><div class="mask rgba-white-slight"></div></a>
            </div>
          </div>
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
            <h3 class="mb-3 font-weight-bold text-primary">
              <strong><?php echo $project['name']; ?></strong>
            </h3>
            <p class="grey-text"><?php echo substr(strip_tags($project['details']), 0, 150); ?>...</p>
            <a href="<?php echo route('projects/show', ['id' => $project['id']]); ?>" class="btn btn-warning btn-md"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'show_details'); ?></a>
          </div>
        </div>
        <hr class="mb-5">

	<?php } ?>

    <!-- Pagination -->
    <?php echo $projects['pagination']; ?>
</section>

<?php endblock() ?>