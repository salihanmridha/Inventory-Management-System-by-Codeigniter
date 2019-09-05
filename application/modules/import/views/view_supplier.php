
<a style="float:right" href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add" >
    <i class=" glyphicon glyphicon-plus-sign"></i>
    New Supplier
</a>
<h3>All Supplier Info</h3>



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
            
            <th style="width: 72px;padding-right: 0px;padding-left: 0px;text-align: center;"> ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th style="width: 72px;padding-right: 0px;padding-left: 0px;text-align: center;">Action</th>

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
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>

<h3>Latest Supplier Info</h3>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var $table5 = jQuery("#table-5");

        $table5.DataTable({
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

<table class="table table-bordered datatable" id="table-5">
    <thead>
        <tr>
            
            <th style="width: 72px;padding-right: 0px;padding-left: 0px;text-align: center;"> ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th style="width: 72px;padding-right: 0px;padding-left: 0px;text-align: center;">Action</th>

        </tr>
    </thead>
    <tbody id="show_data_limit">

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
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
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
                    <h4 class="modal-title">Add Supplier Info</h4>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-1" class="control-label">Name</label>

                                <input type="text" name="supplier_name" id="supplier_name" class="form-control" id="field-1" placeholder="Name">
                            </div>	

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-2" class="control-label">Email</label>

                                <input type="text" name="supplier_email" id="supplier_email" class="form-control" id="field-2" placeholder="Email">
                            </div>	

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-2" class="control-label">Phone</label>

                                <input type="text" name="supplier_phone" id="supplier_phone" class="form-control" id="field-2" placeholder="Phone">
                            </div>	

                        </div>	
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-3" class="control-label">Address</label>

                                <textarea class="form-control" name="supplier_address" id="supplier_address" placeholder="Address"></textarea>
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
                    <h4 class="modal-title">Update Supplier Info</h4>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-1" class="control-label">Name</label>

                                <input type="text" name="supplier_name_edit" id="supplier_name_edit" class="form-control" id="field-1" placeholder="Name">
                            </div>	

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-2" class="control-label">Email</label>

                                <input type="text" name="supplier_email_edit" id="supplier_email_edit" class="form-control" id="field-2" placeholder="Email">
                            </div>	

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-2" class="control-label">Phone</label>

                                <input type="text" name="supplier_phone_edit" id="supplier_phone_edit" class="form-control" id="field-2" placeholder="Phone">
                                <input type="hidden" name="supplier_id" id="supplier_id">
                            </div>	

                        </div>	
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-3" class="control-label">Address</label>

                                <textarea class="form-control" name="supplier_address_edit" id="supplier_address_edit" placeholder="Address"></textarea>
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
     

        
<script type="text/javascript">
	$(document).ready(function(){
		show_supplier();	//call function show all product
		show_supplier_limit();
		$('#table-4').dataTable();
		$('#table-5').dataTable();
		//function show all supplier
		function show_supplier(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('import/supplier_list')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr class="odd gradeX">'+
		                  	'<td style="text-align: center">'+data[i].supplier_id+'</td>'+
		                        '<td>'+data[i].supplier_name+'</td>'+
		                        '<td>'+data[i].supplier_email+'</td>'+
                                        '<td>'+data[i].supplier_phone+'</td>'+
                                        '<td>'+data[i].supplier_address+'</td>'+
		                        '<td style="text-align: center">'+
                                    '<a href="javascript:void(0);" class="btn btn-info item_edit" data-toggle="modal" data-target="#Modal_Edit" data-supplier_id="'+data[i].supplier_id+'" data-supplier_name="'+data[i].supplier_name+'" data-supplier_email="'+data[i].supplier_email+'" data-supplier_phone="'+data[i].supplier_phone+'" data-supplier_address="'+data[i].supplier_address+'">Edit</a>'+' '+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}
                function show_supplier_limit(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('import/supplier_list_limit')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr class="odd gradeX">'+
		                  	'<td style="text-align: center">'+data[i].supplier_id+'</td>'+
		                        '<td>'+data[i].supplier_name+'</td>'+
		                        '<td>'+data[i].supplier_email+'</td>'+
                                        '<td>'+data[i].supplier_phone+'</td>'+
                                        '<td>'+data[i].supplier_address+'</td>'+
		                        '<td style="text-align: center">'+
                                    '<a href="javascript:void(0);" class="btn btn-info item_edit_limit" data-toggle="modal" data-target="#Modal_Edit" data-supplier_id="'+data[i].supplier_id+'" data-supplier_name="'+data[i].supplier_name+'" data-supplier_email="'+data[i].supplier_email+'" data-supplier_phone="'+data[i].supplier_phone+'" data-supplier_address="'+data[i].supplier_address+'">Edit</a>'+' '+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data_limit').html(html);
		        }

		    });
		}

        //Save supplier
        $('#btn_save').on('click',function(){
            var supplier_name = $('#supplier_name').val();
            var supplier_email = $('#supplier_email').val();
            var supplier_phone = $('#supplier_phone').val();
            var supplier_address  = $('#supplier_address').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('import/insert_supplier')?>",
                dataType : "JSON",
                data : {supplier_name:supplier_name , supplier_email:supplier_email, supplier_phone:supplier_phone, supplier_address:supplier_address},
                success: function(){
                    $('[name="supplier_name"]').val("");
                    $('[name="supplier_email"]').val("");
                    $('[name="supplier_phone"]').val("");
                    $('[name="supplier_address"]').val("");
                    $('#Modal_Add').hide();
                    location.reload();
                    show_supplier();
                    show_supplier_limit();
                     
                   
                }
            });
            return false;
        });

       // get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var supplier_name = $(this).data('supplier_name');
            var supplier_email = $(this).data('supplier_email');
            var supplier_phone  = $(this).data('supplier_phone');
            var supplier_address  = $(this).data('supplier_address');
            var supplier_id  = $(this).data('supplier_id');
            
            $('#Modal_Edit').show();
            $('[name="supplier_name_edit"]').val(supplier_name);
            $('[name="supplier_email_edit"]').val(supplier_email);
            $('[name="supplier_phone_edit"]').val(supplier_phone);
            $('[name="supplier_address_edit"]').val(supplier_address);
            $('[name="supplier_id"]').val(supplier_id);
        });
        
        $('#show_data_limit').on('click','.item_edit_limit',function(){
            var supplier_name = $(this).data('supplier_name');
            var supplier_email = $(this).data('supplier_email');
            var supplier_phone  = $(this).data('supplier_phone');
            var supplier_address  = $(this).data('supplier_address');
            var supplier_id  = $(this).data('supplier_id');
            
            $('#Modal_Edit').show();
            $('[name="supplier_name_edit"]').val(supplier_name);
            $('[name="supplier_email_edit"]').val(supplier_email);
            $('[name="supplier_phone_edit"]').val(supplier_phone);
            $('[name="supplier_address_edit"]').val(supplier_address);
            $('[name="supplier_id"]').val(supplier_id);
        });
