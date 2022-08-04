<?php include '../konek.php';?>
                <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">LAPORAN</h2>
							</div>
						</div>
					</div>
                </div>
                <div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-tools">
											<a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
												<span class="btn-label">
													<i class="fa fa-pencil"></i>
												</span>
												Export
											</a>
											<a href="#" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
												Print
											</a>
										</div>
								</div>
								<div class="card-body">
									<div class="card-sub">									
										
									</div>
									<table class="table mt-3">
										<thead>
											<tr>
												<th scope="col">No</th>
												<th scope="col">Nama</th>
												<th scope="col">Nik</th>
												<th scope="col">Jenis Kelamin</th>
												<th scope="col">Keperluan</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$no =0;
												$sql = "SELECT data_pemohon.nik, data_pemohon.nama, data_request_sku.usaha, data_request_sku.request, data_request_sktm.keperluan, data_request_sktm.request FROM data_pemohon LEFT JOIN data_request_sku ON data_request_sku.nik = data_pemohon.nik LEFT JOIN data_request_sktm on data_request_sktm.nik = data_pemohon.nik WHERE data_request_sktm.status=0 OR data_request_sku.status=0";
												$query = mysqli_query($konek,$sql);
												while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
													$data['nik'];
													$no++;
											?>
											<tr>
												<td><?php echo $no;?></td>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
												<td>@mdo</td>
											</tr>
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