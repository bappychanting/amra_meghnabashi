<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'All News & Items || '.title(); ?>

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
    <h5 class="text-center my-3 text-muted"><i class="fas fa-newspaper pr-2"></i>All News & Items</h5>
    <a class="btn btn-success btn-sm" href="<?php echo route('admin/news/create') ?>"><i class="fas fa-plus pr-2"></i>Add New Item</a>
    <a class="btn btn-success btn-sm" href="javascript:void(0);" data-toggle="modal" data-target="#add_video_modal"><i class="fas fa-plus pr-2"></i>Add New Video</a>
    <div class="table-responsive">
      <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm">#</th>
            <th class="th-sm">Title</th>
            <th class="th-sm">Tags</th>
            <th class="th-sm">Created At</th>
            <th class="th-sm">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($newses as $news) { ?>
            <tr>
              <td class="font-weight-bold"><?php echo $news['id']; ?></td>
              <td><?php echo substr(strip_tags($news['title']), 0, 30); ?>...</td>
              <td><?php echo $news['tags']; ?></td>
              <td><?php echo date('F d (l), Y', strtotime($news['created_at'])); ?></td>
              <td>
                <form method="post" action="<?php echo route('admin/news/delete') ?>" onsubmit="return confirm('Do you really want to delete this news?');">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <input type="hidden" value="<?php echo $news['id']; ?>" name="id">
                  <?php if($news['tags'] == 'video'){ ?>
                  <button class="btn btn-primary btn-sm show-video" type="button" data-title="<?php echo $news['title']; ?>" data-youtube="<?php echo $news['image_path']; ?>" type="button"><i class="fas fa-eye"></i></button>
                  <?php } else{ ?>
                  <a class="btn btn-warning btn-sm" href="<?php echo route('admin/news/edit', ['id' => $news['id']]) ?>"><i class="fas fa-edit"></i></a>
                  <?php } ?>
                  <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <th class="th-sm">#</th>
            <th class="th-sm">Title</th>
            <th class="th-sm">Tags</th>
            <th class="th-sm">Created At</th>
            <th class="th-sm">Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- Add Video Modal -->
<div class="modal fade" id="add_video_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Add New Video</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo route('admin/news/store'); ?>">

          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

          <input type="hidden" name="user_id" value="<?php echo $auth_user->id; ?>">

          <input type="hidden" name="tags" value="video">

          <div class="form-label-group my-3">
            <label>Video Title</label>
            <textarea rows="1" class="form-control" name="title" maxlength="500" minlength="5" required></textarea>
          </div>

          <div class="form-label-group my-3">
            <label for="image_path">Video Src URL</label>
            <input type="text" name="image_path" id="image_path" class="form-control" placeholder="https://www.youtube.com/embed/video_id" required>
            <small>Please copy paste the <span class="red-text">embed link</span> from youtube above!</small>
          </div>

          <button type="submit" class="btn btn-primary mr-5">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- #END# Add Video Modal -->

<!-- Show Video Modal -->
<div class="modal fade" id="show_video_modal" tabindex="-1" role="dialog" aria-labelledby="youtube-video-title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="youtube-video-title">...</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" id="youtube-video-iframe" src="javascript:void(0);" allowfullscreen></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- #END# Show Video Modal -->

<?php endblock() ?>