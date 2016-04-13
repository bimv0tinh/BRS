<!-- include navigation block -->
<?= load_nested_view('blocks/navigation') ?>

<!-- include header block -->
<?= load_nested_view('blocks/header', array('title' => $title)) ?>

<!-- main block -->
<main>

	<div class="container">

		<div class="jumbotron text-center">
			<h1>Welcome to BRS</h1>
			<p>You are now able to book a room ONLINE !</p>
			<p>
			  	<a class="btn btn-lg btn-primary" href="<?php echo site_url('auth') ?>" role="button">Create your Guest account &raquo;</a>
			</p>
		</div>

	</div><!-- end .container -->

</main>

<!-- include footer block -->
<?= load_nested_view('blocks/footer') ?>