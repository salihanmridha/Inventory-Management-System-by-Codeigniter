
<div class="invoice" id="invoice_print">

    <div class="row" >

        <div class="col-xs-3 invoice-left">

            <a>
                <img style="margin-top: -17px;height: 105px;" src="<?php echo base_url(); ?>assets/images/logo.png" width="185" alt="" />
            </a><br>

        </div>
        <div class="col-xs-6 " style="text-align: center">
            <p>
                <label style="font-size: 23px">Amarpriyo.com</label><br>
                52 Naya Palton, S.R. Garden (4th floor)<br>
                 Dhaka-1000, Bangladesh<br>
                Phone:  0258315754<br>
                Mobile: (+88) 01701755555
            </p>


        </div>


        <div class="col-xs-3 " style="margin-top: 10px;">


            <p style="margin-top: 35px;float: right"> Print: <?php echo date('d-m-Y'); ?></p>
        </div>

    </div>


    <div style="border-top: 1px solid black;margin-top: 12px;"> </div>



    <div class="row">

        <div class="col-xs-12 " style="margin-top: -26px;text-align: center">

            <label> Product History</label>
            <br>

        </div>


    </div>
    <br>
    <br>


    <div class="margin"></div>

    <table class="table table-bordered" style="margin-top: -28px;">
        <thead>
            <tr>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">SL</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">PRODUCT NAME</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">OLD PRICE</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">NEW PRICE</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $row_count = 1;
            foreach ($get_history as $r) {
                ?>
                <tr>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $row_count ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['product_name'] ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['product_price_old'] ?> </td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['product_price'] ?></td>
                </tr>
                <?php $row_count++;
            }
            ?>


        </tbody>
    </table>

    <div class="margin"></div>


    <br>


    <br><br><br><br>
<!--    <div class="row">

        <div class="col-xs-4" style="text-align: center">

            <hr style="border-top:1px solid black">
            Checked By

        </div>


        <div class="col-xs-4" style="text-align: center">

            <hr style="border-top:1px solid black">
            Accounts Dept

        </div>
        <div class="col-xs-4" style="text-align: center">

            <hr style="border-top:1px solid black">
            Authorized Signature

        </div>

    </div>-->
    <br><br><br><br><br>


<!--    <div class="row">

        <div class="col-xs-12" style="text-align: center">
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

    </div>-->

</div>

<div style="float:right;margin-bottom: 0px;margin-top: -37px;">

    <a  id="print" onclick="printContent('invoice_print');" class="btn btn-primary btn-icon icon-left hidden-print">
        Print Invoice
        <i class="entypo-doc-text"></i>
    </a>

</div>
<script>
    function printContent(invoice_print)
    {
        var restorepage = $('body').html();
        var printcontent = $('#' + invoice_print).clone();
        var enteredtext = $('#text').val();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
        $('#text').html(enteredtext);


    }


</script>
