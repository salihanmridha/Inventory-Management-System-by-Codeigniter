
 <h3>View Product Info</h3>
    <a href="<?php echo site_url('import/new_product'); ?>" class="btn btn-primary btn-icon icon-left" >
        New Product
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
                <th style="text-align: center;width: 80px">Picture</th>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Entry Date</th>
                <th>Unit</th>
                <th>Price</th>
                <th>Style & Size</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $row_count = 1;
            foreach ($product as $r) {
                ?>
                <tr class="odd gradeX">
                    <td style="padding-left: 17px;"><?php echo $row_count ?></td>
                    <td style="text-align: center"><img style="height: 77px;" class="img-thumbnail" src="<?php echo base_url(); ?>package_media/product/<?php echo $r['image'] ?>" alt="picture"> </td>
                    <td><?php echo $r['product_name'] ?></td>
                    <td><?php echo $r['product_code_no'] ?></td>
                    <td><?php echo $r['entry_date'] ?></td>
                    <td><?php echo $r['unit_name'] ?></td>
                    <td><?php echo $r['product_price'] ?></td>
                    <td><?php echo $r['style_name'] ?></td>
                    <td>
                        <a class="btn btn-orange" href="<?php echo site_url('import/get_edit_history');?>/<?php echo $r['product_id']?>">History</a>
                        <a class="btn btn-info" href="<?php echo site_url('import/edit_product');?>/<?php echo $r['product_id']?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo site_url('import/delete_product');?>/<?php echo $r['product_id']?>">Delete</a>
                    </td>
                </tr>

    <?php $row_count++;
} ?>

        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Picture</th>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Entry Date</th>
                <th>Unit</th>
                <th>Price</th>
                <th>Style & Size</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</form>



