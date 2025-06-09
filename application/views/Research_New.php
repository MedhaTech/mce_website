<div class="main-content">
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="<?php echo base_url(); ?>assets/images/slider3.png">
        <div class="container pt-120 pb-120">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white"><?= $activeMenu; ?></h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li><a href="#">Home</a></li>
                            <!-- <li><a href="#">Pages</a></li> -->
                            <li class="active text-gray-silver">Research</li>
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

                        <div class="col-md-12">


                            <!-- Slider Revolution Ends -->
                            <h4 class="text-blue">About Research at MCE</h4>

                            <article class="post clearfix">
                                <div class="col-sm-9">
                                    <div class="entry-content mt-10">

                                        <h4 class="entry-title mt-0 mb-0 pt-0">Dr. Madhu P
                                            </h45>
                                            <h5 class="entry-title mt-0 mb-0 pt-0">Dean Research and Associate Professor</h5>
                                            <h5 class="entry-title mt-0 mb-0 pt-0">pm@mcehassan.ac.in</h5>
                                            <h5 class="entry-title mt-0 mb-0 pt-0">B. E., M.Tech, Ph.D.
                                            </h5>

                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <img class="img-thumbnail img-fullwidth" src="<?php echo base_url(); ?>assets/images/profile_2.jpg">

                                </div>
                            </article>
                            <article class="post clearfix">
                                <div class="col-sm-9">
                                    <div class="entry-content mt-10">

                                        <h4 class="entry-title mt-0 mb-0 pt-0">Dr. Yashas Gowda T G</h45>
                                            <h5 class="entry-title mt-0 mb-0 pt-0">Associate Dean Research and Assistant Professor</h5>
                                            <h5 class="entry-title mt-0 mb-0 pt-0">tgy@mcehassan.ac.in</h5>
                                            <h5 class="entry-title mt-0 mb-0 pt-0">M.Tech., Ph.D</h5>

                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <img class="img-thumbnail img-fullwidth" src="<?php echo base_url(); ?>assets/images/profile_1.jpg">

                                </div>
                            </article>

                            <!-- <h4 class="text-blue">Vision </h4>
                            <div class="text-justify">To be an institute of excellence in engineering education and research, producing socially responsible professionals.
                            </div>
                            <h4 class="text-blue">Mission </h4> -->
                            <div class="text-justify">
                                <p>
                                    Malnad College of Engineering (MCE), Hassan, a pioneering institution established in 1960, has built a
                                    strong reputation for academic excellence and impactful research. Affiliated to Visvesvaraya
                                    Technological University (VTU) and recognized by AICTE, MCE fosters a vibrant research culture across
                                    its departments, promoting interdisciplinary and industry-relevant innovations.
                                </p>

                                <h4 class="text-blue">Research Vision</h4>
                                <p>
                                    At MCE, research is driven by the vision of creating solutions that address real-world problems,
                                    contribute to national development, and push the frontiers of science and technology. The institution
                                    encourages both faculty and students to engage in high-quality research, supported by well-equipped
                                    laboratories, industry linkages, and research funding.
                                </p>

                                <h4 class="text-blue">Key Research Domains</h4>
                                <ul>
                                    <li>Advanced Composite Materials and Smart Materials</li>
                                    <li>Natural Fiber Reinforced Polymers</li>
                                    <li>Renewable Energy Systems</li>
                                    <li>Artificial Intelligence and Machine Learning</li>
                                    <li>Embedded Systems and IoT</li>
                                    <li>Environmental and Water Resource Engineering</li>
                                    <li>Structural Engineering and Sustainable Construction</li>
                                    <li>Cybersecurity and Data Science</li>
                                </ul>

                                <h4 class="text-blue">Research Centers and Facilities</h4>
                                <p>
                                    Several departments of MCE are recognized as VTU Research Centers, offering doctoral and post-
                                    graduate research opportunities. The college houses state-of-the-art laboratories and R&D centers.
                                </p>

                                <h4 class="text-blue">Industry Collaboration and Innovation</h4>
                                <p>
                                    MCE encourages strong industry-institute interaction through joint projects, internships, and
                                    consultancy services. The Innovation and Incubation Center and active participation in Atal Innovation
                                    Mission, and AICTE IDEA Labs help transform research ideas into practical innovations and startups.
                                </p>

                                <b>Message from the Dean</b>
                                <p>
                                    <strong>Dr. Madhu P<br>
                                        Dean (Research)<br>
                                        Malnad College of Engineering, Hassan</strong>
                                </p>
                                <p>
                                    At Malnad College of Engineering, we believe that knowledge creation through research is the
                                    cornerstone of academic excellence. Our commitment to research and development goes beyond
                                    academic inquiry—it is about shaping technologies and solutions that impact society positively.
                                </p>
                                <p>
                                    We take pride in fostering a culture where curiosity meets innovation. Our faculty members are actively
                                    engaged in multidisciplinary research projects, collaborating with leading industries and research
                                    institutions. The outcomes of these endeavors are visible in the form of high-impact publications,
                                    patents, and practical solutions to engineering challenges.
                                </p>
                                <p>
                                    Through continuous support, upgraded infrastructure, and a focus on quality and relevance, MCE aims
                                    to become a hub of research excellence. We encourage our students and scholars to explore,
                                    experiment, and innovate—to not only build a career but to build a better future.
                                </p>
                                <p>
                                    I welcome all stakeholders—researchers, industry partners, alumni, and aspiring scholars—to join us in
                                    this journey of discovery and development.
                                </p>
                            </div>







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