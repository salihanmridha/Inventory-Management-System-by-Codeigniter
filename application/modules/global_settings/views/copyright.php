

<h2>Add Copyright Info</h2>
<br />

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Create Your Copyright</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" class="form-horizontal form-groups-bordered" action="<?php echo site_url('global_settings/add_copyright'); ?>" method="post" enctype="multipart/form-data">


                    <div class="form-group">
                        <label class="col-sm-3 control-label">Copyright Info</label>

                        <div class="col-sm-8">

                            <?php foreach ($copyright as $r) { ?>

                                <?php if ($r['copyright_name'] == 0) { ?>

                                    <div class="input-group minimal">

                                        <input type="hidden" name="copyright_id" value="<?php echo $r['copyright_id'] ?>">
                                        <textarea class="form-control ckeditor"  name="copyright"><?php echo $r['copyright_name'] ?></textarea>

                                    </div>
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
