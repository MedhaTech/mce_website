<div class="main-content">
      <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="<?php echo base_url(); ?>assets/images/slider3.jpg">
        <div class="container pt-120 pb-120">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="title text-white"><?= $activeMenu; ?></h2>
                <ol class="breadcrumb text-center text-black mt-10">
                  <li><a href="#">Home</a></li>
                  <!-- <li><a href="#">Pages</a></li> -->
                  <li class="active text-gray-silver">Admissions</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
          <div class="row">
            <div class="col-md-9 blog-pull-right">
              <h3 class="text-theme-colored text-uppercase mt-0"><?= $activeMenu; ?></h3>
             
              

             <ul class="list theme-colored angle-double-right">
                    <li> <a href="<?= base_url(); ?>home/Computer-Science-and-Engineering">M.Tech. in Computer Science & Engineering </a> </li>
                    <li> <a href="<?= base_url(); ?>home/Electronics-and-Communication-Engineering">M.Tech. in VLSI Design & Embedded Systems </a> </li>
                    <li> <a href="<?= base_url(); ?>home/Electrical-and-Electronics-Engineering">M.Tech. in Power Electronics </a> </li>
                    <li> <a href="<?= base_url(); ?>home/Civil-Engineering">M.Tech. in Structural Engineering </a> </li> 
             <li> <a href="<?= base_url(); ?>home/Mechanical-Engineering">M.Tech. in Machine Design </a> </li>
                </ul> 
            
              <h6 class="tx-red">Attractive scholarships are also provided.</h6>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="sidebar sidebar-left mt-sm-30">
                <?php
                $sideBar = sideBar($mainMenu, $parentMenu, $activeMenu);
                print_r($sideBar);

                ?>
              </div>
            </div>
          </div>
        </div>
      </section>