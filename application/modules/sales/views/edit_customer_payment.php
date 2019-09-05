

<h2>Update Customer Payment Info</h2>

<a href="<?php echo site_url('sales/view_customer_payment'); ?>" class="btn btn-primary btn-icon icon-left" >
    View Payment List
    <i class=" glyphicon glyphicon-plus-sign"></i>
</a>
<br><br>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Update Customer Payment Info</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <?php foreach ($edit_customer_payment as $r){?>
                <form action="<?php echo site_url('sales/update_customer_payment'); ?>/<?php echo $r['customer_id']?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Customer Name</label>

                        <div class="col-sm-5">
                            <input name="name"  type="text" class="form-control" value="<?php echo $r['name']?>" disabled="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Deposite Amount</label>

                        <div class="col-sm-5">
                            <input  type="text" class="form-control" value="<?php echo $r['deposite_amount']?>" name="deposite_amount">
                        </div>
                    </div>
                    

                    <div class="form-group col-sm-8">
                        <button style="float: right;width:100px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Update</button>	
                    </div>
                </form>
                <?php }?>

            </div>

        </div>

    </div>
</div>
