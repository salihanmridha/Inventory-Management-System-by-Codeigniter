
 <h3>View Supplier Packing Info</h3>
    <a href="<?php echo site_url('import/new_supplier_packing'); ?>" class="btn btn-primary btn-icon icon-left" >
        New Supplier Packing
        <i class=" glyphicon glyphicon-plus-sign"></i>
    </a>

   
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
                <th>Product Name</th>
                <th>Supplier Name</th>
                <th>Product Code</th>
                <th>Supplier Unit</th>
                <th>Supplier Quantity</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $row_count = 1;
            foreach ($supplier_packing as $r) {
                ?>
                <tr class="odd gradeX">
                    <td style="padding-left: 17px;"><?php echo $row_count ?></td>
                    <td><?php echo $r['product_name'] ?></td>
                    <td><?php echo $r['supplier_name'] ?></td>
                    <td><?php echo $r['product_code_no'] ?></td>
                    <td><?php echo $r['supplier_product_unit'] ?></td>
                    <td><?php echo $r['supplier_quantity'] ?></td>

                    <td>
                        <a class="btn btn-info" href="<?php echo site_url('import/edit_supplier_packing');?>/<?php echo $r['supplier_packing_id']?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo site_url('import/delete_supplier_packing');?>/<?php echo $r['supplier_packing_id']?>">Delete</a>
                    </td>
                </tr>

    <?php $row_count++;
} ?>

        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Product Name</th>
                <th>Supplier Name</th>
                <th>Product Code</th>
                <th>Supplier Unit</th>
                <th>Supplier Quantity</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>




