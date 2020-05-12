<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>
    
    <?php echo 'News || '.$news['name'].' || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="green-text font-weight-bold mb-5"><i class="fas fa-newspaper pr-2"></i><?php echo locale('views', 'news'); ?></h1>

	<a class="btn btn-danger btn-sm my-3" href="<?php echo route('news') ?>"><i class="fas fa-arrow-left pr-2"></i><?php echo locale('views', 'go_back'); ?></a>
	
</section>

<?php endblock() ?>