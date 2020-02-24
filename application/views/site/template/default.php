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
	<link rel="icon" href="<?= base_url('images/logo_64.png')?>" type="image/x-icon">
	<link rel="stylesheet" href="<?= base_url('assets/jQueryUI/jquery-ui.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/jQueryUI/jquery-ui.theme.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"/>
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
    <!--<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>-->
    <script src="<?= base_url('assets/select2/select2.min.js'); ?>"></script>
    
    <!------------------------------------------------------------------------------------------- 
    Code Mirror Style And Plugin
    -------------------------------------------------------------------------------------------->
    
    <link rel="stylesheet" href="<?= base_url('assets/codemirror/lib/codemirror.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/codemirror/addon/dialog/dialog.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/codemirror/addon/hint/show-hint.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/codemirror/addon/lint/lint.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/codemirror/addon/search/matchesonscrollbar.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/codemirror/theme/bespin.css'); ?>">
    <script src="<?= base_url('assets/codemirror/lib/codemirror.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/dialog/dialog.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/edit/closebrackets.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/edit/closetag.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/edit/matchbrackets.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/edit/matchtags.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/hint/css-hint.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/hint/html-hint.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/hint/javascript-hint.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/hint/show-hint.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/hint/xml-hint.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/lint/css-lint.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/lint/html-lint.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/lint/javascript-lint.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/lint/json-lint.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/lint/lint.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/search/jump-to-line.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/search/match-highlighter.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/search/search.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/addon/search/searchcursor.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/mode/css/css.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/mode/xml/xml.js'); ?>"></script>
    <script src="<?= base_url('assets/codemirror/mode/htmlmixed/htmlmixed.js'); ?>"></script>
    
    <!------------------------------------------------------------------------------------------- 
    Summernote Editor
    -------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="<?= base_url('assets/summernote/summernote.css'); ?>">
    <script src="<?= base_url('assets/summernote/summernote.js'); ?>"></script>
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

<body onload="setInterval('displayServerTime()', 1000);">
<div class="wrapper wow fadeIn">
	<!-- toolbar-->
  <div class="row">
    <div class="col-lg-12 col-md-12">
        <?php $this->load->view('site/template/includes/navbar');?>
    </div><!-- End of Column 12 -->
  </div><!-- End of Row -->	  		
  <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12" style="margin-top:180px;text-align:justify;">
                <?php $this->load->view($content); ?>
            </div><!-- End of Column 12 -->
    </div><!-- End of row -->
</div>
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