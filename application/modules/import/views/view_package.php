
<form name="frm1" action="<?php echo site_url('import/delete_all_package'); ?>" method="post"> 
    <h3>View Package Info</h3>
    <a href="<?php echo site_url('import/new_package'); ?>" class="btn btn-primary btn-icon icon-left" >
        New Package
        <i class=" glyphicon glyphicon-plus-sign"></i>
    </a>

    <button type="submit" class="btn btn-danger" onclick="return confirmDelete();" >Delete All</button>

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
                <th style="padding-left:11px;width: 80px"><input id="selecctall" type="checkbox">Select All</th>
                <th>Package Name</th>
                <th>Product Name</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $row_count = 1;
            foreach ($package as $r) {
                ?>
                <tr class="odd gradeX">
                    <td style="padding-left: 17px;"><?php echo $row_count ?></td>
                    <td>
                        <input name="checkbox[]" class="checkbox1" type="checkbox" id="checkbox[]" value="<?php echo $r['package_id']?>">
                    </td>
                    <td><?php echo $r['package_name'] ?></td>
                    <td><?php echo $r['package_product_name'] ?></td>


                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-blue" role="menu">
                                <li><a href="<?php echo site_url('import/edit_package');?>/<?php echo $r['package_id']?>">Details</a>
                                </li>

                                <li><a href="<?php echo site_url('import/delete_package');?>/<?php echo $r['package_id']?>">Delete</a>
                                </li>

                            </ul>
                        </div>



                    </td>
                </tr>

    <?php $row_count++;
} ?>

        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Select All</th>
                <th>Package Name</th>
                <th>Product Name</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</form>

<script>
    $(document).ready(function () {
        resetcheckbox();
        $('#selecctall').click(function (event) {  //on click
            if (this.checked) { // check select status
                $('.checkbox1').each(function () { //loop through each checkbox
                    this.checked = true;  //select all checkboxes with class "checkbox1"              
                });
            } else {
                $('.checkbox1').each(function () { //loop through each checkbox
                    this.checked = false; //deselect all checkboxes with class "checkbox1"                      
                });
            }
        });




        function  resetcheckbox() {
            $('input:checkbox').each(function () { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
            });
        }
    });
</script>
<script type="text/javascript">
    function confirmDelete() {
        return confirm('Are you sure you want to delete this Type?');
    }
</script>

