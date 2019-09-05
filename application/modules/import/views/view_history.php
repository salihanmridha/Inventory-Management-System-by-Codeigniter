
 <h3>Product History</h3>
    <a href="<?php echo site_url('import/view_product_making'); ?>" class="btn btn-primary btn-icon icon-left" >
        Product List
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
                <th>Product Code</th>
                <th>Entry Date</th>
                <th>Old Price</th>
                <th>New Price</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $row_count = 1;
            foreach ($get_history as $r) {
                ?>
                <tr class="odd gradeX">
                    <td style="padding-left: 17px;"><?php echo $row_count ?></td>
                    <td><?php echo $r['product_name'] ?></td>
                    <td><?php echo $r['product_code_no'] ?></td>
                    <td><?php echo $r['entry_date'] ?></td>
                    <td><?php echo $r['product_price_old'] ?></td>
                    <td><?php echo $r['product_price'] ?></td>
                    <td>
                        <a class="btn btn-orange" href="<?php echo site_url('import/print_product_history');?>/<?php echo $r['product_history_id']?>">Print</a>
                     </td>
                </tr>

    <?php $row_count++;
} ?>

        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Entry Date</th>
                <th>Old Price</th>
                <th>New Price</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</form>



