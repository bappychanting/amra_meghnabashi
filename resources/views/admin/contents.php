<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'Web Contents || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">Admin Dashboard</div>
  <div class="card-body">
    <?php 
    $alerts = Base\Request::getFlash();
    if(!empty((array) $alerts)){
      foreach($alerts as $key=>$value){
        ?>
        <div class="alert alert-<?php echo $key; ?> alert-dismissible"> 
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <?php echo $value; ?>
        </div>
        <?php                            
      }
    } 
    ?>
    <h5 class="text-center my-3 text-muted"><i class="fas fa-edit pr-2"></i>Update Web Contents</h5>

    <form method="POST" action="<?php echo route('admin/web/update'); ?>"> 

      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

      <input type="hidden" name="id" value="1">

      <div class="form-label-group my-3">
        <label>Slogan</label>
        <input type="text" name="content[slogan]" value="<?php echo $content['slogan']; ?>" class="form-control" maxlength="50" minlength="2" required>
      </div>

      <div class="form-label-group my-3">
        <label>Donate Link</label>
        <input type="url" name="content[donate_link]" value="<?php echo $content['donate_link']; ?>" class="form-control" required>
      </div>

      <div class="form-label-group my-3">
        <label>SEO Keywords</label>
        <textarea rows="1" name="content[keywords]" class="form-control" required><?php echo $content['keywords']; ?></textarea>
        <small>Use comma to seperate keywords</small>
      </div>

      <div class="form-label-group my-3">
        <label>Contact</label>
        <input type="text" name="content[contact]" value="<?php echo $content['contact']; ?>" class="form-control" maxlength="50" minlength="2" required>
      </div>

      <div class="form-label-group my-3">
        <label>Email</label>
        <input type="text" name="content[email]" value="<?php echo $content['email']; ?>" class="form-control" maxlength="50" minlength="2" required>
      </div>

      <div class="form-label-group my-3">
        <label>Facebook URL</label>
        <input type="url" name="content[facebook]" value="<?php echo $content['facebook']; ?>" class="form-control" required>
      </div>

      <div class="form-label-group my-3">
        <label>Twitter URL</label>
        <input type="url" name="content[twitter]" value="<?php echo $content['twitter']; ?>" class="form-control" required>
      </div>

      <div class="form-label-group my-3">
        <label>Youtube URL</label>
        <input type="url" name="content[youtube]" value="<?php echo $content['youtube']; ?>" class="form-control" required>
      </div>

      <div class="form-label-group my-3">
        <label>Address</label>
        <textarea rows="1" class="form-control" name="content[address]" required><?php echo $content['address'] ?></textarea>
      </div>

      <input type="hidden" name="content[header_image]" id="image_uploaded_src" value="<?php echo $content['header_image']; ?>">
      <img src="<?php echo $content['header_image']; ?>" id="image_uploader_preview" class="img-fluid z-depth-1 rounded mb-3"/>

      <div class="input-group my-4">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="image_uploader" aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="image_uploader">Header Top Image</label>
        </div>
      </div>

      <div class="form-row">
        <div class="col-3">
          <label for="programs">Programs</label>
          <input type="number" name="content[programs]" min="0" value="<?php echo $content['programs']; ?>" class="form-control" id="programs" placeholder="Programs" required>
        </div>
        <div class="col-3">
          <label for="beneficiaries">Beneficiaries</label>
          <input type="number" name="content[beneficiaries]" min="0" value="<?php echo $content['beneficiaries']; ?>" class="form-control" id="beneficiaries" placeholder="Beneficiaries" required>
        </div>
        <div class="col-3">
          <label for="reached">Reached</label>
          <input type="number" name="content[reached]" min="0" max="100" value="<?php echo $content['reached']; ?>" class="form-control" id="reached" placeholder="Reached" required>
        </div>
        <div class="col-3">
          <label for="job_scholarship">Job & Scholarship</label>
          <input type="number" name="content[job_scholarship]" min="0" value="<?php echo $content['job_scholarship']; ?>" class="form-control" id="job_scholarship" placeholder="Job & Scholarship" required>
        </div>
      </div>

      <div class="form-label-group my-3">
        <label>About Us</label>
        <textarea rows="5" class="form-control" name="content[about_us]" required><?php echo $content['about_us'] ?></textarea>
      </div>

      <div class="form-label-group my-3">
        <label>Video Src URL</label>
        <input type="url" name="content[video_src]" value="<?php echo $content['video_src']; ?>" class="form-control" required>
      </div>

      <div class="form-label-group my-3">
        <label>Our Programs 1</label>
        <textarea class="editor" name="content[our_programs_1]"><?php echo $content['our_programs_1'] ?></textarea>
      </div>

      <div class="form-label-group my-3">
        <label>Our Programs 2</label>
        <textarea class="editor" name="content[our_programs_2]"><?php echo $content['our_programs_2'] ?></textarea>
      </div>

      <div class="form-label-group my-3">
        <label>Our Programs 3</label>
        <textarea class="editor" name="content[our_programs_3]"><?php echo $content['our_programs_3'] ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary mr-5">Submit</button>
    </form>
  </div>
</div>

<?php endblock() ?>