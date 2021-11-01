<?php include 'partials/header.php'; ?>

<div class="contaier bg-dark-blue vh-100">
	<div class="bg-light-blue p-3 rounded-bottom-pill">
		<div class="d-flex justify-content-between align-items-center">
			<a href="">
				<img src="assets/svg/bar.svg">
			</a>
			<h4 class="text-uppercase text-white">Miragepoker</h4>
			<a href="" class="position-relative">
				<span class="icon-bell"></span>
				<small class="badge badge-light notitify-count">2</small>
			</a>
		</div>
	</div>

	<div class="row m-0">
		<div class="col text-center text-muted py-4">
			ユーザ新規登録
		</div>
	</div>

	<form action="addusr.php" method="POST">
			<div class="form-row align-items-center m-0">
				<div class="col-12 px-5 pb-3 startup-form">
					<div class="input-group">
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<i class="far fa-envelope"> </i>
				          </div>
				        </div>
				        <input type="text" class="form-control" id="username" name="usrda" placeholder="ユーザ名orユーザID">
			      	</div>
				</div>


				<div class="col-12 px-5 py-3 startup-form">
					<div class="input-group">
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<i class="fas fa-coins"></i>
				          </div>
				        </div>
				        <input type="text" class="form-control" id="input" name="chip" placeholder="初回チップ">
			      	</div>
				</div>

				<div class="col-12 px-5 cta">
					<input type="submit" class="btn btn-white rounded-pill btn-block my-4 py-2" name="eg" value="登録する">
				</div>

			</div>
		</form>

</div>

<script src="assets/js/passwordtoggle.js"></script>

<?php include 'partials/footer.php'; ?>
