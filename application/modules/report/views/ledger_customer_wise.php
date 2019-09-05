

<h2>Customer Wise Ledger Reports</h2>

<div class="row">

    <div class="col-md-12">

        <div class="tabs-vertical-env">

            <ul class="nav tabs-vertical"><!-- available classes "right-aligned" -->
                <li><a href="#v-home" data-toggle="tab">Monthly</a></li>
                <li><a href="#v-profile" data-toggle="tab">Yearly</a></li>
                <li><a href="#v-messages" data-toggle="tab">Custom Period</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane" id="v-home">
                    <div class="panel-body">

                        <form action="<?php echo site_url('report/generate_ledger_customer_wise_monthly'); ?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">


                            <div class="col-md-12">	
                                <div class="col-md-5"> 
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"> Customer</label>

                                        <div class="col-sm-8">

                                            <select  name="customer_id" class="select2" data-allow-clear="true" data-placeholder=" Customer..." required="">
                                                <option selected="" disabled=""></option>
                                                <?php foreach ($customer as $r) { ?>
                                                    <option value="<?php echo $r['customer_id'] ?>"><?php echo $r['name'] ?></option>
                                                <?php } ?>

                                            </select>

                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-5"> 
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
                                

                            </div>
                            <div class="col-md-12">	
                                <div class="col-md-5"> 
                                    <div class="form-group">
                                <label class="col-sm-4 control-label"> Year</label>

                                <div class="col-sm-8">

                                    <select  name="year" id="selectElementId" class="select2" data-allow-clear="true" data-placeholder=" Year...">
                                        
                                    </select>

                                </div>
                            </div>
                                </div>
                                <div class="col-md-5"> 
                                    <div class="form-group">
                                <label class="col-sm-4 control-label"> </label>

                                <div class="col-sm-8">

                                    <button  style="float: left;width:137px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Show Report</button>	
                                        
                        </div>
                            </div>
                                </div>
                                

                                
                          
                                

                            </div>

                        </form>

                    </div>			
                </div>
                <div class="tab-pane" id="v-profile">
                    <div class="panel-body">

                        <form action="<?php echo site_url('report/generate_ledger_customer_wise_yearly'); ?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">


                            <div class="col-md-12">	
                                <div class="col-md-5"> 
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"> Customer</label>

                                        <div class="col-sm-8">

                                            <select  name="customer_id" class="select2" data-allow-clear="true" data-placeholder=" Customer..." required="">
                                                <option selected="" disabled=""></option>
                                                <?php foreach ($customer as $r) { ?>
                                                    <option value="<?php echo $r['customer_id'] ?>"><?php echo $r['name'] ?></option>
                                                <?php } ?>

                                            </select>

                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-5"> 
                                    <div class="form-group">
                                <label class="col-sm-4 control-label"> Year</label>

                                <div class="col-sm-8">

                                    <select  name="year" id="selectElementId2" class="select2" data-allow-clear="true" data-placeholder=" Year...">
                                        
                                    </select>

                                </div>
                            </div>
                                </div>
                                

                            </div>
                            <div class="col-md-12">	
                                
                                <div class="col-md-5"> 
                                    <div class="form-group">
                                <label class="col-sm-4 control-label"> </label>

                                <div class="col-sm-8">

                                    <button  style="float: left;width:137px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Show Report</button>	
                                        
                        </div>
                            </div>
                                </div>
                                
 </div>

                        </form>

                    </div>
                </div>
                <div class="tab-pane" id="v-messages">
                    <div class="panel-body">

                <form action="<?php echo site_url('report/generate_ledger_customer_wise_custom');?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    
                    <div class="col-md-12">	
                        <div class="col-md-5"> 
                            <div class="form-group">
                                        <label class="col-sm-4 control-label"> Customer</label>

                                        <div class="col-sm-8">

                                            <select  name="customer_id" class="select2" data-allow-clear="true" data-placeholder=" Customer..." required="">
                                                <option selected="" disabled=""></option>
                                                <?php foreach ($customer as $r) { ?>
                                                    <option value="<?php echo $r['customer_id'] ?>"><?php echo $r['name'] ?></option>
                                                <?php } ?>

                                            </select>

                                        </div>
                                    </div>
                        </div>
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">From</label>

                                <div class="col-sm-8">
                                    <input style="padding-top: 0px" type="date" name="from" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">To</label>

                                <div class="col-sm-8">
                                    <input style="padding-top: 0px" type="date" name="to" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                        <button style="float: left;width:137px;height:35px;font-size:15px;text-align: center;margin-top: -29px;"  type="submit" class="btn btn-success">Show Report</button>	
                        
                    </div>

                </form>

            </div>
                </div>

            </div>

        </div>	

    </div>



</div>

<script>


    $('#selectElementId').each(function () {

        var year = (new Date()).getFullYear();
        var current = year;
        year -= 30;
        for (var i = 0; i <= year; i++) {
            if ((year + i) == current)
                $(this).append('<option selected value="' + (year + i) + '">' + (year + i) + '</option>');
            else
                $(this).append('<option value="' + (year + i) + '">' + (year + i) + '</option>');
        }

    })
</script>
<script>


    $('#selectElementId2').each(function () {

        var year = (new Date()).getFullYear();
        var current = year;
        year -= 30;
        for (var i = 0; i <= year; i++) {
            if ((year + i) == current)
                $(this).append('<option selected value="' + (year + i) + '">' + (year + i) + '</option>');
            else
                $(this).append('<option value="' + (year + i) + '">' + (year + i) + '</option>');
        }

    })
</script>