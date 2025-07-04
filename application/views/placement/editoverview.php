<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
<main id="main-container">
    <div class="content">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?=$pageTitle;?></h6>
            </div>
            <div class="card-body">
                <?php echo form_open($action, 'class="user"'); ?>
                <div class="form-group row mx-3">
                    <label for="about_department" class="text-uppercase col-lg-12">About Placement Policy </label>
                    <textarea id="about" name="about" class="form-control col-lg-12"
                        rows=6><?php echo (set_value('about'))?set_value('about'):$departmentsDetails->about;?></textarea>
                    <script>
                    const textarea = document.querySelector('#about');
                    ClassicEditor
                        .create(textarea)
                        .then(editor => {
                            window.editor = editor
                        });
                    </script>
                    <span class="validationError"><?php echo form_error('about'); ?></span>
                </div>
                <div class="form-group row mx-3">
                    <label for="vision" class="text-uppercase col-lg-12">About Upcoming Placement Drives</label>
                    <textarea id="vision" name="vision" class="form-control  col-lg-12"
                        rows=6><?php echo (set_value('vision'))?set_value('vision'):$departmentsDetails->vision;?></textarea>
                    <script>
                    const visionTextarea = document.querySelector('#vision');
                    ClassicEditor
                        .create(visionTextarea)
                        .then(editor => {
                            window.editor = editor
                        });
                    </script>
                    <span class="validationError"><?php echo form_error('vision'); ?></span>
                </div>
                <div class="form-group row mx-3">
                    <label for="mission" class="text-uppercase col-lg-12">About Upcoming Skill Development Activities Circulars</label>
                    <textarea id="mission" name="mission" class="form-control col-lg-12"
                            rows=6><?php echo (set_value('mission'))?set_value('mission'):$departmentsDetails->mission;?></textarea>
					<script>
                    const missionTextarea = document.querySelector('#mission');
                    ClassicEditor
                        .create(missionTextarea)
                        .then(editor => {
                            window.editor = editor
                        });
                    </script>
					<span class="validationError"><?php echo form_error('mission'); ?></span>
                </div>

                <div class="form-group row mx-3">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-danger btn-sm" name="Update" id="Update"><i
                                class="fas fa-edit"></i> Update</button>
                        <?php echo anchor('placement/overview','<i class="fas fa-arrow-left fa-sm fa-fw"></i> Cancel', 'class="btn btn-info btn-sm" '); ?>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</main>