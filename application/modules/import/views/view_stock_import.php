
<form name="frm1" action="<?php echo site_url('import/delete_all_stock_import'); ?>" method="post"> 
    <h3>View Product Info</h3>
    <a href="<?php echo site_url('import/new_stock_import'); ?>" class="btn btn-primary btn-icon icon-left" >
        New Initial Import
        <i class=" glyphicon glyphicon-plus-sign"></i>
    </a>

    <button type="submit" class="btn btn-danger" onclick="return confirmDelete();" >Delete All</button>

    <br><br>

    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>

        </div>
    <?php } ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var $table4 = jQuery("#table-4");

            $table4.DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
    </script>

    <table class="table table-bordered datatable" id="table-4">
        <thead>
            <tr>
                <th>SL</th>
                <th style="padding-left:11px;width: 80px"><input id="selecctall" type="checkbox">Select All</th>
                <th style="text-align: center;width: 80px">Picture</th>
                <th>Batch No</th>
                <th>Document No</th>
                <th>Product</th>
                <th>Brand</th>
                <th>Origin</th>
                <th>Product Name</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $row_count = 1;
            foreach ($import_stock as $r) {
                ?>
                <tr class="odd gradeX">
                    <td style="padding-left: 17px;"><?php echo $row_count ?></td>
                    <td>
                        <input name="checkbox[]" class="checkbox1" type="checkbox" id="checkbox[]" value="<?php echo $r['import_id']?>">
                    </td>
                    <td style="text-align: center"><img style="height: 77px;" class="img-thumbnail" src="<?php echo base_url(); ?>package_media/product/<?php echo $r['image'] ?>" alt="picture"> </td>
                    <td><?php echo $r['batch_no'] ?></td>
                    <td><?php echo $r['documents_no'] ?></td>
                    <td><?php echo $r['product'] ?></td>
                    <td><?php echo $r['brand'] ?></td>
                    <td><?php echo $r['origin'] ?></td>
                    <td><?php echo $r['product_name'] ?></td>


                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-blue" role="menu">
                                <li><a href="<?php echo site_url('import/edit_stock_import');?>/<?php echo $r['import_id']?>">Details</a>
                                </li>

                                <li><a href="<?php echo site_url('import/delete_stock_import');?>/<?php echo $r['import_id']?>">Delete</a>
                                </li>

                            </ul>
                        </div>



                    </td>
                </tr>

    <?php $row_count++;
} ?>

        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Select All</th>
                <th>Picture</th>
                <th>Batch No</th>
                <th>Document No</th>
                <th>Product</th>
                <th>Brand</th>
                <th>Origin</th>
                <th>Product Name</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</form>

<script>
    $(document).ready(function () {
        resetcheckbox();
        $('#selecctall').click(function (event) {  //on click
            if (this.checked) { // check select status
                $('.checkbox1').each(function () { //loop through each checkbox
                    this.checked = true;  //select all checkboxes with class "checkbox1"              
                });
            } else {
                $('.checkbox1').each(function () { //loop through each checkbox
                    this.checked = false; //deselect all checkboxes with class "checkbox1"                      
                });
            }
        });




        function  resetcheckbox() {
            $('input:checkbox').each(function () { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
            });
        }
    });
</script>
<script type="text/javascript">
    function confirmDelete() {
        return confirm('Are you sure you want to delete this Type?');
    }
</script>

