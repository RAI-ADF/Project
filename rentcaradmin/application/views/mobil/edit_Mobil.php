<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>
		
							
									<?php foreach($editdata as $d){?>
									<div class="panel-body">
										<form role="form" class="form-horizontal" method="post" >
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-1">
													No Registrasi
												</label>
												<div class="col-sm-9">
													<input type="text" id="form-field-1" name="noregistrasi" class="form-control" value="<?php echo $d->noRegistrasi ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Merk
												</label>
												<div class="col-sm-9">
													<input type="text" id="form-field-2" name="merk" class="form-control" value="<?php echo $d->merk ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-3">
													Type
												</label>
												<div class="col-sm-9">
													<input type="text" id="form-field-3" name="type" class="form-control" value="<?php echo $d->type ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-4">
													Warna
												</label>
												<div class="col-sm-9">
													<input type="text" id="form-field-4" name="warna" class="form-control" value="<?php echo $d->warna ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-5">
													Harga Sewa
												</label>
												<div class="col-sm-9">
													<input type="text" id="form-field-5" name="harga" class="form-control" value="<?php echo $d->hargaSewa ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-6">
													Tahun Pembuatan
												</label>
												<div class="col-sm-9">
													<input type="text" id="form-field-6" name="tahunpembuatan" class="form-control" value="<?php echo $d->tahunPembuatan ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-7">
													Bulan Pajak
												</label>
												<div class="col-sm-9">
													<input type="text" id="form-field-7" name="bulanpajak" class="form-control" value="<?php echo $d->bulanPajak ?>">
												</div>
											</div>
										
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-8">
													Kategori
												</label>
													<div class="col-sm-7">
															<select class="form-control" id="kategori" name="kategori" value="<?php echo $d->kategori ?>">
																<option value="">&nbsp;</option>
																<option value="sedan" <?php echo set_select('kategori', 'sedan', ( $d->kategori == "sedan" ? TRUE : FALSE )); ?>>Sedan</option>
																<option value="minibus" <?php echo set_select('kategori', 'minibus', ( $d->kategori == "minibus" ? TRUE : FALSE )); ?>>Mini Bus</option>
																<option value="jeep" <?php echo set_select('kategori', 'jeep',( $d->kategori == "jeep" ? TRUE : FALSE )); ?>>Jeep</option>
															</select>
														</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12">
													<label>
														Image Upload
													</label>
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="fileupload-new thumbnail"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
														</div>
														<div class="fileupload-preview fileupload-exists thumbnail"></div>
														<div>
															<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
																<input type="file">
															</span>
															<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
																<i class="fa fa-times"></i> Remove
															</a>
														</div>
													</div>
												</div>
											</div>	
											<div>
												<!--<a href="<?=base_url()?>/mobil" class="btn btn-xs btn-green btn-primary btn-lg tooltips box-header" data-placement="top" data-original-title="Kembali"><i class="fa fa-reply"></i></a>-->
												<input type="submit" name="submit" id="submit"value="EDIT">
											</div>
										</form>
									</div>
									<?php } ?>
								<!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>
  </html>