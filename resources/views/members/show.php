<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo 'Members || '.$member['name'].' || '.title(); ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>
    
  <meta name="keywords" content="<?php echo $contents['keywords']; ?>">
  <meta name="description" content="<?php echo $contents['slogan']; ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="green-text font-weight-bold mb-5"><i class="fas fa-users pr-2"></i><?php echo locale('views', 'our_members'); ?></h1>
	<h4 class="my-3 font-weight-bold"><?php echo $member['name']; ?></h4>
	<hr>
    <a href="<?php echo $member['image_path']; ?>" target="_blank">
    	<img src="<?php echo $member['image_path']; ?>" alt="<?php echo $member['name']; ?>" class="img-fluid img-thumbnail my-3" style="width: 300px">
    </a>
    <p class="font-weight-bold"><i class="far fa-id-card pr-2"></i><?php echo $member['designation']; ?></p>
    <p class="font-weight-bold"><i class="fas fa-phone-square pr-2"></i><?php echo $member['contact']; ?></p>
    <?php echo $member['details']; ?>
	<a class="btn btn-danger btn-sm my-3" href="<?php echo route('members') ?>"><i class="fas fa-arrow-left pr-2"></i><?php echo locale('views', 'go_back'); ?></a>
	
</section>

<?php endblock() ?>