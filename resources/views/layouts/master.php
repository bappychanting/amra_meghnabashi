<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<?php startblock('meta_tags') ?><?php endblock() ?>

	<!-- Favicon-->
	<?php echo icon('img/favicon.png'); ?>

	<title><?php startblock('title') ?><?php endblock() ?></title>

	<!-- Font Awesome -->
	<?php echo style('plugins/fontawesome/css/all.min.css'); ?>
	<!-- Google Fonts Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<?php echo style('css/bootstrap.min.css'); ?>
	<!-- Material Design Bootstrap -->
	<?php echo style('css/mdb.min.css'); ?>
	<!-- Custom styles (optional) -->
	<?php echo style('css/style.css'); ?>

</head>
<!-- #ENDS# Header -->

<body>

	<?php 
		use App\Models\Content; 
		$content = new Content;
		$content->setId(1);
		$get_content = $content->getWebContent();
		$contents = json_decode($get_content['content'], 'true');
	?>

	<!-- Topbar -->
	<?php append('layouts.topbar', ['contents' => $contents]); ?>

	<!-- Page Content -->
	<?php startblock('content') ?><?php endblock() ?>

	<!-- Footer -->
	<?php append('layouts.footer', ['contents' => $contents]); ?>

	<!-- jQuery -->
	<?php echo script('js/jquery.min.js'); ?>
	<!-- Bootstrap tooltips -->
	<?php echo script('js/popper.min.js'); ?>
	<!-- Bootstrap core JavaScript -->
	<?php echo script('js/bootstrap.min.js'); ?>
	<!-- MDB core JavaScript -->
	<?php echo script('js/mdb.min.js'); ?>
	<!-- Custom JavaScript -->
	<?php echo script('js/script.js'); ?>

</body>

</html>
