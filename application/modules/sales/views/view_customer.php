<h3>View Customer Info</h3>
    <a href="<?php echo site_url('sales/new_customer'); ?>" class="btn btn-primary btn-icon icon-left" >
        New Customer
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
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $row_count = 1;
            foreach ($view_customer as $r) {
                ?>
                <tr class="odd gradeX">
                    <td style="padding-left: 17px;"><?php echo $row_count ?></td>
                    <td><?php echo $r['customer_id'] ?></td>
                    <td><?php echo $r['name'] ?></td>
                    <td><?php echo $r['email'] ?></td>
                    <td><?php echo $r['phone'] ?></td>
                    <td><?php echo $r['address'] ?></td>
                    

                    <td>
                        <a class="btn btn-info" href="<?php echo site_url('sales/edit_customer');?>/<?php echo $r['customer_id']?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo site_url('sales/delete_customer');?>/<?php echo $r['customer_id']?>">Delete</a>
                    </td>
                </tr>

    <?php $row_count++;
} ?>

        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                 <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>




