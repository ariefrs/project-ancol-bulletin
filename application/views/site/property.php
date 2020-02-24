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
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Ancol Property</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </header>
        <div class="row about-cols">
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <a data-fancybox="gallery-property" data-caption="Oseana" href="<?= base_url('images/properti/properti1.jpeg')?>"><img src="<?= base_url('images/properti/t1.jpg'); ?>" alt="OSEANA" class="img-fluid"></a>
                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    </div>
                    <h2 class="title">Oseana</h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <a data-fancybox="gallery-property" data-caption="Ancol Property" href="<?= base_url('images/properti/properti2.jpeg')?>"><img src="<?= base_url('images/properti/t2.jpg'); ?>" alt="" class="img-fluid"></a>
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    </div>
                    <h2 class="title">Ancol Property</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <a data-fancybox="gallery-property" href="<?= base_url('images/properti/properti3.jpeg')?>"><img src="<?= base_url('images/properti/t3.jpg'); ?>" alt="" class="img-fluid"></a>
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="#">Panorama</a></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
        <div class="row about-cols">
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <a data-fancybox="gallery-property" data-caption="Oseana" href="<?= base_url('images/properti/properti4.jpeg')?>"><img src="<?= base_url('images/properti/t4.jpg'); ?>" alt="OSEANA" class="img-fluid"></a>
                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    </div>
                    <h2 class="title">Oseana</h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <a data-fancybox="gallery-property" data-caption="Ancol Property" href="<?= base_url('images/properti/properti5.jpeg')?>"><img src="<?= base_url('images/properti/t5.jpg'); ?>" alt="" class="img-fluid"></a>
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    </div>
                    <h2 class="title">Ancol Property</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <a data-fancybox="gallery-property" href="<?= base_url('images/properti/properti6.jpeg')?>"><img src="<?= base_url('images/properti/t6.jpg'); ?>" alt="" class="img-fluid"></a>
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="#">Oseana</a></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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