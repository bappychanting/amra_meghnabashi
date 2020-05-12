<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>
    
    <?php echo 'Projects || '.$project['name'].' || '.title(); ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>
    
  <meta name="keywords" content="<?php echo $contents['keywords']; ?>">
  <meta name="description" content="<?php echo $contents['slogan']; ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="green-text font-weight-bold mb-5"><i class="fas fa-briefcase pr-2"></i><?php echo locale('views', 'our_projects'); ?></h1>
	<h4 class="my-3 font-weight-bold green-text"><?php echo $project['name']; ?></h4>
	<hr>
    <p><?php echo $project['details']; ?></p>
	<a class="btn btn-danger btn-sm my-3" href="<?php echo route('projects') ?>"><i class="fas fa-arrow-left pr-2"></i><?php echo locale('views', 'go_back'); ?></a>
	
</section>

<?php endblock() ?>