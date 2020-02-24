<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header id="header">
<nav class="navbar navbar-fixed-top" style="margin-bottom:10px;background-color: #f26825;">
  <div class="container-fluid" >
    <div class="navbar-header text-center">
    <a class="navbar-brand" href="<?= site_url('site/index')?>"><img src="<?php echo base_url("images/logo_200.png"); ?>"></a>
    </div>
    <a href="<?= site_url('site/index')?>" alt="top-right-banner" title="Go Pay"><img src="<?= base_url('images/content/top-banner.jpg');?>" width="50%" height="50%" style="float:right;margin:10px;"></a>
    <ul class="nav navbar-nav navbar-right  hidden-xs">
    
      <li style="margin:4px;"><button class="btn navbar-btn" style="background-color:#0ea9e2;"><a style="color:#fff;" href="<?= site_url('site/index')?>">Home </a></button></li>
      <li style="margin:4px;"><button class="btn navbar-btn" style="background-color:#0ea9e2;"><a style="color:#fff;" href="<?= site_url('gallery/index')?>">Gallery</a></button></li>
      <li style="margin:4px;"><button class="btn navbar-btn" style="background-color:#0ea9e2;"><a style="color:#fff;" href="#">Resort</a></button></li>
      <li style="margin:4px;"><button class="btn navbar-btn" style="background-color:#0ea9e2;"><a style="color:#fff;" href="#">Rekreasi</a></button></li>
      <li style="margin:4px;"><button class="btn navbar-btn" style="background-color:#0ea9e2;"><a style="color:#fff;" href="#">Merchandise</a></button></li>
      <li style="margin:4px;"><button class="btn navbar-btn" style="background-color:#0ea9e2;"><a style="color:#fff;" href="#">F & B</a></button></li>
      <li style="margin:4px;"><button class="btn navbar-btn" style="background-color:#0ea9e2;"><a style="color:#fff;" href="<?= site_url('property/index')?>">Property</a></button></li>
      <li style="margin:4px;"><button class="btn navbar-btn" style="background-color:#0ea9e2;"><a style="color:#fff;" href="<?= site_url('portfolio/index')?>">Portofolio</a></button></li>
      <li style="margin:4px;"><button class="btn navbar-btn" style="background-color:#0ea9e2;"><a style="color:#fff;" href="<?= site_url('video/index')?>" alt="video" title="video">Video</a></button></li>
    </ul>
  </div>
</nav>
</header>