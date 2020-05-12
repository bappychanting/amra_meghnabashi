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
    <h5 class="text-center my-3 text-muted"><i class="fas fa-edit pr-2"></i>Update Web Content</h5>

    <form method="POST" action="<?php echo route('admin/web/update'); ?>"> 

      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

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
        <input type="text" name="content[keywords]" value="<?php echo $content['keywords']; ?>" class="form-control" maxlength="50" minlength="2" required>
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

      <div class="form-label-group my-3">
        <label>About Us</label>
        <textarea rows="4" class="form-control" name="content[about_us]" required><?php echo $content['about_us'] ?></textarea>
      </div>

      <div class="form-label-group my-3">
        <label>Video Src URL</label>
        <input type="url" name="content[video_src]" value="<?php echo $content['video_src']; ?>" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary mr-5">Submit</button>
    </form>
  </div>
</div>

<?php endblock() ?>