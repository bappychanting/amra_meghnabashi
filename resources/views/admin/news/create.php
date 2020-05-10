<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'News || Add New News || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">Admin Dashboard</div>
  <div class="card-body">

    <h5 class="text-center my-3 text-muted"><i class="fas fa-plus pr-2"></i>Add New News</h5>

    <form method="POST" action="<?php echo route('admin/news/store'); ?>"> 

      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

      <input type="hidden" name="user_id" value="<?php echo $auth_user->id; ?>">

      <div class="form-label-group my-3">
        <label for="inputName">Title</label>
        <textarea rows="1" class="form-control" name="title" maxlength="500" minlength="5" required></textarea>
      </div>

      <div class="form-label-group my-3">
        <label for="inputName">Tags</label>
        <input type="text" name="tags" class="form-control" required>
        <small>Use comma to seperate tags</small>
      </div>

      <div class="form-label-group my-3">
        <label for="inputName">Image Link</label>
        <input type="url" name="image_path" class="form-control" required>
      </div>

      <div class="form-label-group my-3">
        <label for="inputName">Details</label>
        <textarea rows="10" class="form-control" name="details" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary mr-5">Submit</button>
    </form>
  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/news/all') ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>