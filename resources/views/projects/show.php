<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>
    
    <?php echo 'Projects || '.$project['name'].' || '.title(); ?>

<?php endblock() ?>

<?php startblock('meta_tags') ?>
    
  <meta name="keywords" content="<?php echo $contents['keywords'].', '.$project['tags']; ?>">
  <meta name="description" content="<?php echo $contents['slogan']; ?>">

<meta property="og:title" content="<?php echo $project['name'] ?>">
<meta property="og:description" content="<?php echo substr(strip_tags($project['details']), 0, 50); ?>...">
<meta property="og:image" content="<?php echo $project['image_path'] ?>">
<meta property="og:url" content="<?php echo route('projects/show', ['id' => $project['id']]); ?>">

<?php endblock() ?>

<?php startblock('content') ?>

<section class="container my-3 py-3">
	<h1 class="text-info font-weight-bold mb-5"><i class="fas fa-briefcase pr-2"></i><?php echo locale('views', 'our_projects'); ?></h1>
	<h4 class="my-3 font-weight-bold text-primary"><?php echo $project['name']; ?></h4>
	<div class="card mb-4 wow fadeIn">
    	<img src="<?php echo $project['image_path'] ?>" class="img-fluid" alt="<?php echo $project['title'] ?>">
    </div>
    <?php echo $project['details']; ?>
	<div id="social_share" class="my-3"></div>
  <a class="my-3 font-weight-bold text-primary h5" data-toggle="collapse" href="#donations" aria-expanded="false" aria-controls="donations">
    <?php echo locale('views', 'view_donations'); ?>
  </a>
  <div class="collapse mt-3" id="donations">
    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm">#</th>
          <th class="th-sm"><?php echo locale('views', 'member_name'); ?></th>
          <th class="th-sm"><?php echo locale('views', 'total_donation'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php $id=1; $total_donation = 0; foreach ($donations as $donation) { ?>
          <tr>
            <td class="font-weight-bold"><?php echo $id; ?></td>
            <td><a href="<?php echo route('members/show', ['id' => $donation['member_id']]); ?>"><?php echo $donation['member_name']; ?></a></td>
            <td><?php echo $donation['donation']; ?>/=</td>
          </tr>
        <?php $id++; $total_donation += $donation['donation']; } ?>
      </tbody>
    </table>
  </div>
  <br>
  <a class="font-weight-bold text-primary h5" href="javascript:void(0);" data-toggle="modal" data-target="#join_modal"><?php echo locale('views', 'be_volunteer'); ?></a>
	
</section>

<?php endblock() ?>