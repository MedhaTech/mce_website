
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
                  <li class="active text-gray-silver">IQAC</li>
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
              <div class="row mt-10">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-sm-20 p-20 pt-0 wow fadeInUp" data-wow-duration="1s"
                  data-wow-delay="0.5s">
                  <h3 class="line-bottom mt-0"> <span class="text-theme-colored">
                     <?=$activeMenu;?></span></h3>
                    
						
                     <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">S.No</th>
                            <th width="65%">Details</th>
                            <th width="30%">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;?>
                        <tr>
                            <td><?=$i++;?></td>
                            <td>Curricular Aspects</td>
                            <td><?php echo anchor('home/cycle2-curricular-Aspects','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td>Teaching Learning and Evaluation</td>
                            <td><?php echo anchor('home/Cycle2-Teaching-Learning-and-Evaluation','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td>Research, Innovations and Extension</td>
                            <td><?php echo anchor('home/cycle2-Research-Innovations-and-Extension','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td>Infrastructure and Learning Resources</td>
                            <td><?php echo anchor('home/cycle2-Infrastructure-and-Learning-Resources','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td>Student Support and Progression</td>
                            <td><?php echo anchor('home/cycle2-Student-Support-and-Progression','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td>Governances, Leadership and Management</td>
                            <td><?php echo anchor('home/cycle2-Governances-Leadership-and-Management','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td>Institutional Values and Best Practices</td>
                            <td><?php echo anchor('home/cycle2-Institutional-Values-and-Best-Practices','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td>Undertaking</td>
                            <td><?php echo anchor('home/cycle2-Undertaking','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td>Quality Initiatives</td>
                            <td><?php echo anchor('home/cycle2-Quality-Initiatives','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td>Qualitative Matrics</td>
                            <td><?php echo anchor('home/cycle2-Qualitative-Matrics','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr>
                        <!-- <tr>
                            <td><?=$i++;?></td>
                            <td>DVV Clarification-1</td>
                            <td><?php echo anchor('home/cycle2-DVV-Clarification-1','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr> -->
                        <!-- <tr>
                            <td><?=$i++;?></td>
                            <td>RE-DVV</td>
                            <td><?php echo anchor('home/cycle2-RE-DVV','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr> -->
                        <!-- <tr>
                            <td><?=$i++;?></td>
                            <td>Extended Profile</td>
                            <td><?php echo anchor('home/Cycle2-Extended-Profile','View','class="btn btn-warning btn-sm"'); ?></td>
                        </tr> -->


                    </tbody>
                </table>
                   
                   
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