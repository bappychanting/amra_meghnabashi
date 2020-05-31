<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo 'Members || '.locale('views', 'be_volunteer').' || '.title(); ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>
    
  <meta name="keywords" content="<?php echo $contents['keywords']; ?>">
  <meta name="description" content="<?php echo $contents['slogan']; ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="text-info font-weight-bold mb-5"><i class="fas fa-users pr-2"></i><?php echo locale('views', 'our_members'); ?></h1>
  <h4 class="my-3 font-weight-bold text-primary"><?php echo locale('views', 'be_volunteer'); ?></h4>
	
</section>

<?php endblock() ?>