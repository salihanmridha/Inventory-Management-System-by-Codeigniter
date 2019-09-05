

<h2>Product Sales Info</h2>

<a href="<?php echo site_url('sales/view_sales'); ?>" class="btn btn-primary btn-icon icon-left" >
    View Sales
    <i class=" glyphicon glyphicon-plus-sign"></i>
</a>
<br><br>



<div class="row" >
    <div class="col-md-12">
        <div class="col-md-9">
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Create New Sale</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form class="form-horizontal form-groups-bordered" action="<?php echo site_url('sales/insert_sales');?>" method="post">
                    <div class="col-md-12">

                        <?php
if ($unconfirmed_sale_count == 0) {
    ?>
    <div class="form-group">
        <label class="col-sm-3 control-label">Customer Select</label>

        <div class="col-sm-8" >
            <span class="col-sm-7">
                <select name="customer_id" id="customer_id"  class="form-control select2" data-placeholder="Select Product..." required="">
                    <?php foreach ($view_customer as $r) { ?>
                    <option  value="<?php echo $r['customer_id'] ?>"><?php echo $r['name'] ?></option>
                    <?php } ?>
                </select>
            </span>
            <a target="_blank" href="<?php echo site_url('sales/new_customer'); ?>" class="btn btn-primary btn-icon icon-left" >
                Add Customer
                <i class=" glyphicon glyphicon-plus-sign"></i>
            </a>
        </div>
    </div>
<?php
} else {
    ?>
      <div class="form-group">
        <label class="col-sm-3 control-label">Customer Select</label>

        <div class="col-sm-8" >
            <div class="col-sm-7" >
            <?php foreach ($customer as $r) { ?>
            <input class="form-control" disabled="" type="text" name="customer_id" id="customer_id" value="<?php echo $r['name']?>">
            <?php } ?>
            
            <?php foreach ($customer as $r) { ?>
            <input type="hidden" name="customer_id" id="customer_id" value="<?php echo $r['customer_id']?>">
            <?php } ?>
            </div>
            <?php foreach ($invoice_no as $r) { ?>
            <div class="col-sm-3" >
                <input  type="text" value="Invoice NO : #<?php echo $r['sales_invoice_no_1']?>" disabled="" style="border: none;background-color: white;color: black;">
            </div>
             <?php } ?>
        </div>
    </div>                  
                        
      <?php } ?>                 
                        
                        <div class="form-group" >
                            <label class="col-sm-3 control-label">Select Product</label>

                            <div class="col-sm-8" >
                                <div class="col-sm-7" >
                                    <select name="import_code_no" id="import_code_no"   class="form-control select2" data-placeholder="Select Product..." required="">
                                        <option disabled=""  selected="" ></option>
                                        <?php foreach ($distribution_packing as $r) { ?>
                                            <option value="<?php echo $r['import_code_no'] ?>"><?php echo $r['product_name'] ?> - <?php echo $r['distribution_product_unit'] ?> - <?php echo $r['product_price'] ?> - <?php echo $r['import_code_no'] ?></option>
                                        <?php } ?>

                                    </select>
                                </div>

                                <div class="col-sm-3" >

                                    <input type="text" name="sale_quantity" id="sale_quantity" class="form-control" placeholder="quantity">

                                </div>
                                <button style="width:auto;"  type="submit" id="btn_save" class="btn btn-success">Submit</button>
                            </div>


                        </div>




                        

                    </div>
                </form>

            </div>

        </div>
            </div>
        <?php foreach ($customer as $r){?>
        <div class="col-md-3">
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Customer Details</b>
                </div>
            </div>

            <div class="panel-body" >
                
                <form class="form-horizontal form-groups-bordered">
                    <div class="col-md-12" id="initial" >
                    <div class="form-group">
                        
                    <input class="form-control" type="text" value="<?php echo $r['name']?>" disabled="">
                    <input class="form-control" type="text" value="<?php echo $r['email']?>" disabled="">
                    <input class="form-control" type="text" value="<?php echo $r['phone']?>" disabled="">
                    <textarea class="form-control" disabled=""><?php echo $r['address']?></textarea>
                    </div>
                        </div>
                 </form>
                
            </div>

        </div>
            
        </div>
            <?php }?>
    </div>
</div>

<?php
if ($unconfirmed_sale_count == 0) {
    ?>
    <div class="row"  style="display: none">

    </div>
<?php
} else {
    ?>

<div class="row" >
        <div class="col-md-12">

            

                <div class="panel-heading">
                    <div class="panel-title" >
                        <b>Sales Preview</b>

                    </div>

                    <a style="float: right;padding-right: 16px;margin-right: 16px;margin-top: 3px;" class="btn btn-info" id="print" onclick="printContent('unconfirmed_import_print');">Print</a>
                    <form action="<?php echo site_url('sales/final_sale'); ?>" method="post">

                        <?php foreach ($unconfirmed_final_sale as $r) { ?>
                            <input type="hidden" name="sales_id[]" value="<?php echo $r['sales_id'] ?>">
                        <?php } ?>

                        <button type="submit" style="float: right;padding-right: 16px;margin-right: 16px;margin-top: 3px;" class="btn btn-success" >Confirm Sale</button>
                    </form>
                </div>

                <div class="panel-body" id="unconfirmed_import_print">


                    <table class="table table-bordered" style="margin-top: -19px;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th>Price Rate</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody >
                            <?php foreach ($unconfirmed_sale as $r) { ?>
                            <tr>
                                <td><?php echo $r['sales_id']?></td>
                                <td><?php echo $r['product_name']?></td>
                                <td><?php echo $r['product_code_no']?></td>
                                <td><?php echo $r['product_price']?></td>
                                <td><?php echo $r['sale_quantity']?></td>
                                <td><?php echo $r['sale_quantity_price']?></td>
                                <td><a class="btn btn-danger" href="#">Remove</a></td>
                            </tr>
                            <?php }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th>Price Rate</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>

            


        </div>
    </div>
<?php } ?>


<?php
if ($unconfirmed_sale_count != 0) {
    ?>
<div class="form-group" style="display: none"></div>

<?php
} else {
    ?>
<div class="form-group">
    <input  type="text" value="Total = <?php echo $total_quantity?>" disabled="" style="margin-left: 596px;width: 123px;margin-bottom: 0px;margin-top: -64px;border: none;background-color: white;color: black;">
    <input  type="text" value="Total = <?php echo $total_price?>" disabled="" style="margin-left: 718px;width: 119px;margin-bottom: 0px;margin-top: -104px;border: none;background-color: white;color: black;">
</div>
<?php } ?>
<script>
    function printContent(unconfirmed_import_print) {
        var restorepage = $('body').html();
        var printcontent = $('#' + unconfirmed_import_print).clone();
        var enteredtext = $('#text').val();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
        $('#text').html(enteredtext);
    }
</script>



