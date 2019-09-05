
<a style="float:right" href="<?php echo site_url('user/create_user');?>" class="btn btn-primary" >
    <i class=" glyphicon glyphicon-plus-sign"></i>
    Add New
</a>
<h3>User's Info</h3>


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
                <th>User Email</th>
                <th>Password</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $row_count = 1;
            foreach ($user as $r) {
                ?>
                <tr class="odd gradeX">
                    <td style="padding-left: 17px;"><?php echo $row_count ?></td>
                    <td><?php echo $r['email'] ?></td>
                    <td><?php echo $r['password'] ?></td>
                    <td>
                        <a class="btn btn-orange" href="<?php echo site_url('user/previledge');?>/<?php echo $r['user_id']?>">Add Previledge</a>
                        <a class="btn btn-info" href="<?php echo site_url('user/edit_user');?>/<?php echo $r['user_id']?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo site_url('user/delete_user');?>/<?php echo $r['user_id']?>">Delete</a>
                    </td>
                </tr>

    <?php $row_count++;
} ?>

        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>User Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>


