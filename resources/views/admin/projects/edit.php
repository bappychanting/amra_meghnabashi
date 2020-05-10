<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'All Project || '.$project['title'].' || Edit Project || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">Admin Dashboard</div>
  <div class="card-body">

    <h5 class="text-center my-3 text-muted"><i class="fas fa-user-edit pr-2"></i>Edit Details</h5>

    <form method="POST" action="<?php echo route('admin/projects/update'); ?>"> 

      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

      <input type="hidden" name="id" value="<?php echo $project['id']; ?>">

      <div class="form-label-group my-3">
        <label for="inputName">Name</label>
        <input type="text" name="name" value="<?php echo $project['name']; ?>" maxlength="50" minlength="2" class="form-control">
      </div>

      <div class="form-label-group my-3">
        <label for="inputName">Details</label>
        <textarea rows="10" class="form-control" name="details" required><?php echo $project['details']; ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary mr-5">Submit</button>
    </form>

  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/projects/all') ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>