<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-lg-12 col-md-12 xs-hidden text-center center">
    <div class="owlcarousel">
            <?php 
                for ($i = 1; $i<=10 ;$i++)
                { ?>
                <img class="owl-lazy" data-src="<?php echo base_url('images/slider/'."slide".$i.".jpg")?>" alt="">
                <?php } ?>
    </div><!-- End of myCarousel -->
</div>