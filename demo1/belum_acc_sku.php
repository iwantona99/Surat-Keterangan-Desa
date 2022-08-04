<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
                <div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
									<h4 class="fw-bold text-uppercase">belum acc request surat keterangan usaha</h4>
									</div>
								</div>
								<form action="" method="POST">
									<div class="card-body">
										<div class="table-responsive">
											<table id="add1" class="display table table-striped table-hover" >
												<thead>
													<tr>
														<th>Tanggal Request</th>
														<th>NIK</th>
														<th>Nama Lengkap</th>
														<th>Status</th>
														<th>Scan KTP</th>
														<th>Scan KK</th>
														<th style="width: 10%">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$sql = "SELECT * FROM data_request_sku natural join data_pemohon where status=1";
														$query = mysqli_query($konek,$sql);
														while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
															$tgl = $data['tanggal_request'];
															$format = date('d F Y', strtotime($tgl));
															$nik = $data['nik'];
															$nama = $data['nama'];
															$status = $data['status'];
															$id= $data['id_request_sku'];
															$ktp = $data['scan_ktp'];
															$kk = $data['scan_kk'];
															$id_request_sku = $data['id_request_sku'];
	
															if($status=="1"){
																$status = "SUDAH ACC STAF";
															}elseif($status=="0"){
																$status = "BELUM ACC";
															}
													?>
													<tr>
														<td><?php echo $format;?></td>
														<td><?php echo $nik;?></td>
														<td><?php echo $nama;?></td>
														<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status;?></td>
														<td><img src="../dataFoto/scan_ktp/<?php echo $ktp;?>" width="50" height="50" alt=""></td>
														<td><img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="50" height="50" alt=""></td>
														<!-- <td>
															<input type="checkbox" name="check[$i]" value="<?php echo $id;?>">
															<input type="submit" name="acc" class="btn btn-primary btn-sm" value="ACC">
														</td> -->
														<td>
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Surat" href="?halaman=view_sku&id_request_sku=<?= $id_request_sku;?>">
																<i class="fa fa-edit"></i></a>
															</div>
														</td>
													</tr>
													<?php
														}
													?>
												</tbody>
											</table>
										</div>
									</div>
								</form>
							</div>
                        </div>
                        
					</div>
				</div>

<?php
    if(isset($_POST['acc'])){
        if(isset($_POST['check']))
        {
                    foreach ($_POST['check'] as $value){
                        // echo $value;
                        $ubah = "UPDATE data_request_sku set status =2 where id_request_sku = $value"; 

                        $query = mysqli_query($konek,$ubah);

                        if($query) {
                            echo "<script language='javascript'>swal('Selamat...', 'ACC Berhasil!', 'success');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_sku">';
                        }else{
                            echo "<script language='javascript'>swal('Gagal...', 'ACC Gagal!', 'error');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_sku">';
                        }

                    }
        }
    }
?>