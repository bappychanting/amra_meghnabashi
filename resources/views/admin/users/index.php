<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'All Users || '.title(); ?>

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
    <h5 class="text-center my-3 text-muted"><i class="fas fa-users pr-2"></i>All Users</h5>
    <a href="<?php echo route('admin/users/create'); ?>" class="btn btn-success btn-sm"><i class="fas fa-plus pr-2"></i>Add New User</a>
    <div class="table-responsive">
      <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm">#</th>
            <th class="th-sm">Name</th>
            <th class="th-sm">Username</th>
            <th class="th-sm">Email</th>
            <th class="th-sm">Created At</th>
            <th class="th-sm">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user) { ?>
            <tr>
              <td class="font-weight-bold"><?php echo $user['id']; ?></td>
              <td><?php echo $user['name']; ?></td>
              <td><?php echo $user['username']; ?></td>
              <td><?php echo $user['email']; ?></td>
              <td><?php echo date('F d (l), Y', strtotime($user['created_at'])); ?></td>
              <td>
                <form method="post" action="<?php echo route('admin/users/delete') ?>" onsubmit="return confirm('Do you really want to delete this user?');">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <input type="hidden" value="<?php echo $user['id']; ?>" name="id">
                  <a class="btn btn-primary btn-sm" href="<?php echo route('admin/users/show', ['id' => $user['id']]) ?>"><i class="fas fa-eye"></i></a>
                  <button class="btn btn-danger btn-sm <?php echo ($user['id'] == 1 || $user['username'] == $auth_user->username)? 'disabled' : '' ?>" type="submit"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <th class="th-sm">#</th>
            <th class="th-sm">Name</th>
            <th class="th-sm">Username</th>
            <th class="th-sm">Email</th>
            <th class="th-sm">Created At</th>
            <th class="th-sm">Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<?php endblock() ?>