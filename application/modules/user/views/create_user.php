          
<h2>Add User Previledge Info</h2>

<a href="<?php echo site_url('user/view_user'); ?>" class="btn btn-primary btn-icon icon-left" >
    View User
    <i class=" glyphicon glyphicon-plus-sign"></i>
</a>

<br><br>
 <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> <?php echo $this->session->flashdata('success'); ?>

        </div>
    <?php } ?>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Create New User</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form action="<?php echo site_url('user/insert_user'); ?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    <div class="col-md-12">
                        <div class="col-md-6">
                            
                            
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Email</label>

                                <div class="col-sm-8">
                                    <input name="email" type="text" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Password</label>

                                <div class="col-sm-8">
                                    <input name="password"  type="password" class="form-control" placeholder="*******">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">User Type</label>

                                <div class="col-sm-8">
                                    <input name="type"  type="text" class="form-control" placeholder="Enter User Type">
                                </div>
                            </div>
                        </div>
           
                    </div>

                    <div class="form-group col-sm-6" style="text-align: center">
                        <button style="width:100px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Create</button>	
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>
