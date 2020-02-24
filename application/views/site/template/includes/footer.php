  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="row">
        <div class="footer-top">
            <div class="col-lg-2 col-md-2 footer-info">
                <img src="<?= base_url('images/logo_white_200.png');?>" alt="Ancol E-Magazine Interactive">
            </div>
            <div class="col-lg-6 col-md-6" style="padding-top:30px;">
            <h3>Ancol E-Magazine Interactive</h3>
            
            </div>
            <div class="col-lg-4 col-md-4 social-links pull-right" style="padding-top:50px;">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <?php
              echo "<small class='text-center'>".date('d M y')." - </small>"; 
              echo "<small class='text-center' id='clock'>".date("H:i:s")."</small>";
            ?>
                </div>
        </div>
    </div>
    <div class="row">
      <div class="copyright">
        &copy; Copyright <strong>Ancol</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://facebook.com/ariefrs" target="_blank">Developer</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>