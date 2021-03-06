
<div class="invoice" id="invoice_print" >

    <?php include('report-header2.php'); ?>
    <div class="row">

        <div class="col-xs-12 " style="margin-top: 10px;text-align: center">

            <label>Yearly Return Report</label> (Supplier Wise)
            <br>
            <b style="color:red;">Year - <?php echo $year ?></b>
        </div>


    </div>
    <br>
    <br>

    <div class="row">

        <div class="col-xs-12 invoice-left" style="margin-top: -26px;">

            <?php foreach ($supplier as $r) { ?>
                <b>Supplier Name:</b> <?php echo $r['supplier_name'] ?>
                <br />
                <b>Supplier Phone:</b> <?php echo $r['supplier_phone'] ?>


            <?php } ?>
        </div>




    </div>

    <div class="margin"></div>

    <table class="table table-bordered" style="margin-top: -28px;">
        <thead>
            <tr>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">SL</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">DATE</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">CUSTOMER</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">SOLD QTY</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">RETURN QTY</th>
                <th class="text-right" style="border:1px solid black !important;font-weight: bold;color:black">AMOUNT-RTN.QTY</th>

            </tr>
        </thead>

        <tbody>
            <?php
            $row_count = 1;
            foreach ($yearly_report as $r) {
                ?>
                <tr>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $row_count ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['return_date'] ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['name'] ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['sold_qty'] ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['return_qty'] ?></td>
                    <td class="text-right" style="border:1px solid black !important;"><?php echo number_format($r['return_qty']*$r['product_price'],2) ?></td>
                </tr>
                <?php $row_count++;
            }
            ?>


        </tbody>
    </table>

    <div class="margin"></div>

    <div class="row" style="margin-top: -18px;">
        <div class="col-xs-12">
            <div class="col-xs-8">

                <div class="invoice-left">

                    <b> In Words: Taka <?php echo $this->numbertowords->convert_number($grand_total); ?> Only.</b>

                </div>

            </div>

            <div class="col-xs-4 " style="margin-left: -33px;">

                <strong >
                    <?php echo $grand_total_return ?>
                </strong>
            </div>
        </div>
    </div>

    <br>

    <div class="row" style="margin-top: -24px;">



        <div class="col-xs-12" >

            <div class="invoice-right">

                <ul class="list-unstyled">

                    <li>
                       Grand Total:

                        <strong>
                            <?php echo number_format($grand_total,2);?>
                        </strong>

                    </li>



                </ul>


            </div>

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
