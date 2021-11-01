<?php  include 'partials/header.php'?>

	<div class="contaier bg-dark-blue vh-100">
		<div class="row m-0 bg-light-blue">
			<div class="col-12 my-3">
				<img src="assets/images/logo.png" class="img-fluid mx-auto d-block" width="30%" alt="logo">
			</div>
			<div class="col-6 border-active text-center py-2 cta">
				<a href="userdashboard.php" class="text-white">
					LOGIN
				</a>
			</div>
			<div class="col-6 border-normal text-center py-2 cta">
				<a href="register.php" class="text-muted">
					新規登録
				</a>
			</div>
		</div>

		<div class="row m-0">
			<div class="col-12 text-center text-muted py-5">
				<h4>Login</h4>
			</div>
		</div>

		<form action="login.php" method="post" name="form1">
			<div class="form-row align-items-center m-0">
				<div class="col-12 px-5 pb-3 startup-form">
					<div class="input-group">
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<i class="far fa-envelope"> </i>
				          </div>
				        </div>
				        <input type="text" class="form-control" name="email" id="inlineFormInputGroupUsername" placeholder="Email">
			      	</div>
				</div>

				<div class="col-12 px-5 py-3 startup-form">
					<div class="input-group">
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<i class="far fa-lock"></i>
				          </div>
				        </div>
				        <input type="password" class="form-control" name="pass" id="password" placeholder="Password">
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

		<div class="row m-0">
			<div class="col justify align-items-right cta text-right pr-5 ">
				<a href="" class="text-muted text-right text-small ">
					Forget password?
				</a>
			</div>
		</div>

		<div class="row m-0">
			<div class="col-4 pt-1">
				<hr class ="line">
			</div>

			<div class="col-4 px-0 mx-0">
				<p class="text-center pt-2  text-white text-right text-small">snsでログイン</p>
			</div>

			<div class="col-4 pt-1">
				<hr class ="line">
			</div>
		</div>

		<div class="row m-0 justify-content-center">
			<div class="col-5 bg-white rounded py-2 ml-4 my-2 text-center">
				<img src="assets/images/google.png" alt="">
				<a href='userdashboard.php' class="text-dark">Google</a>
			</div>

			<div class="col-5 bg-white rounded py-2 ml-2 my-2 text-center">
				<img src="assets/images/apple.png" alt="">
				<a href='userdashboard.php' class="text-dark">Apple</a>
			</div>

			<div class="col-5 bg-white rounded py-2 ml-4 my-2 text-center">
				<img src="assets/images/twitter.png" alt="">
				<a href='userdashboard.php' class="text-dark">Twitter</a>
			</div>

			<div class="col-5 bg-white rounded py-2 ml-2 my-2 text-center">
				<img src="assets/images/facebook.png" alt="">
				<a href='userdashboard.php' class="text-dark">Facebook</a>
			</div>
		</div>

	</div>

<script src="assets/js/passwordtoggle.js"></script>
<?php  include 'partials/footer.php'?>