//
        //update record to database
         $('#btn_update').on('click',function(){
            var supplier_name = $('#supplier_name_edit').val();
            var supplier_email = $('#supplier_email_edit').val();
            var supplier_phone = $('#supplier_phone_edit').val();
            var supplier_address  = $('#supplier_address_edit').val();
            var supplier_id  = $('#supplier_id').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('import/update_supplier')?>",
                dataType : "JSON",
                data : {supplier_name:supplier_name , supplier_email:supplier_email, supplier_phone:supplier_phone, supplier_address:supplier_address, supplier_id:supplier_id},
                success: function(){
                    $('[name="supplier_name_edit"]').val("");
                    $('[name="supplier_email_edit"]').val("");
                    $('[name="supplier_phone_edit"]').val("");
                    $('[name="supplier_address_edit"]').val("");
                    $('[name="supplier_id"]').val("");
                    $('#Modal_Edit').hide();
                    location.reload();
                    show_supplier();
                    show_supplier_limit();
                }
            });
            return false;
        });

//        //get data for delete record
//        $('#show_data').on('click','.item_delete',function(){
//            var product_code = $(this).data('product_code');
//            
//            $('#Modal_Delete').modal('show');
//            $('[name="product_code_delete"]').val(product_code);
//        });
//
//        //delete record to database
//         $('#btn_delete').on('click',function(){
//            var product_code = $('#product_code_delete').val();
//            $.ajax({
//                type : "POST",
//                url  : "<?php echo site_url('product/delete')?>",
//                dataType : "JSON",
//                data : {product_code:product_code},
//                success: function(data){
//                    $('[name="product_code_delete"]').val("");
//                    $('#Modal_Delete').modal('hide');
//                    show_product();
//                }
//            });
//            return false;
//        });

	});

</script>`