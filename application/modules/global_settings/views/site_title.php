

<h2>Add Site Title Info</h2>
<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>

    </div>
<?php } ?>
<br />

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Create Your Title</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form  role="form" class="form-horizontal form-groups-bordered" action="<?php echo site_url('global_settings/add_title'); ?>" method="post" enctype="multipart/form-data">


                    <div class="form-group">
                        <label class="col-sm-3 control-label">Site Title</label>





                        <div class="col-sm-8">



                            <?php foreach ($title as $r) { ?>

                                <?php if ($r['title_name'] == 0) { ?>



                                    <input type="hidden" name="title_id" value="<?php echo $r['title_id'] ?>">
                                    <textarea class="form-control "  name="title"><?php echo $r['title_name'] ?></textarea>


                                <?php } ?>

                            <?php } ?>

                        </div> 
                    </div>


                    <div class="form-group col-sm-8">
                        <button style="float: right;width:100px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Submit</button>	
                    </div>
                </form>


            </div>

        </div>

    </div>
</div>
