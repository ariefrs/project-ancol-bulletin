<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>		
<footer class="panel-footer">
<div class="row">
    <div class="col-md-4 pull-left">
        <strong><a href="https://twitter.com/arief_sumaila">Copyright &copy; 2019-2020</a>.</strong><br/>All rights
        reserved.</strong>
        <br>
        <?php
            echo "<small class='text-center'>".date('d M y')." - </small>"; 
            echo "<small class='text-center' id='clock'>".date("H:i:s")."</small>";
        ?>
    </div>    
    <div class="col-md-4">
        Our Social Media
        <a href="https://www.instagram.com/ancoltamanimpian/"><i class="fa fa-instagram fa-2x"></i></a>
        <a href="https://web.facebook.com/TamanImpianAncol"><i class="fa fa-facebook fa-2x"></i></a>
        <a href="https://www.youtube.com/user/Ancoltamanimpian"><i class="fa fa-youtube fa-2x"></i></a>
        <a href="https://twitter.com/ancoltmnimpian"><i class="fa fa-twitter fa-2x"></i></a>
    </div>
    <div class="col-md-4 text-right">
        <a href="#" class="btn btn-primary" title="Top" alt="Top"><i class="fa fa-angle-up fa-2x"></i></a>
    </div>
</div><!-- End of Row -->

</footer>