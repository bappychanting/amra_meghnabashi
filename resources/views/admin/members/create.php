<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'All Members || Add New Member || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">Admin Dashboard</div>
  <div class="card-body">

    <h5 class="text-center my-3 text-muted"><i class="fas fa-plus pr-2"></i>Add New Member</h5>

    <form method="POST" action="<?php echo route('admin/members/store'); ?>" enctype="multipart/form-data"> 

      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

      <div class="form-label-group my-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" maxlength="50" minlength="2" required>
      </div>

      <div class="form-label-group my-3">
        <label>Tags</label>
        <input type="text" name="tags" class="form-control" placeholder="admin, vip etc." required>
        <small>Tags must be included to seperate <span class="red-text">adviser, admin, personality, vip and volunteer</span> category. Use comma to seperate tags</small>
      </div>

      <div class="form-label-group my-3">
        <label>Designation</label>
        <input type="text" name="designation" class="form-control" maxlength="50" minlength="2" required>
      </div>

      <div class="input-group my-4">
        <div class="custom-file">
          <input type="file" name="member_image" class="custom-file-input" id="member_image" aria-describedby="inputGroupFileAddon01" required>
          <label class="custom-file-label" for="member_image">Member Image (must be less than 1mb)</label>
        </div>
      </div>

      <div class="form-label-group my-3">
        <label>Details</label>
        <textarea name="details" class="editor">
          <p><b>Phone:</b></p>
          <p><b>Email:</b></p>
          <p><b>Address:</b></p>
        </textarea>
      </div>

      <button type="submit" class="btn btn-primary mr-5">Submit</button>
    </form>
  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/members/all') ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>