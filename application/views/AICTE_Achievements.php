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
              <li class="active text-gray-silver">AICTE IDEA-Lab</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container mt-30 mb-30 pt-30 pb-30">
      <div class="row">



        <div class="col-md-9 blog-pull-right flip sm-pull-none">
          <h3 class="line-bottom mt-0"> <span class="text-theme-colored">
              <?= $activeMenu; ?></span></h3>
          
<?php
                    if($documents != null){
                        $table_setup = array ('table_open'=> '<table class="table table-hover js-dataTable-full" id="dataTable" width="100%" cellspacing="0">');
                          $this->table->set_template($table_setup);
                          $this->table->set_heading(array('data' => 'S.No', 'width' => '5%'),
                                            array('data' => 'Title of the event', 'width' => '60%'),
                                            array('data' => 'Date', 'width' => '10%'),
                                            array('data' => 'Status', 'width' => '10%'),
                                            array('data' => 'Attachment', 'width' => '15%')
                                            );
                        $i=1;
                        foreach ($documents as $Details1) {
                          $unserializedData = unserialize($Details1->files);

                          if ($unserializedData !== false && is_array($unserializedData)) {
                              // Extract and print the values
                              foreach ($unserializedData as $value) {
                                $btn = anchor('assets/departments/AICTE/latest_news/'. $value,'<i class="fa fa-fw fa-download"></i> Download','class="btn btn-danger btn-xs" target="_blank"');
                            }
                          }

                       
                          
                              $this->table->add_row($i++,
                              $Details1->news_title,
                              $Details1->news_date,
                              $Details1->news_details,
                                        
                                        $btn
                                    );
                        }
                        echo $this->table->generate();
                      } 
                ?>
                  
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