<!DOCTYPE html>
<html lang="en">

<!-- Header -->
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

	<!-- Topbar -->
	<?php append('layouts.topbar'); ?>

	<!-- Page Content -->
	<?php startblock('content') ?><?php endblock() ?>

	<!-- Footer -->
	<?php append('layouts.footer'); ?>

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
