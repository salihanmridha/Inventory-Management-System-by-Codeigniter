<div class="invoice" id="invoice_print">

    <div class="row" style="padding-top: 31px;">

        <div class="col-sm-4 invoice-left">
            <p>ARROW INTERNATIONAL<br>
                Arrow Food Corporation<br>
                55/2, Naya Paltan, Lavel-2<br>
                Dhaka-1000, Bangladesh<br>
                VAT RGSTN NO: 19081008450<br>
                Phone: +880-2-9345936,9334853<br>
                Mobile: +880-1819274221
            </p>


        </div>
        <div class="col-sm-4">

            <a>
                <img src="<?php echo base_url(); ?>assets/images/logo.png" width="185" alt="" />
            </a><br>
            <b style="padding-left: 57px;font-size:21px;">Invoice</b>
        </div>

        <div class="col-sm-4 invoice-right" style="margin-top: 10px;">

            <table class="table table-condensed table-bordered table-hover table-striped">
                

                <tbody>
                    <tr>

                        <td style="border:1px solid black !important;font-weight: bold;color:black">Invoice No</td>
                        <td style="border:1px solid black !important;"><?php echo $sales_invoice_no?></td>
                    </tr>

                    <tr>

                        <td style="border:1px solid black !important;font-weight: bold;color:black">Date</td>
                        <td style="border:1px solid black !important;"><?php echo $sales_invoice_date?></td>
                    </tr>


                </tbody>
            </table>
            <table class="table table-condensed table-bordered table-hover table-striped">
                

                <tbody>
                    <tr>

                        <td style="border:1px solid black !important;font-weight: bold;color:black">Chalan No</td>
                        <td style="border:1px solid black !important;"><?php echo $chalan_no?></td>
                    </tr>

                    <tr>

                        <td style="border:1px solid black !important;font-weight: bold;color:black">Date</td>
                        <td style="border:1px solid black !important;"><?php echo $chalan_date?></td>
                    </tr>


                </tbody>
            </table>
        </div>

    </div>


    <hr style="border-top: 1px solid black" class="margin" />

    
    <div class="row">

        <div class="col-sm-6 invoice-left">
        
            <h4>Client</h4>
            
        <?php foreach ($customer as $r){?>
            
            <?php echo $r['name']?>
            <br />
            <?php echo $r['email']?>
            <br>
            <?php echo $r['phone']?>
            <br />
           <?php echo $r['address']?>
            
        <?php }?>
        </div>

        

        <div class="col-md-6 invoice-right" >

            <h4>Bank Details:</h4>
            <strong>Account Name:</strong> <label style="font-weight: normal">Arrow International</label>
            <br />
            <strong>Bank:</strong> <label style="font-weight: normal">First Security Islami Bank Limited</label>
            <br />
            <strong>Branch:</strong> <label style="font-weight: normal">Dilkusha Branch</label>
            <br>
            <strong>Account No:</strong> <label style="font-weight: normal">0101-131-00009361</label>
            <br />
	    <strong>SWIFT Code:</strong> <label style="font-weight: normal">FSEBBDDHDIL</label>
            
            
            

        </div>

    </div>

    <div class="margin"></div>

    <table class="table table-bordered" style="margin-top: -28px;">
        <thead>
            <tr>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">SL</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">CODE NO</th>
                <th class="text-left" style="border:1px solid black !important;font-weight: bold;color:black">PRODUCT</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">PACKING</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">QUANTITY</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">UNIT PRICE</th>
                <th class="text-right " style="border:1px solid black !important;font-weight: bold;color:black">TOTAL VALUE (BDT)</th>
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
                <td class="text-center" style="border:1px solid black !important;"><?php echo $r['distribution_product_unit']?> <?php echo $r['unit_name']?></td>
                <td class="text-center" style="border:1px solid black !important;"><?php echo $r['sale_quantity']?></td>
                <td class="text-center" style="border:1px solid black !important;"><?php echo $r['product_price']?></td>
                <td class="text-right" style="border:1px solid black !important;"><?php echo $r['sale_quantity_price']?></td>
            </tr>
            <?php $row_count++; }?>
            
            
        </tbody>
    </table>

    <div class="margin"></div>

    <div class="row" style="margin-top: -24px;">

        <div class="col-sm-6">

            <div class="invoice-left">

                <b>Taka In Words: <?php echo $this->numbertowords->convert_number($grand_total_amount)?> Only.</b>
                
            </div>

        </div>

        <div class="col-sm-6" style="margin-top: 10px;">

            <div class="invoice-right">

                <ul class="list-unstyled">
                   <li>
                        Grand Total:
                        <strong><?php echo number_format($grand_total_amount,2)?></strong>
                    </li>
                </ul>

                
            </div>

        </div>

    </div>
    
    <br>
    <div class="row">

        <div class="col-sm-3" style="text-align: center">

            <hr style="border-top:1px solid black">
        Checked By:

        </div>

        <div class="col-sm-3" style="text-align: center">

            <hr style="border-top:1px solid black">
        Client:

        </div>
        <div class="col-sm-3" style="text-align: center">

            <hr style="border-top:1px solid black">
        Accounts Dept.

        </div>
        <div class="col-sm-3" style="text-align: center">

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