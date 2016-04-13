<!-- include navigation block -->
<?= load_nested_view('blocks/navigation') ?>

<!-- include header block -->
<?= load_nested_view('blocks/header') ?>

<!-- main block -->
<main>

	<div class="container">

		<form class="form-signin">
			<h2 class="form-signin-heading">Guest Login</h2>

			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<div class="checkbox">
				<label>
			    	<input type="checkbox" value="remember-me"> Remember me
			  	</label>
			</div>
			
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>

	</div><!-- end .container -->

</main>

<!-- include footer block -->
<?= load_nested_view('blocks/footer') ?>