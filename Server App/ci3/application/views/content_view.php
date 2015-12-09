<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title><?php echo (isset($title)) ? $title : "CI Framework" ?> </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/stylecontent.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/touchTouch.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/tooltipster.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/stylecontent.css" />
         <script src="<?php echo base_url();?>/js/jquery.js"></script>
     <script src="<?php echo base_url();?>/js/jquery-migrate-1.2.1.js"></script>
     <script src="<?php echo base_url();?>/js/script.js"></script> 
     <script src="<?php echo base_url();?>/js/superfish.js"></script>
     <script src="<?php echo base_url();?>/js/jquery.ui.totop.js"></script>
     <script src="<?php echo base_url();?>/js/jquery.equalheights.js"></script>
     <script src="<?php echo base_url();?>/js/jquery.mobilemenu.js"></script>
     <script src="<?php echo base_url();?>/js/jquery.easing.1.3.js"></script>
      <script src="<?php echo base_url();?>/js/jquery.tooltipster.js"></script>
     <script src="<?php echo base_url();?>/js/touchTouch.jquery.js"></script>
     <script>
       $(document).ready(function(){
        $('.gallery a.gal').touchTouch();
        $().UItoTop({ easingType: 'easeOutQuart' });
        $('.tooltip').tooltipster();
        });
     </script>
</head>
<body>
	<div id="wrapper">