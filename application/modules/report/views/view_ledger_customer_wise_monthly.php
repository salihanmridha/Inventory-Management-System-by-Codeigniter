
<div class="invoice" id="invoice_print" >



<?php include('report-header2.php'); ?>
<div class="row">

        <div class="col-xs-12 " style="margin-top: 10px;text-align: center">

            <label> Ledger Report (Customer Wise)</label>
            <br>
            <b style="color:red;"><?php echo $month ?> - <?php echo $year ?></b>
        </div>


    </div>
    <br>
    <br>

    <div class="row">

        <div class="col-xs-12 invoice-left" style="margin-top: -26px;">

            <?php foreach ($customer as $r) { ?>
                <b>Customer ID:</b> #00<?php echo $r['customer_id'] ?>
                <br />
                <b>Customer Name:</b> <?php echo $r['name'] ?>
                <br />
                <b>Email:</b> <?php echo $r['email'] ?>, <b>Phone:</b> <?php echo $r['phone'] ?>

                <br>
                <b>Address:</b> <?php echo $r['address'] ?>


            <?php } ?>
        </div>




    </div>

    <div class="margin"></div>

    <table class="table table-bordered" style="margin-top: -28px;">
        <thead>
            <tr>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">SL</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black"> DATE</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">INVOICE NO</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">MR.NO</th>
                <th class="text-right" style="border:1px solid black !important;font-weight: bold;color:black">DEBIT</th>
                <th class="text-right" style="border:1px solid black !important;font-weight: bold;color:black">CREDIT</th>

            </tr>
        </thead>

        <tbody>
            <?php
            $row_count = 1;
            foreach ($monthly_report as $r) {
                ?>
                <tr>

                    <td class="text-center" style="border:1px solid black !important;"><?php echo $row_count ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['sales_report_date'] ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['sales_invoice_no_1'] ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['money_receipt_no_1'] ?></td>
                    <td class="text-right" style="border:1px solid black !important;"><?php echo $r['sale_quantity_price'] ?></td>
                    <td class="text-right" style="border:1px solid black !important;"><?php echo $r['customer_sales_payment'] ?></td>

                </tr>
                <?php $row_count++;
            }
            ?>


        </tbody>
    </table>

    <div class="margin"></div>



    <div class="row" style="margin-top: -24px;">



        <div class="col-xs-6 " style="float:right;margin-right: -1px;">



                <table class="table table-condensed table-bordered table-hover table-striped">


                <tbody>
                    <tr>

                        <td style="border:1px solid black !important;font-weight: bold;color:black;text-align: right;width: 162px;">Total:</td>

                        <td style="border:1px solid black !important;text-align: right;width: 158px;"><?php echo number_format($debit_total,2) ?></td>
                        <td style="border:1px solid black !important;text-align: right;width: 160px;"><?php echo number_format($credit_total,2) ?></td>

                    </tr>




                </tbody>
            </table>




        </div>

    </div>

    <div class="row" >



        <div class="col-xs-5 " style="float:right;margin-right: -60px;">

          <b>Balance:</b>

           <?php echo number_format($debit_total- $credit_total,2) ?>
        </div>

    </div>

    <br><br><br><br>
    <div class="row">

        <div class="col-xs-4" style="text-align: center">

            <hr style="border-top:1px solid black">
            Checked By:

        </div>


        <div class="col-xs-4" style="text-align: center">

            <hr style="border-top:1px solid black">
            Accounts Dept.

        </div>
        <div class="col-xs-4" style="text-align: center">

            <hr style="border-top:1px solid black">
            Authorized Signature:

        </div>

    </div>
    <br><br><br><br><br>


    <div class="row">

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
