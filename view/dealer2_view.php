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
		<h4 class="text-white">プロフィール</h4>
		<div class="d-flex">
			<div class="text-white align-items-center mx-2 text-center">
				<div class="bg-greenish rounded-circle border-gray p-1">
					<span class="icon-user wh-59"></span>
				</div>
				<p class="font-weight-bold font-size-12">ID 423804</p>
			</div>
			<div class="text-white ml-3">
				<ul class="list-group c-profile w-100">
					<li class="list-group-item">
						<div class="d-flex">
							<span class="mr-4">
								登録名：<?php echo $data['name']?>
							</span>
							<div class="flex-wrap">
								ランキング情報
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="d-flex">
							<span class="mr-4">
								性別：福岡
							</span>
							<div class="flex-wrap">
								●●●店舗
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="d-flex">
							<span class="mr-4">
								登録名：ユーザ
							</span>
							<div class="flex-wrap">
								38位
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<h4 class="text-white">チップ登録</h4>
		<form class="row mt-3" method="">
			<div class="col">
				<div class="form-group mr-3 mb-2 w-100">
					<input type="text" name="" id="txtrange" value="0" class="form-control input-field-range opacity-59">
				</div>
			</div>
			<div class="col-2 pl-0">
				<button type="button" class="btn btn-white opacity-59 font-size-28 altera acrescimo"><i class="fas fa-plus"></i></button>
			</div>
			<div class="col-2 pl-0">
				<button type="button" class="btn btn-white opacity-59 font-size-28 altera decrescimo"><i class="fas fa-minus"></i></button>
			</div>
		</form>
	</section>

	<section class="container">
		<h4 class="text-white mb-4">登録店舗</h4>
		<ul class="list-group listing-group-item">
		  <li class="list-group-item p-0"><!-- active -->
		  	<div class="d-flex flex-column">
		  		<div class="px-2 py-1 d-flex justify-content-between bg-gradient-light">
		  			<div>
			  			<span class="badge bg-dark-blue">2 <i class="fas fa-star text-yellow"></i></span>
		  			</div>
		  			<img src="assets/images/logo.png" class="img-fluid img-c-box mb-2">
		  			<div class=""><!-- for active : text-danger -->
		  				<i class="fas fa-heart"></i>
		  			</div>
		  		</div>
		  		<div class="para-m-0 p-2 font-weight-bolder">
		  			<p class="text-uppercase">GRAND MIAGE</p>
		  			<p>貯蓄チップ　　20000</p>
		  		</div>
		  	</div>
		  </li>
		  <li class="list-group-item p-0"><!-- active -->
		  	<div class="d-flex flex-column">
		  		<div class="px-2 py-1 d-flex justify-content-between bg-gradient-light">
		  			<div>
			  			<span class="badge bg-dark-blue">2 <i class="fas fa-star text-yellow"></i></span>
		  			</div>
		  			<img src="assets/images/黒と黄色_円_バンド_ロゴ-removebg-preview.png" class="img-fluid img-c-box mb-2">
		  			<div class=""><!-- for active : text-danger -->
		  				<i class="fas fa-heart"></i>
		  			</div>
		  		</div>
		  		<div class="para-m-0 p-2 font-weight-bolder">
		  			<p class="text-uppercase">GRAND MIAGE</p>
		  			<p>貯蓄チップ　　20000</p>
		  		</div>
		  	</div>
		  </li>
		</ul>
	</section>

<?php include 'partials/footer.php'; ?>
