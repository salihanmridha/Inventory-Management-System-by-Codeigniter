          
<h2>Add Product Info</h2>

<a href="<?php echo site_url('import/view_product_making'); ?>" class="btn btn-primary btn-icon icon-left" >
    View Product
    <i class=" glyphicon glyphicon-plus-sign"></i>
</a>
<br><br>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Create New Product</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form action="<?php echo site_url('import/insert_product'); ?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Supplier Name</label>

                                <div class="col-sm-8">

                                    <select  name="supplier_id" class="select2" data-allow-clear="true" data-placeholder="Select Supplier...">
                                        <option></option>
                                        <?php foreach ($supplier as $r) { ?>
                                            <option value="<?php echo $r['supplier_id'] ?>"><?php echo $r['supplier_name'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product</label>

                                <div class="col-sm-8">
                                    <input name="product" type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Brand</label>

                                <div class="col-sm-8">

                                    <select  name="brand_id" class="select2" data-allow-clear="true" data-placeholder="Select Brand...">
                                        <option></option>
                                        <?php foreach ($brand as $r) { ?>
                                            <option value="<?php echo $r['brand_id'] ?>"><?php echo $r['brand_name'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Origin</label>

                                <div class="col-sm-8">

                                    <div style='text-align:center;'>
                                        <script src="<?php echo base_url(); ?>assets/js/country.js"></script>
                                        <select id="country" class="select2" name ="country"></select> </br></br>
                                        <select name ="state" id ="state" ></select>
                                        <!--	Select Country:   <select id="country2" name ="country2"></select>-->
                                    </div>

                                    <script language="javascript">
                                            populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
                                            
                                    </script>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label"> Code No</label>

                                <div class="col-sm-8">
                                    <input name="product_code_no" type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product name</label>

                                <div class="col-sm-8">
                                    <input name="product_name"  type="text" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Ingradient</label>

                                <div class="col-sm-8">
                                    <input name="ingradient" type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Entry Date</label>

                                <div class="col-sm-8">
                                    <input name="entry_date" type="date" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Unit</label>

                                <div class="col-sm-8">

                                    <select  name="unit_id" class="select2" data-allow-clear="true" data-placeholder="Select Unit...">
                                        <option></option>
                                        <?php foreach ($unit as $r) { ?>
                                            <option value="<?php echo $r['unit_id'] ?>"><?php echo $r['unit_name'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Style & Size</label>

                                <div class="col-sm-8">

                                    <select  name="style_id" class="select2" data-allow-clear="true" data-placeholder="Select Style & Size...">
                                        <option></option>
                                        <?php foreach ($style as $r) { ?>
                                            <option value="<?php echo $r['style_id'] ?>"><?php echo $r['style_name'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product Description</label>

                                <div class="col-sm-8">
                                    <textarea name="product_des" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product Price</label>

                                <div class="col-sm-8">
                                    <input name="product_price" type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product Image</label>

                                <div class="col-sm-8">
                                    <input type="file" class="form-control file2 inline btn btn-primary" name="userfile" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Browse Image" />
                                </div>
                            </div>       


                        </div>
                    </div>

                    <div class="form-group col-sm-12" style="text-align: center">
                        <button style="width:100px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Submit</button>	
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>
