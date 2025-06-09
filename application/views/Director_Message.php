
    <div class="main-content">
      <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="<?php echo base_url(); ?>assets/images/slider3.jpg">
        <div class="container pt-120 pb-120">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="title text-white"><?=$activeMenu;?></h2>
                <ol class="breadcrumb text-center text-black mt-10">
                  <li><a href="#">Home</a></li>
                  <!-- <li><a href="#">Pages</a></li> -->
                  <li class="active text-gray-silver">About Us</li>
                  <li class="active text-gray-silver">Messages</li>
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
                <div class="col-xs-12 col-sm-12 col-md-12 mb-sm-20 p-20 pt-0 wow fadeInUp" data-wow-duration="1s"
                  data-wow-delay="0.5s">
                    <div class="blog-posts single-post">
                  <h3 class="line-bottom mt-0"> <span class="text-theme-colored">
                     <?=$activeMenu;?> </span></h3>
			    <div class="row py-2">
						<div class="col-md-3 order-md-2 mb-4 mb-lg-0">
						    <span class="img-thumbnail d-block">
							    <img src="<?=base_url();?>assets/images/Administration/Dr. S. Pradeep.jpg" class="img-fluid" alt="principal">
							</span>
						</div>
						<div class="col-md-9 order-2">
							<div class="overflow-hidden">
								<h2 class="text-color-dark font-weight-bold text-6 mb-0 pt-0 mt-0"></h2>
							</div>
							<div class="overflow-hidden mb-2">
								<p class="font-weight-bold text-primary mb-40"><p/>
</div>


							
						</div>
				</div>    
			    <div class="row">
        		    <div class="col">
                                  <p class="text-justify">"Dear Malnad College of Engineering Community,<p/>
                                  <p style=" text-align: justify;">As we stand at the forefront of a new era in engineering education, I am excited to embark on a journey of innovation, exploration, and transformation. Our commitment to excellence remains unwavering, yet we recognize the need to adapt and evolve to meet the ever-changing demands of the modern world.<p/>
                                <p style=" text-align: justify;">In embracing the spirit of the new generation, we are poised to explore new frontiers, discover new technologies, and pioneer new dimensions of engineering education. With a focus on interdisciplinary collaboration, hands-on learning experiences, and cutting-edge research, we aim to empower our students to become architects of change, equipped not only with technical expertise but also with the creativity, adaptability, and resilience to thrive in a rapidly evolving landscape.<p/>
                                 <p style=" text-align: justify;">At Malnad College of Engineering, we celebrate diversity, embrace innovation, and foster a culture of curiosity and exploration. Together, let us push the boundaries of what is possible, inspire the next generation of engineers, and leave a legacy that transcends generations.</p>
                                <p style=" text-align: justify;">With anticipation and enthusiasm for the journey ahead,<p/>
        		        <p class="text-justify"><strong style="  color:#c02140;">Dr. Pradeep S</strong><br /><strong style="  color:#c02140;">Director</strong> <br />Malnad College of Engineering, <br />Hassan-573202</p>    </p>    
            </div>
        		</div>
        		
						
					
				</div>
                   
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