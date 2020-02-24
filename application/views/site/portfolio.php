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
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/jQuery/jquery.fancybox.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style2.css') ?>"/>
    <link href="<?= base_url('assets/animate/animate.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/lightbox/css/lightbox.min.css');?>" rel="stylesheet">
    <script src="<?= base_url('assets/jQuery/jquery-2.2.3.min.js'); ?>"></script>
    <script src="<?= base_url('assets/jQueryUI/jquery-ui.min.js');?>"></script>
    <script src="<?= base_url('assets/jQuery/jquery.fancybox.min.js');?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/jQuery/main.js'); ?>"></script>
    <script>
    jQuery(document).ready(function($){
        var modal = $('#Modal');
        var modalBody = $('#Modal .modal-body');
        $('[data-toggle="modal"]').click(preview);
        $("#btnModal").click(preview);
        $("#btnRead").click(preview);
        $("#btnUpdate").click(preview);
        $("#btnPilih").click(preview);
            function preview(e)
            {
                e.preventDefault();
                modal.on('show.bs.modal',function(){
                    modalBody.load(e.currentTarget.href);
                    $('input:visible:enabled:first', this).focus();
                    });
                $("#Modal").modal('show');
            }
		$('.datepicker').datepicker({
                    format: "dd-mm-yyyy",
                    todayBtn: true,
                    todayHighlight: true,
					autoclose: 1,
					endDate: '+0d',
                });
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover({ 
			trigger: "hover",
			container: "body", 
		});
		jQuery(function($){
			$("input").focus(function() {
			$(this).css({"background-color":"#e0f6ff"});
			});
			$("input").blur(function() {
			$(this).css({"background-color":"#fff"});
			});
			$("textarea").focus(function() {
			$(this).css({"background-color":"#e0f6ff"});
			});
			$("textarea").blur(function() {
			$(this).css({"background-color":"#fff"});
			});
		});
    });
    </script>
</head>
<body>
<div class="row">
    <?php $this->load->view('site/template/includes/toolbar');?>
</div>

    <!--==========================
      Property Section
    ============================-->
    <section id="about" style="margin-top:50px;">
      <div class="container">
        <header class="section-header">
          <h3>Portfolio</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </header>
        <div class="row about-cols">
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <a data-fancybox="gallery-portfolio" data-caption="Rich Project" href="<?= base_url('images/portfolio/1.jpg'); ?>"><img src="<?= base_url('images/portfolio/1.jpg'); ?>" alt="Rich Project" class="img-fluid"  width="100%" height="75%"></a>
                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="http://rich-project-id.com/" target="_blank">Rich Project</a></h2>
                    <p>
                    Rich project adalah event organizer maupun penyedia layanan teknologi yang dapat menangani bermacam kebutuhan partner.
                    </p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <a data-fancybox="gallery-portfolio" data-caption="Magenta Kapital Sekuritas Indonesia" href="<?= base_url('images/portfolio/2.jpg')?>"><img src="<?= base_url('images/portfolio/2.jpg'); ?>" alt="" class="img-fluid" width="100%" height="75%"></a>
                        <div class="icon"><i class="ion-stats-bars"></i></div>
                    </div>
                    <h2 class="title"><a href="http://www.magentasekuritas.com/" target="_blank">Magenta Kapital Sekuritas Indonesia</a></h2>
                    <p>
                    Magenta Kapital Sekuritas Indonesia adalah Perusahaan Penyedia Jasa Keuangan yang diakui di industri Pasar Modal Indonesia.
                    </p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <a data-fancybox="gallery-portfolio" data-caption="Nabung Tanpa Uang" href="<?= base_url('images/portfolio/3.jpg')?>"><img src="<?= base_url('images/portfolio/3.jpg'); ?>" alt="Nabung Tanpa Uang" class="img-fluid"  width="100%" height="75%"></a>
                        <div class="icon"><i class="ion-ribbon-b"></i></div>
                    </div>
                    <h2 class="title"><a href="#"><a href="http://www.nabungtanpauang.com/" target="_blank">Nabung Tanpa Uang</a></a></h2>
                    <p>
                    Nabung Tanpa Uang merupakan bagian dari program Customer Retention Adira Finance yang diperuntukan khusus bagi nasabah dan mitra ADIRA FINANCE.
                    </p>
                </div>
            </div>
        </div>
        <div class="row about-cols">
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <a data-fancybox="gallery-portfolio" data-caption="KJPP Pung's Zulkarnain Dan Rekan" href="<?= base_url('images/portfolio/4.jpg')?>"><img src="<?= base_url('images/portfolio/4.jpg'); ?>" alt="OSEANA" class="img-fluid"  width="100%" height="75%"></a>
                    <div class="icon"><i class="ion-pricetags"></i></div>
                    </div>
                    <h2 class="title"><a href="http://kjpp-pungsz.com/" target="_blank">KJPP Pung's Zulkarnain Dan Rekan</a></h2>
                    <p>
                    KJPP Pung's Zulkarnain & Rekan adalah sebuah Kantor Jasa Penilai Publik berbentuk partnership bergerak dibidang Jasa Penilaian.
                    </p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <a data-fancybox="gallery-portfolio" data-caption="Aplikasi Pemetaan Data Pembanding" href="<?= base_url('images/portfolio/5.jpg')?>"><img src="<?= base_url('images/portfolio/5.jpg'); ?>" alt="" class="img-fluid" width="100%" height="75%"></a>
                        <div class="icon"><i class="ion-ios-photos"></i></div>
                    </div>
                    <h2 class="title">Aplikasi Pemetaan Data Pembanding</h2>
                    <p>
                    Aplikasi pemetaan data pembanding  pada kantor jasa penilai.
                    </p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <a data-fancybox="gallery-portfolio" href="<?= base_url('images/portfolio/6.jpg')?>"><img src="<?= base_url('images/portfolio/6.jpg'); ?>" alt="" class="img-fluid"  width="100%" height="75%"></a>
                        <div class="icon"><i class="ion-ios-world-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="#"><a href="http://bahanaapp.com" target="_blank">Bahana Appresin    do</a></h2>
                    <p>
                    PT. Bahana Appresindo adalah perusahaan Jasa Konsultan (Consultant). 
                    </p>
                </div>
            </div>
        </div>
      </div>
    </section><!-- #about -->
<div class="row">
    <?php $this->load->view('site/template/includes/footer');?>
</div>
</body>
</html>