<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'All Project || '.$project['name'].' || Edit Project || '.title(); ?>

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
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $project['name']; ?>" maxlength="50" minlength="2" class="form-control">
      </div>

      <div class="form-label-group my-3">
        <label>Tags</label>
        <input type="text" name="tags" value="<?php echo $project['tags']; ?>" class="form-control">
      </div>

      <div class="row">
        <div class="col-sm-10">
          <div class="input-group my-4">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image_uploader" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="image_uploader">Project Image</label>
            </div>
          </div>
        </div>
        <div class="col-sm-2">
          <input type="hidden" name="image_path" id="image_uploaded_src" value="<?php echo $project['image_path']; ?>">
          <img src="<?php echo $project['image_path']; ?>" id="image_uploader_preview" class="img-fluid img-thumbnail" width="150px"/>
        </div>
      </div>

      <div class="form-label-group my-3">
        <label>Details</label>
        <textarea name="details" class="editor"><?php echo $project['details']; ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary mr-5">Submit</button>
    </form>

  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/projects/show', ['id' => $project['id']]) ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>