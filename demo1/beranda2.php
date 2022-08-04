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
 }
 ?>
<?php
    if($hak_akses=="Staf"){
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
					<h3 class="fw-bold text-uppercase">TAMPIL REQUEST SURAT KETERANGAN PEMOHON</h3>
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
													$sql = "SELECT * FROM data_request_sktm WHERE status=0";
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
													$sql = "SELECT * FROM data_request_sku WHERE status=0";
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
												<p class="card-category">SKP</p>
												<?php
													$sql = "SELECT * FROM data_request_skp WHERE status=0";
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
													$sql = "SELECT * FROM data_request_skd WHERE status=0";
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
								<h5 class="text-white op-7 mb-2"></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner">
					<!-- Card -->
					<h4 class="page-title">TAMPIL REQUEST SURAT KETERANGAN SUDAH ACC STAF</h4>
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
													$sql = "SELECT * FROM data_request_sktm WHERE status=1";
													$query = mysqli_query($konek,$sql);
													$data = mysqli_fetch_array($query,MYSQLI_BOTH);
													$count = mysqli_num_rows($query);
													$status = $data['status'];
												
													
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
													$sql = "SELECT * FROM data_request_sku WHERE status=1";
													$query = mysqli_query($konek,$sql);
													$data = mysqli_fetch_array($query,MYSQLI_BOTH);
													$count = mysqli_num_rows($query);
													$status = $data['status'];
													
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
													$sql = "SELECT * FROM data_request_skp WHERE status=1";
													$query = mysqli_query($konek,$sql);
													$data = mysqli_fetch_array($query,MYSQLI_BOTH);
													$count = mysqli_num_rows($query);
													$status = $data['status'];

													
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
													$sql = "SELECT * FROM data_request_skd WHERE status=1";
													$query = mysqli_query($konek,$sql);
													$data = mysqli_fetch_array($query,MYSQLI_BOTH);
													$count = mysqli_num_rows($query);
													$status = $data['status'];

													
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
 