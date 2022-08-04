<?php
  if(!isset($_SESSION)) 
  { 
	  session_start(); 
  } 
 if (isset($_SESSION['password'])=="" || ($_SESSION['hak_akses'])=="")  {
 header('location:login.php');
 }
 else{
 $hak_akses = $_SESSION['hak_akses'];
 $nama = $_SESSION['nama'];
 $nik = $_SESSION['nik'];
 }
 ?>
 <?php
    if($hak_akses=="Pemohon"){
 ?>
<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Halo <?php echo $nama;?>!</h2>
								<h5 class="text-white op-7 mb-2">Sebelum Anda Request Surat Keterangan Lengkapi Biodata Anda, Klik Biodata Anda</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="?halaman=tampil_pemohon" class="btn btn-sm btn-primary btn-round"><span class="btn-label">
									<i class="fas fa-user"></i> Biodata Anda</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-3 pr-md-0">
								<div class="card-pricing2 card-primary">
									<div class="pricing-header">
										<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Tidak Mampu</h6>
									</div>
									<div class="price-value">
										<div class="value">
											<span class="currency"></span>
											<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
											<span class="month"></span>
										</div>
									</div>
									<ul class="pricing-content">
									</ul>
									<a href="?halaman=request_sktm" class="btn btn-primary btn-round btn-sm mb-3">
										<span class="btn-label">
											<i class="fas fa-plus-circle"></i>
										</span> Request</a>
								</div>
						</div>
						<div class="col-md-3 pr-md-0">
								<div class="card-pricing2 card-success">
									<div class="pricing-header">
										<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Usaha</h6>
									</div>
									<div class="price-value">
										<div class="value">
											<span class="currency"></span>
											<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
											<span class="month"></span>
										</div>
									</div>
									<ul class="pricing-content">
									</ul>
									<a href="?halaman=request_sku" class="btn btn-success btn-round btn-sm mb-3"><span class="btn-label">
										<i class="fas fa-plus-circle"></i> Request</a>
								</div>
						</div>
						<div class="col-md-3 pr-md-0">
								<div class="card-pricing2 card-warning">
									<div class="pricing-header">
										<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Mandah</h6>
									</div>
									<div class="price-value">
										<div class="value">
											<span class="currency"></span>
											<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
											<span class="month"></span>
										</div>
									</div>
									<ul class="pricing-content">
									</ul>
									<a href="?halaman=request_skp" class="btn btn-warning btn-round btn-sm mb-3"><span class="btn-label">
										<i class="fas fa-plus-circle"></i> Request</a>
								</div>
						</div>
						<div class="col-md-3 pr-md-0">
								<div class="card-pricing2 card-secondary">
									<div class="pricing-header">
										<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Domisili</h6>
									</div>
									<div class="price-value">
										<div class="value">
											<span class="currency"></span>
											<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
											<span class="month"></span>
										</div>
									</div>
									<ul class="pricing-content">
									</ul>
									<a href="?halaman=request_skd" class="btn btn-secondary btn-round btn-sm mb-3"><span class="btn-label">
										<i class="fas fa-plus-circle"></i> Request</a>
								</div>
						</div>
	</div>
</div>
<?php
    }elseif($hak_akses=="Staf"){
 ?>
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Halo <?php echo $hak_akses;?>!</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner">
					<!-- Card -->
					<h3 class="fw-bold text-uppercase">JUMLAH REQUEST SURAT KETERANGAN SUDAH ACC</h3>
					<!-- Card With Icon States Background -->
					<div class="row">
						<div class="col-sm-6 col-md-3">
								<div class="card card-stats card-round">
									<div class="card-body ">
										<div class="row align-items-center">
											<a href="?halaman=sudah_acc_sktm">
												<div class="col-icon">
													<div class="icon-big text-center icon-primary bubble-shadow-small">
														<i class="flaticon-envelope-1"></i>
													</div>
												</div>
											</a>
											<div class="col col-stats ml-3 ml-sm-0">
												<div class="numbers">
													<p class="card-category">SKTM</p>
													<?php
													$sql = "SELECT * FROM data_request_sktm WHERE status=1";
													$query = mysqli_query($konek,$sql);
													$data = mysqli_fetch_array($query,MYSQLI_BOTH);
													$count = mysqli_num_rows($query);
													$status = $data['status'];

													// if($status=="1"){
													// 	$count ="Belum ada request";
													// }
												
													
												?>
													<h4 class="card-title"><?php echo $count;?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<a href="?halaman=sudah_acc_sku">
											<div class="col-icon">
												<div class="icon-big text-center icon-success bubble-shadow-small">
													<i class="flaticon-envelope-1"></i>
												</div>
											</div>
										</a>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">SKU</p>
												<?php
													$sql = "SELECT * FROM data_request_sku WHERE status=1";
													$query = mysqli_query($konek,$sql);
													$data = mysqli_fetch_array($query,MYSQLI_BOTH);
													$count = mysqli_num_rows($query);
													$status = $data['status'];

													// if($status=="1"){
													// 	$count ="Belum ada request";
													// }
												
													
												?>
												<h4 class="card-title"><?php echo $count;?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<a href="?halaman=sudah_acc_skp">
											<div class="col-icon">
												<div class="icon-big text-center icon-warning bubble-shadow-small">
													<i class="flaticon-envelope-1"></i>
												</div>
											</div>
										</a>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">SKM</p>
												<?php
													$sql = "SELECT * FROM data_request_skp WHERE status=1";
													$query = mysqli_query($konek,$sql);
													$data = mysqli_fetch_array($query,MYSQLI_BOTH);
													$count = mysqli_num_rows($query);
													$status = $data['status'];

													// if($status=="1"){
													// 	$count ="Belum ada request";
													// }
												
													
												?>
												<h4 class="card-title"><?php echo $count;?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<a href="?halaman=sudah_acc_skd">
											<div class="col-icon">
												<div class="icon-big text-center icon-secondary bubble-shadow-small">
													<i class="flaticon-envelope-1"></i>
												</div>
											</div>
										</a>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">SKD</p>
												<?php
													$sql = "SELECT * FROM data_request_skd WHERE status=1";
													$query = mysqli_query($konek,$sql);
													$data = mysqli_fetch_array($query,MYSQLI_BOTH);
													$count = mysqli_num_rows($query);
													$status = $data['status'];

													// if($status=="1"){
													// 	$count ="Belum ada request";
													// }
												
													
												?>
												<h4 class="card-title"><?php echo $count;?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php
    }elseif($hak_akses=="Reje"){
 ?>
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Halo <?php echo $hak_akses;?>!</h2>
								<h5 class="text-white op-7 mb-2">Premium Bootstrap 4 Admin Dashboard</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner">
					<!-- Card -->
					<h4 class="page-title">TAMPIL REQUEST SURAT KETERANGAN</h4>
					<!-- Card With Icon States Background -->
					<div class="row">
						<div class="col-sm-6 col-md-3">
								<div class="card card-stats card-round">
									<div class="card-body ">
										<div class="row align-items-center">
											<a href="?halaman=belum_acc_sktm">
												<div class="col-icon">
													<div class="icon-big text-center icon-primary bubble-shadow-small">
														<i class="flaticon-envelope-1"></i>
													</div>
												</div>
											</a>
											<div class="col col-stats ml-3 ml-sm-0">
												<div class="numbers">
													<p class="card-category">SKTM</p>
													<?php
													$sql = "SELECT * FROM data_request_sktm WHERE status=0";
													$query = mysqli_query($konek,$sql);
													$data = mysqli_fetch_array($query,MYSQLI_BOTH);
													$count = mysqli_num_rows($query);
													$status = $data['status'];

													if($status=="1"){
														$count ="Belum ada request";
													}
												
													
												?>
													<h4 class="card-title"><?php echo $count;?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<a href="?halaman=belum_acc_sku">
											<div class="col-icon">
												<div class="icon-big text-center icon-success bubble-shadow-small">
													<i class="flaticon-envelope-1"></i>
												</div>
											</div>
										</a>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">SKU</p>
												<?php
													$sql = "SELECT * FROM data_request_sku WHERE status=0";
													$query = mysqli_query($konek,$sql);
													$data = mysqli_fetch_array($query,MYSQLI_BOTH);
													$count = mysqli_num_rows($query);
													$status = $data['status'];

													if($status=="1"){
														$count ="Belum ada request";
													}
												
													
												?>
												<h4 class="card-title"><?php echo $count;?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<a href="?halaman=belum_acc_skp">
											<div class="col-icon">
												<div class="icon-big text-center icon-warning bubble-shadow-small">
													<i class="flaticon-envelope-1"></i>
												</div>
											</div>
										</a>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">SKP</p>
												<?php
													$sql = "SELECT * FROM data_request_skp WHERE status=0";
													$query = mysqli_query($konek,$sql);
													$data = mysqli_fetch_array($query,MYSQLI_BOTH);
													$count = mysqli_num_rows($query);
													$status = $data['status'];

													if($status=="1"){
														$count ="Belum ada request";
													}
												
													
												?>
												<h4 class="card-title"><?php echo $count;?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<a href="?halaman=belum_acc_skd">
											<div class="col-icon">
												<div class="icon-big text-center icon-secondary bubble-shadow-small">
													<i class="flaticon-envelope-1"></i>
												</div>
											</div>
										</a>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">SKD</p>
												<?php
													$sql = "SELECT * FROM data_request_skd WHERE status=0";
													$query = mysqli_query($konek,$sql);
													$data = mysqli_fetch_array($query,MYSQLI_BOTH);
													$count = mysqli_num_rows($query);
													$status = $data['status'];

													if($status=="1"){
														$count ="Belum ada request";
													}
												
													
												?>
												<h4 class="card-title"><?php echo $count;?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
 <?php
    }
 ?>
 