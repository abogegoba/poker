<?php  include 'partials/header.php'?>

	<div class="contaier bg-dark-blue vh-100">
		<div class="row m-0 bg-light-blue">
			<div class="col-12 my-3">
				<img src="assets/images/logo.png" class="img-fluid mx-auto d-block" width="30%" alt="logo">
			</div>
			<div class="col-12 border-active text-center py-2 cta">
				<a href="" class="text-white">
					LOGIN
				</a>
			</div>
		</div>

		<div class="row m-0">
			<div class="col-12 text-center text-muted py-5">
				<h4>Login</h4>
			</div>
		</div>

		<form action="dealerlogin.php" method="post" name="form1">
			<div class="form-row align-items-center m-0">
				<div class="col-12 px-5 pb-3 startup-form">
					<div class="input-group">
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<i class="far fa-envelope"> </i>
				          </div>
				        </div>
				        <input type="text" class="form-control" id="username" name="email" placeholder="Email">
			      	</div>
				</div>

				<div class="col-12 px-5 py-3 startup-form">
					<div class="input-group">
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<i class="far fa-lock"></i>
				          </div>
				        </div>
				        <input type="password" class="form-control"name="pass" id="password" placeholder="Password">
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<i class="bi bi-eye-slash" id="togglePassword"></i>
				          </div>
				        </div>
			      	</div>
				</div>

				<div class="col-12 px-5 cta">
					<a href="javascript:form1.submit()">
						<span class="btn btn-white rounded-pill btn-block my-4 py-2">
							Login
						</span>
					</a>
				</div>

			</div>
		</form>
	</div>

<script src="assets/js/passwordtoggle.js"></script>
<?php  include 'partials/footer.php'?>
