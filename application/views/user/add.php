      <div class="jumbotron">
        <?php echo validation_errors('<span class="error">', '</span>');?>
        <?php echo form_open('' ,'class="form-horizontal"');?>
        <?php // echo form_open('user/save/', 'class="form-horizontal"');?>
          <div class="form-group">
            <label for="f_name" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <?php echo form_input(array("class"=>"form-control", "name"=>"f_name", "id"=>"f_name", "placeholder"=>"First Name"));?>
            </div>
          </div>
          <div class="form-group">
            <label for="l_name" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
              <?php echo form_input(array("class"=>"form-control", "name"=>"l_name", "id"=>"l_name", "placeholder"=>"Last Name"));?>
            </div>
          </div>
          <div class="form-group">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <?php echo form_input(array("class"=>"form-control", "name"=>"username", "id"=>"username", "placeholder"=>"Username"));?>
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <?php echo form_input(array("class"=>"form-control", "name"=>"password", "id"=>"password", "placeholder"=>"Password"));?>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <?php echo form_checkbox(array("value"=>1, "id"=>"status", "name"=>"status"));?> Status
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <?php echo form_submit(array("value"=>"Save", "class"=>"btn btn-default"));?>
            </div>
          </div>
        <?php echo form_close();?>
      </div>

      <div class="row marketing">
        <div class="col-md-offset-2 col-md-8">
          
        </div>

      </div>