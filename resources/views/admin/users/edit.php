<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'All Users || '.$user['name'].' || Edit Details || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">Admin Dashboard</div>
  <div class="card-body">

      <h5 class="text-center my-3 text-muted"><i class="fas fa-user-edit pr-2"></i>Edit Details</h5>

      <form method="POST" action="<?php echo route('admin/users/update'); ?>"> 

        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        
        <div class="form-label-group my-3">
          <label for="inputName">Name</label>
          <input type="text" name="name" value="<?php echo $user['name']; ?>" id="inputName" class="form-control <?php echo empty(field_err('name'))? '' : 'is-invalid'; ?>">
          <?php if(!empty(field_err('name'))){ ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo field_err('name'); ?></strong>
          </span>
          <?php } ?>
        </div>
        
        <div class="form-label-group my-3">
          <label for="inputUserame">Username</label>
          <input type="text" name="username" value="<?php echo $user['username']; ?>" id="inputUserame" class="form-control <?php echo empty(field_err('username'))? '' : 'is-invalid'; ?>">
          <?php if(!empty(field_err('username'))){ ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo field_err('username'); ?></strong>
          </span>
          <?php } ?>
        </div>
        
        <div class="form-label-group my-3">
          <label for="inputEmail">Email</label>
          <input type="email" value="<?php echo $user['email']; ?>" name="email" id="inputEmail" class="form-control <?php echo empty(field_err('email'))? '' : 'is-invalid'; ?>">
          <?php if(!empty(field_err('email'))){ ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo field_err('email'); ?></strong>
          </span>
          <?php } ?>
        </div>

        <button type="submit" class="btn btn-primary mr-5">Update</button>
      </form>

  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/users/show', ['id' => $user['id']]) ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>