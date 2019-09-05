
<h2>Add Product Info</h2>

<a href="<?php echo site_url('import/view_import'); ?>" class="btn btn-primary btn-icon icon-left" >
    Import Invoice
    <i class=" glyphicon glyphicon-plus-sign"></i>
</a>
<br><br>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Import Product</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body" >
                <form action="<?php echo site_url('import/get_product_import'); ?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <div class="col-md-8">


                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Supplier Name</label>

                                <div class="col-sm-8">

                                    <select  name="supplier_id"  id="group_select" class="form-control" data-native="true" required onchange="category_option()">
                                        <option value="" disabled selected="">Select Supplier</option>
                                        <?php foreach ($supplier_info as $r) { ?>
                                            <option selected="" value="<?php echo $r['supplier_id'] ?>"><?php echo $r['supplier_name'] ?></option>
                                        <?php } ?>

                                        <?php foreach ($supplier as $r) { ?>
                                            <option value="<?php echo $r['supplier_id'] ?>"><?php echo $r['supplier_name'] ?></option>
                                        <?php } ?>


                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Product Name</label>

                                <div class="col-sm-8">

                                    <select  name="product_id" id="bus_type" class="form-control" required="">
                                        <option value="" disabled selected="">Select..</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label"></label>
                                <div class="col-sm-8" >
                                    <button style="width:auto;"  type="submit" class="btn btn-success">Go To Search</button>
                                </div>
                            </div>

                        </div>



                    </div>


                </form>
            </div>

        </div>

    </div>
</div>

