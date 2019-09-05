
<h2>Update Distribution Packing Info</h2>

<a href="<?php echo site_url('import/view_distribution_packing'); ?>" class="btn btn-primary btn-icon icon-left" >
    view Distribution Packing
    <i class=" glyphicon glyphicon-plus-sign"></i>
</a>
<br><br>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Distribution Packing</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body" >
                
                <?php foreach ($distribution_packing as $r) { ?>

                   

                        <form  action="<?php echo site_url('import/update_distribution_packing'); ?>/<?php echo $r['distribution_packing_id']?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">
                            <div class="col-md-12" id="initial" >
                                <div class="col-md-4">
                                    
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Product Name</label>

                                        <div class="col-sm-8">
                                            <input  name="product_name" type="text" class="form-control" value="<?php echo $r['product_name'] ?>" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Product Code</label>

                                        <div class="col-sm-8">
                                            <input  name="product_code" type="text" class="form-control" value="<?php echo $r['product_code_no'] ?>" readonly="">
                                        </div>
                                    </div>
                                     
                                    
                                 </div>
                                <div class="col-md-8">
        
                                   
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Distribution Product Unit</label>

                                        <div class="col-sm-6">
                                              
                                            <input  name="distribution_product_unit" type="text" class="form-control" value="<?php echo $r['distribution_product_unit'] ?>">
                                           
                                         </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Distribution Product Quantity</label>

                                        <div class="col-sm-6">
                                            <input  name="distribution_product_quantity" type="text" class="form-control" value="<?php echo $r['distribution_quantity'] ?>">
                                                
<!--                                            <label style="padding-top: 13px;color:#C2041B">Hints: 1 Supplier Package = <i class="fa fa-arrow-up"></i> Distribution Package</label>-->
                                        </div>
                                        
                                    </div>
                                
                                </div>
                            </div>

                            <div class="form-group col-sm-12" style="text-align: center;margin-top: -20px;margin-left: 33px;">
                                <button style="width:100px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Update</button>	
                            </div>
                        </form>

                    <?php } ?>

                

            </div>

        </div>

    </div>
</div>

<!--<script>
    function productshow() 
    {

        var product_id = $('#product_id').val();
        
        $.ajax({
            url: "<?php echo site_url('import/get_product_initial'); ?>",
            type: "post",
            data: {product_id: product_id},
            dataType: "html",
            success: function (data) {
                
       
                //$("#cont").empty();
                //$("#initial").empty();
                $("#show").empty();
                $("#show").html(data);
                
            }
        });
    }
</script>-->

<!--<script>
var select = $("#product_id");

select.on('change', function(){
    var product_id = $(this).val();
     if ( product_id == '')
     {
        $("#initial").hide();
     }
      else
      {
        $("#initial").show();
      }
      
      $.ajax({
         
        type: "POST",
        url: "<?php echo site_url('import/get_product_initial'); ?>", 
        data:{product_id: product_id},
        dataType:"html",//return type expected as json
        success: function(data){
           $("#show").empty();
                $("#show").html(data);
           
           
        },
    });
});
</script>-->



