<style>
  .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    /* Semi-transparent background */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1100;
    /* Ensure it sits on top of other content */
  }

  .overlay1 {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    /* Semi-transparent background */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1200;
    /* Ensure it sits on top of other content */
  }

  .overlay2 {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    /* Semi-transparent background */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1300;
    /* Ensure it sits on top of other content */
  }

  .image-container {
    position: relative;
    max-width: 100%;
    max-height: 100%;
  }

  .image-container img {
    width: 90%;
    height: auto;
    max-height: 100vh;
    object-fit: cover;
  }

  .close-btn {
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(255, 255, 255, 0.8);
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    font-size: 24px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
  }


  .close-bt{
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(255, 255, 255, 0.8);
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    font-size: 24px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .close-btn:hover {
    background: rgba(255, 255, 255, 1);
  }

  .close-bt:hover {
    background: rgba(255, 255, 255, 1);
  }
</style>
<!-- Start main-content -->
<div class="main-content">
  <!-- Section: home -->
  <section id="home">

    <!-- Slider Revolution Start -->
    <div class="rev_slider_wrapper">
      <div class="rev_slider" data-version="5.0">
        <ul>

        <!---side 1 -->
        <li data-index="rs-13" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/slider/chathur.png" data-rotate="0" data-saveperformance="off" data-title="Slide 13" data-description="">
            
            <img src="<?php echo base_url(); ?>assets/images/slider/chathur.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>

          </li>

          <li data-index="rs-12" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/slider/SPOCC.png" data-rotate="0" data-saveperformance="off" data-title="Slide 12" data-description="">
            
            <img src="<?php echo base_url(); ?>assets/images/slider/SPOCC.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>

          </li>


        <!-- <li data-index="rs-11" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/iicccd.png" data-rotate="0" data-saveperformance="off" data-title="Slide 11" data-description="">
        
            <img src="<?php echo base_url(); ?>assets/images/theme.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
            

          </li> -->


          <li data-index="rs-10" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/slider/ORIENTATION_BANNER.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 10" data-description="">
            
            <img src="<?php echo base_url(); ?>assets/images/slider/ORIENTATION_BANNER.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>

          </li>

          <!-- <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/slider/newsl2.png" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
            
            <img src="<?php echo base_url(); ?>assets/images/slider/newsl2.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>

          </li> -->
          <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/slider/graduation_day.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
            <!-- MAIN IMAGE -->
            <img src="<?php echo base_url(); ?>assets/images/slider/graduation_day.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
            <!-- LAYERS -->

          </li>


          <!-- <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/synergy.png" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
            
            <img src="<?php echo base_url(); ?>assets/images/synergy.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
            

          </li> -->

          <!-- <li data-index="rs-4" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/CareerAA.png" data-rotate="0" data-saveperformance="off" data-title="Slide 4" data-description="">
            
            <img src="<?php echo base_url(); ?>assets/images/CareerA4.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
           

          </li> -->

          

          <!-- SLIDE 1 -->
          <li data-index="rs-5" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/NAAC_NBA_SLIDER1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 5" data-description="">
            <!-- MAIN IMAGE -->
            <img src="<?php echo base_url(); ?>assets/images/NAAC_NBA_SLIDER1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
            <!-- LAYERS -->

          </li>

          <!-- SLIDE 1 -->
          <li data-index="rs-6" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/slider_new.png" data-rotate="0" data-saveperformance="off" data-title="Slide 6" data-description="">
            <!-- MAIN IMAGE -->
            <img src="<?php echo base_url(); ?>assets/images/slider_new.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
            <!-- LAYERS -->

          </li>

          <!-- SLIDE 1 -->
          <!-- <li data-index="rs-7" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/slider11.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 7" data-description="">
           
            <img src="<?php echo base_url(); ?>assets/images/slider11.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
            

          </li> -->

          <!-- SLIDE 3 -->
          <li data-index="rs-8" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/slider3.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 8" data-description="">
            <!-- MAIN IMAGE -->
            <img src="<?php echo base_url(); ?>assets/images/slider3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
            <!-- LAYERS -->

          </li>


          <!-- <li data-index="rs-8" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/bannermce.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 8" data-description="">
            
            <img src="<?php echo base_url(); ?>assets/images/bannermce.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
           

          </li> -->

          <li data-index="rs-9" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>assets/images/westernsydney_slider.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 9" data-description="">
            <!-- MAIN IMAGE -->
            <img src="<?php echo base_url(); ?>assets/images/westernsydney_slider.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
            <!-- LAYERS -->

          </li>
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
          // responsiveLevels: [1240, 1024, 778],
          // visibilityLevels: [1240, 1024, 778],
          // gridwidth: [1170, 1024, 778, 480],
          // gridheight: [650, 768, 960, 720],
          lazyType: "none",
          // parallax: {
          //   origo: "slidercenter",
          //   speed: 1000,
          //   levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
          //   type: "scroll"
          // },
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

  </section>

  <section>
    <div class="container-fluid p-0 p-sm-15">
      <div class="section-content">
        <div class="row equal-height-inner home-boxes">
          <div class="col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
            <div class="sm-height-auto bg-theme-colored">
              <div class="p-30">
                <h3 class="text-uppercase text-white mt-0">ME-RIISE Foundation</h3>
                <p class="text-white">ME-RIISE was formed by MCE in the year 2018 supported by Management, Teaching staff and Students. </p>
                <!-- <a href="<?= base_url(); ?>home/MERIIISE" class="btn btn-border btn-circled btn-transparent btn-xs mt-5">Join us Now</a> -->
                <a href="http://www.meriise.org/" class="btn btn-border btn-circled btn-transparent btn-xs mt-5" target="_blank">Join us Now</a>
              </div>
              <i class="fa fa-graduation-cap bg-icon"></i>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
            <div class="sm-height-auto bg-theme-color-2">
              <div class="p-30">
                <h3 class="text-uppercase text-white mt-0">Awards, Medals, Patents & RECOGNITION</h3>
                <p class="text-white">Technical events guide engineering students, computer engineers, researchers to dream bigger and achieve them.</p>
                <a href="<?= base_url(); ?>home/award-medals-patents" class="btn btn-border btn-circled btn-transparent btn-xs mt-5">Read More</a>
              </div>
              <i class="fa fa-calendar-o bg-icon"></i>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 pl-0 pr-0 pl-sm-15 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
            <div class="sm-height-auto bg-theme-color-3">
              <div class="p-30">
                <h3 class="text-uppercase text-white mt-0">Placements</h3>
                <p class="text-white">The department of Training and Placement, established during the early nineties, has a full-fledged office in the campus.</p>
                <a href="<?= base_url(); ?>home/Placement-Records" class="btn btn-border btn-circled btn-transparent btn-xs mt-5">Check
                  Now</a>
              </div>
              <i class="fa fa-black-tie bg-icon"></i>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
            <div class="sm-height-auto bg-theme-color-4">
              <div class="p-30">
                <h3 class="text-uppercase text-white  mt-0 mb-5">Student Clubs</h3>
                <p class="text-white">Club or a society helps you to gain knowledge, skills and experience in leadership, communication, problem-solving.</p>
                <a href="<?= base_url(); ?>home/Clubs" class="btn btn-border btn-circled btn-transparent btn-xs mt-5">Contact
                  Now</a>
              </div>
              <i class="flaticon-charity-home-insurance bg-icon"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: About -->
  <section id="about">
    <div class="container mb-0 pt-0 mt-20">
      <div class="section-content">
        <div class="row mt-10">
          <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
          <h4 class="text-theme-colored"><a href="https://campus.mcehassan.ac.in/student" class="text-theme-colored text-capitalize" target="blank"><img src="<?php echo base_url(); ?>assets/images/blinking_new.gif"></img> Student Login URL for Online Fees Payment</a> </h4>
          </marquee>
          <!-- <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
          <h4 class="text-theme-colored"><a href="https://youtube.com/live/cpaHCtf9bGM?feature=share" class="text-theme-colored text-capitalize" target="blank"><img src="<?php echo base_url(); ?>assets/images/blinking_new.gif"></img>YouTube Live Streaming link of 14th Graduation Day -2024</a> || <a href="https://admissions.mcehassan.ac.in/" class="text-theme-colored text-capitalize" target="blank"><img src="<?php echo base_url(); ?>assets/images/blinking_new.gif"></img> Click here for B.E Admissions 2024-25 Enquiry</a></h4>
          </marquee> -->
          <div class="col-xs-12 col-sm-6 col-md-6 mb-sm-20 p-20 pt-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <h3 class="text-uppercase line-bottom mt-0">Welcome To <span class="text-theme-colored">
                MCE</span></h3>
            <p class="lead text-justify"><strong> Malnad College of Engineering </strong> established in the year
              1960, during the
              second 5 year
              plan, as a joint venture of Government of India, Government of Karnataka and the Malnad Technical
              Education Society, Hassan. </p>
            <p class="mb-15 text-justify">The college is one of the few Engineering Colleges in the country
              recognized for
              conducting the Technical Education Quality Improvement Programme (TEQIP) sponsored by the World Bank.
              The Training and Placement centre in the college trains and assists the students in securing
              employment in reputed companies like Tata Consultancy, Infosys, Wipro, L&T, BEL, Fistchner, Builders’
              Association of India etc., through campus recruitment programme.</p>

            <a class="btn btn-colored btn-theme-colored btn-lg text-uppercase font-13 mt-10" href="#">Know More</a>
            <br>
            <!-- <div class="col-xs-12 col-sm-12 col-md-12 pt-10"> -->
              <!-- <iframe width="100%" height="300" src="https://www.youtube.com/embed/rV1EZaFJlCk?si=0XA21lM9_OmYZVxe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
              <!-- <iframe width="100%" height="300" src="https://www.youtube.com/embed/TQUN0wAsSOc?si=pAhtQ-MCHLWTluZJ&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen autoplay="0"></iframe>
            </div> -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">


            <ul id="researchTab" class="nav nav-tabs boot-tabs">
              <li class="active"><a href="#Announcements" class="tabBorderDesign" data-toggle="tab">Latest News & Announcements</a></li>
              <li class=""><a href="#Events" class="tabBorderDesign" data-toggle="tab">Upcoming Events</a></li>

            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="Announcements">
                <?php $i = 0;
                foreach ($latestNews as $latestNews1) {
                  if ($latestNews1->display_in == 1) {

                    $category = $newsDcisplay[$latestNews1->display_in];
                    if ($i < 4) {
                ?>

                      <article class="post media-post clearfix pb-0 mb-10">
                        <div class="post-right">
                          <h5 class="mt-0 mb-5"><?php echo anchor('home/news/' . $latestNews1->news_slug, $latestNews1->news_title, 'class="title"'); ?> <?php if ($latestNews1->new_label == 1) { ?><img src="<?php echo base_url(); ?>assets/images/blinking_new.gif"></img> <?php  } ?></h5>

                          <ul class="list-inline font-12 mb-5">
                            <li class="pr-0"><i class="fa fa-calendar mr-5"></i> <?php echo date('d M Y', strtotime($latestNews1->news_date)); ?> |</li>
                            <li class="pl-5"><i class="fa fa-map-marker mr-5"></i><?= $category; ?></li>
                          </ul>
                          <p class="mb-0 font-13"><?php substr($latestNews1->news_details, 0, 15); ?></p>
                          <!--<a class="" href="<?php base_url(); ?>home/news/<?= $latestNews1->news_slug; ?>">Read More →</a>-->
                          <?php echo anchor('home/news/' . $latestNews1->news_slug, 'Read More →', 'class="text-theme-colored font-13"'); ?>

                        </div>
                      </article>
                <?php }
                    $i++;
                  }
                } ?>
              </div>
              <div class="tab-pane fade" id="Events">

                <?php $i = 0;
                foreach ($latestNews as $latestNews1) {
                  if ($latestNews1->display_in == 4) {
                    if ($i < 4) {
                      $category = $newsDcisplay[$latestNews1->display_in];

                ?>

                      <article class="post media-post clearfix pb-0 mb-10">
                        <div class="post-right">
                          <h5 class="mt-0 mb-5"><?php echo anchor('home/news/' . $latestNews1->news_slug, $latestNews1->news_title, 'class="title"'); ?><?php if ($latestNews1->new_label == 1) { ?><img src="<?php echo base_url(); ?>assets/images/blinking_new.gif"></img> <?php  } ?></h5>
                          <ul class="list-inline font-12 mb-5">
                            <li class="pr-0"><i class="fa fa-calendar mr-5"></i> <?php echo date('d M Y', strtotime($latestNews1->news_date)); ?> |</li>
                            <li class="pl-5"><i class="fa fa-map-marker mr-5"></i><?= $category; ?></li>
                          </ul>
                          <p class="mb-0 font-13"><?php substr($latestNews1->news_details, 0, 15); ?></p>
                          <!--<a class="" href="<?php base_url(); ?>home/news/<?= $latestNews1->news_slug; ?>">Read More →</a>-->
                          <?php echo anchor('home/news/' . $latestNews1->news_slug, 'Read More →', 'class="text-theme-colored font-13"'); ?>
                        </div>
                      </article>
                <?php }
                    $i++;
                  }
                } ?>
              </div>


            </div>
            

          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="col-xs-12 col-sm-6 col-md-6 pt-10">
              <!-- <iframe width="100%" height="300" src="https://www.youtube.com/embed/rV1EZaFJlCk?si=0XA21lM9_OmYZVxe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
              <iframe width="100%" height="300" src="https://www.youtube.com/embed/TQUN0wAsSOc?si=pAhtQ-MCHLWTluZJ&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen autoplay="0"></iframe>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 pt-10">
              <!-- <iframe width="100%" height="300" src="https://www.youtube.com/embed/rV1EZaFJlCk?si=0XA21lM9_OmYZVxe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
              <iframe width="100%" height="300" src="https://www.youtube.com/embed/EKtptv4nElI?si=ZF5l8w6fbkShWrDM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen autoplay="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Features  -->
  <section class="bg-silver-light">
    <div class="container pb-40">
      <div class="section-title text-center mt-0">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="mt-0 line-height-1">Why<span class="text-theme-colored"> MCE ?</span></h2>
            <!-- <p>Malnad College of Engineering <br>Hassan</p> -->
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-box bg-white left media border-3px bg-hover-theme-colored mb-30 p-30 pb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-person-inside-a-heart text-theme-color-2"></i></a>
              <div class="media-body">
                <h4 class="media-heading heading text-uppercase">Dedicated Qualified Faculties - <a href="https://mcehassan.irins.org/" class="text-theme-color-2"> Faculty Profile Irins </a><br>&nbsp;</h4>
                <!--<p>A group of specialists, usually engaged in instruction or research.</p>-->
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-box bg-white left media border-3px bg-hover-theme-colored mb-30 p-30 pb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-shaking-hands-inside-a-heart text-theme-color-2"></i></a>
              <div class="media-body">
                <h4 class="media-heading heading text-uppercase"><a href="https://www.mcehassan.ac.in/home/AICTE-IDEA-LAB" class="text-theme-color-2">Skill Development Activities</a> <br><br> &nbsp;</h4>
                <!--<p>Skill Development efforts across the country, removal of disconnect.</p>-->
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-box bg-white left media border-3px bg-hover-theme-colored mb-30 p-30 pb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-hand-holding-a-gift text-theme-color-2"></i></a>
              <div class="media-body">
                <h4 class="media-heading heading text-uppercase">Excellent <a href="<?= base_url(); ?>home/Placement-Records" class="text-theme-color-2">Placement Record</a><br>&nbsp;</h4>
                <!--<p>The department of Training and Placement, established during early nineties.</p>-->
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-box bg-white left media border-3px bg-hover-theme-colored mb-30 p-30 pb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-dove-of-peace-1 text-theme-color-2"></i></a>
              <div class="media-body">
                <h4 class="media-heading heading text-uppercase"><a href="https://www.mcehassan.ac.in/home/MERIIISE" class="text-theme-color-2">Industry Interaction</a><br><br></h4>
                <!--<p>Industrial training offers the students with important practical knowledge.</p>-->
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-box bg-white left media border-3px bg-hover-theme-colored mb-30 p-30 pb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-shelter text-theme-color-2"></i></a>
              <div class="media-body">
                <h4 class="media-heading heading text-uppercase"><a href="https://www.mcehassan.ac.in/home/Campus-Disciplinary-committee" class="text-theme-color-2">Disciplined Environment</a><br><br></h4>
                <!--<p>42 acres of Campus</p>-->
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-box bg-white left media border-3px bg-hover-theme-colored mb-30 p-30 pb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-food-donation-1 text-theme-color-2"></i></a>
              <div class="media-body">
                <h4 class="media-heading heading text-uppercase">Extra-curricular Activities - <a href="<?= base_url(); ?>home/Clubs" class="text-theme-color-2"> Student Clubs </a></h4>
                <!--<p>Extracurricular activities are programs outside of the regular school curriculum.</p>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <style>
    .horse-gallery .gallery-item .horse-details {

      min-height: 120px !important;
    }
  </style>
  <!-- Section: Running Project 1  -->
  <section class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5" data-bg-img="<?php echo base_url(); ?>assets/images/slider3.png">
    <div class="container pb-60 pt-70">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mt-0 line-height-1 text-white">MCE <span class="text-theme-colored">Accreditations and
                Rankings</span>
            </h2>
            <p class="text-white">Malnad College of Engineering <br> Hassan</p>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="owl-carousel-6col horse-gallery" data-dots="true">
            <div class="gallery-item">
              <div class="thumb">
                <img class="img-fullwidth" src="<?php echo base_url(); ?>assets/images/rankings/nirf.png" alt="project">
              </div>
              <div class="horse-details">
                <h4 class="title mb-5"><a href="<?= base_url(); ?>home/NIRF">NIRF</a></h4>
                <!-- <span class="category">Nepal / South Asia</span> -->
                <!-- <p class="font-13 pt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <p>
                  <a href="<?= base_url(); ?>home/NIRF" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Know More</a>
                  <!-- <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span> -->
                </p>
              </div>
            </div>
            <!-- <div class="gallery-item">
              <div class="thumb">
                <img class="img-fullwidth" src="<?php echo base_url(); ?>assets/images/rankings/ariia.png" alt="project">
              </div>
              <div class="horse-details">
                <h4 class="title mb-5"><a href="<?= base_url(); ?>home/ARIIA">ARIIA</a></h4>
               
                <p>
                  <a href="<?= base_url(); ?>home/ARIIA" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Know More</a>
                  
                </p>
              </div>
            </div> -->


            <div class="gallery-item">
              <div class="thumb">
                <img class="img-fullwidth" src="<?php echo base_url(); ?>assets/images/rankings/iguage.png" alt="project">
              </div>
              <div class="horse-details">
                <h4 class="title mb-5"><a href="<?= base_url(); ?>home/QS-I-GAUGE-Rating">QS I-GUAGE Rating</a></h4>
                <!-- <span class="category">Seria / Medilist</span> -->
                <!-- <p class="font-13 pt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <p>
                  <a href="<?= base_url(); ?>home/QS-I-GAUGE" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Know More</a>
                  <!-- <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span> -->
                </p>
              </div>
            </div>

            <div class="gallery-item">
              <div class="thumb">
                <img class="img-fullwidth" src="<?php echo base_url(); ?>assets/images/IIC2.png" alt="project">
              </div>
              <div class="horse-details">
                <h4 class="title mb-5"><a href="https://www.mcehassan.ac.in/assets/files/RatingCertificate_2021-22.pdf">IIC</a></h4>
                <!-- <span class="category">Seria / Medilist</span> -->
                <!-- <p class="font-13 pt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <p>
                  <a href="https://www.mcehassan.ac.in/assets/files/RatingCertificate_2021-22.pdf" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Know More</a>
                  <!-- <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span> -->
                </p>
              </div>
            </div>
            <div class="gallery-item">
              <div class="thumb">
                <img class="img-fullwidth" src="<?php echo base_url(); ?>assets/images/accreditations/qro.jpeg" alt="project">
              </div>
              <div class="horse-details">
                <h4 class="title mb-5"><a href="<?= base_url(); ?>home/QRO">QRO</a></h4>
                <!-- <span class="category">Seria / Medilist</span> -->
                <!-- <p class="font-13 pt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <p>
                  <a href="<?= base_url(); ?>home/QRO" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Know More</a>
                  <!-- <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span> -->
                </p>
              </div>
            </div>
            <div class="gallery-item">
              <div class="thumb">
                <img class="img-fullwidth" src="<?php echo base_url(); ?>assets/images/rankings/VTU.png" alt="project">
              </div>
              <div class="horse-details">
                <h4 class="title mb-5"><a href="<?= base_url(); ?>home/Affiliation_from_VTU">VTU</a></h4>
                <!-- <span class="category">Seria / Medilist</span> -->
                <!-- <p class="font-13 pt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <p>
                  <a href="<?= base_url(); ?>home/Affiliation_from_VTU" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Know More</a>
                  <!-- <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span> -->
                </p>
              </div>
            </div>
            <div class="gallery-item">
              <div class="thumb">
                <img class="img-fullwidth" src="<?php echo base_url(); ?>assets/images/rankings/AICTE.png" alt="project">
              </div>
              <div class="horse-details">
                <h4 class="title mb-5"><a href="<?= base_url(); ?>home/AICTE">AICTE</a></h4>
                <!-- <span class="category">Seria / Medilist</span> -->
                <!-- <p class="font-13 pt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <p>
                  <a href="<?= base_url(); ?>home/AICTE" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Know More</a>
                  <!-- <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span> -->
                </p>
              </div>
            </div>
            <div class="gallery-item">
              <div class="thumb">
                <img class="img-fullwidth" src="<?php echo base_url(); ?>assets/images/accreditations/NBA1.png" alt="project">
              </div>
              <div class="horse-details">
                <h4 class="title mb-5"><a href="<?= base_url(); ?>home/NBA">NBA</a></h4>
                <!-- <span class="category">Seria / Medilist</span> -->
                <!-- <p class="font-13 pt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <p>
                  <a href="<?= base_url(); ?>home/NBA" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Know More</a>
                  <!-- <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span> -->
                </p>
              </div>
            </div>
            <div class="gallery-item">
              <div class="thumb">
                <img class="img-fullwidth" src="<?php echo base_url(); ?>assets/images/accreditations/NAACLogo.jpg" alt="project">
              </div>
              <div class="horse-details">
                <h4 class="title mb-5"><a href="<?= base_url(); ?>home/NAAC">NAAC</a></h4>
                <!-- <span class="category">Seria / Medilist</span> -->
                <!-- <p class="font-13 pt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <p>
                  <a href="<?= base_url(); ?>home/NAAC" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Know More</a>
                  <!-- <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span> -->
                </p>
              </div>
            </div>
            <div class="gallery-item">
              <div class="thumb">
                <img class="img-fullwidth" src="<?php echo base_url(); ?>assets/images/rankings/IQAC.png" alt="project">
              </div>
              <div class="horse-details">
                <h4 class="title mb-5"><a href="<?= base_url(); ?>home/IQAC-MOMS">IQAC</a></h4>
                <!-- <span class="category">Seria / Medilist</span> -->
                <!-- <p class="font-13 pt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <p>
                  <a href="<?= base_url(); ?>home/IQAC-MOMS" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Know More</a>
                  <!-- <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span> -->
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Volunteers -->
  <section id="volunteers">
    <div class="container pt-70 pb-70">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">Our <span class="text-theme-colored"> Campus Tour</span></h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p> -->
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
          <iframe src="https://www.immersivetourz.com/mce/" width="100%" height="500" frameborder="0" style="border:0" webkitAllowFullScreen mozallowfullscreen allowFullScreen ></iframe>
            <!-- <iframe src="https://immersivetourz.com/mce/" width="100%" height="500" frameborder="0" style="border:0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> -->
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Section: Client Say -->
  <section class="bg-theme-color-2">
    <div class="container pt-60 pb-60">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-uppercase mt-0 pb-10  text-center text-white">Campus Placements</h2>
          <div class="owl-carousel-1col" data-dots="true">
            <div class="item">
              <div class="testimonial-wrapper text-center">
                <div class="thumb"><img class="my-10" alt="" src="<?php echo base_url(); ?>assets/images/placements_1.png"></div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-wrapper text-center">
                <div class="thumb"><img class="py-10" alt="" src="<?php echo base_url(); ?>assets/images/placements_2.png"></div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-wrapper text-center">
                <div class="thumb"><img class="" alt="" src="<?php echo base_url(); ?>assets/images/placements_3.png"></div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-wrapper text-center">
                <div class="thumb"><img class="" alt="" src="<?php echo base_url(); ?>assets/images/placements_4.png"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Why Choose Us -->
  <section class="bg-lighter">
    <div class="container pt-40 pb-50">
      <div class="section-content">
        <div class="row">
          <div class="col-md-5 pr-40">
            <h3 class="text-uppercase title mt-0 mt-sm-30 line-bottom">What <span class="text-theme-colored font-weight-700">Students Say ?</span></h3>
            <div class="bxslider bx-nav-top">
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>M D Ranganath is the Former Chief Financial Officer(CFO) of Infosys, a top leading IT company. He completed his Bachelor of Engineering in the year 1984 at MCE, Hassan.</em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/alumni/ranganath.jpg" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">JM D Ranganath</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">1984 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>Manu R Saale is the Managing Director and CEO of Mercedes-Benz Research &amp; Development India(MBRDI), Bengaluru. He completed his Bachelors of Engineering in Electronics and Communication in 1995 at MCE, Hassan.</em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/alumni/manu.jpg" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">Manu R Saale</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">1991 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>Dr. Karisiddappa is the Former Vice-Chancellor of VTU, Belagavi, a leading University in Asia and the only Technical University in Karnataka State. He is an Alumni of MCE. He is a student of our Institute in the year 1976-81 in Civil Engineering.</em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/alumni/karisidappa.jpg" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">Dr. Karisiddappa</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">Vice-Chancellor, VTU, Belagavi, Karnataka.</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>Mr. Ramesh T.R graduated with a degree in Information Science from the 2012-2016 batch. Currently, he serves as a Senior Software Analyst at Tata Consultancy Services (TCS) in Bangalore, bringing with him a wealth of experience and expertise in the IT industry,Ramesh is known for his dedication and proficiency in software development and analysis.</em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/alumni/Mr. Ramesh T.R.png" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">Mr. Ramesh T.R</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">2016 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>Currently, she holds the position of Senior Programme Analyst at Cognizant Information Technology, contributing her skills and expertise to the dynamic IT landscape.Medha is recognized for her excellence in program analysis and management.</em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/alumni/Ms. Medha Narayan.png" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">Ms. Medha Narayan</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">2017 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>Distinguished professional in the field of technology, holding the role of Research and Development Engineer at Synopsys Pvt Ltd. With a solid educational background and a passion for cutting-edge innovations, Varun contributes his skills to the dynamic landscape of research and development.</em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/alumni/Mr. Varun Rao Sindhe.png" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">Mr. Varun Rao Sindhe</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">2018 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>

              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>
                      Mr. G. Vasudeva Rao is the Country Head, Services Honeywell India (Building Solutions). He completed his Bachelor of Engineering in Electronics And Instrumentation Engineering
                      in 1982 at MCE, Hassan

                    </em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/Mr. G. Vasudeva Rao.JPG" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">Mr. G. Vasudeva Rao</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">1982 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>
                      Mr. Prakash. H.S. is the Co-Founder and Chief Development Officer, Silfra Technologies, Bangalore.
                      Former Principal Architect, Hewlett Packard. He completed his Bachelor of Engineering in Electronics And Instrumentation Engineering
                      in 1989 at MCE, Hassan
                    </em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/Mr. Prakash. H.S..JPG" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">Mr. Prakash. H.S.</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">1989 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>
                      Mr. Jibak Dasgupta. is the Deputy Director, Confederation of Indian Industry (CII),
                      New Delhi.. He completed his Bachelor of Engineering in Electronics And Instrumentation Engineering
                      in 2005 at MCE, Hassan

                    </em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/Mr. Jibak Dasgupta.JPG" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">Mr. Jibak Dasgupta</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">2005 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>
                      Received Ph.D from Indian Institute of Science, Bengaluru. Serving as Assistant Professor, Indian Institute of Technology, Goa. 2011 Alumnus

                    </em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/alumni/Dr. D. Shakthi Prasad.png" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">Dr. D. Shakthi Prasad</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">2011 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>
                      I am Dr.K.Shamasundar and my say on MCE straight from the heart. I am a mechanical engineer have put forth 5 years in mechanical department studying mechanical engineering and the mechanical sector is the best among many other colleges. it has the best lab, work shop, best for mechanical department apart from best drawing rooms and giving always a room for scope

                    </em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/alumni/Dr. K. SHAMSUNDAR.jpg" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">Dr. K. SHAMSUNDAR</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">1979 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>
                      I was fortunate enough to do my post-graduation and Ph.D. I really enjoyed the place in Hassan, the institution in MCE and the teachers in the faculty of MCE. Indeed, I can proudly and boldly tell anyone that the role MCE is huge in my life to reach the level of IIT from a small village as an average student. I want to thank all my teachers of MCE who moulded and helped me during my under graduation.

                    </em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/alumni/Dr. J. M. MALLIKARJUNA.jpg" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">Dr. J. M. MALLIKARJUNA</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">1986 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>
                      I am proud to be alumni of MCE Hassan.
                      While looking back the path traversed from my student days in MCE, I am indebted to my Alma mater for moulding me into a person I am today and for my achievements as an entrepreneur which was not possible but for the knowledge & values imparted by the faculties of this prestigious institution.


                    </em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/alumni/G. Manjunath Prabhu.jpg" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">G. Manjunath Prabhu</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">1980 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                <div class="comment">
                  <p class="text-white"><em>I am proud to be an MCE'IAN. MCE is one of the reputed college in Karnataka. And its Mechanical Engineering Department is one of the best in Karnataka, as it has very good lab facilities and workshops. During my tenure in MCE, I got to listen to the lectures of the best faculties we had. Wherever we go or in any field we go, we will get an MCE Allumni as our Senior for sure. That's the value of MCE. Thanks to MCE for making me what I am today.</em></p>
                </div>
                <div class="content mt-20">
                  <div class="thumb pull-left flip">
                    <img width="64" src="<?php echo base_url(); ?>assets/images/alumni/SUJAY TIKARE NAGENDRA RAO.jpg" alt="" class="img-circle">
                  </div>
                  <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-white mt-0 mb-0 font-weight-600">SUJAY TIKARE NAGENDRA RAO</h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-white">2009 Batch Student</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7 pl-40">
            <h3 class="title mt-0 mt-sm-30 text-black-666 line-bottom"><i class="fa fa-thumb-tack text-gray-darkgray mr-10"></i>Notable <span class="text-theme-colored">
                Alumnis</span></h3>
            <div class="row mt-20 multi-row-clearfix">
              <div class="owl-carousel-3col" data-nav="true">

                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/ranganath.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        M D Ranganath</span></h4>
                    <p>M D Ranganath is the Former Chief Financial Officer(CFO) of Infosys, a top leading IT company. He completed his Bachelor of Engineering in the year 1984 at MCE, Hassan.</p>
                  </div>
                </div>

                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Gowtham.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Gowtham H L</span></h4>
                    <p>Our proud alumnus Gowtham H L received ‘Vishisht Seva Medal’ on the occasion of 75th Republic Day for his outstanding contribution to the Nation in the field of Defence. He is currently serving in the Indian Air Force as Group Captain. He completed B.E. in Mechanical Engineering in 2001 at MCE, Hassan.</p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/manu.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Manu R Saale</span></h4>
                    <p>Manu R Saale is the Managing Director and CEO of Mercedes-Benz Research &amp; Development India(MBRDI), Bengaluru. He completed his Bachelors of Engineering in Electronics and Communication in 1995 at MCE, Hassan.</p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/karisidappa.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Dr. Karisiddappa</span></h4>
                    <p>Dr. Karisiddappa is the Former Vice-Chancellor of VTU, Belagavi, a leading University in Asia and the only Technical University in Karnataka State. He is an Alumni of MCE. He is a student of our Institute in the year 1976-81 in Civil Engineering.</p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Ms.Vijetha Shenoy.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">Ms.Vijetha Shenoy</span></h4>
                    <p>Senior Manager - HR Business Partner Seasoned Software Engineer turned passionate HR professional andan IIM-C Alumnus with more than 10 years of experience in the IT sector, having exposure to culturally diverse teams across UK and 3 states in India.</p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Mr Adarsh K.S.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Mr Adarsh K.S</span></h4>
                    <p>Worked in Nokia Solutions Networks till 2015 Very passionate to get into Civil Services Passed in KAS examination and selected as Commercial Tax Officer in the year 2017,Presently working as CTO in Bengaluru.</p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Mr.Shreyas C. Krishnamurthy.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Mr.Shreyas C. Krishnamurthy</span></h4>
                    <p>He studied Master of Science (Information engineering, University of Applied science, Kiel). Currently working as senior software, developer in TacPharm Gmbh in Germany.</p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Mr. Dhananjaya Joshi.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Mr. Dhananjaya Joshi</span></h4>
                    <p>Mr. Dhananjaya Joshi is the COO, Bharati Airtel India Ltd.Bengaluru. He completed his Bachelor of Engineering in Electronics and Communication in 1986 at MCE, Hassan</p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Dr. S Venkatesh Sharma.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Dr. S Venkatesh Sharma</span></h4>
                    <p>Dr. S Venkatesh Sharma is the Deputy Diretor, ISAC,
                      Bangalore. He completed his Bachelor of Engineering in Electronics and Communication in 1984 at MCE, Hassan
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Mr. Javagal Srinath.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Mr. Javagal Srinath</span></h4>
                    <p>Cricketer who represented India in test and ODIs. Studied in our Department for a period of two years during1986- 88 and then took transfer to SJCE, Mysore.</p>

                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Mr. Umesh Sathyanarayana.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Mr. Umesh Sathyanarayana </span></h4>
                    <p>Mr. Umesh Sathyanarayana is Area Vice President, L&T Technology Services Limited, Irvine, California, US. He completed his Bachelor of Engineering in Electronics And Instrumentation Engineeringthe in 1995 at MCE, Hassan</p>

                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Mr. Anandprasad .jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Mr. Anandprasad Arkalgud </span></h4>
                    <p>Mr. Anandprasad Arkalgud is Founder & CEO, MAARKO, Greater Seattle Area, US. Former Vice President,
                      Infosys Technologies Ltd. Greater China and ASEAN,, Shanghai, China.. He completed his Bachelor of Engineering in Electronics And Instrumentation Engineering
                      in 1995 at MCE, Hassan</p>

                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Dr. K N. Balasubramanya Murthy .png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Dr. K N. Balasubramanya Murthy </span></h4>
                    <p>Received Ph.D from IIT Madras. Worked as Vice-chancellor of Dayananda Sagar University, Bengaluru and PES University, Bengaluru. 1980 Alumnus.</p>

                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Dr. M. S. Raviprakasha.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Dr. M. S. Raviprakasha </span></h4>
                    <p>Received Ph.D from IIT Madras. Worked as Vice Principal, MCE Hassan. Presently serving as Principal, Sri. Sidhartha Institute of Technology, Tumkur. 1982 Alumnus</p>

                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Sri. K. Srinivas Shenoy.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Sri. K. Srinivas Shenoy </span></h4>
                    <p>Serving as Superintending Engineer, Karnataka Power Corporation Limited (KPCL). 1984 Alumnus</p>

                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Dr. J. M. MALLIKARJUNA.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Dr. J. M. MALLIKARJUNA </span></h4>
                    <p>Associate Professor,
                      Internal Combustion Engines Laboratory,
                      Department of Mechanical Engineering
                      Indian Institute of Technology Madras,1986 Alumni
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/G. Manjunath Prabhu.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        G. Manjunath Prabhu </span></h4>
                    <p>I was employed for 17 years and worked in different company, ventured into entrepreneurship and established his own private limited company- STATWEIGH INDIA PVT.LTD Statweigh India Pvt.Ltd an ISO 9001 company, are the pioneers in manufacturing of Electronic Truck & Wagon Weighing systems of capacity 20-200tones. </p>

                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Dr. K. SHAMSUNDAR.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Dr. K. SHAMSUNDAR </span></h4>
                    <p>is the founder and managing director os S.S.Group of Industries in Bangalore which is 26 years old catering to various industries manufacturing ferrous and non ferrous castings having general engineering works</p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Dr. M K Venkatesh.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Dr. M K Venkatesh </span></h4>
                    <p>Dr. M K Venkatesh is the Principal, RNSIT,
                      Bangalore. He completed his Bachelor of Engineering in Electronics and Communication in 1980 at MCE, Hassan</p>

                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Sri. Ravikeerthy G.A.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        Sri. Ravikeerthy G.A </span></h4>
                    <p>Chief Engineer (Retd)
                      Karnataka Urban Water Supply & Drainage Board (KURS & DB)
                      $07, “Apoorva”, Irrigation (CEIS) Layout, Prashanth Nagar, Bogadi 2nd Stage (South), Mysore
                    </p>

                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/Er.K.M.K.Sharma.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                        K.M.K.Sharma </span></h4>
                    <p>Rtd.Executive Engineer
                      Kaveri Niravary Nigama
                      Arsikere
                      Executive Engineer (Rtd)
                      #2302, 23rd Floor, Manikchand, 117FF, 7th Block, Jayanagar
                      Near JSS College
                      Kanakapura Road
                      Bengaluru-560070
                    </p>

                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/thusli1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. M.B Thulsi Ramchandre Gowda </span></h4>
                    <p>Year of Graduation : 1985 </br>
                    Branch: Civil Engineering Department      
                     Architect, USA
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/belliappa1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr.M.B. Belliappa</span></h4>
                    <p>Year of Graduation :1989 </br>
                    Branch: Civil Engineering Department Deputy Director, Central Institute of Coastal Engineering for Fishery, Govt of India.                   
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/sunder1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Dr. S. Sunder Kumar </span></h4>
                    <p>Year of Graduation : 2005 </br>
                    Branch: Civil Engineering Department      
                    Senior Scientist, (CSIR-SERC)Structural Engineering Research Center,  Chennai.
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/pradyumna1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Dr. S. Pradyumna</span></h4>
                    <p>Year of Graduation : 2002 </br>
                    Branch: Civil Engineering Department      
                             Professor, Indian Institute of Technology, Delhi

                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/bpsrinivasan1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. B.P Srinivasan</span></h4>
                    <p>Year of Graduation : 1988                      </br>
                    Branch: Computer Science & Engineering           
                    Ministry of Electronics and information Technology, Senior Director (IT) 
.
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/giridevanur1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. Giri Devanur</span></h4>
                    <p>Year of Graduation :1990                    </br>
                    Branch: Computer Science & Engineering           
                    ReAlpha Inc.,CEO,USA (IT) 
.
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/veerendra1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. Veerendra Shetty</span></h4>
                    <p>Year of Graduation :1991                    </br>
                    Branch: Computer Science & Engineering           
                    Samsung Research ,Director R&D, Bengaluru
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/anuradha1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mrs. Anuradha C.S</span></h4>
                    <p>Year of Graduation :1991                    </br>
                    Branch: Computer Science & Engineering           
                    Intuitive, California, Director IT,USA
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/karthick1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. Karthick  Iyer</span></h4>
                    <p>Year of Graduation :2004                    </br>
                    Branch: Computer Science & Engineering           
                    Meta (Facebook), San Francisco, California, Manager, USA
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/venkatesh1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Dr. S . Venkatesh Sharma</span></h4>
                    <p>Year of Graduation :1984                    </br>
                    Branch: Electronics and Communication        
                        Engineering
          
                        ISAC, Deputy Director, Bengaluru
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/dhananjaya1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. Dhananjaya Joshi</span></h4>
                    <p>Year of Graduation :1986                    </br>
                    Branch: Electronics and Communication        
                        Engineering
          
                        COO, Bharati Airtel India Ltd.

                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/ujshenoy1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Dr. U.J Shenoy</span></h4>
                    <p>Year of Graduation :1979                  </br>
                    Branch: Electrical and Electronics     
                   Engineering

          
                   Chief Research Scientist, IISC     
                   Bengaluru

                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/knbmurthy1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Dr. K.N.B Murthy</span></h4>
                    <p>Year of Graduation :1980                    </br>
                    Branch: Electrical and Electronics     
                   Engineering

                   Dayanand Sagar University, Former Vice Chancellor , Bengaluru
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/drnvsubbareddy1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Dr. N.V Subbareddy</span></h4>
                    <p>Year of Graduation :1983                    </br>
                    Branch: Electrical and Electronics     
                   Engineering


                   Manipal University, Former Vice Chancellor 
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/dmanjunath1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Dr. D. Manjunath</span></h4>
                    <p>
                    Branch: Electrical and Electronics     
                   Engineering
                   Professor, IIT , Bombay
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/srikanth1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. Srikanth Kashyap</span></h4>
                    <p>
                    Branch: Electrical and Electronics     
                   Engineering
                   JVS Electronics ,Director
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/preethi1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mrs. Preethi Prabhu</span></h4>
                    <p>
                    Branch: Electrical and Electronics     
                   Engineering
                   Indya Kaleidoscope Design Studio, Entreprenuer
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/anand1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. Anand Prasad  Arkalgud   </span></h4>
                    <p>Year of Graduation :1993</br>
                    Branch: Electronics and Instrumentation    
                        Engineering

                   MAARKO, Greater Seattle Area, US.     
                    Founder and CEO

                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/vasudevroa1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. G. Vasudeva  Rao</span></h4>
                    <p>Year of Graduation :1992                    </br>
                    Branch: Electronics and Instrumentation    
                        Engineering
                    Honeywell India (Building Solutions). Country Head Service

                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/jibak1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. Jibak Das Gupta</span></h4>
                    <p>Year of Graduation :2005                    </br>
                    Branch: Electronics and Instrumentation
                        Engineering
                        Confederation of Indian Industry (CII), New Delhi. Deputy Director
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/umesh1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. Umesh Sathyanarayana</span></h4>
                    <p>Year of Graduation :1995</br>
                    Branch: Electronics and Instrumentation
                        Engineering

                   L&T Technology Services Limited, Irvine, California, US

                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/rajashekar1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr.Rajshekar</span></h4>
                    <p>Year of Graduation :2012                    </br>
                    Branch: Information  Science and     
                     Engineering
                    E-Swara technologies, CEO and Founder


                    </p>
                  </div>
                </div>
               
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/siddarth1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr.Siddarth Shankar 
                    </span></h4>
                    <p>Year of Graduation :2011                    </br>
                    Branch: Information  Science and     
                     Engineering
                     VectFab,CEO and Founder
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/likithbb1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr.  Likith B.B </span></h4>
                    <p>Year of Graduation :2020                    </br>
                    Branch: Information  Science and     
                   Engineering

                   Tec Cera Innovations,CEO and Founder
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/prakash1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. Prakash H.S </span></h4>
                    <p>Year of Graduation :1989                    </br>
                    Silfra Technologies, Bangalore Co founder and Chief Development officer
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/paudhan1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. Paudan Raj H.H </span></h4>
                    <p>Year of Graduation :2012                    </br>
                    Hamshine, Electronics and Energy Systems, CEO
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/jobkurian1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr.Job Kurian </span></h4>
                    <p>Year of Graduation :2005
                    </br>
                    Indian Film Industry, Singer and Composer

                    </p>
                  </div>
                </div> 
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/drkshamsunder1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Dr. K Shamsunder
                    </span></h4>
                    <p>Year of Graduation :1979

                    </br>
                    Managing Director of SS Group industries, Bengaluru


                    </p>
                  </div>
                </div> 
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/kvtirumala1.png" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. K.V Tirumala

                    </span></h4>
                    <p>Year of Graduation :2022


                    </br>
                    Deputy  Director General of Foreign Trade at Bengaluru 



                    </p>
                  </div>
                </div> 
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/cdshridhar1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Mr. C.D Shridhara 
                    </span></h4>
                    <p>Year of Graduation :1975
                    </br>
                    Scientist and Deputy  Director,ISAC was actively involved in the development  of MOM Spacecraft and Mangalyaan Mission


                    </p>
                  </div>
                </div> 
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/harry1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Dr. Harry Moraes
                    </span></h4>
                    <p>Fabtech International Abu Dhabi, UAE


                    </p>
                  </div>
                </div> 
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/sundresh1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Dr.Sunderesh Heragu 
                    </span></h4>
                    <p>Academic leader, educator, researcher Oklahoma State University, Stillwater, USA.
                    </p>
                  </div>
                </div> 
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/manjunathprabhu1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    G. Manjunath Prabhu
                    </span></h4>
                    <p>Entrepreneur,Established STATWEIGH INDIA.PVT.LTD 
                    </p>
                  </div>
                </div> 
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/mallikarjuna1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    Dr.J.M. Mallikarjuna 
                    </span></h4>
                    <p>Year of Graduation:1986</br>
                    Mechanical Engineering Associate Professor,Internal Combustion Engines Lab,IIT,Madras
                    </p>
                  </div>
                </div> 
                <div class="item">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/srinivasshenoy1.jpg" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">
                    K. Srinivas Shenoy 
                    </span></h4>
                    <p>Year of Graduation:1984 </br> Superintending Engineer KPCL,Karnataka
                    </p>
                  </div>
                </div> 
                

                <!--<div class="item">-->
                <!--  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="<?php echo base_url(); ?>assets/images/alumni/karisidappa.jpg"-->
                <!--        alt="..."></a> </div>-->
                <!--  <div class="caption">-->
                <!--    <h4 class="text-uppercase letter-space-1 mt-0"><span class="text-theme-colored">-->
                <!--        </span></h4>-->
                <!--    <p>Dr. Karisiddappa is the Former Vice-Chancellor of VTU, Belagavi, a leading University in Asia and the only Technical University in Karnataka State. He is an Alumni of MCE. He is a student of our Institute in the year 1976-81 in Civil Engineering.</p>-->
                <!--  </div>-->
                <!--</div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
<!-- end main-content -->
<!-- <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body text-center">
        <img class="mt-10 mb-15" alt="" src="<?php echo base_url(); ?>assets/images/popup.jpg">
      </div>
      <div class="modal-footer">

      </div>
    </div>

  </div>
</div> -->





<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
   
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body text-center">
        

        <div class="owl-carousel-1col" data-nav="true" data-owl-autoplay="false">
          
          <div class="item"><img src="<?php echo base_url(); ?>assets/images/1000040445.jpg" alt=""></div>
          <div class="item"><img src="<?php echo base_url(); ?>assets/images/c1.jpeg" alt=""></div>
          <div class="item"><img src="<?php echo base_url(); ?>assets/images/popup.jpg" alt=""></div>
          
          <!-- <div class="item"><img src="<?php echo base_url(); ?>assets/images/Graduate.jpeg" alt=""></div>
          <div class="item"><img src="<?php echo base_url(); ?>assets/images/NIAN.jpeg" alt=""></div>
          <div class="item"><img src="<?php echo base_url(); ?>assets/images/Skillfee.jpg" alt=""></div>
          <div class="item"><img src="<?php echo base_url(); ?>assets/images/Admission_doc_.jpg" alt=""></div>
          <div class="item"><img src="<?php echo base_url(); ?>assets/images/jobfair.jpeg" alt=""></div> -->

          <!-- <div class="item"><img src="http://placehold.it/800x200" alt=""></div> -->
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<!-- <div class="overlay2" id="overlay2">
  <div class="image-container">
    <img src="<?php echo base_url(); ?>assets/images/slider/teachers.jpeg" alt="Full Screen Image">

    <button class="close-btn" id="close-btn2">&times;</button>
  </div>
</div> -->

<!-- <div class="overlay1" id="overlay1">
  <div class="image-container">
    

    <button class="close-bt" id="close-bt">&times;</button> 
	 <iframe 
        width="600" 
        height="400" 
        src="https://www.youtube.com/embed/GtIF9q_oFSs" 
        title="YouTube Live video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        allowfullscreen>
    </iframe>
  </div>
</div> -->

<!-- <div class="overlay" id="overlay">
  <div class="image-container">
    <img src="<?php echo base_url(); ?>assets/images/slider/graduate2024.png" alt="Full Screen Image">

    <button class="close-btn" id="close-btn">&times;</button>
  </div>
</div> -->



<!-- <div class="overlay1" id="overlay1">
  <div class="image-container">
    <img src="<?php echo base_url(); ?>assets/images/IIRF.jpg" alt="Full Screen Image">

    <button class="close-bt" id="close-bt">&times;</button>
  </div>
</div> -->