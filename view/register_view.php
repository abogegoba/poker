<?php  include 'partials/header.php'?>

	<div class="contaier bg-dark-blue vh-100">
		<div class="row m-0 bg-light-blue">
			<div class="col-12 my-3">
				<img src="assets/images/logo.png" class="img-fluid mx-auto d-block" width="30%" alt="logo">
			</div>
			<div class="col-6 border-normal text-center py-2 cta">
				<a href="login.php" class="text-muted">
					LOGIN
				</a>
			</div>
			<div class="col-6 border-active text-center py-2 cta">
				<a href="" class="text-white">
					新規登録
				</a>
			</div>
		</div>

		<div class="row m-0">
			<div class="col-12 text-center text-muted py-5">
				<h4>新規登録</h4>
			</div>
		</div>

		<form action="register.php" method="post" name="form1">


			<div class="form-row align-items-center m-0">

				<?php if(isset($errormes)) {?>
				<div class="col-12 px-5 pb-3 startup-form">
				<p style="color:red;"> <?php echo $errormes;?></p>
			  </div>
			<?php }?>


				<div class="col-12 px-5 pb-3 startup-form">
					<div class="input-group">
						<div class="label1">  </div>
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<i class="far fa-envelope text-success" > </i>
				          </div>
				        </div>
				        <input type="text" class="form-control" name="email" id="inlineFormInputGroupUsername" placeholder="Email">
			      	</div>
				</div>

				<div class="col-12 px-5 py-3 startup-form">
					<div class="input-group">
						<div class="label1">  </div>
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<i class="far fa-lock text-success"></i>
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

				<div class="col-12 px-5 py-3 startup-form">
					<div class="input-group">
						<div class="label1">  </div>
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<i class="far fa-lock text-success"></i>
				          </div>
				        </div>
				        <input type="password" class="form-control" name="repass" id="password" placeholder="Re-type Password">
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<i class="bi bi-eye-slash" id="togglePassword"></i>
				          </div>
				        </div>
			      	</div>
				</div>

				<div class="col-12 px-5 py-3 startup-form">
					<div class="input-group">
						<div class="label1"></div>
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<i class="fas fa-baby"></i>
				          </div>
				        </div>
				        <input type="text" class="form-control" id="text" name="pname" placeholder="Pokerネーム">
			      	</div>
				</div>

				<div class="col-12 px-5 py-3 startup-form">
					<div class="input-group">
						<div class="label1"></div>
						<select name="sex" class="form-control" aria-label="Disabled select " >
						  <option  selected>性別を選択</option>
							<?php while ($data = mysqli_fetch_assoc($sex)){?>
						  <option value="<?php echo $data['sex_id'];?>"><?php echo $data['sex'];?></option>
							<?php }?>
						</select>

			      </div>
				</div>

				<div class="col-12 px-5 py-3 startup-form">
					<div class="input-group">
						<div class="label1"></div>
						<select name="age" class="form-control" aria-label="Disabled select example" >
						<option selected>年代を選択</option>
						<?php while ($aged = mysqli_fetch_assoc($age)){?>
						<option value="<?php echo $aged['age_id'];?>"><?php echo $aged['age'];?></option>
						<?php }?>
					</select>
						</div>
				</div>

                <div class="form-group form-check ml-5">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label text-white" for="exampleCheck1">プライバシーポリシーに同意する</label>
                </div>

				<div class="col-12 px-5 cta">
					<a href="javascript:form1.submit()">
						<span class="btn btn-white rounded-pill btn-block my-4 py-2">
                        新規登録
						</span>
					</a>
				</div>

			</div>
		</form>

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
				<a href='' class="text-dark">Google</a>
			</div>

			<div class="col-5 bg-white rounded py-2 ml-2 my-2 text-center">
				<img src="assets/images/apple.png" alt="">
				<a href='' class="text-dark">Apple</a>
			</div>

			<div class="col-5 bg-white rounded py-2 ml-4 my-2 text-center">
				<img src="assets/images/twitter.png" alt="">
				<a href='' class="text-dark">Twitter</a>
			</div>

			<div class="col-5 bg-white rounded py-2 ml-2 my-2 text-center">
				<img src="assets/images/facebook.png" alt="">
				<a href='' class="text-dark">Facebook</a>
			</div>
		</div>

	</div>


<?php  include 'partials/footer.php'?>
