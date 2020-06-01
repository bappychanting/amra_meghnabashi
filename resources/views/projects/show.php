<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>
    
    <?php echo 'Projects || '.$project['name'].' || '.title(); ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>
    
  <meta name="keywords" content="<?php echo $contents['keywords'].', '.$project['tags']; ?>">
  <meta name="description" content="<?php echo $contents['slogan']; ?>">

<meta property="og:title" content="<?php echo $project['name'] ?>">
<meta property="og:description" content="<?php echo strip_tags(substr($project['details'], 0, 50)); ?>...">
<meta property="og:image" content="<?php echo $project['image_path'] ?>">
<meta property="og:url" content="<?php echo route('projects/show', ['id' => $project['id']]); ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="text-info font-weight-bold mb-5"><i class="fas fa-briefcase pr-2"></i><?php echo locale('views', 'our_projects'); ?></h1>
	<h4 class="my-3 font-weight-bold text-primary"><?php echo $project['name']; ?></h4>
	<div class="card mb-4 wow fadeIn">
    	<img src="<?php echo $project['image_path'] ?>" class="img-fluid" alt="<?php echo $news['title'] ?>">
    </div>
    <?php echo $project['details']; ?>
	<div id="social_share" class="my-3"></div>
	
</section>

<?php endblock() ?>