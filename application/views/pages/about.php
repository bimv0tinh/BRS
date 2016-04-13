<!-- include navigation block -->
<?= load_nested_view('blocks/navigation') ?>

<div class="container">

	<!-- include header block -->
	<?= load_nested_view('blocks/header', array('title' => $title)) ?>

	<!-- main block -->
	<main>

		<div class="jumbotron">
			<h1>CodeIgniter 3.0 with Bootstrap</h1>
			<p>CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.</p>
			<p>
			  <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
			</p>
		</div>

	</main>

	<!-- include footer block -->
	<?= load_nested_view('blocks/footer') ?>

</div><!-- end .container -->