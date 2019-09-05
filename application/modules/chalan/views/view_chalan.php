<div class="invoice" id="invoice_print">
  
    <div class="row" >

        <div class="col-sm-4 invoice-left">
            <p><b>ARROW INTERNATIONAL</b><br>
                55/2, Naya Paltan, Lavel-2<br>
                Dhaka-1000, Bangladesh<br>
                VAT RGSTN NO: 19081008450<br>
                Phone: +880-2-9345936,9334853<br>
                Mobile: +880-1819274221
            </p>


        </div>
        <div class="col-sm-4" style="margin-top: -25px;">

            <a>
                <img src="<?php echo base_url(); ?>assets/images/logo.png" width="185" alt="" />
            </a>
            <label style="margin-left: 44px;"> DELIVERY CHALLAN</label>

        </div>

        <div class="col-sm-4 invoice-right" style="margin-top: 18px;">

            <table class="table table-condensed table-bordered table-hover table-striped">
                

                <tbody>
                    <tr>

                        <td style="border:1px solid black !important;font-weight: bold;color:black;text-align: center">Chalan No</td>
                        <td style="border:1px solid black !important;text-align: center"><?php echo $chalan_no?></td>
                    </tr>

                    <tr>

                        <td style="border:1px solid black !important;font-weight: bold;color:black;text-align: center">Date</td>
                        <td style="border:1px solid black !important;text-align: center"><?php echo $chalan_date?></td>
                    </tr>


                </tbody>
            </table>
            <table class="table table-condensed table-bordered table-hover table-striped">
                

                <tbody>
                    <tr>

                        <td style="border:1px solid black !important;font-weight: bold;color:black;text-align: center">Invoice No</td>
                        <td style="border:1px solid black !important;text-align: center"><?php echo $sales_invoice_no?></td>
                    </tr>

                    <tr>

                        <td style="border:1px solid black !important;font-weight: bold;color:black;text-align: center">Date</td>
                        <td style="border:1px solid black !important;text-align: center"><?php echo $sales_invoice_date?></td>
                    </tr>


                </tbody>
            </table>
        </div>

    </div>


    <hr style="border-top: 1px solid black;margin-top: 1px;" class="margin" />


    <div class="row">

        <div class="col-sm-6 invoice-left" style="margin-top: -32px;">
        
            <h4>Client</h4>
          
        <?php foreach ($customer as $r){?>
            <p style="margin-top: -12px;margin-bottom: -5px;"> 
            <?php echo $r['name']?>
            <br>
            <?php echo $r['email']?>,
            <br />
           <?php echo $r['phone']?>
            <br />
           <?php echo $r['address']?>
           </p> 
        <?php }?>
        </div>

        

        

    </div>

    <div class="margin"></div>

    <table class="table table-bordered" style="margin-top: -28px;">
        <thead>
            <tr>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">SL</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">CODE </th>
                <th class="text-left" style="border:1px solid black !important;font-weight: bold;color:black">PRODUCT</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">PACKING</th>
                <th class="text-right" style="border:1px solid black !important;font-weight: bold;color:black">QUANTITY</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $row_count = 1;
            foreach ($invoice as $r){?>
            <tr>
                <td class="text-center" style="border:1px solid black !important;"><?php echo $row_count?></td>
                <td class="text-center" style="border:1px solid black !important;"><?php echo $r['product_code_no']?></td>
                <td class="text-left" style="border:1px solid black !important;"><?php echo $r['product']?></td>
                <td class="text-center" style="border:1px solid black !important;"><?php echo $r['supplier_product_unit']?> </td>
                <td class="text-right" style="border:1px solid black !important;"><?php echo $r['sale_quantity']?> <?php echo $r['unit_name']?></td>
                
            </tr>
             <?php $row_count++; }?>
            
            
        </tbody>
    </table>

    <div class="margin"></div>

    <div class="row" style="margin-top: -38px;">

        <div class="col-sm-8">

            <div class="invoice-left">

                <b>* Goods once sold, can not return back.</b><br>
                <b>* Received the above goods in good condition.</b>
                
            </div>

        </div>

        <div class="col-sm-4" style="margin-top: 18px;padding-right: 24px;">

            <div class="invoice-right">

                <ul class="list-unstyled">
                    <li>
                        Total Quantity: 
                        <strong><?php echo $grand_total_quantity?></strong>
                    </li>
                    
                </ul>

                
            </div>

        </div>

    </div>
    <br><br><br>
    <div class="row">

        <div class="col-sm-4" style="text-align: center">

        <hr style="border-top:1px solid black">
        Received By

        </div>

        <div class="col-sm-4" style="text-align: center">

            <hr style="border-top:1px solid black">
        Checked By

        </div>
        
        <div class="col-sm-4" style="text-align: center">

            <hr style="border-top:1px solid black">
        Authorized Signature

        </div>

    </div>
    <br>
    <div class="row">

        <div class="col-sm-12" style="text-align: center">
<!--            <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/1.jpeg" width="185" alt="" />-->
           <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/2.jpeg" width="185" alt="" />
           <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/3.jpeg" width="185" alt="" />
            <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/4.jpeg" width="185" alt="" />
            <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/5.jpeg" width="185" alt="" />
            <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/6.jpeg" width="185" alt="" />
            <img style="width:50px;height:40px;margin-bottom: 92px;" src="<?php echo base_url(); ?>package_media/logo/7.jpeg" width="185" alt="" />
            <img style="width:50px;height:40px;margin-bottom: 92px;padding-left: 0px;margin-left: -9px;" src="<?php echo base_url(); ?>package_media/logo/8.png" width="185" alt="" />
            <p style="margin-top: -78px;"><b>**Remarks:</b> Error & ommission expected.</p>
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