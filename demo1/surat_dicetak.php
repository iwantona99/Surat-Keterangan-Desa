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
										<h4 class="card-title">PERMOHONAN SURAT SUDAH DICETAK</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add1" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                    <th>Tanggal Request</th>
                                                    <th>NIK</th>
                                                    <th>Nama Lengkap</th>
													<th>Keperluan</th>
                                                    <th>Request</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
                                                <?php
                                                    $sql = "SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_sktm.tanggal_request,
                                                    data_request_sktm.keperluan,
                                                    data_request_sktm.request,
                                                    data_request_sktm.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_sktm ON data_request_sktm.nik = data_pemohon.nik
                                                WHERE data_request_sktm.status = 3
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skd.tanggal_request,
                                                    data_request_skd.keperluan,
                                                    data_request_skd.request,
                                                    data_request_skd.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skd ON data_request_skd.nik = data_pemohon.nik
                                                WHERE data_request_skd.status = 3
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_sku.tanggal_request,
                                                    data_request_sku.keperluan,
                                                    data_request_sku.request,
                                                    data_request_sku.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_sku ON data_request_sku.nik = data_pemohon.nik
                                                WHERE data_request_sku.status = 3
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skp.tanggal_request,
                                                    data_request_skp.keperluan,
                                                    data_request_skp.request,
                                                    data_request_skp.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skp ON data_request_skp.nik = data_pemohon.nik
                                                WHERE data_request_skp.status = 3
                                                ";
                                                    // $sql = "SELECT * FROM data_request_skd natural join data_pemohon WHERE status=3";
                                                    $query = mysqli_query($konek,$sql);
                                                    while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
														$tgl = $data['tanggal_request'];
														$format = date('d F Y', strtotime($tgl));
                                                        $nik = $data['nik'];
                                                        $nama = $data['nama'];
														$status = $data['status'];
														$keperluan = $data['keperluan'];
														// $keterangan = $data['keterangan'];
                                                        // $id= $data['id_request_skd'];
                                                        $request= $data['request'];

                                                        if($status=="1"){
                                                            $status = "<b style='color:blue'>Sudah ACC Staf</b>";
                                                        }elseif($status=="0"){
                                                            $status = "<b style='color:red'>BELUM ACC staf</b>";
                                                        }elseif($status=="3"){
                                                            $status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
                                                        }
                                                ?>
												<tr>
													<td><?php echo $format;?></td>
                                                    <td><?php echo $nik;?></td>
                                                    <td><?php echo $nama;?></td>
													<td><?php echo $keperluan;?></td>
                                                    <td><?php echo $request;?></td>
													<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status;?></td>
                                                </tr>
												<!-- <?php
															if(isset($_GET['id_request_sktm'])){
																$hapus = mysqli_query($konek,"DELETE FROM data_request_sktm WHERE id_request_sktm=$id");
																if($hapus){
																	echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>" ;
																	echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
																}else{
																	echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>" ;
																	echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
																}
															}
														?> -->
                                                <?php
                                                    }
                                                ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
                        </div>
					</div>
				</div>
