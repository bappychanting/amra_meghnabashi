<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'News || '.title(); ?>

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
    <h5 class="text-center my-3 text-muted"><i class="fas fa-newspaper pr-2"></i>All News</h5>
    <a class="btn btn-success btn-sm" href="<?php echo route('admin/news/create') ?>"><i class="fas fa-plus pr-2"></i>Add New News</a>
    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm">#</th>
          <th class="th-sm">Title</th>
          <th class="th-sm">Details</th>
          <th class="th-sm">Created At</th>
          <th class="th-sm">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($newses as $news) { ?>
          <tr>
            <td class="font-weight-bold"><?php echo $news['id']; ?></td>
            <td><?php echo strip_tags(substr($news['title'], 0, 10)); ?>...</td>
            <td><?php echo strip_tags(substr($news['details'], 0, 30)); ?>...</td>
            <td><?php echo date('F d (l), Y', strtotime($news['created_at'])); ?></td>
            <td>
              <form method="post" action="<?php echo route('admin/news/delete') ?>" onsubmit="return confirm('Do you really want to delete this news?');">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" value="<?php echo $news['id']; ?>" name="id">
                <a class="btn btn-warning btn-sm" href="<?php echo route('admin/news/edit', ['id' => $news['id']]) ?>"><i class="fas fa-edit"></i></a>
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
          <th class="th-sm">Details</th>
          <th class="th-sm">Created At</th>
          <th class="th-sm">Actions</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>

<?php endblock() ?>