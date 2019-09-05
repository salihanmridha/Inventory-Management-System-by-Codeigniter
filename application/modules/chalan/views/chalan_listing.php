
<h3>View Chalan List</h3>


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
            <th>Bach No</th>
            <th>Invoice No</th>
            <th>Total Quantity</th>
            <th>Invoice Date</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>

        <?php
            $row_count = 1;
        foreach ($invoice as $r){?>
            <tr class="odd gradeX">
                <td style="padding-left: 17px;"><?php echo $row_count ?></td>
                <td><?php echo $r['sales_batch_no']?></td>
                <td><?php echo $r['sales_invoice_no']?></td>
                <td><?php echo $r['sales_total_quantity']?></td>
                <td><?php echo $r['sales_invoice_date']?></td>
                 
                <td>
                    <a href="<?php echo site_url('chalan/view_chalan');?>/<?php echo $r['sales_invoice_id']?>" class="btn btn-info">Print & Details</a>
                    
                </td>
            </tr>
       <?php $row_count++;} ?>


    </tbody>
    <tfoot>
        <tr>
            <th>SL</th>
            <th>Bach No</th>
            <th>Invoice No</th>
            <th>Total Quantity</th>
            <th>Invoice Date</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>





 