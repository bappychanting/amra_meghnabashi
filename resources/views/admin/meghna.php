<?php inherits('admin.app'); ?>

<?php startblock('title') ?>

<?php echo 'Amader Meghna || '.title(); ?>

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
		<h5 class="text-center my-3 text-muted"><i class="fas fa-edit pr-2"></i>Update Amader Meghna</h5>

		<form method="POST" action="<?php echo route('admin/web/update'); ?>"> 

			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

			<input type="hidden" name="id" value="2">

			<input type="hidden" name="content[image]" id="image_uploaded_src" value="<?php echo $content['image']; ?>">
			<img src="<?php echo $content['image']; ?>" id="image_uploader_preview" class="img-fluid z-depth-1 rounded mb-3"/>

			<div class="input-group my-4">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="image_uploader" aria-describedby="inputGroupFileAddon01">
					<label class="custom-file-label" for="image_uploader">Meghna Image</label>
				</div>
			</div>

			<div class="form-label-group my-3">
				<label>SEO Keywords</label>
				<input type="text" name="content[keywords]" value="<?php echo $content['keywords']; ?>" class="form-control" maxlength="50" minlength="2" required>
        		<small>Use comma to seperate keywords</small>
			</div>

			<div class="form-label-group my-3">
				<label>Main Article</label>
				<textarea name="content[main]" class="editor"><?php echo $content['main'] ?></textarea>
			</div>

			<button type="submit" class="btn btn-primary mr-5">Submit</button>
		</form>
	</div>
</div>

<?php endblock() ?>