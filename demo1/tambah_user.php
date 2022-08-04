<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST">
							<div class="card">
								<div class="card-header">
									<div class="card-title">FORM TAMBAH USER</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label>Username</label>
													<input type="text" name="username" class="form-control" placeholder="Username.." autofocus>
												</div>
												<div class="form-group">
													<label>Password</label>
													<input type="password" name="password" class="form-control" placeholder="Password..">
												</div>
												<div class="form-group">
													<label>Hak Akses</label>
													<input type="text" name="hak_akses" class="form-control" placeholder="Hak Akses..">
												</div>
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="simpan" class="btn btn-success btn-sm">Simpan</button>
									<a href="?halaman=tampil_user" class="btn btn-default btn-sm">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>

<?php
if(isset($_POST['simpan'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hak_akses = $_POST['hak_akses'];

	$sql = "INSERT INTO data_user (username,password,hak_akses) VALUES ('$username','$password','$hak_akses')";
	$query = mysqli_query($konek,$sql);

	if($query){
		echo "<script language='javascript'>swal('Selamat...', 'Simpan Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_user">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Simpan Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tambah_user">';
	  }
}
?>