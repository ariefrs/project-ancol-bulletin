<section id="terbaru" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Berita Terbaru</h2>
          <p></p>
        </div>
        <div class="row">
        <?php if(!empty($posts)): foreach($posts as $post): ?>
            <?php if(!empty($post['images'])) ?>
            <a href="<?php echo base_url('artikel/details/'.$post['alias']); ?>">
            <div class="col-lg-4 col-md-6">
                <div class="terbaru">
                    <h3><?php echo $post['title']; ?></h3>    
                    <img src="<?= base_url($post['images']); ?>" class="img-responsive">                    
              <div class="details">                
                <small><?php echo $post['introtext']; ?> <i><a href="<?php echo base_url('artikel/details/'.$post['alias']); ?>">baca selanjutnya</a></i></small>                
              </div>
            </div>
            </a>
          </div>
          <?php endforeach; else: ?>
            <p>Post(s) not available.</p>
            <?php endif; ?>
</section>