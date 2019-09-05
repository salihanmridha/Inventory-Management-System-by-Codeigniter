

<h2>Generate Your Import/Purchase Report</h2>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Yearly Import/Purchase Report</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form action="<?php echo site_url('report/generate_import_supplier_yearly_report');?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    
                    <div class="col-md-12">	
                        <div class="col-md-5"> 
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Supplier</label>

                                <div class="col-sm-8">

                                    <select  name="supplier_id" class="select2" data-allow-clear="true" data-placeholder="Select Supplier..." required="">
                                        <option selected="" disabled=""></option>
                                        <?php foreach ($supplier as $r){?>
                                        <option value="<?php echo $r['supplier_id']?>"><?php echo $r['supplier_name']?></option>
                                        <?php }?>
                                        
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5"> 
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Year</label>

                                <div class="col-sm-8">

                                    <select  name="year" id="selectElementId" class="select2" data-allow-clear="true" data-placeholder="Select Month...">
                                        
                                    </select>

                                </div>
                            </div>
                        </div>
                        <button style="float: left;width:137px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Report Generate</button>	
                        
                    </div>

                </form>

            </div>

        </div>

    </div>
</div>

<script>
    

$('#selectElementId').each(function() {

  var year = (new Date()).getFullYear();
  var current = year;
  year -= 30;
  for (var i = 0; i <= year; i++) {
    if ((year+i) == current)
      $(this).append('<option selected value="' + (year + i) + '">' + (year + i) + '</option>');
    else
      $(this).append('<option value="' + (year + i) + '">' + (year + i) + '</option>');
  }

})
</script>