<?php foreach ($supplier_info as $r) { ?>

    <?php
    if ($r['supplier_id'] == '') {
        ?>

        <div class="row" style="display: none">

        </div>
    <?php
    } else {
        ?>
        <div class="row" >
            <div class="col-md-6">
                <div class="panel panel-primary" data-collapsed="0">

                    <div class="panel-heading">
                        <div class="panel-title" >
                            <b>Supplier Details</b>
                        </div>
                    </div>

                    <div class="panel-body" >
                        <?php foreach ($supplier_info as $r) { ?>
                            <form class="form-horizontal form-groups-bordered">
                                <div class="col-md-12" id="initial" >
                                    <div class="form-group">

                                        <input class="form-control" type="text" value="<?php echo $r['supplier_name'] ?>" disabled="">
                                        <input class="form-control" type="text" value="<?php echo $r['supplier_email'] ?>" disabled="">
                                        <input class="form-control" type="text" value="<?php echo $r['supplier_phone'] ?>" disabled="">
                                        <textarea class="form-control" disabled=""><?php echo $r['supplier_address'] ?></textarea>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>

    <?php } ?>
<?php } ?>


<?php
if ($unconfirmed_import == 0) {
    ?>
    <div class="row show_table" id="show_table" style="display: none">

    </div>
<?php
} else {
    ?>

    <div class="row" >
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">


                     <form action="<?php echo site_url('import/final_import'); ?>" method="post">



                      <div class="row" >
                <div class="col-md-12">
                            <div class="panel-body">



                            <div class="col-md-12">
                                <div class="col-md-5" style="float: right">




                                <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Duty & Taxes</label>

                                        <div class="col-sm-8">

                                            <input style="margin-bottom: 9px;" name="duty_tax" id="duty_taxes" type="text" class="form-control" required="">

                                        </div>
                                    </div>

                                <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Transport Cost</label>

                                        <div class="col-sm-8">

                                            <input style="margin-bottom: 9px;" name="transport_cost" id="transport_cost" type="text" class="form-control" required="">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Others Cost</label>

                                        <div class="col-sm-8">

                                            <input style="margin-bottom: 9px;" name="others_cost" id="others_cost" type="text" class="form-control" required="">

                                        </div>
                                    </div>
                            <a style="float: right;padding-right: 16px;margin-right: 16px;margin-top: 15px;" class="btn btn-info" id="print" onclick="printContent('unconfirmed_import_print');">Print</a>

                        <?php foreach ($unconfirmed_import_final_import as $r) { ?>
                            <input type="hidden" name="unconfirmed_import_id[]" value="<?php echo $r['unconfirmed_import_id'] ?>">
                        <?php } ?>
                        <button type="submit" style="float: right;padding-right: 16px;margin-right: 16px;margin-top: 15px;" class="btn btn-success" >Import</button>
                           </div>

                            </div>
                            </div>
                </div>
                          </div>





                    </form>



                <div class="panel-body" id="unconfirmed_import_print">


                    <table class="table table-bordered" id="table4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Supplier_name</th>
                                <th>Doc. No</th>
                                <th>Product</th>
                                <th>Brand</th>
                                <th>Origin</th>
                                <th>Product Name</th>
                                <th>Production Date</th>
                                <th>Entry Date</th>
                                <th>Quantity</th>
                                <th>Lost/Damage</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody id="show_data">

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Supplier_name</th>
                                <th>Doc. No</th>
                                <th>Product</th>
                                <th>Brand</th>
                                <th>Origin</th>
                                <th>Product Name</th>
                                <th>Production Date</th>
                                <th>Entry Date</th>
                                <th>Quantity</th>
                                <th>Lost/Damage</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>


        </div>
    </div>
<?php } ?>




<?php foreach ($supplier_info as $r) { ?>

    <?php
    if ($r['supplier_id'] == '') {
        ?>
        <form style="display: none">

        </form>
    <?php
    } else {
        ?>
        <form >
            <div class="row" id="unconfirmed_import">
                <div class="col-md-12">

                    <div class="panel panel-primary" data-collapsed="0">

                        <div class="panel-heading">
                            <div class="panel-title" >
                                <b>Import New Product</b>
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
                                <div class="col-md-5">

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Supplier Name</label>

                                        <div class="col-sm-8">

                                            <?php foreach ($product_supplier_info as $r) { ?>
                                                <input  type="text" class="form-control" value="<?php echo $r['supplier_name'] ?>" readonly="">
                                            <?php } ?>
                                            <?php foreach ($product_supplier_info as $r) { ?>
                                                <input name="supplier_id" id="supplier_id" type="hidden" class="form-control" value="<?php echo $r['supplier_id'] ?>" readonly="">
                                            <?php } ?>

                                        </div>
                                    </div>
                                    <?php foreach ($product_supplier_info as $r) { ?>
                                        <input name="product_id" id="product_id" type="hidden" class="form-control" value="<?php echo $r['product_id'] ?>" readonly="">
                                    <?php } ?>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Code No</label>

                                        <div class="col-sm-8">
                                            <?php foreach ($product_supplier_info as $r) { ?>
                                                <input name="product_code_no" type="text" class="form-control" value="<?php echo $r['product_code_no'] ?>" readonly="">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Product</label>

                                        <div class="col-sm-8">
                                            <?php foreach ($product_supplier_info as $r) { ?>
                                                <input name="product" type="text" class="form-control" value="<?php echo $r['product'] ?>" readonly="">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"> Brand</label>

                                        <div class="col-sm-8">


                                            <?php foreach ($product_supplier_info as $r) { ?>
                                                <input name="brand_id" type="text" class="form-control" value="<?php echo $r['brand_name'] ?>" readonly="">
                                            <?php } ?>


                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"> Country</label>

                                        <div class="col-sm-8">
                                            <?php foreach ($product_supplier_info as $r) { ?>
                                                <input name="country" type="text" class="form-control" value="<?php echo $r['country'] ?>" readonly="">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">State</label>

                                        <div class="col-sm-8">
                                            <?php foreach ($product_supplier_info as $r) { ?>
                                                <input name="state" type="text" class="form-control" value="<?php echo $r['state'] ?>" readonly="">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Product name</label>

                                        <div class="col-sm-8">
                                            <?php foreach ($product_supplier_info as $r) { ?>
                                                <input name="product_name" type="text" class="form-control" value="<?php echo $r['product_name'] ?>" readonly="">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Ingradient</label>

                                        <div class="col-sm-8">
                                            <?php foreach ($product_supplier_info as $r) { ?>
                                                <input name="ingradient" type="text" class="form-control" value="<?php echo $r['ingradient'] ?>" readonly="">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Entry Date</label>

                                        <div class="col-sm-8">
                                             <?php foreach ($product_supplier_info as $r) { ?>
                                                <input name="entry_date" type="text" class="form-control" value="<?php echo $r['entry_date'] ?>" readonly="">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"> Unit</label>

                                        <div class="col-sm-8">
                                            <?php foreach ($product_supplier_info as $r) { ?>
                                                <input name="unit_id" type="text" class="form-control" value="<?php echo $r['unit_name'] ?>" readonly="">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Style & Size</label>

                                        <div class="col-sm-8">
                                            <?php foreach ($product_supplier_info as $r) { ?>
                                                <input name="style_id" type="text" class="form-control" value="<?php echo $r['style_name'] ?>" readonly="">
                                            <?php } ?>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-7">


                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Product Description</label>

                                        <div class="col-sm-8">
                                             <?php foreach ($product_supplier_info as $r) { ?>
                                                <textarea name="product_description" class="form-control" readonly=""><?php echo $r['product_description'] ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Product Price</label>

                                        <div class="col-sm-8">
                                            <?php foreach ($product_supplier_info as $r) { ?>
                                                <input style="margin-bottom: 15px;" name="product_price" id="product_price" type="text" class="form-control" value="<?php echo $r['product_price'] ?>" readonly="">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Production Date</label>

                                        <div class="col-sm-8">

                                            <input style="margin-bottom: 9px;" name="production_date" id="production_date" type="date" class="form-control" >

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Expiery Date</label>

                                        <div class="col-sm-8">

                                            <input style="margin-bottom: 9px;" name="expiery_date" id="expiery_date" type="date" class="form-control" >

                                        </div>
                                    </div>

                                <?php foreach ($product_supplier_packing_info as $r) { ?>
                                    <?php
                                    if ($r['supplier_product_unit'] == '') {
                                        ?>
                                            <div class="form-group" style="display: none"></div>

                                        <?php
                                        } else {
                                            ?>
                                            <div class="form-group">
                                                <label for="field-1" class="col-sm-4 control-label">Supplier Product Unit</label>

                                                <div class="col-sm-8">

                                                    <input  name="supplier_product_unit" type="text" class="form-control" value="<?php echo $r['supplier_product_unit'] ?>" disabled="">

                                                </div>


                                            </div>
                                            <div class="form-group">
                                                <label for="field-1" class="col-sm-4 control-label">Supplier Product Quantity</label>

                                                <div class="col-sm-8">


                                                    <input  name="supplier_product_quantity" type="text" class="form-control" value="<?php echo $r['supplier_quantity'] ?>" disabled="">

                                                </div>


                                            </div>
                                        <?php } ?>
                                    <?php } ?>


                                    <?php foreach ($product_distribution_packing_info as $r) { ?>
                                        <?php
                                        if ($r['distribution_product_unit'] == '') {
                                            ?>
                                            <div class="form-group" style="display: none"></div>

                                        <?php
                                        } else {
                                            ?>
                                            <div class="form-group">
                                                <label for="field-1" class="col-sm-4 control-label">Distribution  Unit</label>

                                                <div class="col-sm-8">


                                                    <input  name="distribution_product_unit" type="text" class="form-control" value="<?php echo $r['distribution_product_unit'] ?>" disabled="">

                                                </div>

                                            </div>
                                            <div class="form-group" >
                                                <label for="field-1" class="col-sm-4 control-label">Distribution  Quantity</label>

                                                <div class="col-sm-8" style="padding-bottom: 12px;">



                                                    <input  name="distribution_quantity" id="distribution_quantity" type="text" class="form-control" value="<?php echo $r['supplier_distribution_quantity'] ?>" disabled="">

                                                </div>

                                            </div>
                                        <?php } ?>

                                    <?php } ?>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Lost & Damage</label>

                                        <div class="col-sm-8">

                                            <input style="margin-bottom: 9px;" name="lost_damage" id="lost_damage" type="text" class="form-control" >

                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Purchase Price</label>

                                        <div class="col-sm-8">

                                            <input style="margin-bottom: 9px;" name="cost_price" id="cost_price" type="text" class="form-control" >

                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="form-group col-sm-12" style="text-align: center">
                                <button style="width:100px;height:35px;font-size:15px;text-align: center"  type="submit" id="btn_save" class="btn btn-success">Submit</button>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </form>
    <?php } ?>

<?php } ?>


<script type="text/javascript">
    $(document).ready(function () {

        show_unconfirmed_import();
        $('#table4').dataTable();

        //function show all supplier
        function show_unconfirmed_import() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo site_url('import/unconfirmed_import_list') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr class="odd gradeX">' +
                                '<td>' + data[i].unconfirmed_import_id + '</td>' +
                                '<td>' + data[i].supplier_name + '</td>' +
                                '<td>' + data[i].product_code_no + '</td>' +
                                '<td>' + data[i].product + '</td>' +
                                '<td>' + data[i].brand_name + '</td>' +
                                '<td>' + data[i].state + '</td>' +
                                '<td>' + data[i].product_name + '</td>' +
                                '<td>' + data[i].production_date + '</td>' +
                                '<td>' + data[i].entry_date + '</td>' +
                                '<td>' + data[i].quantity + '</td>' +
                                '<td>' + data[i].lost_damage + '</td>' +
                                '<td>' +
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm" id="btn_delete"  data-unconfirmed_import_id="' + data[i].unconfirmed_import_id + '">Remove</a>' +
                                '</td>' +
                                '</tr>';
                    }

                    $('#show_data').html(html);


                }

            });
        }


        //Save supplier
        $('#btn_save').on('click', function () {
            var supplier_id = $('#supplier_id').val();
            var product_id = $('#product_id').val();
            var lost_damage = $('#lost_damage').val();
            var production_date = $('#production_date').val();
            var expiery_date = $('#expiery_date').val();
            var product_price = $('#product_price').val();
            var distribution_quantity = $('#distribution_quantity').val();
            var cost_price = $('#cost_price').val();

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('import/insert_unconfirmed_import') ?>",
                dataType: "JSON",
                data: {supplier_id: supplier_id, product_id: product_id, lost_damage: lost_damage, production_date: production_date, expiery_date: expiery_date, product_price: product_price, distribution_quantity: distribution_quantity,cost_price:cost_price},
                success: function () {
                    //window.location.href = 'import/get_product_import';
                    $('[name="supplier_id"]').val("");
                    $('[name="product_id"]').val("");
                    $('[name="lost_damage"]').val("");
                    $('[name="production_date"]').val("");
                    $('[name="expiery_date"]').val("");
                    $('[name="product_price"]').val("");
                    $('[name="distribution_quantity"]').val("");
                    $('[name="cost_price"]').val("");

                    $('#unconfirmed_import').hide();
                    show_unconfirmed_import();

                }

            });
            return false;

        });

        //delete record to database
        $('#btn_delete').on('click', function () {
            var unconfirmed_import_id = $(this).data('unconfirmed_import_id');
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('import/delete_unconfirmed_import') ?>",
                dataType: "JSON",
                data: {unconfirmed_import_id: unconfirmed_import_id},
                success: function () {
                    $('[name="unconfirmed_import_id"]').val("");
                    show_unconfirmed_import();
                }
            });
            return false;
        });


    });

</script>`
<script>
    function category_option()
    {
        var supplier_id = $('#group_select').val();
//        alert(g_name);
//        die();

        $.ajax({
            url: "<?php echo site_url('import/select_business_type'); ?>",
            type: "post",
            data: {supplier_id: supplier_id},
            success: function (msg) {

                $('#bus_type').html(msg);
            }

        });
    }
</script>
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
