<?php  include 'partials/header.php'?>

<div class="contaier">

    <!-- header -->

    <div class="bg-light-blue p-3 rounded-bottom-pill sticky-top">
        <div class="d-flex justify-content-between align-items-center">
            <a href="">
                <img src="assets/svg/bar.svg">
            </a>
            <h4 class="text-uppercase text-white">Miragepoker</h4>
            <a href="">
                <span class="icon-bell"></span>
            </a>
        </div>
    </div>

    <!-- searchbox section -->
    <div class="row m-0 my-3">
        <div class="col-10 col-md-10 col-sm-10">
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control search-bar" placeholder="Search" id="searchbar-click">
                    <div class="input-group-append" id="search-click">
                        <span class="input-group-text search-icon search-bar pl-n4"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-1 col-md-2 col-sm-2  p-0 m-0 adjust text-center">
            <a href="" class="btn text-white bg-light-blue rounded"> <i class="fas fa-sliders-h "></i> </a>
        </div>
    </div>

    <!-- end searchbox -->

    <!-- first card section -->


    <div class="card bg-light-blue  card-sec row d-flex justify-content-center m-4 pb-3">

        <div class="card-body">
            <h5 class="card-title">お知らせ</h5>
            <div class="font-sm">
              <?php while ($data = mysqli_fetch_assoc($info)){?>
                <div>
                    <span class="mr-2"><?php echo $data['dateda']?></span>
                    <span class="ml-2"><?php echo $data['i_main']?></span>
                </div>
              <?php }?>

            </div>

        </div>
    </div>



    <!-- end first card section -->

    <!-- second card section -->

    <div class="row  d-flex justify-content-center my-2 mx-1">
        <div class="col-6 px-2 pt-2">
            <div class="card border-0 p-0 m-0 listing-group-item bg-transparent">
                <div class="card-body list-group-item font-size-12 p-0 m-0 ">

                    <div class="d-flex flex-column">
                        <div class="px-2 py-1 d-flex justify-content-between bg-gradient-light">
                            <div>
                                <span class="badge bg-dark-blue">2 <i class="fas fa-star text-yellow"></i></span>
                            </div>
                            <div class="img-container">
                                <img src="assets/images/logo.png" class="img-fluid img-c-box mb-2">

                            </div>
                            <div class="">
                                <!-- for active : text-danger -->
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <div class="para-m-0 p-2 font-weight-bolder">
                            <p class="text-uppercase">GRAND MIAGE</p>
                            <p><small> 0TABLES　　0名参加中</small></p>
                            <p><small>ウェイティング 0名</small> </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>



    <!-- end second card section -->
    <div class="escape"></div>
    <!-- last section -->
    <div class="bg-light-blue rounded-20 rounded-bottom-0 fixed-bottom p-2">
	<div class="row text-center">
		<div class="col my-auto">
			<a href="" class="btn btn-dark-blue rounded-pill">
				<i class="fas fa-home"></i> Home
			</a>
		</div>
		<div class="col my-auto">
			<a href="" class="text-white">
				<i class="fas fa-shopping-bag"></i>
			</a>
		</div>
		<div class="col my-auto">
			<a href="" class="text-white">
				<i class="fas fa-user"></i>
			</a>
		</div>
	</div>
</div>

</div>

<?php  include 'partials/footer.php'?>
