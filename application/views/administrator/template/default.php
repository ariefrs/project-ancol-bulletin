<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php if(isset($title)) echo $title; ?></title>
        <link rel="icon" href="<?= base_url('images/logo_64.png')?>" type="image/x-icon">
        <link rel="stylesheet" href="<?= base_url('assets/jQueryUI/jquery-ui.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/jQueryUI/jquery-ui.theme.css')?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
        <link href="<?= base_url('assets/animate/animate.min.css');?>" rel="stylesheet">
        <link href="<?= base_url('assets/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
        <link href="<?= base_url('assets/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
        <link href="<?= base_url('assets/lightbox/css/lightbox.min.css');?>" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>" />
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
        <div class="header">
            <?php $this->load->view('administrator/template/navbar');?>
        </div>

        <div style="margin-top:75px;padding:15px;">
            <?php $this->load->view($content);?>
        </div>



        <?php $this->load->view('administrator/template/footer'); ?>


    </body>

</html>
