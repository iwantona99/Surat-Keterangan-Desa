<?php include '../konek.php';?>

<?php
	if(isset($_GET['nik'])){
		$tampil_nik = "SELECT * FROM data_user NATURAL JOIN data_pemohon WHERE nik=$_SESSION[nik]";
		$query = mysqli_query($konek,$tampil_nik);
		$data = mysqli_fetch_array($query,MYSQLI_BOTH);
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat_lahir'];
		$tanggal = $data['tanggal_lahir'];
		$jekel = $data['jekel'];
		$agama = $data['agama'];
		$alamat = $data['alamat'];
		$telepon = $data['telepon'];
		$pekerjaan = $data['pekerjaan'];
	}
	
?>

<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST">
							<div class="card">
								<div class="card-header">
									<div class="card-title">UBAH BIODATA</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label>NIK</label>
													<input type="number" name="nik" class="form-control" placeholder="NIK Anda.." value="<?= $nik;?>" readonly>
												</div>
												<div class="form-group">
													<label>Nama Lengkap</label>
													<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda.." value="<?= $nama;?>">
												</div>
												<div class="form-check">
													<label>Jenis Kelamin</label><br/>
													<label class="form-radio-label">
														<input class="form-radio-input" type="radio" name="jekel" value="<?= $jekel?>"  checked="">
														<span class="form-radio-sign">Laki-Laki</span>
													</label>
													<label class="form-radio-label ml-3">
														<input class="form-radio-input" type="radio" name="jekel" value="<?= $jekel?>">
														<span class="form-radio-sign">Perempuan</span>
													</label>
												</div>
												<div class="form-group">
													<label>Tempat Lahir</label>
													<input type="text" name="tempat" class="form-control" value="<?= $tempat;?>" placeholder="Tempat Lahir Anda..">
												</div>
												<div class="form-group">
													<label>Tanggal Lahir</label>
													<input type="date" name="tgl" class="form-control" value="<?= $tanggal;?>">
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label>Agama</label>
													<select name="agama" class="form-control">
														<option value="">Pilih Agama Anda</option>
														<option <?php if( $agama=='Islam'){echo "selected"; } ?> value='Islam'>Islam</option>
														<option <?php if( $agama=='Katolik'){echo "selected"; } ?> value='Kristen'>Katolik</option>
														<option <?php if( $agama=='Kristen'){echo "selected"; } ?> value='Kristen'>Kristen</option>
														<option <?php if( $agama=='Hindu'){echo "selected"; } ?> value='Hindu'>Hindu</option>
														<option <?php if( $agama=='Budha'){echo "selected"; } ?> value='Budha'>Budha</option>
													</select>
												</div>
												<div class="form-group">
													<label for="comment">Alamat</label>
													<textarea class="form-control" name="alamat" rows="5"><?= $alamat?></textarea>
												</div>				
												<div class="form-group">
													<label>Telepon</label>
													<input type="number" name="telepon" class="form-control" value="<?= $telepon?>" placeholder="Telepon Anda..">
												</div>
												<div class="form-group">
													<label>Pekerjaan</label>
													<input type="text" name="pekerjaan" class="form-control" value="<?= $pekerjaan?>" placeholder="Pekerjaan Anda..">
												</div>
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="ubah" class="btn btn-success">Ubah</button>
									<a href="?halaman=beranda" class="btn btn-default">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>

<?php
if(isset($_POST['ubah'])){
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tempat = $_POST['tempat'];
	$tgl = $_POST['tgl'];
	$jekel = $_POST['jekel'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$pekerjaan = $_POST['pekerjaan'];

	$sql = "UPDATE data_pemohon SET
	nama='$nama',
	tanggal_lahir='$tgl',
	tempat_lahir='$tempat',
	jekel='$jekel',
	agama='$agama',
	alamat='$alamat',
	telepon='$telepon',
	pekerjaan='$pekerjaan'
	WHERE nik=$_SESSION[nik]";
	$query = mysqli_query($konek,$sql);

	if($query){
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_pemohon">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_pemohon">';
	  }
}
	
?>