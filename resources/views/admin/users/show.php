<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'Account || '.$user['name'].' || '.title(); ?>

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
    <h5 class="text-center my-3 text-muted"><i class="fas fa-users pr-2"></i><?php echo $user['name']; ?></h5>
    <p><strong>Userame:</strong> <?php echo $user['username']; ?></p>
    <p><strong>Email:</strong> <a href="mailto:<?php echo $user['email']; ?>"><?php echo $user['email']; ?></a></p>
    <p><strong>Created At:</strong> <?php echo date('F d (l), Y', strtotime($user['created_at'])); ?></p>
    <a class="btn btn-warning btn-sm" href="<?php echo route('admin/users/edit', ['id' => $user['id']]) ?>"><i class="fas fa-user-edit pr-2"></i>Edit Details</a>
    <a class="btn btn-warning btn-sm" href="<?php echo route('admin/users/edit/password', ['id' => $user['id']]) ?>"><i class="fas fa-user-edit pr-2"></i>Edit Password</a>
  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/users/all') ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>