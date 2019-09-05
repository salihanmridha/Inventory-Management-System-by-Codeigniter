          
<h2>Update Product Info (Import From Invoice)</h2>

<a href="<?php echo site_url('import/view_import'); ?>" class="btn btn-primary btn-icon icon-left" >
    View Import
    <i class=" glyphicon glyphicon-plus-sign"></i>
</a>
<br><br>
<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>

    </div>
<?php } ?>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>View & Update Your Data</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <?php foreach ($import_invoice as $r) { ?>
                    <form action="<?php echo site_url('import/update_import'); ?>/<?php echo $r['import_id'] ?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                        <div class="col-md-12" id="initial" >
                                <div class="col-md-6">
                                    <input type="hidden" name="product_id" value="<?php echo $r['product_id'] ?>">
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Documents No</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="documents_no" type="text" class="form-control" value="<?php echo $r['documents_no'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Batch No</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="batch_no" type="text" class="form-control" value="<?php echo $r['batch_no'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Product</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="product" type="text" class="form-control" value="<?php echo $r['product'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Brand</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="brand" type="text" class="form-control" value="<?php echo $r['brand'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Origin</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="origin" type="text" class="form-control" value="<?php echo $r['origin'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Product name</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="product_name"  type="text" class="form-control" value="<?php echo $r['product_name'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Product Code</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="product_code" type="text" class="form-control" value="<?php echo $r['product_code'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Ingradient</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="ingradient" type="text" class="form-control" value="<?php echo $r['ingradient'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Entry Date</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="entry_date" type="date" class="form-control" value="<?php echo $r['entry_date'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Product Unit</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="product_unit" type="text" class="form-control" value="<?php echo $r['product_unit'] ?>">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Product Price</label>

                                        <div class="col-sm-8">
                                            <input disabled="" id="product_price" name="product_price" type="text" class="form-control" value="<?php echo $r['product_price'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Production Date</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="production_date" type="date" class="form-control" value="<?php echo $r['production_date'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Expiery Date</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="expiery_date" type="date" class="form-control" value="<?php echo $r['expiery_date'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Lost & damage</label>

                                        <div class="col-sm-8">
                                            <input disabled="" name="lost_damage" type="text" class="form-control" value="<?php echo $r['lost_damage'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Product Description</label>

                                        <div class="col-sm-8">
                                            <textarea disabled="" name="product_description" class="form-control"><?php echo $r['product_description'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label">Product Image</label>

                                    <div class="col-sm-8">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                                <img src="<?php echo base_url(); ?>package_media/product/<?php echo $r['image'] ?>" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>

                                        </div>
                                    </div>
                                </div> 


                                    <div class="form-group" >
                                        <label for="field-1" class="col-sm-4 control-label">Author</label>

                                        <div class="col-sm-8">
                                            <input disabled="" id="author" name="author" type="text" class="form-control" value="<?php echo $r['author'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

<!--                        <div class="form-group col-sm-12" style="text-align: center">
                            <button style="width:100px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Update</button>	
                        </div>-->
                    </form>
                <?php } ?>

            </div>

        </div>

    </div>
</div>
