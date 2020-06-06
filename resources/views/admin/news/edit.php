<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'All News & Items || Edit News || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">Admin Dashboard</div>
  <div class="card-body">

    <h5 class="text-center my-3 text-muted"><i class="fas fa-user-edit pr-2"></i>Edit Item</h5>

    <form method="POST" action="<?php echo route('admin/news/update'); ?>"> 

      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

      <input type="hidden" name="id" value="<?php echo $news['id']; ?>">

      <div class="form-label-group my-3">
        <label>Title</label>
        <textarea rows="1" class="form-control" name="title" maxlength="500" minlength="5" required><?php echo $news['title']; ?></textarea>
      </div>
      
      <div class="form-row">
        <div class="col-3">
          <label for="select_tag">Update Category Tag</label>
          <select class="form-control" id="select_tag">
            <option value="news"><?php echo locale('views', 'news'); ?></option>
            <option value="upcoming_events"><?php echo locale('views', 'upcoming_events'); ?></option>
            <option value="photo"><?php echo locale('views', 'photo_gallery'); ?></option>
            <option value="video"><?php echo locale('views', 'video_gallery'); ?></option>
            <option value="bridge"><?php echo locale('views', 'meghna_bridge'); ?></option>
            <option value="road"><?php echo locale('views', 'meghna_road'); ?></option>
            <option value="river"><?php echo locale('views', 'meghna_river'); ?></option>
            <option value="school"><?php echo locale('views', 'meghna_school'); ?></option>
            <option value="college"><?php echo locale('views', 'meghna_college'); ?></option>
            <option value="mosque"><?php echo locale('views', 'meghna_mosque'); ?></option>
            <option value="madrasa"><?php echo locale('views', 'meghna_madrasa'); ?></option>
            <option value="temple"><?php echo locale('views', 'meghna_temple'); ?></option>
            <option value="sports"><?php echo locale('views', 'meghna_sports'); ?></option>
            <option value="monument"><?php echo locale('views', 'meghna_monument'); ?></option>
            <option value="committee"><?php echo locale('views', 'upazilla_committee'); ?></option>
            <option value="admin"><?php echo locale('views', 'upazilla_admin'); ?></option>
            <option value="hospital"><?php echo locale('views', 'upazilla_hospital'); ?></option>
            <option value="ambulance"><?php echo locale('views', 'upazilla_ambulance'); ?></option>
            <option value="market"><?php echo locale('views', 'upazilla_market'); ?></option>
            <option value="dock"><?php echo locale('views', 'upazilla_dock'); ?></option>
            <option value="office"><?php echo locale('views', 'upazilla_office'); ?></option>
            <option value="link"><?php echo locale('views', 'upazilla_link'); ?></option>
          </select>
        </div>
        <div class="col-9">
          <label for="tags">Update Tags</label>
          <textarea rows="1" name="tags" class="form-control" id="tags" required><?php echo $news['tags']; ?></textarea>
        </div>
        <div class="col-12">
          <small>Category tags: <span class="red-text">news, upcoming_events, photo, video, bridge, road, river, school, college, mosque, madrasa, temple, sports, monument, committee, admin, hospital, ambulance, market, dock, office, link</span>. Use comma to seperate tags!</small>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10">
          <div class="input-group my-4">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image_uploader" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="image_uploader">Item Image</label>
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
        <textarea name="details" class="editor"><?php echo $news['details']; ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary mr-5">Submit</button>
    </form>

  </div>
</div>

<a class="btn btn-primary btn-sm my-3" href="<?php echo route('admin/news/all') ?>"><i class="fas fa-arrow-left pr-2"></i>Go back</a>

<?php endblock() ?>