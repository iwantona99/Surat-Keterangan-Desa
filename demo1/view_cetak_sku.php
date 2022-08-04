<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
	if(isset($_GET['id_request_sku'])){
		$id=$_GET['id_request_sku'];
		$sql = "SELECT * FROM data_request_sku natural join data_pemohon WHERE id_request_sku='$id'";
		$query = mysqli_query($konek,$sql);
        $data = mysqli_fetch_array($query,MYSQLI_BOTH);
        $id=$data['id_request_sku'];
        $nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat_lahir'];
        $tgl = $data['tanggal_lahir'];
        $tgl2 = $data['tanggal_request'];
        $format1 = date('Y', strtotime($tgl2));
        $format2 = date('d-m-Y', strtotime($tgl));
        $format3 = date('d F Y', strtotime($tgl2));
		$agama = $data['agama'];
		$jekel = $data['jekel'];
		$nama = $data['nama'];
		$alamat = $data['alamat'];
		$pekerjaan = $data['pekerjaan'];
        $request = $data['request'];
        $keterangan = $data['keterangan'];
        $status = $data['status'];
        $usaha = $data['usaha'];
        $keperluan = $data['keperluan'];
        $acc = $data['acc'];
        $format4 = date('d F Y', strtotime($acc));
        if($format4==0){
            $format4="kosong";
        }elseif($format4==1){
           $format4;
        }

        if($status==3){
            $keterangan="Sudah ACC Reje, surat sedang dalam proses cetak oleh staf";
        }
	}
?>
 <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold"></h2>
							</div>
						</div>
					</div>
                </div>
                <div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
								    <div class="card-tools">
                                        <form action="" method="POST">
                                            <div class="form-group" required>
                                            <label>Keterangan</label>
                                                <select name="dicetak" id="" class="form-control" required>
                                                    <option value="" required>Pilih</option>
                                                    <option value="Surat dicetak, bisa diambil!" required>Surat dicetak, bisa diambil!</option>
                                                </select><br>
                                                <!-- <input type="date" name="tgl_acc" class="form-control"> -->
                                                    <input type="submit" name="ttd" value="Kirim" class="btn btn-primary btn-sm" required>
                                                    <a href="cetak_sku.php?id_request_sku=<?=$id;?>" class="btn btn-primary btn-sm">Cetak</a>
                                                <!-- <div class="form-group">
                                                    <a href="cetak_skd.php?id_request_skd=<?php $id;?>">
                                                        Cetak
                                                    </a>
                                                </div> -->
                                                <!-- <div class="form-group">
                                                   <a href="cetak_skd.php?id_request_skd=<?=$id;?>">a</a>
                                                </div> -->
                                            </div>
                                        </form>
                                        <?php
                                        if(isset($_POST['ttd'])){
                                            $cetak = $_POST['dicetak'];
                                            $update = mysqli_query($konek,"UPDATE data_request_sku SET keterangan='$cetak', status=3 WHERE id_request_sku=$id");
                                            if($update){
                                                echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>" ;
                                                echo '<meta http-equiv="refresh" content="3; url=?halaman=surat_dicetak">';
                                            }else{
                                                echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>" ;
                                                echo '<meta http-equiv="refresh" content="3; url=?halaman=view_sku">';
                                            }

                                        }
                                        ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
                                <table border="1" align="center">
                                    <table border="0" align="center">
                                        <tr>
                                        <td><img src="img/kudus.png" width="70" height="87" alt=""></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                            <td>
                                                <center>
													<font size="4">PEMERINTAHAN KABUPATEN BENER MERIAH</font><br>
                                                    <font size="4">KECAMATAN WIH PESAM</font><br>
                                                    <font size="5"><b>KAMPUNG JAMUR UJUNG</b></font><br>
                                                    <font size="2"><i>Jl. Takengon-Bireuen Kode Pos 24580</i></font><br>
                </center>
            </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
            <td colspan="45"><hr color="black"></td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                <center>
                    <font size="4"><b>SURAT KETERANGAN <?php echo $request;?></b></font><br>
                    <hr style="margin:0px" color="black">
                    <span>Nomor : <?php echo $id;?> / JU / <?php echo $format1;?></span>
                </center>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Reje Kampung Jamur Ujung <br>  Menerangkan bahwa :
            </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama;?></td>
        </tr>
        <tr>
            <td>Tempat, tanggal lahir</td>
            <td>:</td>
            <td><?php echo $tempat.", ".$format2;?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jekel;?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $agama;?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?php echo $pekerjaan;?></td>
        </tr>
        <tr>
            <td>No. NIK</td>
            <td>:</td>
            <td><?php echo $nik;?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat;?></td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan pengamatan kami bahwa orang yang bersangkutan adalah benar<br>memiliki usaha <b><u><?php echo $usaha; ?></u></b> di Wilayah Kampung Jamur Ujung.
            </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                "Surat Keterangan ini digunakan untuk  <b><i><u><?php echo $keperluan;?></u></i></b>"<br>
            </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat ini diberikan kepada yang bersangkutan agar dapat dipergunakan<br>&nbsp;&nbsp;&nbsp;&nbsp;untuk sebagaimana mestinya.
            </td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table border="0" align="center">
        <tr>
            <th></th>
            <th width="100px"></th>
            <th>Jamur Ujung, <?php echo  $format4;?></th>
        </tr>
        <tr>
            <td> <br>  </td>
            <td></td>
            <td>REJE JAMUR UJUNG</td>
        </tr>
        <tr>
            <td rowspan="15"></td>
            <td></td>
            <td rowspan="15"></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr><tr>
            <td></td>
        </tr><tr>
            <td></td>
        </tr><tr>
            <td></td>
        </tr>
        <tr>
            <td><b style="text-transform:uppercase"><u></u></b></td>
            <td></td>
            <td><b><u>( IRPAN )</u></b></td>
        </tr>
    </table>

								</div>
							</div>
						</div>
					</div>
			</div>
            