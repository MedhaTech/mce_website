<main id="main-container">
    <div class="content">
        <?php if($this->session->flashdata('message')){?>
        <div class="alert <?=$this->session->flashdata('status');?>" id="msg">
            <p class="mb-0"><?php echo $this->session->flashdata('message')?></p>
        </div>
        <?php } ?>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?=$pageTitle;?></h6>
                <div class="dropdown no-arrow">
                    <?php echo anchor('aicte/addLatestNews','<i class="fas fa-plus fa-sm fa-fw text-danger"></i> Add New', 'class="text-danger" ');?>
                </div>
            </div>
            <div class="card-body px-2">
                <?php 
                    if($latestNews != null){
                        $table_setup = array ('table_open'=> '<table class="table table-hover table-vcenter js-dataTable-full" id="dataTable" width="100%" cellspacing="0">');
                        $this->table->set_template($table_setup);
			            $this->table->set_heading(
							  array('data' => 'S.No', 'width' => "5%"),
							  array('data' => 'Latest Events', 'width' => "55%"),
							  array('data' => 'Date', 'width' => "20%"),
							  array('data' => 'Actions', 'width' => "20%")
                              );
                        $i=1;
			            foreach ($latestNews as $latestNews1) {

                          

                            $actionItems = ' <div class="btn-group">
                                    
                                    <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit">'.anchor('aicte/editLatestNews/'.$latestNews1->id,'<i class="fa fa-fw fa-pencil-alt"></i>','class="text-dark"').'</button>
                                    <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Remove">'.anchor('aicte/deleteLatestNews/'.$latestNews1->id,'<i class="fa fa-fw fa-times"></i>','class="text-dark"').'</button>
                                </div>';
                            $this->table->add_row($i++,
							        $latestNews1->news_title,
                                    date('d-m-Y', strtotime($latestNews1->news_date)),
                                    $actionItems
					            );
                        }
                         echo $this->table->generate();     
                    }else{
                      echo '<h4 class="text-center text-muted mb-5 mt-5 pb-5 pt-5"> Latest events not yet created..! </h4>';
                    }
                ?>
            </div>
        </div>
    </div>
</main>