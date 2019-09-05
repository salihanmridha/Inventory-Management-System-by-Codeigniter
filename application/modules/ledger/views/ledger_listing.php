
<h3>View Invoice List</h3>

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
            <th>ID</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Style & Size</th>
            <th>Sold Quantity</th>
            <th>Unit Price</th>
            <th>Total Sold Price</th>
            


        </tr>
    </thead>
    <tbody>

        <?php foreach ($ledger as $r){?>
            <tr class="odd gradeX">
               
                <td style="padding-left: 17px;"><?php echo $r['sales_id']?></td>
                <td><?php echo $r['product_code_no']?></td>
                <td><?php echo $r['product_name']?></td>
                <td><?php echo $r['style_name']?></td>
                <td><?php echo $r['sale_quantity']?></td>
                <td><?php echo $r['product_price']?></td>
                <td><?php echo $r['sale_quantity_price']?></td>
                
                

            </tr>
        <?php }?>


    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Style & Size</th>
            <th>Sold Quantity</th>
            <th>Unit Price</th>
            <th>Total Sold Price</th>

        </tr>
    </tfoot>
</table>




 