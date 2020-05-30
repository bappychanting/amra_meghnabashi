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
	<h1 class="text-info font-weight-bold mb-5"><i class="fas fa-users pr-2"></i><?php echo locale('views', 'our_members'); ?></h1>
	<a class="my-3 font-weight-bold text-primary h4" data-toggle="collapse" href="#advisers" aria-expanded="false" aria-controls="advisers">
		<?php echo locale('views', 'advisers'); ?>
	</a><hr>
	<div class="collapse <?php echo (!isset($_GET['type']) || $_GET['type'] == 'advisers') ? 'show' : ''; ?> mt-3" id="advisers">
		<div class="row">
		<?php foreach ($members['advisers'] as $adviser) { ?>
			<div class="col-sm-4 mb-3">
				<div class="media">
					<?php echo image($adviser['image_path'], $adviser['name'], ['class'=>'rounded-circle mr-3', 'height'=>'60px', 'width' => '60px']); ?>
					<div class="media-body">
						<h5 class="mt-0 font-weight-bold"><?php echo $adviser['name']; ?></h5>
						<i class="far fa-id-card pr-2"></i><?php echo $adviser['designation']; ?>
					</div>
				</div>
				<a class="btn btn-warning btn-sm" href="<?php echo route('members/show', ['id' => $adviser['id']]); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'show_details'); ?></a>
			</div>
			<?php } ?>
		</div>
	</div>
	<a class="my-3 font-weight-bold text-primary h4" data-toggle="collapse" href="#admins" aria-expanded="false" aria-controls="admins">
		<?php echo locale('views', 'admins'); ?>
	</a><hr>
	<div class="collapse <?php echo (!isset($_GET['type']) || $_GET['type'] == 'admins') ? 'show' : ''; ?> mt-3" id="admins">
		<div class="row">
		<?php foreach ($members['admins'] as $admin) { ?>
			<div class="col-sm-4 mb-3">
				<div class="media">
					<?php echo image($admin['image_path'], $admin['name'], ['class'=>'rounded-circle mr-3', 'height'=>'60px', 'width' => '60px']); ?>
					<div class="media-body">
						<h5 class="mt-0 font-weight-bold"><?php echo $admin['name']; ?></h5>
						<i class="far fa-id-card pr-2"></i><?php echo $admin['designation']; ?>
					</div>
				</div>
				<a class="btn btn-warning btn-sm" href="<?php echo route('members/show', ['id' => $admin['id']]); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'show_details'); ?></a>
			</div>
			<?php } ?>
		</div>
	</div>
	<a class="my-3 font-weight-bold text-primary h4" data-toggle="collapse" href="#vips" aria-expanded="false" aria-controls="vips">
		<?php echo locale('views', 'vips'); ?>
	</a><hr>
	<div class="collapse <?php echo (!isset($_GET['type']) || $_GET['type'] == 'vips') ? 'show' : ''; ?> mt-3" id="vips">
		<div class="row">
		<?php foreach ($members['vips'] as $vip) { ?>
			<div class="col-sm-4 mb-3">
				<div class="media">
					<?php echo image($vip['image_path'], $vip['name'], ['class'=>'rounded-circle mr-3', 'height'=>'60px', 'width' => '60px']); ?>
					<div class="media-body">
						<h5 class="mt-0 font-weight-bold"><?php echo $vip['name']; ?></h5>
						<i class="far fa-id-card pr-2"></i><?php echo $vip['designation']; ?>
					</div>
				</div>
				<a class="btn btn-warning btn-sm" href="<?php echo route('members/show', ['id' => $vip['id']]); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'show_details'); ?></a>
			</div>
			<?php } ?>
		</div>
	</div>
	<a class="my-3 font-weight-bold text-primary h4" data-toggle="collapse" href="#volunteers" aria-expanded="false" aria-controls="volunteers">
		<?php echo locale('views', 'volunteers'); ?>
	</a><hr>
	<div class="collapse <?php echo (!isset($_GET['type']) || $_GET['type'] == 'volunteers') ? 'show' : ''; ?> mt-3" id="volunteers">
		<div class="row">
		<?php foreach ($members['volunteers'] as $volunteer) { ?>
			<div class="col-sm-4 mb-3">
				<div class="media">
					<?php echo image($volunteer['image_path'], $volunteer['name'], ['class'=>'rounded-circle mr-3', 'height'=>'60px', 'width' => '60px']); ?>
					<div class="media-body">
						<h5 class="mt-0 font-weight-bold"><?php echo $volunteer['name']; ?></h5>
						<i class="far fa-id-card pr-2"></i><?php echo $volunteer['designation']; ?>
					</div>
				</div>
				<a class="btn btn-warning btn-sm" href="<?php echo route('members/show', ['id' => $volunteer['id']]); ?>"><i class="fas fa-external-link-alt pr-2"></i><?php echo locale('views', 'show_details'); ?></a>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php endblock() ?>