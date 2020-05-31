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

      <div class="form-row">
        <div class="col-3">
          <label for="select_tag">Select Category Tag</label>
          <select class="form-control" id="select_tag">
            <option value="adviser"><?php echo locale('views', 'advisers'); ?></option>
            <option value="admin"><?php echo locale('views', 'admins'); ?></option>
            <option value="personality"><?php echo locale('views', 'personalities'); ?></option>
            <option value="vip"><?php echo locale('views', 'vips'); ?></option>
            <option value="volunteer"><?php echo locale('views', 'volunteers'); ?></option>
          </select>
        </div>
        <div class="col-9">
          <label for="tags">Add More Tags</label>
          <textarea rows="1" name="tags" class="form-control" id="tags" placeholder="admin, vip etc." required></textarea>
        </div>
        <div class="col-12">
          <small>Tags must be included to seperate <span class="red-text">adviser, admin, personality, vip and volunteer</span> category. Use comma to seperate tags</small>
        </div>
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
          <p><b>Village:</b></p>
          <p><b>Address:</b></p>
        </textarea>
      </div>

      <button type="submit" class="btn btn-primary mr-5">Submit</button>
    </form>
  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/members/all') ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>