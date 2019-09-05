

<h2>Generate Your Import/Purchase Report</h2>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Monthly Import/Purchase Report</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form action="<?php echo site_url('report/generate_import_supplier_monthly_report');?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">


                    <div class="col-md-12">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-sm-4 control-label"> Supplier</label>

                                <div class="col-sm-8">

                                    <select  name="supplier_id" class="select2" data-allow-clear="true" data-placeholder=" Supplier..." required="">
                                        <option selected="" disabled=""></option>
                                        <?php foreach ($supplier as $r){?>
                                        <option value="<?php echo $r['supplier_id']?>"><?php echo $r['supplier_name']?></option>
                                        <?php }?>

                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-sm-4 control-label"> Month</label>

                                <div class="col-sm-8">

                                    <select  name="month" class="select2" data-allow-clear="true" data-placeholder=" Month..." required="">
                                        <option selected="" disabled=""></option>
                                        <option value='1'>Janaury</option>
                                        <option value='2'>February</option>
                                        <option value='3'>March</option>
                                        <option value='4'>April</option>
                                        <option value='5'>May</option>
                                        <option value='6'>June</option>
                                        <option value='7'>July</option>
                                        <option value='8'>August</option>
                                        <option value='9'>September</option>
                                        <option value='10'>October</option>
                                        <option value='11'>November</option>
                                        <option value='12'>December</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-sm-4 control-label"> Year</label>

                                <div class="col-sm-8">

                                    <select  name="year" id="selectElementId" class="select2" data-allow-clear="true" data-placeholder=" Year...">

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
