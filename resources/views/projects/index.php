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
	<h1 class="green-text font-weight-bold mb-5"><i class="fas fa-briefcase pr-2"></i><?php echo locale('views', 'our_projects'); ?></h1>

	<?php foreach ($projects['projects'] as $project) { ?>
		<div class="border border-light py-4 px-3 mb-3">
			<h5 class="font-weight-bold green-text"><?php echo $project['name'] ?></h5><hr>
			<p><?php echo strip_tags(substr($project['details'], 0, 100)); ?>...</p>
			<a class="btn btn-danger btn-md" href="<?php echo route('projects/show', ['id' => $project['id']]); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'show_details'); ?></a>
		</div>
	<?php } ?>

    <!-- Pagination -->
    <?php echo $projects['pagination']; ?>
</section>

<?php endblock() ?>