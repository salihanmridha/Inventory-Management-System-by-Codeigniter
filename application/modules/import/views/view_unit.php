
<a style="float:right" href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add" >
    <i class=" glyphicon glyphicon-plus-sign"></i>
    New Unit
</a>
<h3>All Unit Info</h3>



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
            
            <th> ID</th>
            <th>Name</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody id="show_data">

<!--        <tr class="odd gradeX">
            <td style="padding-left: 17px;">1</td>
            <td>1</td>
            <td>Rahim</td>
            <td>rahim@email</td>
            <td>0178555</td>
            <td>dhaka</td>


            <td style="text-align: center">
                <button type="button" class="btn btn-info">Edit</button>
            </td>
        </tr>-->

    </tbody>
    <tfoot>
        <tr>
            
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>


<!-- MODAL ADD -->
<form>
    <div class="modal" id="Modal_Add" >
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Unit Info</h4>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-1" class="control-label">Unit Name</label>

                                <input type="text" name="unit_name" id="unit_name" class="form-control" id="field-1" placeholder="Name">
                            </div>	

                        </div>

                        
                    </div>

    
</div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL ADD-->

<!-- MODAL EDIT -->
        <form>
    <div class="modal " id="Modal_Edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                    <h4 class="modal-title">Update Unit Info</h4>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-1" class="control-label">Unit Name</label>

                                <input type="text" name="unit_name_edit" id="unit_name_edit" class="form-control" id="field-1" placeholder="Name">
                                <input type="hidden" name="unit_id" id="unit_id">
                            </div>	

                        </div>

                        
                    </div>

                    

</div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
        <!--END MODAL EDIT-->
     
<!--MODAL DELETE-->
         <form>
            <div class="modal" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Unit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="unit_id" id="unit_id" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->
        
<script type="text/javascript">
	$(document).ready(function(){
		show_unit();	//call function show all product
		$('#table-4').dataTable();
		//function show all supplier
		function show_unit(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('import/unit_list')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr class="odd gradeX">'+
		                  	'<td>'+data[i].unit_id+'</td>'+
		                        '<td>'+data[i].unit_name+'</td>'+
		                        '<td>'+
                                    '<a href="javascript:void(0);" class="btn btn-info item_edit" data-toggle="modal" data-target="#Modal_Edit" data-unit_id="'+data[i].unit_id+'" data-unit_name="'+data[i].unit_name+'" >Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-toggle="modal" data-target="#Modal_Delete" data-unit_id="'+data[i].unit_id+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}
                

        //Save supplier
        $('#btn_save').on('click',function(){
            var unit_name = $('#unit_name').val();
             $.ajax({
                type : "POST",
                url  : "<?php echo site_url('import/insert_unit')?>",
                dataType : "JSON",
                data : {unit_name:unit_name},
                success: function(){
                    $('[name="unit_name"]').val("");
                    $('#Modal_Add').hide();
                    location.reload();
                    show_brand();
                   
                     
                   
                }
            });
            return false;
        });

       // get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var unit_name = $(this).data('unit_name');
            var unit_id  = $(this).data('unit_id');
            
            $('#Modal_Edit').show();
            $('[name="unit_name_edit"]').val(unit_name);
            $('[name="unit_id"]').val(unit_id);
        });
        
       
//
        //update record to database
         $('#btn_update').on('click',function(){
            var unit_name = $('#unit_name_edit').val();
            var unit_id  = $('#unit_id').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('import/update_unit')?>",
                dataType : "JSON",
                data : {unit_name:unit_name , unit_id:unit_id},
                success: function(){
                    $('[name="unit_name_edit"]').val("");
                    $('[name="unit_id"]').val("");
                    $('#Modal_Edit').hide();
                    location.reload();
                    show_brand();
                    
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var unit_id = $(this).data('unit_id');
            
            $('#Modal_Delete').show();
            $('[name="unit_id"]').val(unit_id);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var unit_id = $('#unit_id').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('import/delete_unit')?>",
                dataType : "JSON",
                data : {unit_id:unit_id},
                success: function(){
                    $('[name="unit_id"]').val("");
                    $('#Modal_Delete').hide();
                    location.reload();
                    show_brand();
                }
            });
            return false;
        });

	});

</script>`