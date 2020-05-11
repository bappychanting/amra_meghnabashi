<?php inherits('layouts.master'); ?>

<?php startblock('title') ?>

<?php echo title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="front-page-top-div">
	<div class="container text-white py-5">
		<h1 class="font-weight-bold mt-5 mb-3">Lorem ipsum dolor sit amet.</h1>
		<button class="btn btn-danger mt-3 mb-5">DONATE NOW!</button>
	</div>
</div>
<div class="mb-3 green accent-3 py-2">
	<div class="container py-3">
		<h5 class="text-white">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</h5>
		<h4 class="font-weight-bold red-text">Lorem ipsum dolor sit amet</h4>
	</div>
</div>

<div class="container py-3 mb-3">
	<h6>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</h6>
	<div class="row justify-content-center">
		<button class="btn btn-danger">See All Members</button>
	</div>
	<h2 class="green-text font-weight-bold my-3">Our Projects</h2>
	<div class="row">
	</div>
	<div class="row justify-content-center">
		<button class="btn btn-danger">Find Out More</button>
	</div>
	<h2 class="green-text font-weight-bold my-3">News</h2>
	<div class="row">
	</div>
	<div class="row justify-content-center">
		<button class="btn btn-danger">Find Out More</button>
	</div>
</div>

<?php endblock() ?>