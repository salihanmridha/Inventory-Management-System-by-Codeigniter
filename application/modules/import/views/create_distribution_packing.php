          
<h2>Add Distribution Packing Info</h2>

<a href="<?php echo site_url('import/view_distribution_packing'); ?>" class="btn btn-primary btn-icon icon-left" >
    view Distribution Packing
    <i class=" glyphicon glyphicon-plus-sign"></i>
</a>
<br><br>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Create New Distribution Packing</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form action="<?php echo site_url('import/get_product_import_distribution'); ?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    <div class="col-md-12">
                        <div class="col-md-6">


                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Product Name</label>

                                <div class="col-sm-8">

                                    <select  name="product_id" class="select2" data-allow-clear="true" data-placeholder="Select Product...">
                                        <option></option>
                                        <?php foreach ($product as $r) { ?>
                                            <option value="<?php echo $r['product_id'] ?>"><?php echo $r['product_name'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-1">
                            <a style="font-weight: bold;font-size: 15px">OR</a>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Code No</label>

                                <div class="col-sm-8">

                                    <select id="product_id_code" name="product_id_code" class="select2" data-allow-clear="true" data-placeholder="Select Code No...">
                                        <option></option>
                                        <?php foreach ($product as $r) { ?>
                                            <option value="<?php echo $r['product_id'] ?>"><?php echo $r['product_code_no'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-sm-12" style="text-align: center;margin-top: -20px;margin-left: 33px;">
                        <button style="width:auto;height:29px;font-size:11px;text-align: center;"  type="submit" class="btn btn-success">Go To Search</button>	
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>
