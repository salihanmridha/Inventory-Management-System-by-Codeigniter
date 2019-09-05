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

            
        </div>

    </div>


    <hr style="border-top: 1px solid black;margin-top: 1px;" class="margin" />


    

    <div class="margin"></div>

    two boxes

    <div class="margin"></div>

    <div class="row" style="margin-top: -38px;">

        

        <div class="col-sm-12" >

            <div class="invoice-left">

                <ul class="list-unstyled">
                    <li>
                        On Account of 
                        <strong>.............................</strong>
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