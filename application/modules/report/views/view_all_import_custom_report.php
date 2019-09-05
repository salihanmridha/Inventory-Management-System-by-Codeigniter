
<div class="invoice" id="invoice_print" >
<?php include('report-header.php'); ?>
<div class="row">

        <div class="col-xs-12 " style="margin-top: 10px;text-align: center">

            <label>All Purchase Report</label> (Custom)
            <br>
            <b style="color:red;"><?php echo $from ?> To <?php echo $to ?></b>
        </div>


    </div>
    <br>
    <br>



    <div class="margin"></div>

    <table class="table table-bordered" style="margin-top: -28px;">
        <thead>
            <tr>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">SL</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">INV.NO</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">DATE</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">PRD.DESCRIPTION</th>
                <th class="text-left" style="border:1px solid black !important;font-weight: bold;color:black">MFG.DATE</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">EXP.DATE</th>
                <th class="text-left" style="border:1px solid black !important;font-weight: bold;color:black">PACKING UNIT</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">QTY</th>
                <th class="text-center" style="border:1px solid black !important;font-weight: bold;color:black">UNIT PRICE</th>
                <th class="text-right " style="border:1px solid black !important;font-weight: bold;color:black">TOTAL COST (BDT)</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $row_count = 1;
            foreach ($custom_report as $r) {
                ?>
                <tr>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $row_count ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['import_code_no'] ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['import_date'] ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['product_name'] ?>-<?php echo $r['brand_name'] ?>-<?php echo $r['style_name'] ?> </td>
                    <td class="text-left" style="border:1px solid black !important;"><?php echo $r['production_date'] ?></td>
                     <td class="text-center" style="border:1px solid black !important;"><?php echo $r['expiery_date'] ?></td>
                    <td class="text-left" style="border:1px solid black !important;"><?php echo $r['supplier_product_unit'] ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo $r['quantity'] ?></td>
                    <td class="text-center" style="border:1px solid black !important;"><?php echo number_format($r['cost_price'],2) ?></td>
                    <td class="text-right" style="border:1px solid black !important;"><?php echo number_format($r['quantity'] * $r['cost_price'],2) ?></td>
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

            <div class="col-xs-4 " style="padding-left: 44px;">
                Total Qty:
                <strong >
<?php echo $grand_total_qty ?>
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
<?php echo number_format($grand_total,2) ?>
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
