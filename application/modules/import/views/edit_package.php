

<h2>Update Package Info</h2>

<a href="<?php echo site_url('import/view_package'); ?>" class="btn btn-primary btn-icon icon-left" >
    View Package
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
                    <b>Update Your Package</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">
                
                <form role="form" action="<?php echo site_url('import/update_package');?>" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">


                    <?php foreach ($package as $r){?>
                    <input type="hidden" name="package_id" value="<?php echo $r['package_id']?>">
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Package Name</label>

                        <div class="col-sm-8">
                            <input name="package_name" type="text" class="form-control" value="<?php echo $r['package_name']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Product Name</label>

                        <div class="col-sm-8">
                            <input name="product_name" type="text" class="form-control" value="<?php echo $r['package_product_name']?>">
                        </div>
                    </div>
                    <?php }?>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Previous Package - Invoice Imported Product</label>

                        <div class="col-sm-7">
                            <select   class="form-control" multiple="multiple">
                                <?php foreach ($package_imported as $r){?>
                                    <option value="<?php echo $r['product_name']?>"><?php echo $r['product_name']?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Select Imported Product</label>

                        <div class="col-sm-7">
                            <select name="imported_product_id[]" multiple="multiple" name="my-select[]" class="form-control multi-select">
                                <?php foreach ($import_invoice as $r){?>
                                    <option value="<?php echo $r['import_invoice_id']?>"><?php echo $r['product_name']?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Previous Package - Stock Product</label>

                        <div class="col-sm-7">
                            <select   class="form-control" multiple="multiple">
                                <?php foreach ($package_stock_imported as $r){?>
                                    <option value="<?php echo $r['product_name']?>"><?php echo $r['product_name']?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Select Stock Product</label>

                        <div class="col-sm-7">
                            <select name="stock_product_id[]" multiple="multiple" name="my-select[]" class="form-control multi-select">
                               
                                <?php foreach ($import_stock as $r){?>
                                    <option value="<?php echo $r['import_stock_id']?>"><?php echo $r['product_name']?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <?php foreach ($package as $r){?>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Author</label>

                        <div class="col-sm-5">
                            <input  type="text" class="form-control"  value="<?php echo $r['author']?>" name="author">
                        </div>
                    </div>
                    <?php }?>
                    <div class="form-group col-sm-8">
                        <button style="float: right;width:100px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Submit</button>	
                    </div>
                </form>
                

            </div>

        </div>

    </div>
</div>
