<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo title().' || Amader Meghna || '.locale('views', 'about_meghna'); ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>
    
  <meta name="keywords" content="<?php echo $contents['keywords'].', '.$meghna['keywords']; ?>">
  <meta name="description" content="<?php echo $contents['slogan']; ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="text-info font-weight-bold mb-5"><i class="fas fa-book-reader pr-2"></i><?php echo locale('views', 'our_meghna'); ?></h1>
	<h4 class="my-3 font-weight-bold text-primary"><?php echo locale('views', 'about_meghna'); ?></h4>

	<div class="card mb-4 wow fadeIn">
    	<img src="<?php echo $meghna['image'] ?>" class="img-fluid" alt="Amader Meghna">
    </div>
    <?php echo $meghna['main']; ?>
</section>

<?php endblock() ?>