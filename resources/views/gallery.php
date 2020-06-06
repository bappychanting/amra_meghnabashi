<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo title().' || '.locale('views', 'gallery').' || '.locale('views', 'gallery_'.$_GET['type']); ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>

<meta name="keywords" content="<?php echo $contents['keywords'].', gallery, '.$_GET['type']; ?>">
<meta name="description" content="<?php echo $contents['slogan']; ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="text-info font-weight-bold mb-5"><i class="fas fa-book-reader pr-2"></i><?php echo locale('views', 'gallery'); ?></h1>
	<h4 class="my-3 font-weight-bold text-primary"><?php echo locale('views', 'gallery_'.$_GET['type']); ?></h4>

	

	
</section>

<?php endblock() ?>