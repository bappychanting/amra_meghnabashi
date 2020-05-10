<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'All Members || '.$member['name'].' || '.title(); ?>

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
    <h5 class="text-center my-3 text-muted"><i class="fas fa-user-tag pr-2"></i><?php echo $member['name']; ?></h5>
    <p><strong>Designation:</strong> <?php echo $member['designation']; ?></p>
    <p><strong>Contact:</strong> <?php echo $member['contact']; ?></p>
    <p><strong>Created At:</strong> <?php echo date('F d (l), Y', strtotime($member['created_at'])); ?></p>
    <p><?php echo $member['details']; ?></p>
    <a class="btn btn-warning btn-sm" href="<?php echo route('admin/members/edit', ['id' => $member['id']]) ?>"><i class="fas fa-edit pr-2"></i>Edit Member</a>
    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm">#</th>
          <th class="th-sm">Project Name</th>
          <th class="th-sm">Donation</th>
          <th class="th-sm">Donation Date</th>
          <th class="th-sm">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($donations as $donation) { ?>
          <tr>
            <td class="font-weight-bold"><?php echo $donation['id']; ?></td>
            <td><?php echo $member['project_name']; ?></td>
            <td><?php echo $member['donation']; ?></td>
            <td><?php echo date('F d (l), Y', strtotime($member['donation_date'])); ?></td>
            <td>
            </td>
          </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <tr>
          <th class="th-sm">#</th>
          <th class="th-sm">Project Name</th>
          <th class="th-sm">Donation</th>
          <th class="th-sm">Donation Date</th>
          <th class="th-sm">Actions</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/members/all') ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>