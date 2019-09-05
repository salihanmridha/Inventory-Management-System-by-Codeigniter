<h3>View Customer Payment Info</h3>
    <a href="<?php echo site_url('sales/new_customer_payment'); ?>" class="btn btn-primary btn-icon icon-left" >
        New Deposite
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
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Deposite Amount</th>
                <th>Payable Amount</th>
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
                    <td><?php echo $r['name'] ?></td>
                    <td><?php echo $r['email'] ?></td>
                    <td><?php echo $r['deposite_date'] ?></td>
                    <td><?php echo $r['deposite_amount'] ?></td>
                    <td><?php echo $r['payable_amount'] ?></td>

                    <td>
                        <a class="btn btn-info" href="<?php echo site_url('sales/edit_customer_payment');?>/<?php echo $r['customer_id']?>">Edit</a>
                        <a class="btn btn-primary" href="<?php echo site_url('sales/view_customer_payment_single');?>/<?php echo $r['customer_id']?>">Payment</a>
                     </td>
                </tr>

    <?php $row_count++;
} ?>

        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Deposite Amount</th>
                <th>Payable Amount</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>




