<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'All Users || '.$user['name'].' || Edit Password || '.title(); ?>

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
        <div class="alert alert-<?php echo $key; ?>"> 
          <?php echo $value; ?>
        </div>
        <?php                            
      }
    } 
    ?>

    <h5 class="text-center my-3 text-muted"><i class="fas fa-user-edit pr-2"></i>Edit Password</h5>

    <form method="POST" action="<?php echo route('admin/users/update/password'); ?>"> 

      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

      <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

      <div class="form-label-group my-3">
        <label for="inputAuthPass">Old Password</label>
        <input type="password" name="auth_pass" id="inputAuthPass" class="form-control">
      </div>

      <div class="form-label-group my-3">
        <label for="inputPassword">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control <?php echo empty(field_err('password'))? '' : 'is-invalid'; ?>">
        <?php if(!empty(field_err('password'))){ ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo field_err('password'); ?></strong>
          </span>
        <?php } ?>
      </div>

      <div class="form-label-group my-3">
        <label for="inputConfirmPassword">Confirm Password</label>
        <input type="password" name="confirmPassword" id="inputConfirmPassword" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary mr-5">Update</button>
    </form>

  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/users/show', ['id' => $user['id']]) ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>