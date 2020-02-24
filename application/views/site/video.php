<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="CACHE-CONTROL" content="NO-CACHE,NO-STORE,must-revalidate">
	<meta http-equiv="PRAGMA" content="NO-CACHE">
	<meta http-equiv="expires" content="0">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<?php header("Cache-Control: no-store,no-cache,must-revalidate");?>
	<title><?php echo $title; ?></title>
	<link rel="icon" href="<?= base_url('images/logo_64.png')?>" type="image/x-icon">
	<link rel="stylesheet" href="<?= base_url('assets/jQueryUI/jquery-ui.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/jQueryUI/jquery-ui.theme.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style2.css') ?>"/>
    <link href="<?= base_url('assets/animate/animate.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/lightbox/css/lightbox.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/jQuery/jquery.fancybox.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/venobox/venobox.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/dataTables.bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/select2/select2.css'); ?>">
    <script src="<?= base_url('assets/jQuery/jquery-2.2.3.min.js'); ?>"></script>
    <script src="<?= base_url('assets/jQueryUI/jquery-ui.min.js');?>"></script>
    <script src="<?= base_url('assets/jQuery/jquery.fancybox.min.js');?>"></script>
    <script src="<?= base_url('assets/jQuery/main.js'); ?>"></script>
    <script src="<?= base_url('assets/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?= base_url('assets/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/easing/easing.min.js'); ?>"></script>
    <script src="<?= base_url('assets/isotope/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('assets/wow/wow.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/jQuery/turn.min.js'); ?>"></script>
    <script src="<?= base_url('assets/venobox/venobox.min.js'); ?>"></script>
    <script src="<?= base_url('assets/superfish/superfish.min.js'); ?>"></script>
    <script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
    <script src="<?= base_url('assets/select2/select2.min.js'); ?>"></script>
</head>
<body>
<div class="row" style="margin-bottom:20px;">
    <?php $this->load->view('site/template/includes/toolbar'); ?>
</div>
<div class="row" style="margin-top:150px;">
    <div class="col-md-3">
    <?php $this->load->view('site/template/includes/left'); ?>
    </div>
    <div class="col-md-9" style="text-center">
        <!-- 21:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-21by9">
        <iframe width="560" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/o5DX-aX_cdI" allowfullscreen></iframe>
        </div>
        
        <!-- 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/NUf2a4K4wnE" allowfullscreen></iframe>
        </div>

        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <iframe width="560" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/hWyQv04KnJE" allowfullscreen></iframe>
        </div>

        <!-- 1:1 aspect ratio -->
        <div class="embed-responsive embed-responsive-1by1">
        <iframe width="560" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/GS08aLqne-U" allowfullscreen></iframe>
        </div>
    
    </div>
</div>
<div class="row">
    <?php $this->load->view('site/template/includes/footer'); ?>
</div>
</body>