<!-- Start main-content -->
<div class="main-content">
  <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="<?php echo base_url(); ?>assets/images/slider3.jpg">
    <div class="container pt-120 pb-120">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title text-white"><?= $parentMenu; ?> </h2>
            <ol class="breadcrumb text-center text-black mt-10">
              <li><a href="#">Home</a></li>
              <!-- <li><a href="#">Pages</a></li> -->
              <li class="active text-gray-silver">Placement</li>
              <li class="active text-gray-silver"><?= $parentMenu; ?> </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container mt-30 mb-30 pt-30 pb-30">
      <div class="row">
        <div class="col-md-8 pull-right flip sm-pull-none">
          <div class="row list-dashed">
            <div class="col-md-12 pt-10 pb-10">
              <div class="widget no-border m-0" id="home">
                <b>Latest News  :</b>
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                  <?php foreach ($Details as $Details1) {
                    if ($Details1->new_label == 1) { ?> <b style="color:#c02140;"><?= $Details1->news_title; ?>........</b>
                  <?php }
                  } ?>
                </marquee>

              </div>
            </div>
            <div class="col-md-12">
              <!-- Slider Revolution Start -->
              <div class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0">
                  <ul>
                    <?php if ($sliders) {
                      foreach ($sliders as $slid) {   ?>


                        <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/departments/<?= $short_name; ?>/sliders/<?= $slid->file_name; ?>" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                          <!-- MAIN IMAGE -->
                          <img src="<?php echo base_url(); ?>assets/departments/<?= $short_name; ?>/sliders/<?= $slid->file_name; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                          <!-- LAYERS -->

                        </li>

                      <?php }
                    } else { ?>
                      <!-- SLIDE 1 -->
                      <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/slider1.png" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo base_url(); ?>assets/images/slider1.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                        <!-- LAYERS -->

                      </li>
                    <?php } ?>
                  </ul>
                </div>
                <!-- end .rev_slider -->
              </div>
              <!-- end .rev_slider_wrapper -->
              <script>
                $(document).ready(function(e) {
                  $(".rev_slider").revolution({
                    sliderType: "standard",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 5000,
                    navigation: {
                      keyboardNavigation: "off",
                      keyboard_direction: "horizontal",
                      mouseScrollNavigation: "off",
                      onHoverStop: "off",
                      touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                      },
                      arrows: {
                        style: "zeus",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                        left: {
                          h_align: "left",
                          v_align: "center",
                          h_offset: 30,
                          v_offset: 0
                        },
                        right: {
                          h_align: "right",
                          v_align: "center",
                          h_offset: 30,
                          v_offset: 0
                        }
                      },
                      bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        style: "metis",
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 5,
                        tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                      }
                    },
                    responsiveLevels: [1240, 1024, 778],
                    visibilityLevels: [1240, 1024, 778],
                    gridwidth: [1170, 1024, 778, 480],
                    gridheight: [650, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                      origo: "slidercenter",
                      speed: 1000,
                      levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                      type: "scroll"
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "on",
                    stopAfterLoops: 0,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                      simplifyAll: "off",
                      nextSlideOnWindowFocus: "off",
                      disableFocusListener: false,
                    }
                  });
                });
              </script>
              <!-- Slider Revolution Ends -->
              <h4 id="about" class="text-blue">About <?= $parentMenu; ?></h4>
              <div class="text-justify"><?php
                                        $abt = str_replace("oembed", "iframe", $departmentsDetails->about);
                                        echo str_replace("url=", "width='100%' height='400' src=", $abt); ?></div>



             
                                   
                               

              <h3 id="documents" class="text-theme-colored text-uppercase mt-40">Placement Policy Documents</h3>

              <?php
              if ($documents != null) {
                $table_setup = array('table_open' => '<table class="table table-hover js-dataTable-full" id="dataTable" width="100%" cellspacing="0">');
                $this->table->set_template($table_setup);
                $this->table->set_heading(
                  array('data' => 'S.No', 'width' => '5%'),
                  array('data' => 'Document Details', 'width' => '80%'),
                  array('data' => 'Action', 'width' => '15%')
                );
                $i = 1;
                foreach ($documents as $Details1) {
                  if ($Details1->file_type == "F") {
                    $fileName = $Details1->details;
                    $files = $Details1->file_names;
                    $files1 = pathinfo($files, PATHINFO_FILENAME);
                    $name = str_replace('_', ' ', $fileName);
                    $btn = anchor('assets/departments/' . $short_name . '/placement/' . $files, '<i class="fa fa-fw fa-download"></i> Download', 'class="btn btn-danger btn-xs" target="_blank"');
                  }

                  if ($Details1->file_type == "L") {
                    $name = anchor($Details1->url, $Details1->file_names, 'target="_blank"');
                    $btn = anchor($Details1->url, '<i class="fa fa-fw fa-eye"></i> View', 'class="btn btn-danger btn-xs" target="_blank"');
                  }


                  //   $fileName = null;
                  //   $files = $Details1->file_names;
                  //   if($files){
                  //       $fileNames = unserialize($files);
                  //       $fileName = $fileNames[0];					 
                  //       $fileName1 = pathinfo($fileName, PATHINFO_FILENAME);
                  //       $name = str_replace('_', ' ', $fileName1);
                  //   }

                  $this->table->add_row(
                    $i++,
                    $name,
                    $btn
                  );
                }
                echo $this->table->generate();
              }
              ?>



            </div>
          </div>

        </div>
        <div class="col-md-4">
        <?php
                        $sideBar = sideBar($mainMenu, $parentMenu, $activeMenu);
                        print_r($sideBar);
                    ?>
        </div>
      </div>
    </div>
  </section>

</div>
<!-- end main-content -->