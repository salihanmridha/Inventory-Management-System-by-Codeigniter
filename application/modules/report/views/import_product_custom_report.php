

<h2>Generate Your Import/Purchase Report</h2>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Custome Period Import/Purchase Report</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form action="<?php echo site_url('report/generate_import_product_custom_report');?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    
                    <div class="col-md-12">	
                        <div class="col-md-5"> 
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Select Product</label>

                                <div class="col-sm-8">

                                    <select  name="product_id" class="select2" data-allow-clear="true" data-placeholder="Select Product..." required="">
                                        <option selected="" disabled=""></option>
                                        <?php foreach ($product as $r){?>
                                        <option value="<?php echo $r['product_id']?>"><?php echo $r['product_name']?></option>
                                        <?php }?>
                                        
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">From</label>

                                <div class="col-sm-8">
                                    <input  type="date" name="from" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">To</label>

                                <div class="col-sm-8">
                                    <input  type="date" name="to" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                        <button style="float: left;width:137px;height:35px;font-size:15px;text-align: center;margin-top: -29px;"  type="submit" class="btn btn-success">Report Generate</button>	
                        
                    </div>

                </form>

            </div>

        </div>

    </div>
</div>

