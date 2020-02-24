<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ( function_exists( 'date_default_timezone_set' ) )
date_default_timezone_set('Asia/Jakarta');
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
	<link rel="icon" href="<?php echo base_url('images/logo_64.png')?>" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo base_url('assets/jQueryUI/jquery-ui.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/jQueryUI/jquery-ui.theme.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"/>
    <link href="<?= base_url('assets/animate/animate.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/lightbox/css/lightbox.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/jQuery/jquery.fancybox.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/venobox/venobox.css')?>">
    <script src="<?php echo base_url('assets/jQuery/jquery-2.2.3.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/jQueryUI/jquery-ui.min.js');?>"></script>
    <script src="<?php echo base_url('assets/jQuery/jquery.fancybox.min.js');?>"></script>
    <script src="<?= base_url('assets/jQuery/main.js'); ?>"></script>
    <script src="<?= base_url('assets/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/easing/easing.min.js'); ?>"></script>
    <script src="<?= base_url('assets/isotope/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('assets/wow/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/venobox/venobox.min.js'); ?>"></script>
    <script src="<?= base_url('assets/superfish/superfish.min.js'); ?>"></script>
    <script>
        var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //hitung selisih
        var Diff = serverTime.getTime() - clientTime.getTime();    
        //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
        function displayServerTime(){
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //buat object date dengan menghitung selisih waktu client dan server
        var time = new Date(clientTime.getTime() + Diff);
        //ambil nilai jam
        var sh = time.getHours().toString();
        //ambil nilai menit
        var sm = time.getMinutes().toString();
        //ambil nilai detik
        var ss = time.getSeconds().toString();
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
        }
    </script>
</head>

<body onload="setInterval('displayServerTime()', 1000);" style="background-image: linear-gradient(120deg, #f26825, #fef8f6);">
<div class="wrapper wow fadeIn">
	<!-- toolbar-->
  <div class="row" style="margin-bottom:10px;">
    <div class="col-lg-12 col-md-12">
        <?php $this->load->view('site/template/includes/navbar');?>
    </div><!-- End of Column 12 -->
  </div><!-- End of Row -->	  		
  <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <div id="hotels" class="row" >
            <?php 
            
                for ($i = 1; $i<=8 ;$i++)
                { ?>
                <div class="row hotel">
                    <div class="col-md-6 col-sm-12 text-center hotel-img" style="margin:10px;padding:10px;">
                        <a href="<?= base_url('images/gallery/'.$i.".jpg")?>" data-fancybox="gallery" data-caption="<?= 'Gallery '.$i ?>">
                            <img class="img-fluid responsive-img" src="<?= base_url('images/gallery/'.$i.".jpg")?>" alt="<?= 'gallery '.$i; ?>">
                        </a>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <p class="" style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit provident sequi ipsum dolore quam laborum odit consequatur beatae repellendus eos. Necessitatibus, corrupti dignissimos aut perspiciatis eius reprehenderit recusandae iure laudantium tenetur consequatur minima consectetur culpa molestias debitis perferendis corporis, harum nihil est pariatur! Sed itaque ut laudantium eos repellendus ratione, numquam hic doloribus temporibus fuga nobis veritatis sapiente possimus facilis, laboriosam perferendis harum? Suscipit fugiat dolore temporibus, iusto commodi mollitia ullam amet laborum culpa iure voluptatem et voluptatibus neque alias animi pariatur dignissimos sapiente maiores quas nulla hic velit sequi tenetur! Mollitia amet fugiat tempore quidem nostrum odit quam in maxime nihil, suscipit hic, sunt unde? Non quae omnis odit iste aliquam, nam nisi error inventore nulla, nostrum ipsum? Quia et eveniet laborum repudiandae sequi doloribus possimus, aliquam voluptas, aut, perferendis quis explicabo reiciendis hic itaque! Assumenda vero voluptate cum ad iste quae consequatur esse ipsa dolor cupiditate repudiandae optio modi aut est voluptatem aspernatur quasi doloribus recusandae possimus et ducimus ab, dolorum dignissimos amet! Libero ullam et quas veritatis itaque tempore placeat! Incidunt ratione sit nobis maiores, modi architecto tenetur illum, exercitationem molestias quas facilis explicabo ipsa repellat doloremque officia fuga enim necessitatibus. Aut assumenda facere vel porro doloribus.</p>
                    </div>
                </div>
                <?php } ?>
        </div>
    </div>
    <div class="row">

    </div><!-- End of row -->
<!-- /.content -->
<!-- Start Modal -->
<div class="modal fade col-md-12 col-xs-6" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog modal-lg"> 
		        <div class="modal-content"> 
		            <div class="modal-header"> 
		                <button type="button" class="close btn btn-danger" data-dismiss="modal">
			                <span> Close</span>
			                <span> &times;</span>
		                </button> 
	                </div>
		            <div class="modal-body">
	                  	<div class="row">
	                  		<div class="col-md-12 col-xs-6 text-center"><i class="text-warning fa fa-spinner fa-pulse fa-5x fa-fw"  aria-hidden="true"></i></div>                  	
		                </div><!-- end of row -->
                  	
		            </div>
		        </div>
		    </div> <!-- Dialog -->
    </div> <!-- End of modal-->
</div> <!-- /.content wrapper -->
    <?php $this->load->view('site/template/includes/footer'); ?>                    
</div><!-- ./wrapper -->
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
</body>
</html>