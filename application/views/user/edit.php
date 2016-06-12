      <div class="jumbotron">
        <?php echo validation_errors('<span class="error">', '</span>');?>
        <?php echo form_open('' ,'class="form-horizontal"');?>
        <?php // echo form_open('user/save/', 'class="form-horizontal"');?>
          <div class="form-group">
            <label for="f_name" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <?php echo form_input(array(  "value"=>$user->f_name, "class"=>"form-control", "name"=>"f_name", "id"=>"f_name", "placeholder"=>"First Name"));?>
            </div>
          </div>
          <div class="form-group">
            <label for="l_name" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
              <?php echo form_input(array(  "value"=>$user->l_name, "class"=>"form-control", "name"=>"l_name", "id"=>"l_name", "placeholder"=>"Last Name"));?>
            </div>
          </div>
          <div class="form-group">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <?php echo form_input(array( "value"=>$user->username, "class"=>"form-control", "name"=>"username", "id"=>"username", "placeholder"=>"Username"));?>
            </div>
          </div>
          <!--<div class="form-group">-->
          <!--  <div class="col-sm-offset-2 col-sm-10">-->
          <!--    <div class="checkbox">-->
          <!--      <label>-->
          <!--        <?php // echo form_checkbox(array("checked"=>$user->status, "id"=>"status", "name"=>""));?> Status-->
          <!--        <?php // form_hidden('status', '1'); ?>-->
          <!--      </label>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
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