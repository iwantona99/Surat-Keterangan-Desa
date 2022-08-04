<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
    if(isset($_GET['id_user'])){
        $id_user = $_GET['id_user'];
        $sql = "SELECT * FROM data_user WHERE id_user='$id_user'";
        $query = mysqli_query($konek,$sql);
        $data=mysqli_fetch_array($query,MYSQLI_BOTH);
        $username = $data['username'];
        $password = $data['password'];
        $level = $data['hak_akses'];
    }
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST">
							<div class="card">
								<div class="card-header">
									<div class="card-title">FORM UBAH USER</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
                                                <div class="form-group">
													<input type="hidden" name="id_user" value="<?php echo $id_user;?>" class="form-control">
												</div>
												<div class="form-group">
													<label>Username</label>
													<input type="text" name="username" value="<?php echo $username;?>" class="form-control" autofocus>
												</div>
												<div class="form-group">
													<label>Password</label>
													<input type="text" name="password" value="<?php echo $password;?>" class="form-control">
                                                </div>
                                                <div class="form-group">
													<label>Hak Akses</label>
													<input type="text" name="hak_akses" value="<?php echo $level;?>" class="form-control">
												</div>
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="ubah" class="btn btn-success btn-sm">Ubah</button>
									<a href="?halaman=tampil_user" class="btn btn-default btn-sm">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>

<?php
if(isset($_POST['ubah'])){
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hak_akses = $_POST['hak_akses'];

    $sql = "UPDATE data_user SET
    username='$username',
    password='$password',
    hak_akses='$hak_akses' WHERE id_user='$id_user'";
    $query = mysqli_query($konek,$sql);

	if($query){
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_user">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_user">';
	  }
}
?>