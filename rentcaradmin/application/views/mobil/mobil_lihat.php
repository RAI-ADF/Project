
<?php //echo $this->load->view('mobil/detail_Mobil'); ?>

						<!-- start: BREADCRUMB -->
						<div class="row">
							<div class="col-md-12">
								<ol class="breadcrumb">
									<li>
										<a href="#">
											Dashboard
										</a>
									</li>
									<li class="active">
										Basic Tables
									</li>
								</ol>
							</div>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-md-12">
								<!-- start: BASIC TABLE PANEL -->
								<div class="panel panel-white">
									<div class="panel-body">
										
										<table class="table table-hover" id="sample-table-1">
											<thead>
												
												<tr>
													<th class="center">Nomor Polisi</th>
													<th>Nama Mobil</th>
													<th class="hidden-xs">Warna</th>
													<th>Kategori</th>
													<th class="hidden-xs">Harga Sewa</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach($daftar as $d){?>
												<tr>
													
													<td class="center"><?php echo $d->noRegistrasi;?></td>
													<td><?php echo $d->merk;?></td>
													<td><?php echo $d->warna;?></td>
													<td><?php echo $d->kategori;?></td>
													<td><?php echo $d->hargaSewa;?></td>
													<!--<td><img src="<?=base_url();?>/assets/images/<?php echo $d->gambar; ?>"></td>-->
													<td class="center">
														<div class="visible-md visible-lg hidden-sm hidden-xs">
															<a href="<?php echo base_url().'mobil/edit/'.$d->noRegistrasi; ?>" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit" name="update" id="update"></i></a>
															<a href="<?php echo base_url().'mobil/detail/'.$d->noRegistrasi; ?>" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Lihat Detail" ><i class="fa fa-share"></i></a>
															<a href="<?php echo base_url().'mobil/hapus/'.$d->noRegistrasi; ?>" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
														</div>
													</td>
												<?php }?>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- end: BASIC TABLE PANEL -->
							</div>
						</div>
						
							<div class="col-md-12">
							</div>
						</div>
						
								</div>
						<!-- end: PAGE CONTENT-->
					</div>
					<div class="subviews">
						<div class="subviews-container"></div>
					</div>
				</div>
				<!-- end: PAGE -->
			</div>
			<!-- end: MAIN CONTAINER -->
			
			