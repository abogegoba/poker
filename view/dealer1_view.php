<?php include 'partials/header.php'; ?>

	<!-- top bar -->
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

	<section class="container my-4">
		<div class="row">
			<div class="col-4">
				<a href="dealerdashboard.php" class="btn btn-block btn-dark-blue rounded-pill shadow ">
					<i class="fas fa-home"></i>
					Home
				</a>

			</div>
			<div class="col-4">
				<a href="addusr.php" class="btn btn-block btn-dark-blue rounded-pill shadow ">
					<i class="fas fa-home"></i>
					追加
				</a>
			</div>

		<div class="col">
			<div class="col">
				<a href="dealer3.php" class="btn btn-block btn-greenish rounded-pill">
					新規登録
				</a>
			</div>
		</div>

		<form class="row mt-3" method="">
			<div class="col">
				<div class="form-group mx-sm-3 mb-2 w-100">
					<label for="field1" class="sr-only">Password</label>
					<input type="text" class="form-control opacity-59" id="field1" placeholder="ユーザーを検索する">
				</div>
			</div>
			<div class="col-4">
				<button type="submit" class="btn btn-block mb-2 btn-greenish rounded-pill">QR検索</button>
			</div>
		</form>
	</section>

	<section class="container">
		<div class="">
			<ul class="list-group listing-group-item">
				<?php while ($data = mysqli_fetch_assoc($cresult)){ ?>
			  <li class="list-group-item"><!-- for hightlight: active -->
			  	<div class="d-flex align-items-center cta">
			  		<div class="bg-greenish rounded-circle border-gray p-1 mr-3">
			  			<span class="icon-user"></span>
			  		</div>
					  <a href="dealer2.php?id=<?php echo $data['id']?>">
						  <div class="d-flex c-line">
							  <p><?php echo $data['id'];?></p>
							  <p><?php echo $data['name'];?></p>
								<p><?php echo $data['chip_num'];?>Chip</p>
							</div>
						</a>
			  	</div>
			  </li>
			<?php }?>
			</ul>
		</div>
	</section>

<?php include 'partials/footer.php'; ?>
