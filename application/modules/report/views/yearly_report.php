

<h2>Create Your Report</h2>

<a href="<?php echo site_url('report/yearly_report_listing'); ?>" class="btn btn-primary btn-icon icon-left" >
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

                <form action="<?php echo site_url('report/yearly_generate_report');?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">


                    <div class="col-md-12">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Yearly Report</label>

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

    var max = new Date().getFullYear(),
    min = max - 30,
    select = document.getElementById('selectElementId');

    for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

</script>
