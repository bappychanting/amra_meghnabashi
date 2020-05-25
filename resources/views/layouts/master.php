<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php startblock('meta_tags') ?><?php endblock() ?>

	<!-- Favicon-->
	<?php echo icon('img/favicon.png'); ?>

	<title><?php startblock('title') ?><?php endblock() ?></title>

	<!-- Font Awesome -->
	<?php echo style('plugins/fontawesome/css/all.min.css'); ?>
	<!-- Google Fonts Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bangla Font -->
	<!-- <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet"> -->
	<!-- Bootstrap core CSS -->
	<?php echo style('css/bootstrap.min.css'); ?>
	<!-- Social Sharing -->
	<?php echo style('plugins/jssocials/jssocials.css'); ?>
	<?php echo style('plugins/jssocials/jssocials-theme-classic.css'); ?>
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
	<!-- Social Sharing -->
	<?php echo script('plugins/jssocials/jssocials.min.js'); ?>
    <!-- pagination JavaScript -->
    <?php echo script('plugins/pagination/jquery.twbsPagination.min.js'); ?>
	<!-- MDB core JavaScript -->
	<?php echo script('js/mdb.min.js'); ?>
	<!-- Custom Script -->
	<script type="text/javascript">
		$(document).ready(function() {
			// Initialize Popover
			$(function () {
				$('[data-trigger="popover"]').popover()
			});
			// Pagination
			$('.content-paginate').twbsPagination({
            	totalPages: 35,
            	visiblePages: 7,
            	onPageClick: function (event, page) {
              		$('#page-content').text('Page ' + page);
            	}
          	});
			// Initialize Social Share
			$("#social_share").jsSocials({
				shares: [
					{
					    share: "facebook",
					    logo: "fab fa-facebook-f",
					    label: "Share",
					},
				],
			});
		});
	</script>

</body>

</html>
