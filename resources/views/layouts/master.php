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
	<!-- Carousel -->
	<?php echo style('plugins/owlcarousel/css/owl.carousel.min.css'); ?>
	<?php echo style('plugins/owlcarousel/css/owl.theme.default.min.css'); ?>
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
	<!-- Carousel -->
	<?php echo script('plugins/owlcarousel/js/owl.carousel.min.js'); ?>
	<!-- Count to JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js" referrerpolicy="origin"></script>
	<!-- Paginator Javascript -->
	<?php echo script('plugins/paginator/flexible.pagination.js'); ?>
	<!-- Load More Javascript -->
	<?php echo script('plugins/loadmore/jquery.simpleLoadMore.min.js'); ?>
	<!-- MDB core JavaScript -->
	<?php echo script('js/mdb.min.js'); ?>
	<!-- Custom Script -->
	<script type="text/javascript">
		$(document).ready(function() {

			// Initialize Count To
			$('.timer').countTo();

			// Initialize Popover
			$(function () {
				$('[data-toggle="popover"]').popover()
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

			// Initialize Carousel
			$(".owl-carousel").owlCarousel({
				loop:true,
				nav:false,
				margin:30,
				autoplay:true,
				autoplayTimeout:1500,
				autoplayHoverPause:true,
				responsive:{
					0:{
						items:2,
					},
					600:{
						items:4,
					},
					1000:{
						items:6,
					}
				}
			});

			// Initialize Load More
			$('.view-members').simpleLoadMore({
  				item: 'div',
  				count: 36,
  				itemsToLoad: 36,
  				btnHTML:'<div class="col-sm-12 mb-3 text-center"><a href="javascript:void(0);" class="font-weight-bold text-primary h5"><?php echo locale('views', 'read_more'); ?></a></div>'
			})

			// Initialize Pagination
			var flexiblePagination = $('.content_paginator').flexiblePagination({
				itemsPerPage : 12,
				itemSelector : 'div.result:visible',
				pagingControlsContainer : '.pagingControls',
	            // showingInfoSelector : '#showingInfo',
	            css: {
	            	btnNumberingClass: 'btn btn-sm btn-white waves-effect',
	            	btnActiveClass:"btn btn-sm btn-primary waves-effect",
	            	btnFirstClass: 'btn btn-sm btn-white waves-effect',
	            	btnLastClass: 'btn btn-sm btn-white waves-effect',
	            	btnNextClass: 'btn btn-sm btn-white waves-effect',
	            	btnPreviousClass: 'btn btn-sm btn-white waves-effect'
	            }
	        });
			flexiblePagination.getController().onPageClick = function(pageNum, e){
	            // console.log('You Clicked Page: '+pageNum)
	        };
	        
	    });
	</script>

</body>

</html>