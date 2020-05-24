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

      <div class="form-label-group my-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" maxlength="50" minlength="2" required>
      </div>

      <div class="form-label-group my-3">
        <label>Tags</label>
        <input type="text" name="tags" class="form-control" placeholder="important, news, update etc." required>
        <small>Use comma to seperate tags</small>
      </div>

      <div class="row">
        <div class="col-sm-10">
          <div class="input-group my-4">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image_uploader" aria-describedby="inputGroupFileAddon01" required>
              <label class="custom-file-label" for="image_uploader">Project Image</label>
            </div>
          </div>
        </div>
        <div class="col-sm-2">
          <input type="hidden" name="image_path" id="image_uploaded_src">
          <img src="https://via.placeholder.com/150?text=Preview" id="image_uploader_preview" class="img-fluid img-thumbnail" width="150px"/>
        </div>
      </div>

      <div class="form-label-group my-3">
        <label>Details</label>
        <textarea class="form-control" name="details" id="editor"></textarea>
      </div>

      <button type="submit" class="btn btn-primary mr-5">Submit</button>
    </form>
  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/projects/all') ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>