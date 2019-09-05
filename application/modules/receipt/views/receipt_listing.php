
<form name="frm1" action="#" method="post"> 
<h3>View Receipt List</h3>


<button type="submit" class="btn btn-danger"  >Delete All</button>

<br><br>

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
            <th style="padding-left:11px;width: 80px"><input id="selecctall" type="checkbox">Select All</th>
            <th>Invoice Id</th>
            <th>Receipt Name</th>
            <th>Customer</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>

        
            <tr class="odd gradeX">
                <td style="padding-left: 17px;">1</td>
                <td>
                    <input name="checkbox[]" class="checkbox1" type="checkbox" id="checkbox[]" value="1">
                </td>
                <td>101</td>
                <td>receipt-1</td>
                <td>customer Details</td>
                
                
                
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-blue" role="menu">
                            <li><a href="#">Details</a>
                            </li>
                            
                            <li><a >Delete</a>
                            </li>
                            
                        </ul>
                    </div>



                </td>
            </tr>
      


    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Select All</th>
            <th>Invoice Id</th>
            <th>Receipt Name</th>
            <th>Customer</th>
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


 