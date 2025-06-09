<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
<main id="main-container">
    <div class="content">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?=$pageTitle;?></h6>
            </div>
            <div class="card-body">
                <?php echo form_open($action, 'class="user"  enctype="multipart/form-data"'); ?>

                <div class="row  mx-5">
                <div class="form-group col-md-12 ">
                    <label for="title">Title of the event</label>
                    <input type="text" class="form-control form-control-sm" id="news_title" name="news_title" placeholder="Add Title of the event here.." value="<?php echo (set_value('news_title'))?set_value('news_title'):$Details->news_title;?>">
                    <span class="text-danger"><?php echo form_error('news_title'); ?></span>
                </div>
                </div>

                <div class="row  mx-5">
                <div class="form-group col-md-6">
                    <label for="title">Date</label>
                    <input type="date" class="form-control form-control-sm" id="news_date" name="news_date" placeholder="" value="<?php echo (set_value('news_date')) ? set_value('news_date') : $Details->news_date; ?>">
                    <span class="text-danger"><?php echo form_error('news_date'); ?></span>
                </div>

                <div class="form-group col-md-6">
                    <label for="details">Status</label>
                    <input type="text" class="form-control form-control-sm" id="news_details" name="news_details" placeholder="Status" value="<?php echo (set_value('news_details')) ? set_value('news_details') : $Details->news_details; ?>">
                    <span class="text-danger"><?php echo form_error('news_details'); ?></span>
                </div>
                </div>




                <div class="row  mx-5">
                    <div class="form-group col-md-6">
                        <label for="news_display">Select Attachments: (Max: 30MB) </label>
                        <input type='file' name='files[]'>
                        <span class="text-danger"><?php echo form_error('files'); ?></span>
                        <ul class="mt-3">
                            <?php
                                $fileNames = unserialize($Details->files);
                                foreach($fileNames as $key => $value){
                                    $del = anchor('aicte/latestNewsDelete/'.$Details->id.'/'.$key,'<i class="fa fa-times ml-2 text-danger"></i>','class=""');
                                    echo '<li>'.anchor('assets/latest_news/'.$value, $value, 'target="_blank"').'&nbsp;'.$del.'</li>';
                                }
                            ?>
                        </ul>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="display_in">Display in: <span class="text-danger">*</span></label>
                        <?php echo form_dropdown('display_in', $newsDisplay, $Details->display_in, 'class="form-control form-control-sm" id="display_in"'); ?>
                        <?php echo form_error('display_in', '<div class="error">', '</div>'); ?>
                    </div>
                </div>

                <div class="form-group mx-5">
                    <button type="submit" class="btn btn-danger btn-sm" name="Update" id="Update"><i
                            class="fas fa-edit"></i> Update</button>
                    <?php echo anchor('aicte/latestNews','<i class="fas fa-arrow-left fa-sm fa-fw"></i> Cancel', 'class="btn btn-info btn-sm" '); ?>
                </div>

                </form>
            </div>
        </div>
    </div>
</main>