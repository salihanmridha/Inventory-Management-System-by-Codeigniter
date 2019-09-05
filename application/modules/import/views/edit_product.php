          
<h2>Update Product Info</h2>

<a href="<?php echo site_url('import/view_product_making'); ?>" class="btn btn-primary btn-icon icon-left" >
    View Product
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
                    <b>Update Your Product</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">
                
                <form action="<?php echo site_url('import/update_product'); ?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Supplier Name</label>
                                
                                <div class="col-sm-8">

                                    <select  name="supplier_id" class="select2" data-allow-clear="true" data-placeholder="Select Supplier...">
                                        <option></option>
                                        <?php foreach ($product as $r){?>
                                        <option selected="" value="<?php echo $r['supplier_id'] ?>"><?php echo $r['supplier_name'] ?></option>
                                        <?php } ?>
                                        
                                        <?php foreach ($supplier as $r) { ?>
                                            <option value="<?php echo $r['supplier_id'] ?>"><?php echo $r['supplier_name'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Code No</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <input name="product_code_no" type="text" class="form-control" value="<?php echo $r['product_code_no']?>">
                                    <input type="hidden" name="product_id" value="<?php echo $r['product_id']?>">
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <input name="product" type="text" class="form-control" value="<?php echo $r['product']?>">
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Brand</label>

                                <div class="col-sm-8">

                                    <select  name="brand_id" class="select2" data-allow-clear="true" data-placeholder="Select Brand...">
                                        <option></option>
                                        <?php foreach ($product as $r){?>
                                        <option selected="" value="<?php echo $r['brand_id'] ?>"><?php echo $r['brand_name'] ?></option>
                                        <?php }?>
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
                                        <select id="country" class="select2" name ="country">
                                            <?php foreach ($product as $r){?>
                                            <option selected="" value="<?php echo $r['country'] ?>"><?php echo $r['country'] ?></option>
                                            <?php }?>
                                        </select><br>
                                        <select name ="state" id ="state" >
                                            <?php foreach ($product as $r){?>
                                            <option selected="" value="<?php echo $r['state'] ?>"><?php echo $r['state'] ?></option>
                                            <?php }?>
                                        </select>
                                        <!--	Select Country:   <select id="country2" name ="country2"></select>-->
                                    </div>

                                    <script language="javascript">
                                            populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
                                            
                                    </script>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product name</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <input name="product_name"  type="text" class="form-control" value="<?php echo $r['product_name'] ?>">
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Ingradient</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <input name="ingradient" type="text" class="form-control" value="<?php echo $r['ingradient'] ?>">
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Entry Date</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <input name="entry_date" type="date" class="form-control" value="<?php echo $r['entry_date'] ?>">
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Unit</label>

                                <div class="col-sm-8">

                                    <select  name="unit_id" class="select2" data-allow-clear="true" data-placeholder="Select Unit...">
                                        <option></option>
                                        <?php foreach ($product as $r){?>
                                        <option selected="" value="<?php echo $r['unit_id'] ?>"><?php echo $r['unit_name'] ?></option>
                                        <?php }?>
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
                                        <?php foreach ($product as $r){?>
                                        <option selected="" value="<?php echo $r['style_id'] ?>"><?php echo $r['style_name'] ?></option>
                                        <?php }?>
                                        <?php foreach ($style as $r) { ?>
                                            <option value="<?php echo $r['style_id'] ?>"><?php echo $r['style_name'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product Description</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <textarea name="product_des" class="form-control"><?php echo $r['product_description']?></textarea>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product Price</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <input name="product_price" type="text" class="form-control" value="<?php echo $r['product_price']?>">
                                    <?php }?>
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label">Product Image</label>

                                    <div class="col-sm-8">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                                <?php foreach ($product as $r){?>
                                                <img src="<?php echo base_url(); ?>package_media/product/<?php echo $r['image'] ?>" alt="...">
                                                <?php }?>
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="userfile" accept="image/*">
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>        


                        </div>
                    </div>
                    
                    <div class="col-md-12" style="display: none">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Supplier Name</label>
                                
                                <div class="col-sm-8">

                                    <select  name="supplier_id_old" class="select2" data-allow-clear="true" data-placeholder="Select Supplier...">
                                        <option></option>
                                        <?php foreach ($product as $r){?>
                                        <option selected="" value="<?php echo $r['supplier_id'] ?>"><?php echo $r['supplier_name'] ?></option>
                                        <?php } ?>
                                        
                                        <?php foreach ($supplier as $r) { ?>
                                            <option value="<?php echo $r['supplier_id'] ?>"><?php echo $r['supplier_name'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Code No</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <input name="product_code_no_old" type="text" class="form-control" value="<?php echo $r['product_code_no']?>">
                                    <input type="hidden" name="product_id" value="<?php echo $r['product_id']?>">
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <input name="product_old" type="text" class="form-control" value="<?php echo $r['product']?>">
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Brand</label>

                                <div class="col-sm-8">

                                    <select  name="brand_id_old" class="select2" data-allow-clear="true" data-placeholder="Select Brand...">
                                        <option></option>
                                        <?php foreach ($product as $r){?>
                                        <option selected="" value="<?php echo $r['brand_id'] ?>"><?php echo $r['brand_name'] ?></option>
                                        <?php }?>
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
                                        <select id="country" class="select2" name ="country_old">
                                            <?php foreach ($product as $r){?>
                                            <option selected="" value="<?php echo $r['country'] ?>"><?php echo $r['country'] ?></option>
                                            <?php }?>
                                        </select><br>
                                        <select name ="state_old" id ="state" >
                                            <?php foreach ($product as $r){?>
                                            <option selected="" value="<?php echo $r['state'] ?>"><?php echo $r['state'] ?></option>
                                            <?php }?>
                                        </select>
                                        <!--	Select Country:   <select id="country2" name ="country2"></select>-->
                                    </div>

                                    <script language="javascript">
                                            populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
                                            
                                    </script>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product name</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <input name="product_name_old"  type="text" class="form-control" value="<?php echo $r['product_name'] ?>">
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Ingradient</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <input name="ingradient_old" type="text" class="form-control" value="<?php echo $r['ingradient'] ?>">
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Entry Date</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <input name="entry_date_old" type="date" class="form-control" value="<?php echo $r['entry_date'] ?>">
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Unit</label>

                                <div class="col-sm-8">

                                    <select  name="unit_id_old" class="select2" data-allow-clear="true" data-placeholder="Select Unit...">
                                        <option></option>
                                        <?php foreach ($product as $r){?>
                                        <option selected="" value="<?php echo $r['unit_id'] ?>"><?php echo $r['unit_name'] ?></option>
                                        <?php }?>
                                        <?php foreach ($unit as $r) { ?>
                                            <option value="<?php echo $r['unit_id'] ?>"><?php echo $r['unit_name'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Style & Size</label>

                                <div class="col-sm-8">

                                    <select  name="style_id_old" class="select2" data-allow-clear="true" data-placeholder="Select Style & Size...">
                                        <option></option>
                                        <?php foreach ($product as $r){?>
                                        <option selected="" value="<?php echo $r['style_id'] ?>"><?php echo $r['style_name'] ?></option>
                                        <?php }?>
                                        <?php foreach ($style as $r) { ?>
                                            <option value="<?php echo $r['style_id'] ?>"><?php echo $r['style_name'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product Description</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <textarea name="product_des_old" class="form-control"><?php echo $r['product_description']?></textarea>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-4 control-label">Product Price</label>

                                <div class="col-sm-8">
                                    <?php foreach ($product as $r){?>
                                    <input name="product_price_old" type="text" class="form-control" value="<?php echo $r['product_price']?>">
                                    <?php }?>
                                </div>
                            </div>
                            
                            
                                   


                        </div>
                    </div>

                    <div class="form-group col-sm-12" style="text-align: center">
                        <button style="width:100px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Update</button>	
                    </div>
                </form>
                
            </div>

        </div>

    </div>
</div>
