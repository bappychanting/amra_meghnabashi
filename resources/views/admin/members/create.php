<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'All Members || Add New Member || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">Admin Dashboard</div>
  <div class="card-body">

    <h5 class="text-center my-3 text-muted"><i class="fas fa-plus pr-2"></i>Add New Member</h5>

    <form method="POST" action="<?php echo route('admin/members/store'); ?>"> 

      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

      <div class="form-label-group my-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" maxlength="50" minlength="2" required>
      </div>

      <div class="form-label-group my-3">
        <label>Designation</label>
        <input type="text" name="designation" class="form-control" maxlength="50" minlength="2" required>
      </div>

      <div class="form-label-group my-3">
        <label>Contact</label>
        <input type="text" name="contact" class="form-control" maxlength="50" minlength="5" required>
      </div>

      <div class="form-label-group my-3">
        <label>Image Link</label>
        <input type="url" name="image_path" class="form-control" required>
      </div>

      <div class="form-label-group my-3">
        <label>Details</label>
        <textarea rows="5" class="form-control" name="details" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary mr-5">Submit</button>
    </form>
  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/members/all') ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>