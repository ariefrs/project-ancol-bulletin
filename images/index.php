<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if ( function_exists( 'date_default_timezone_set' ) )
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error 403 - Forbidden </title>
    <link rel="icon" href="<?php echo base_url('images/logo_64.png')?>" type="image/png">
	<link rel="stylesheet" href="<?php echo base_url('assets/jQueryUI/jquery-ui.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/jQueryUI/jquery-ui.theme.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
    <script src="<?php echo base_url('assets/jQuery/jquery-2.2.3.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/jQueryUI/jquery-ui.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</head>
<body class="container">
    <div class="col-md-12 text-center" style="bg-color:#e1e8ff;margin:10px;">
        <img class="img-responsive" alt="Page Not Found" title="Page Not Found" src="<?php echo base_url('images/logo_800.png');?>">
        <h1>Halaman Tidak Ditemukan</h1>
    </div>
</body>
</html>
