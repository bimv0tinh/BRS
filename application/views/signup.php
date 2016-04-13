<!-- include navigation block -->
<?= load_nested_view('blocks/navigation') ?>

<!-- include header block -->
<?= load_nested_view('blocks/header') ?>

<!-- main block -->
<main>

	<div class="container">

		<form class="form-signin">
			<h2 class="form-signin-heading">Open a Guest account</h2>

			<label>Full name</label>
			<input type="text" class="form-control" placeholder="Full name" autofocus>
			<br>

			<label>Email address*</label>
			<input type="email" class="form-control" placeholder="Email address" required>
			<br>

			<label>Username*</label>
			<input type="text" class="form-control" placeholder="Username" required>
			<br>

			<label>Password*</label>
			<input type="password" class="form-control" placeholder="Password" required>

			<label>Phone number</label>
			<input type="number" class="form-control" placeholder="Phone number" maxlength="10">

			<br>

			<button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
		</form>

	</div><!-- end .container -->

</main>

<!-- include footer block -->
<?= load_nested_view('blocks/footer') ?>