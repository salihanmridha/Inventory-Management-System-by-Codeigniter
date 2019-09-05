

<div class="invoice" id="invoice_print">

    <div class="row" style="padding-top: 31px;">

        <div class="col-sm-5 invoice-left">
            <p><b>ARROW INTERNATIONAL</b><br>
                Arrow Food Corporation<br>
                55/2, Naya Paltan, Lavel-2<br>
                Dhaka-1000, Bangladesh<br>
                VAT RGSTN NO: 19081008450<br>
                Phone: +880-2-9345936,9334853<br>
                Mobile: +880-1819274221
            </p>


        </div>
        <div class="col-sm-3">

            <a>
                <img src="<?php echo base_url(); ?>assets/images/logo.png" width="185" alt="" />
            </a><br>
            <b style="padding-left: 38px;font-size:13px;">Money Receipt</b>

        </div>

        <div class="col-sm-4 invoice-right" style="margin-top: 15px;">

            <table class="table table-condensed table-bordered table-hover table-striped">
                

                <tbody>
                    <tr>

                        <td style="border:1px solid black !important;font-weight: bold;color:black">Receipt No</td>
                        <?php foreach ($deposite_print as $r){?>
                            <td style="border:1px solid black !important;"><?php echo $r['receipt_no']?></td>
                        <?php }?>
                    </tr>

                    <tr>

                        <td style="border:1px solid black !important;font-weight: bold;color:black">Deposite Date</td>
                        <?php foreach ($deposite_print as $r){?>
                        <td style="border:1px solid black !important;"><?php echo $r['deposite_date']?></td>
                        <?php }?>
                    </tr>


                </tbody>
            </table>
        </div>

    </div>


    <hr style="border-top: 1px solid black;margin-top: 10px;" class="margin" />

    
    <table class="table table-bordered" >
        <thead>
            <tr>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">SL</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black;">Customer ID</th>
                <th class="text-left" style="border:1px solid black !important;font-weight: bold;color:black">Customer Details</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">Date</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black"> Payment</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black"> Dues</th>
                
            </tr>
        </thead>

        <tbody>
             <?php
            $row_count = 1;
            foreach ($deposite_print as $r) {
                ?>
            <tr>
                <td class="text-center" style="border:1px solid black !important;"><?php echo $row_count ?></td>
                <td class="text-center" style="border:1px solid black !important;">#<?php echo $r['customer_id']?></td>
                <td class="text-left" style="border:1px solid black !important;">Name: <?php echo $r['name']?>, Email: <?php echo $r['email']?>, Phone: <?php echo $r['phone']?>, Address: <?php echo $r['address']?></td>
                <td class="text-center" style="border:1px solid black !important;"><?php echo $r['payment_date']?></td>
                <td class="text-center" style="border:1px solid black !important;"><?php echo $r['total_deposite_credit']?></td>
                <td class="text-right" style="border:1px solid black !important;"><?php echo $r['dues']?></td>
                
            </tr>
            <?php $row_count++;}?>
        </tbody>
    </table>

    <div class="margin"></div>

    <div class="row" style="margin-top: -24px;">

        <div class="col-sm-6">

            <div class="invoice-left">

                <b>Taka In Words: <?php foreach ($deposite_print as $r){?> <?php echo $r['dues']?><?php }?></b>
                
            </div>

        </div>

        <div class="col-sm-6" style="margin-top: 10px;">

            <div class="invoice-right">

                <ul class="list-unstyled">
                    
                     <li>
                        Grand Total:
                        <?php foreach ($deposite_print as $r){?>
                        <strong><?php echo $r['dues']?></strong>
                        <?php }?>
                    </li>
                </ul>

                
            </div>

        </div>

    </div>
    
    <br>
    <div class="row">

        <div class="col-sm-4" style="text-align: center">

            <hr style="border-top:1px solid black">
        Checked By:

        </div>

        
        <div class="col-sm-4" style="text-align: center">

            <hr style="border-top:1px solid black">
        Accounts Dept.

        </div>
        <div class="col-sm-4" style="text-align: center">

            <hr style="border-top:1px solid black">
        Authorized Signature:

        </div>

    </div>
    <br>
    

    <div class="row">

        <div class="col-sm-12" style="text-align: center">
            <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/1.jpeg" width="185" alt="" />
           <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/2.jpeg" width="185" alt="" />
           <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/3.jpeg" width="185" alt="" />
            <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/4.jpeg" width="185" alt="" />
            <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/5.jpeg" width="185" alt="" />
            <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/6.jpeg" width="185" alt="" />
            <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/7.jpeg" width="185" alt="" />
            <img style="width:50px;height:40px;margin-bottom: 92px;padding-left: 0px;margin-left: -9px;" src="<?php echo base_url(); ?>package_media/logo/8.png" width="185" alt="" />
            <p style="margin-top: -78px;"><b>**Remarks:</b> Error & Commission Expected.</p>
        </div>
        
</div>
    
    
   

</div>

<div style="float:right;margin-bottom: 0px;margin-top: -37px;">

                <a  id="print" onclick="printContent('invoice_print');" class="btn btn-primary btn-icon icon-left hidden-print">
                    Print Invoice
                    <i class="entypo-doc-text"></i>
                </a>

            </div>
<script>
function printContent(invoice_print){
var restorepage = $('body').html();
var printcontent = $('#' + invoice_print).clone();
var enteredtext = $('#text').val();
$('body').empty().html(printcontent);
window.print();
$('body').html(restorepage);
$('#text').html(enteredtext);
}
</script>