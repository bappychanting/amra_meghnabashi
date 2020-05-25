<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'All Projects || '.$project['name'].' || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">Admin Dashboard</div>
  <div class="card-body">
    <?php 
    $alerts = Base\Request::getFlash();
    if(!empty((array) $alerts)){
      foreach($alerts as $key=>$value){
        ?>
        <div class="alert alert-<?php echo $key; ?> alert-dismissible"> 
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <?php echo $value; ?>
        </div>
        <?php                            
      }
    } 
    ?>
    <h5 class="text-center my-3 text-muted"><i class="fas fa-briefcase pr-2"></i><?php echo $project['name']; ?></h5>
    <img src="<?php echo $project['image_path']; ?>" class="img-fluid z-depth-1 rounded mb-3"/>
    <p><strong>Created At:</strong> <?php echo date('F d (l), Y', strtotime($project['created_at'])); ?></p>
    <p><strong>Tags:</strong> <?php echo '#'.str_replace(",", ", #", $project['tags']); ?></p>
    <?php echo $project['details']; ?>
    <a class="btn btn-warning btn-sm" href="<?php echo route('admin/projects/edit', ['id' => $project['id']]) ?>"><i class="fas fa-edit pr-2"></i>Edit Project</a>
    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm">#</th>
          <th class="th-sm">Member Name</th>
          <th class="th-sm">Donation</th>
          <th class="th-sm">Donation Date</th>
          <th class="th-sm">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $total_donation = 0; foreach ($donations as $donation) { ?>
          <tr>
            <td class="font-weight-bold"><?php echo $donation['id']; ?></td>
            <td><?php echo $donation['member_name']; ?></td>
            <td><?php echo $donation['donation']; ?></td>
            <td><?php echo date('F d (l), Y', strtotime($donation['donation_date'])); ?></td>
            <td>
              <a class="btn btn-primary btn-sm" href="<?php echo route('admin/members/show', ['id' => $donation['member_id']]) ?>" title="View Member"><i class="fas fa-eye"></i></a>
            </td>
          </tr>
        <?php $total_donation += $donation['donation']; } ?>
      </tbody>
      <tfoot>
        <tr>
          <th class="th-sm">#</th>
          <th class="th-sm">Member Name</th>
          <th class="th-sm">Donation</th>
          <th class="th-sm">Donation Date</th>
          <th class="th-sm">Actions</th>
        </tr>
      </tfoot>
    </table>
    <h5 class="my-3">Total: <?php echo $total_donation; ?>/=</h5>
  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/projects/all') ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>