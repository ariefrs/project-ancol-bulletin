<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//loading Navbar From Database 

?>
<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="<?= site_url('site/index')?>" class="scrollto"><img src="<?php echo base_url("images/logo_white.png"); ?>" class="responsive-img"></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li class="menu-active"><a href="<?= site_url('artikel/index')?>">Home </a></li>
            <li><a href="<?= site_url('gallery/index')?>">Gallery</a></li>
            <li><a href="#">Resort</a></li>
            <li><a href="#">Rekreasi</a></li>
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">F & B</a></li>
            <li><a href="<?= site_url('property/index')?>">Property</a></li>
            <li><a href="<?= site_url('portfolio/index')?>">Portofolio</a></li>
            <li><a href="<?= site_url('video/index')?>" alt="video" title="video">Video</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->