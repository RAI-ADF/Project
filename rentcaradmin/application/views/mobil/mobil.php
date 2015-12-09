
<?php //echo $this->load->view('mobil/detail_Mobil'); ?>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" id="myAddLabel">Lihat Data</h4>
            </div>
            <div class="modal-body">
			
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
                </form>
			</div>
		</div>
	</div>
</div>

<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
					<!-- start: PANEL CONFIGURATION MODAL FORM -->
					<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title">Panel Configuration</h4>
								</div>
								<div class="modal-body">
									Here will be a configuration form
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										Close
									</button>
									<button type="button" class="btn btn-primary">
										Save changes
									</button>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal -->
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
					<div class="container">
						<!-- start: PAGE HEADER -->
						<!-- start: TOOLBAR -->
						<div class="toolbar row">
							<div class="col-sm-6 hidden-xs">
								<div class="page-header">
									<h1>Lihat Data Mobil <small>basic tables samples</small></h1>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<a href="#" class="back-subviews">
									<i class="fa fa-chevron-left"></i> BACK
								</a>
								<a href="#" class="close-subviews">
									<i class="fa fa-times"></i> CLOSE
								</a>
								<div class="toolbar-tools pull-right">
									<!-- start: TOP NAVIGATION MENU -->
									<ul class="nav navbar-right">
										<!-- start: TO-DO DROPDOWN -->
										<li class="dropdown">
											<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
												<i class="fa fa-plus"></i> SUBVIEW
												<div class="tooltip-notification hide">
													<div class="tooltip-notification-arrow"></div>
													<div class="tooltip-notification-inner">
														<div>
															<div class="semi-bold">
																HI THERE!
															</div>
															<div class="message">
																Try the Subview Live Experience
															</div>
														</div>
													</div>
												</div>
											</a>
											<ul class="dropdown-menu dropdown-light dropdown-subview">
												<li class="dropdown-header">
													Notes
												</li>
												<li>
													<a href="#newNote" class="new-note"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new note</a>
												</li>
												<li>
													<a href="#readNote" class="read-all-notes"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Read all notes</a>
												</li>
												<li class="dropdown-header">
													Calendar
												</li>
												<li>
													<a href="#newEvent" class="new-event"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new event</a>
												</li>
												<li>
													<a href="#showCalendar" class="show-calendar"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show calendar</a>
												</li>
												<li class="dropdown-header">
													Contributors
												</li>
												<li>
													<a href="#newContributor" class="new-contributor"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new contributor</a>
												</li>
												<li>
													<a href="#showContributors" class="show-contributors"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show all contributor</a>
												</li>
											</ul>
										</li>
										<li class="dropdown">
											<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
												<span class="messages-count badge badge-default hide">3</span> <i class="fa fa-envelope"></i> MESSAGES
											</a>
											<ul class="dropdown-menu dropdown-light dropdown-messages">
												<li>
													<span class="dropdown-header"> You have 9 messages</span>
												</li>
												<li>
													<div class="drop-down-wrapper ps-container">
														<ul>
															<li class="unread">
																<a href="javascript:;" class="unread">
																	<div class="clearfix">
																		<div class="thread-image">
																			<img src="./assets/images/avatar-2.jpg" alt="">
																		</div>
																		<div class="thread-content">
																			<span class="author">Nicole Bell</span>
																			<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																			<span class="time"> Just Now</span>
																		</div>
																	</div>
																</a>
															</li>
															<li>
																<a href="javascript:;" class="unread">
																	<div class="clearfix">
																		<div class="thread-image">
																			<img src="./assets/images/avatar-3.jpg" alt="">
																		</div>
																		<div class="thread-content">
																			<span class="author">Steven Thompson</span>
																			<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																			<span class="time">8 hrs</span>
																		</div>
																	</div>
																</a>
															</li>
															<li>
																<a href="javascript:;">
																	<div class="clearfix">
																		<div class="thread-image">
																			<img src="./assets/images/avatar-5.jpg" alt="">
																		</div>
																		<div class="thread-content">
																			<span class="author">Kenneth Ross</span>
																			<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																			<span class="time">14 hrs</span>
																		</div>
																	</div>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="view-all">
													<a href="pages_messages.html">
														See All
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-search">
											<a href="#">
												<i class="fa fa-search"></i> SEARCH
											</a>
											<!-- start: SEARCH POPOVER -->
											<div class="popover bottom search-box transition-all">
												<div class="arrow"></div>
												<div class="popover-content">
													<!-- start: SEARCH FORM -->
													<form class="" id="searchform" action="#">
														<div class="input-group">
															<input type="text" class="form-control" placeholder="Search">
															<span class="input-group-btn">
																<button class="btn btn-main-color btn-squared" type="button">
																	<i class="fa fa-search"></i>
																</button> </span>
														</div>
													</form>
													<!-- end: SEARCH FORM -->
												</div>
											</div>
											<!-- end: SEARCH POPOVER -->
										</li>
									</ul>
									<!-- end: TOP NAVIGATION MENU -->
								</div>
							</div>
						</div>
						<!-- end: TOOLBAR -->
						<!-- end: PAGE HEADER -->
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
									<div class="panel-heading">
										<h4 class="panel-title">Basic <span class="text-bold">table</span></h4>
										<div class="panel-tools">										
											<div class="dropdown">
											<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
												<i class="fa fa-cog"></i>
											</a>
											<ul class="dropdown-menu dropdown-light pull-right" role="menu">
												<li>
													<a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
												</li>
												<li>
													<a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
												</li>
												<li>
													<a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
												</li>
												<li>
													<a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
												</li>										
											</ul>
											</div>
											<a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
										</div>
									</div>
									<div class="panel-body">
										<p>
											For basic styling&mdash;light padding and only horizontal dividers&mdash;add the base class <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.
										</p>
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
													<td><img src="<?=base_url();?>/assets/images/<?php echo $d->gambar; ?>"></td>
													<td class="center">
														<div class="visible-md visible-lg hidden-sm hidden-xs">
															<a href="<?php echo base_url().'mobil/edit/'.$d->noRegistrasi; ?>" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit" name="update" id="update"></i></a>
															<a href="<?php echo base_url().'mobil/detail_mobil/'.$d->noRegistrasi; ?>" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Lihat Detail" data-toggle="modal" data-target="#addModal"><i class="fa fa-share"></i></a>
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
			
			