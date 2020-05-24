<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'All News || Edit News || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">Admin Dashboard</div>
  <div class="card-body">

    <h5 class="text-center my-3 text-muted"><i class="fas fa-user-edit pr-2"></i>Edit Details</h5>

    <form method="POST" action="<?php echo route('admin/news/update'); ?>"> 

      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

      <input type="hidden" name="id" value="<?php echo $news['id']; ?>">

      <div class="form-label-group my-3">
        <label>Title</label>
        <textarea rows="1" class="form-control" name="title" maxlength="500" minlength="5" required><?php echo $news['title']; ?></textarea>
      </div>

      <div class="form-label-group my-3">
        <label>Tags</label>
        <input type="text" name="tags" value="<?php echo $news['tags']; ?>" class="form-control">
      </div>

      <div class="row">
        <div class="col-sm-10">
          <div class="input-group my-4">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image_uploader" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="image_uploader">News Image</label>
            </div>
          </div>
        </div>
        <div class="col-sm-2">
          <input type="hidden" name="image_path" id="image_uploaded_src" value="<?php echo $news['image_path']; ?>">
          <img src="<?php echo $news['image_path']; ?>" id="image_uploader_preview" class="img-fluid img-thumbnail" width="150px"/>
        </div>
      </div>

      <div class="form-label-group my-3">
        <label>Details</label>
        <textarea rows="10" class="form-control" name="details" required><?php echo $news['details']; ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary mr-5">Submit</button>
    </form>

  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/news/all') ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>