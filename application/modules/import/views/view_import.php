
<h3>View Product Info</h3>
    <a href="<?php echo site_url('import/get_product_import'); ?>" class="btn btn-primary btn-icon icon-left" >
        New Import
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
                <th>Batch No</th>
                <th>Invoice No</th>
                <th>Total Quantity</th>
                <th>Total Price</th>
                <th>Invoice Date</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $row_count = 1;
            foreach ($import_invoice as $r) {
                ?>
                <tr class="odd gradeX">
                    <td style="padding-left: 17px;"><?php echo $row_count ?></td>
                    <td><?php echo $r['import_batch_no'] ?></td>
                    <td><?php echo $r['import_invoice_no'] ?></td>
                    <td><?php echo $r['import_total_quantity'] ?></td>
                    <td><?php echo $r['import_total_price'] ?></td>
                    <td><?php echo $r['import_invoice_date'] ?></td>
                    

                    <td>
                        <a class="btn btn-orange" href="<?php echo site_url('import/print_import_invoice');?>/<?php echo $r['import_invoice_id']?>">Print</a>
                        <a class="btn btn-danger" href="<?php echo site_url('import/delete_import_invoice');?>/<?php echo $r['import_invoice_id']?>">Delete</a>
                     </td>
                </tr>

    <?php $row_count++;
} ?>

        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Batch No</th>
                <th>Invoice No</th>
                <th>Total Quantity</th>
                <th>Total Price</th>
                <th>Invoice Date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>




