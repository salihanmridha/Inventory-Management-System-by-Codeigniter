

<h2>Customer Deposite Info</h2>

<a href="<?php echo site_url('sales/view_customer_payment'); ?>" class="btn btn-primary btn-icon icon-left" >
    View Deposite List
    <i class=" glyphicon glyphicon-plus-sign"></i>
</a>
<br><br>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Create New Payment</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form action="<?php echo site_url('sales/insert_customer_payment'); ?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    <div class="form-group" >
                        <label class="col-sm-3 control-label">Select Customer</label>

                        <div class="col-sm-5">
                            <select name="customer_id" id="customer_id"   class="form-control select2" data-placeholder="Select Customer..." required="">
                                <option disabled=""  selected="" ></option>
                                <?php foreach ($customer as $r){?>
                                <option value="<?php echo $r['customer_id']?>"><?php echo $r['name']?> - <?php echo $r['phone']?> </option>
                                <?php }?>
                                
                            </select>
                        </div>
                        
                        
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Deposited Amount</label>

                        <div class="col-sm-5">
                            <input  type="text" class="form-control"  placeholder="Amount" name="deposite_amount">
                        </div>
                    </div>
                    

                    <div class="form-group col-sm-6">
                        <button style="float: right;width:100px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Submit</button>	
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>
