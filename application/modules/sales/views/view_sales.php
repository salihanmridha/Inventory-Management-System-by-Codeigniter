
 <h3>View Sales Info</h3>
    <a href="<?php echo site_url('sales/new_sales'); ?>" class="btn btn-primary btn-icon icon-left" >
        New Sales
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
                <th>Invoice No</th>
                <th>Total Quantity</th>
                <th>Total Price</th>
                <th>Sold Date</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $row_count = 1;
            foreach ($view_sales as $r) {
                ?>
                <tr class="odd gradeX">
                    <td style="padding-left: 17px;"><?php echo $row_count ?></td>
                   <td><?php echo $r['sales_batch_no'] ?></td>
                    <td><?php echo $r['sales_total_quantity'] ?></td>
                    <td><?php echo $r['sales_total_price'] ?></td>
                    <td><?php echo $r['sales_invoice_date'] ?></td>

                    <td>
                            <a href="#" class="btn btn-danger" style="float: left">Delete</a>
                            <form action="<?php echo site_url('sales/sales_invoice_print');?>/<?php echo $r['sales_invoice_id']?>" method="post">
                                <button style="margin-left: 6px;" type="submit" class="btn btn-orange">Print</button>
                                <input type="checkbox" name="ledger" value="1"> Ledger
                            </form>
                      </td>
                </tr>

    <?php $row_count++;} ?>

        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Invoice No</th>
                <th>Total Quantity</th>
                <th>Total Price</th>
                <th>Sold Date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>




