
<h3>View Product Inventory</h3>

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
            <th>Product Name</th>
            <th>Product Code</th>
            <th> Quantity</th>
            <th>Unit Price</th>
            <th>Production Date</th>
            <th>Expiery Date</th>
            <th>Total  Price</th>
<!--            <th>Action</th>-->

        </tr>
    </thead>
    <tbody>

         <?php
            $row_count = 1;
        foreach ($inventory as $r){?>
            <tr class="odd gradeX">
                <td style="padding-left: 17px;"><?php echo $row_count ?></td>
                
                <td><?php echo $r['product_name']?></td>
                <td><?php echo $r['product_code_no']?></td>
                <td><?php echo $r['quantity']?></td>
                <td><?php echo $r['product_price']?></td>
                <td><?php echo $r['production_date']?></td>
                <td><?php echo $r['expiery_date']?></td>
                <td><?php echo $r['quantity_price']?></td>
                
                
<!--               <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-blue "  aria-expanded="false">
                            <a style="color:white" href="">Details </a> 
                        </button>
                        
                    </div>



                </td>-->
            </tr>
      
       <?php $row_count++;} ?>

    </tbody>
    <tfoot>
        <tr>
           <th>ID</th>
            <th>Product Name</th>
            <th>Product Code</th>
            <th> Quantity</th>
            <th>Unit Price</th>
            <th>Production Date</th>
            <th>Expiery Date</th>
            <th>Total  Price</th>
<!--            <th>Action</th>-->
        </tr>
    </tfoot>
</table>






	