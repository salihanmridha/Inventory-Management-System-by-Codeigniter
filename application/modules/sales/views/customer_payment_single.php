

<h2>Customer Payment Info</h2>

<a href="<?php echo site_url('sales/view_customer_payment'); ?>" class="btn btn-primary btn-icon icon-left" >
    View Customer Payment List
    <i class=" glyphicon glyphicon-plus-sign"></i>
</a>
<br><br>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b> Customer Payment</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <?php foreach ($get_customer as $r){?>
                <form action="<?php echo site_url('sales/final_payment'); ?>/<?php echo $r['customer_id']?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Customer Name</label>

                        <div class="col-sm-5">
                            
                            <input name="name"  type="text" class="form-control" readonly="" value="<?php echo $r['name']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Deposite Amount</label>

                        <div class="col-sm-5">
                            <input  type="text" name="deposite_amount" class="form-control"  readonly="" value="<?php echo $r['deposite_amount']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Payable Amount</label>

                        <div class="col-sm-5">
                            <input  type="text" name="payable_amount" class="form-control" readonly="" value="<?php echo $r['payable_amount']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Pay</label>

                        <div class="col-sm-5">
                            <input  type="text" class="form-control"  name="pay">
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <button style="float: right;width:100px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Submit</button>	
                    </div>
                </form>
                <?php }?>
            </div>

        </div>

    </div>
</div>
