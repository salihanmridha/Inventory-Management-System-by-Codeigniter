
<a style="float:right" href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add" >
    <i class=" glyphicon glyphicon-plus-sign"></i>
    Add New
</a>
<h3>All Style & Size Info</h3>



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
            <th>Style & Size</th>
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
            <th>Style & Size</th>
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
                    <h4 class="modal-title">Add Style Info</h4>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-1" class="control-label">Style & Size</label>

                                <input type="text" name="style_name" id="style_name" class="form-control" id="field-1" placeholder="Style & Size">
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
                    <h4 class="modal-title">Update Style & Size Info</h4>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-1" class="control-label">Style & Size</label>

                                <input type="text" name="style_name_edit" id="style_name_edit" class="form-control" id="field-1" placeholder="Name">
                                <input type="hidden" name="style_id" id="unit_id">
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
                    <h5 class="modal-title" id="exampleModalLabel">Delete Style & Size</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="style_id" id="style_id" class="form-control">
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
		show_style();	//call function show all product
		$('#table-4').dataTable();
		//function show all supplier
		function show_style(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('import/style_list')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr class="odd gradeX">'+
		                  	'<td>'+data[i].style_id+'</td>'+
		                        '<td>'+data[i].style_name+'</td>'+
		                        '<td>'+
                                    '<a href="javascript:void(0);" class="btn btn-info item_edit" data-toggle="modal" data-target="#Modal_Edit" data-style_id="'+data[i].style_id+'" data-style_name="'+data[i].style_name+'" >Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-toggle="modal" data-target="#Modal_Delete" data-style_id="'+data[i].style_id+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}
                

        //Save supplier
        $('#btn_save').on('click',function(){
            var style_name = $('#style_name').val();
             $.ajax({
                type : "POST",
                url  : "<?php echo site_url('import/insert_style')?>",
                dataType : "JSON",
                data : {style_name:style_name},
                success: function(){
                    $('[name="style_name"]').val("");
                    $('#Modal_Add').hide();
                    location.reload();
                    show_brand();
                   
                     
                   
                }
            });
            return false;
        });

       // get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var style_name = $(this).data('style_name');
            var style_id  = $(this).data('style_id');
            
            $('#Modal_Edit').show();
            $('[name="style_name_edit"]').val(style_name);
            $('[name="style_id"]').val(style_id);
        });
        
       
//
        //update record to database
         $('#btn_update').on('click',function(){
            var style_name = $('#style_name_edit').val();
            var style_id  = $('#style_id').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('import/update_style')?>",
                dataType : "JSON",
                data : {style_name:style_name , style_id:style_id},
                success: function(){
                    $('[name="style_name_edit"]').val("");
                    $('[name="style_id"]').val("");
                    $('#Modal_Edit').hide();
                    location.reload();
                    show_brand();
                    
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var style_id = $(this).data('style_id');
            
            $('#Modal_Delete').show();
            $('[name="style_id"]').val(style_id);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var style_id = $('#style_id').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('import/delete_style')?>",
                dataType : "JSON",
                data : {style_id:style_id},
                success: function(){
                    $('[name="style_id"]').val("");
                    $('#Modal_Delete').hide();
                    location.reload();
                    show_brand();
                }
            });
            return false;
        });

	});

</script>`