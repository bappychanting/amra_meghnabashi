<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo 'Members || '.title(); ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>
    
  <meta name="keywords" content="<?php echo $contents['keywords']; ?>">
  <meta name="description" content="<?php echo $contents['slogan']; ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="green-text font-weight-bold mb-5"><i class="fas fa-users pr-2"></i><?php echo locale('views', 'our_members'); ?></h1>
	<div class="row">
		<?php $count = 0; foreach ($members as $member) { ?>
			<div class="col-sm-3 mb-3">
				<div class="media">
				  <img class="rounded-circle mr-3" src="<?php echo $member['image_path']; ?>" alt="<?php echo $member['name']; ?>" height="50px" width="50px">
				  <div class="media-body">
				    <h5 class="mt-0 font-weight-bold"><?php echo $member['name']; ?></h5>
				    <i class="far fa-id-card pr-2"></i><?php echo $member['designation']; ?>
				  </div>
				</div>
				<a class="btn btn-danger btn-sm" href="<?php echo route('members/show', ['id' => $member['id']]); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'show_details'); ?></a>
			</div>
		<?php $count++; echo ($count%4==0) ? '<div class="col-sm-12"><hr></div>' : '' ; } ?>
	</div>
</section>

<?php endblock() ?>