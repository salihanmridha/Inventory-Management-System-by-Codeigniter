<h3>Customer Deposite Invoice</h3>
   
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
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Date</th>
                <th>Deposite Amount</th>
                <th>Dues Amount</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $row_count = 1;
            foreach ($view_customer_payment as $r) {
                ?>
                <tr class="odd gradeX">
                    <td style="padding-left: 17px;"><?php echo $row_count ?></td>
                    <td>#<?php echo $r['receipt_no'] ?></td>
                    <td><?php echo $r['name'] ?></td>
                    <td><?php echo $r['email'] ?></td>
                    <td><?php echo $r['phone'] ?></td>
                    <td><?php echo $r['address'] ?></td>
                    <td><?php echo $r['payment_date'] ?></td>
                    <td><?php echo $r['total_deposite_credit'] ?></td>
                    <td><?php echo $r['dues'] ?></td>
                    
                    <td>
                        <a class="btn btn-orange" href="<?php echo site_url('receipt/deposite_print');?>/<?php echo $r['customer_id']?>">Print</a>
                        
                    </td>
                </tr>

    <?php $row_count++;
} ?>

        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Invoice No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Date</th>
                <th>Deposite Amount</th>
                <th>Payable Amount</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>




