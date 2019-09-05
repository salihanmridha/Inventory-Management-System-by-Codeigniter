

<h2>Create Your Report</h2>

<a href="<?php echo site_url('report/date_range_report_listing'); ?>" class="btn btn-primary btn-icon icon-left" >
    View Report Listing
    <i class=" glyphicon glyphicon-plus-sign"></i>
</a>
<br><br>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Create New Report</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form action="<?php echo site_url('report/date_range_generate_report');?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    <div class="col-md-12">	
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">From</label>

                                <div class="col-sm-8">
                                    <input  type="date" name="from" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">To</label>

                                <div class="col-sm-8">
                                    <input  type="date" name="to" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group col-sm-7">
                        <button style="float: right;width:137px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Report Generate</button>	
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>

