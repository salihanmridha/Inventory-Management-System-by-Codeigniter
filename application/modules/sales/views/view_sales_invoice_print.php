
<div class="invoice" id="invoice_print" >

    <div class="row" >

        <div class="col-sm-3 invoice-left">

            <a>
                <img style="margin-top: -17px;height: 105px;" src="<?php echo base_url(); ?>assets/images/logo.png" width="185" alt="" />
            </a><br>
            
        </div>
        <div class="col-sm-6 " style="text-align: center">
            <p>
                <label style="font-size: 23px">ARROW INTERNATIONAL</label><br>
                55/2, Naya Paltan, Lavel-2,Dhaka-1000, Bangladesh<br>
                VAT RGSTN NO: 19081008450<br> 
                Phone: +880-2-9345936,9334853<br>
                Mobile: +880-1819274221
            </p>


        </div>
        

        <div class="col-sm-3 " style="margin-top: 10px;">

            
            <p style="margin-top: 35px;float: right"> Print: <?php echo date('d-m-Y'); ?></p>
        </div>

    </div>


    <hr style="border-top: 1px solid black;margin-top: 0px" class="margin" />



    <div class="row">

        <div class="col-sm-12 " style="margin-top: -26px;text-align: center">

            <label> Sales Invoice</label> 
            <br>
            
        </div>


    </div>
    <br>
    <br>

    <div class="row">

        <div class="col-sm-12 invoice-left" style="margin-top: -26px;">

            <?php foreach ($customer_name as $r) { ?>
                <b>Customer Name:</b> <?php echo $r['name'] ?>, <b>Email:</b> <?php echo $r['email'] ?>, <b>Phone:</b> <?php echo $r['phone'] ?>
                <br />
                <b>Address:</b> <?php echo $r['address'] ?>
                

            <?php } ?>
        </div>




    </div>

    <div class="margin"></div>

    <table class="table table-bordered" style="margin-top: -28px;">
        <thead>
            <tr>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">SL</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">DATE</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">Qty</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">UNIT PRICE</th>
                <th class="text-right " style="border:1px solid black !important;font-weight: bold;color:black">AMOUNT</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $row_count = 1;
            foreach ($view_sales as $r) {
                ?>
                <tr>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $row_count ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo date("d-m-Y", strtotime($r['sales_invoice_date'])) ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['sale_quantity'] ?> <?php echo $r['unit_name'] ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo number_format($r['product_price'],2) ?></td>
                    <td class="text-right" style="border:1px solid black !important;"><?php echo number_format($r['sale_quantity_price'],2) ?></td>
                </tr>
                <?php $row_count++;
            }
            ?>


        </tbody>
    </table>

    <div class="margin"></div>

    <div class="row" style="margin-top: -33px;">
        <div class="col-sm-12">
            <div class="col-sm-8">

                <div class="invoice-left">

                    <b> In Words: Taka <?php echo $this->numbertowords->convert_number($grand_total); ?> Only.</b>

                </div>

            </div>

<!--            <div class="col-sm-4 " style="padding-left: 30px;">
                Total Qty:
                <strong >
<?php echo $grand_total_qty ?>
                </strong>
            </div>-->
        </div>
    </div>
    <br>
    <div class="row" style="margin-top: -24px;">



        <div class="col-sm-12" >

            <div class="invoice-right">

                <ul class="list-unstyled">

                    <li> 
                        Grand Total:

                        <strong>
<?php echo number_format($grand_total,2) ?>
                        </strong>

                    </li>



                </ul>


            </div>

        </div>

    </div>
    <div class="row" >



        <div class="col-sm-12" >

            <div class="invoice-right" style="margin-top: -15px;">

                <ul class="list-unstyled">

                    <li> 
                        Paid:

                        <strong>
<?php echo number_format($customer_payment,2) ?>
                        </strong>

                    </li>



                </ul>


            </div>

        </div>

    </div>
    <div class="row" >



        <div class="col-sm-12" >

            <div class="invoice-right" style="margin-top: -15px;">

                <ul class="list-unstyled">

                    <li> 
                        Balance:

                        <strong>
<?php echo number_format($balance,2) ?>
                        </strong>

                    </li>



                </ul>


            </div>

        </div>

    </div>
    
                      <?php
if ($ledger == NULL) {
    ?>
    <div class="row" style="display: none"></div>
    
    <?php
} else {
    ?>
    <div class="row" >



        <div class="col-sm-12" >

            <div class="invoice-right" style="margin-top: -15px;">

                <ul class="list-unstyled">

                    <li> 
                        Ledger Balance:

                        <strong>
<?php echo number_format($ledger_balance,2) ?>
                        </strong>

                    </li>



                </ul>


            </div>

        </div>

    </div>
    <?php } ?> 
    <br><br><br><br>
    <div class="row">

        <div class="col-sm-4" style="text-align: center">

            <hr style="border-top:1px solid black">
            Checked By

        </div>

       
        <div class="col-sm-4" style="text-align: center">

            <hr style="border-top:1px solid black">
            Accounts Dept

        </div>
        <div class="col-sm-4" style="text-align: center">

            <hr style="border-top:1px solid black">
            Authorized Signature

        </div>

    </div>
    <br><br><br><br><br>


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