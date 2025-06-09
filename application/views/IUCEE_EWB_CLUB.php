<div class="main-content">
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="<?php echo base_url(); ?>assets/images/slider3.jpg">
        <div class="container pt-120 pb-120">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white"><?= $activeMenu; ?></h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li class="text-gray-silver"><a href="#">Home</a></li>
                            <!-- <li><a href="#">Pages</a></li> -->
                            <li class="active text-gray-silver">Other Wings</li>
                            <li class="active text-gray-silver">Facilities</li>
                            <li class="active text-gray-silver">Clubs</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9 pull-right flip sm-pull-none">
                    <div class="row mt-10">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-sm-20 p-20 pt-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h3 class="line-bottom mt-0"> <span class="text-theme-colored">
                                    <?= $activeMenu; ?></span></h3>
                            <div class="col-md-5">
                                <img src="<?php echo base_url(); ?>assets/images/IUCEE EWB.png" alt="shuttle" class="img-responsive img-fullwidth img-thumbnail">
                            </div>
                            <div class="col-md-7">
                                <b>A student organization in partnership with IUCEE, running with the primary agenda of:</b>
                                <ul class="list theme-colored angle-double-right">
                                    <li> Conduction and implementation of valued student - oriented workshops </li>
                                    <li> Establishment of a strong collaboration with
                                        industries, providing sustainable support to the student
                                        community.</li>
                                </ul>
                                <b>Vision</b>
                                <p class="text-justify">Be a platform for student to transverse engineering education diversely.</p>
                                <b>Mission</b>
                                <p class="text-justify">Build an ecosystem for engineers that exceeds the boundaries of conventional education system.</p>
                                <b>Contact Us</b>
                                <ul class="list theme-colored angle-double-right">
                                    <li>    iuceeewb.mce@gmail.com</li>
                                       </ul>
                                <b>To explore all our events and projects, visit our website</b>
                                <ul class="list theme-colored angle-double-right">
                                    <li> <a href="https://sites.google.com/view/iucee-ewb-mce/home" >Visit here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-sm-20 p-20 pt-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h3 class="line-bottom mt-0"> <span class="text-theme-colored">
                            EVENTS</span></h3>
                            <b>AAVISHKAR MANTHAN</b>
                                <p class="text-justify">AAVISHKAR MANTHAN is a national-level event organized by the IUCEE-EWB-MCE Students Chapter at Malnad College of Engineering, Hassan. It was an excellent platform for students to come together and share their knowledge. Students of various institutions across the nation participated in this chain of competitions that puts their brain into a thinking state. It provided a platform to establish themselves as unique individuals. It is was an opportunity for participants to unleash their creativity and showcase their skills in developing innovative solutions.
The event mainly consists of two events known as IDEATHON, ELOCUTION, WALKATHON and BONFIRE
</p>
<ul class="list theme-colored angle-double-right">
                                    <li> <a href="https://aavishkarmanthan.com/" >Visit here</a></li>
                                </ul>
                              
                        </div>



                    </div>

                </div>
                <div class="col-md-3">
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