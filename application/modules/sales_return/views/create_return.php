
<h2>Sales Return Info</h2>

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
                    <b>Sales Return</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body" >
                <form action="<?php echo site_url('sales_return/create_sales_return'); ?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <div class="col-md-8">


                            <div class="form-group">
                                <label class="col-sm-4 control-label"> Customer Name</label>

                                <div class="col-sm-8">

                                    <select  name="customer_id"  id="group_select" class="form-control" data-native="true" required onchange="category_option()">
                                        <option value="" disabled selected="">Select Customer</option>
                                        <?php foreach ($customer_info as $r) { ?>
                                            <option selected="" value="<?php echo $r['customer_id'] ?>"><?php echo $r['name'] ?></option>
                                        <?php } ?>

                                        <?php foreach ($customer as $r) { ?>
                                            <option value="<?php echo $r['customer_id'] ?>"><?php echo $r['name'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Product Name</label>

                                <div class="col-sm-8">

                                    <select  name="product_id" id="bus_type" class="form-control" required="">
                                        <option value="" disabled selected="">Select..</option>
                                        <?php foreach ($product_info as $r) { ?>
                                            <option selected="" value="<?php echo $r['product_id'] ?>"><?php echo $r['product_name'] ?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label"></label>
                                <div class="col-sm-8" >
                                    <button style="width:auto;"  type="submit" class="btn btn-success">Go</button>	
                                </div>
                            </div>

                        </div>



                    </div>


                </form>
            </div>

        </div>

    </div>
</div>


<?php foreach ($customer_info as $r) { ?>

    <?php
    if ($r['customer_id'] == '') {
        ?>
        <form style="display: none">

        </form>
    <?php
    } else {
        ?>  
<form action="<?php echo site_url('sales_return/insert_return');?>" method="post">
            <div class="row" id="unconfirmed_import">
                <div class="col-md-12">

                    <div class="panel panel-primary" data-collapsed="0">

                        <div class="panel-heading">
                            <div class="panel-title" >
                                <b>Sales Return</b>
                            </div>

                            <div class="panel-options">
                                <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                                <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">



                            <div class="col-md-12">
                                <div class="col-md-6">
                                    
                                    <?php foreach ($product_info as $r){?>
                                    <input type="hidden" name="product_id" value="<?php echo $r['product_id']?>">
                                    <?php }?>
                                    <?php foreach ($customer_info as $r){?>
                                    <input type="hidden" name="customer_id" value="<?php echo $r['customer_id']?>">
                                    <?php }?>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Sold Quantity</label>

                                        <div class="col-sm-6">
                                            <input name="sold_quantity" type="text" class="form-control" value="<?php echo $sales_count?>" readonly="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding-top: 34px;padding-bottom: 32px;">
                                        <label for="field-1" class="col-sm-4 control-label">Return Quantity</label>

                                        <div class="col-sm-6">
                                            <input name="return_quantity" type="text" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-group col-sm-6" style="text-align: center">
                                <button style="width:100px;height:35px;font-size:15px;text-align: center"  type="submit" id="btn_save" class="btn btn-success">Return</button>	
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </form>
    <?php } ?>

<?php } ?>



<script>
    function category_option()
    {
        var customer_id = $('#group_select').val();
//        alert(g_name);
//        die();

        $.ajax({
            url: "<?php echo site_url('sales_return/select_business_type'); ?>",
            type: "post",
            data: {customer_id: customer_id},
            success: function (msg) {

                $('#bus_type').html(msg);
            }

        });
    }
</script>




