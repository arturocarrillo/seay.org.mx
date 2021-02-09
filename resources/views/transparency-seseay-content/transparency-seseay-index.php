<section class="col-xl-11 col-lg-11 col-md-12 col-sm-12 m-auto d-flex flex-wrap justify-content-between p-5">
		<div class="w-100 d-flex flex-wrap justify-content-center mt-5 p-4">
            <h2 class="text-lg text-green-s1 font-weight-bold m-auto p-4">Información Financiera y Presupuestal</h2>
        </div>
		<div class="w-100 d-flex  mt-4 mb-4 flex-wrap">
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 justify-content-center align-items-center p-5">
		      <div class="row justify-content-center d-flex bg-green-s3">
		      	<img class="img-w50 p-5 m-auto" src="./public/frontend/img/financial.svg" alt="placeholder+image">
		      </div>
		      <div class="row justify-content-center d-flex bg-green-s1 p-4 ">
		      	<a class="btn btn-gModal" data-toggle="modal" data-target="#info-2020" href="#">Información 2020</a>
		      </div>
		    </div>
		    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 justify-content-center align-items-center p-5">
		      <div class="row justify-content-center d-flex bg-green-s3">
		      	<img class="img-w50 p-5 m-auto" src="./public/frontend/img/financial.svg" alt="placeholder+image">
		      </div>
		      <div class="row justify-content-center d-flex bg-green-s1 p-4 ">
		      	<a class="btn btn-gModal" data-toggle="modal" data-target="#info-2019" href="#">Información 2019</a>
		      </div>
		    </div>
		    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 justify-content-center align-items-center p-5">
		      <div class="row justify-content-center d-flex bg-green-s3">
		      	<img class="img-w50 p-5 m-auto" src="./public/frontend/img/financial.svg" alt="placeholder+image">
		      </div>
		      <div class="row justify-content-center d-flex bg-green-s1 p-4 ">
		      	<a class="btn btn-gModal" data-toggle="modal" data-target="#info-2018" href="#">Información 2018</a>
		      </div>
		    </div>
		</div>
		<div class="w-100">
			<?php include('./resources/views/transparency-seseay-content/2018.php'); ?>
			<?php include('./resources/views/transparency-seseay-content/2019.php'); ?>
			<?php include('./resources/views/transparency-seseay-content/2020.php'); ?>
		</div>
</section>