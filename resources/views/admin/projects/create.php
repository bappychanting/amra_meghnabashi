<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'Projects || Add New Project || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">Admin Dashboard</div>
  <div class="card-body">

    <h5 class="text-center my-3 text-muted"><i class="fas fa-plus pr-2"></i>Add New Project</h5>

    <form method="POST" action="<?php echo route('admin/projects/store'); ?>"> 

      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

      <input type="hidden" name="user_id" value="<?php echo $auth_user->id; ?>">

      <div class="form-label-group my-3">
        <label for="inputName">Name</label>
        <input type="text" name="name" class="form-control" maxlength="50" minlength="2" required>
      </div>

      <div class="form-label-group my-3">
        <label for="inputName">Details</label>
        <textarea rows="10" class="form-control" name="details" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary mr-5">Submit</button>
    </form>
  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/projects/all') ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>