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
                <li> <a href="<?= base_url(); ?>home/Overview/Civil-Engineering">Civil Engineering</a> </li>
                <li> <a href="<?= base_url(); ?>home/Overview/Mechanical-Engineering">Mechanical Engineering</a> </li>
                <li> <a href="<?= base_url(); ?>home/Overview/Electrical-and-Electronics-Engineering">Electrical and Electronics Engineering</a> </li>
                <li> <a href="<?= base_url(); ?>home/Overview/Electronics-and-Communication-Engineering">Electronics and Communication Engineering</a> </li>
                <li> <a href="<?= base_url(); ?>home/Overview/Electronics-and-Instrumentation-Engineering">Electronics and InstrumentationEngineering</a> </li>
                <li> <a href="<?= base_url(); ?>home/Overview/Computer-Science-and-Engineering">Computer Science and Engineering</a> </li>
                <li> <a href="<?= base_url(); ?>home/Overview/Information-Science-and-Engineering">Information Science and Engineering</a> </li> 
           
               <li> <a href="<?= base_url(); ?>home/Overview/Computer-science-and-Business-Systems">Computer Science and Business Systems</a> </li>
                <li> <a href="<?= base_url(); ?>home/Overview/Artificial-Intelligence">Computer Science & Engineering
                    (Artificial intelligence & Machine Learning)
                  </a> </li>
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