      <div class="jumbotron">
        <table class="table table-hover"> 
            <thead> 
                <tr> 
                    <th>#</th> 
                    <th>First Name</th> 
                    <th>Last Name</th> 
                    <th>Username</th> 
                    <th>Status</th> 
                    <th></th> 
                </tr> 
            </thead> 
            <tbody> 
                <?php if(!empty($users)): ?>
                    <?php foreach ($users as $key=>$user): ?>
                    <tr> 
                        <th scope="row"> <?php echo $key+1;?> </th> 
                        <td> <?php echo $user->f_name;?> </td> 
                        <td> <?php echo $user->l_name;?> </td> 
                        <td> <?php echo $user->username;?> </td> 
                        <td> <?php echo ($user->status==1)? 'Active': 'Inactive';?> </td> 
                        <td>
                            <a href="<?php echo base_url();?>index.php/user/edit/<?php echo $user->id;?>" title="Edit"> 
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </a> &nbsp;&nbsp;
                            <a href="<?php echo base_url();?>index.php/user/view/<?php echo $user->id;?>" title="View"> 
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                        </td> 
                    </tr> 
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Data not foud!</p>
                <?php endif; ?>
            </tbody> 
        </table>
      </div>

      <div class="row marketing">
        <div class="col-md-offset-2 col-md-8">
            <a href="<?php echo base_url();?>index.php/user/add"></a>
        </div>

      </div>