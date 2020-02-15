<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Student</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>save-student">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="student_name">Student Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="student_name" type="text" name="student_name">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="student_phone">Student Phone</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="student_phone" type="text" name="student_phone">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="student_roll">Student Roll</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="student_roll" type="text" name="student_roll">
                        </div>
                    </div>

                    <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </fieldset>
                </form>
        
        </div>
    </div><!--/span-->
</div><!--/row-->