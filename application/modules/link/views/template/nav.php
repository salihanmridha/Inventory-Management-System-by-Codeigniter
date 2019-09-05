

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="<?php echo site_url('dashboard/home'); ?>">
                    <img src="<?php echo base_url(); ?>assets/images/logo.png" width="120" alt="" />
                </a>
            </div>

            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>


            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>


        <ul id="main-menu" class="main-menu" >
            <li class="opened active ">
                <a href="<?= base_url() ?>dashboard/home">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>

            </li>

            <li>
            <a href="<?php echo site_url('search/search_start'); ?>">
                    <i class="fa fa-navicon"></i>
                    <span class="title">Search</span>
                </a>
            </li>
            <?php
     foreach ($previledge as $r ){ ?>

		<?php

			if($r['user_id']==1)
				{?>

            <?php

            $url = uri_string();
            if($url=='user/view_user')
            {
                echo '<li class="root-level opened active">';
            }
            else
                {
                    echo '<li class="root-level">';
                }
            ?>
            <a href="<?php echo site_url('user/view_user'); ?>">
                    <i class="fa fa-navicon"></i>
                    <span class="title">User Role</span>
                </a>
            </li>
            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


<!--            <li class="has-sub">
                <a href="#">
                    <i class="fa fa-support"></i>
                    <span class="title">Global Settings</span>
                </a>
                <ul>
                    <li>

                        <a href="<?php echo site_url('global_settings/site_logo'); ?>">
                            <i class="fa fa-image"></i>
                            <span class="title">Site Logo</span>
                        </a>

                    </li>
                    <li>
                        <a href="<?php echo site_url('global_settings/favicon'); ?>">
                            <i class="fa fa-image"></i>
                            <span class="title">Site Favicon</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('global_settings/copyright'); ?>">
                            <i class="fa fa-copyright"></i>
                            <span class="title">Site Copyright</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('global_settings/title'); ?>">
                            <i class="fa fa-info-circle"></i>
                            <span class="title">Site Title</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('global_settings/email'); ?>">
                            <i class="fa fa-envelope"></i>
                            <span class="title">Global Email</span>
                        </a>
                    </li>
                </ul>
            </li>-->

            <?php
                          foreach ($previledge as $r ){ ?>


                    <?php
                    if($r['supplier']=="supplier" || $r['supplier_view']=="supplier_view" || $r['supplier_add']=="supplier_add" || $r['supplier_edit']=="supplier_edit" || $r['brand']=="brand" || $r['brand_view']=="brand_view" || $r['brand_add']=="brand_add" || $r['brand_edit']=="brand_edit" || $r['brand_delete']=="brand_delete" || $r['unit']=="unit" || $r['unit_view']=="unit_view" || $r['unit_add']=="unit_add" || $r['unit_edit']=="unit_edit" || $r['unit_delete']=="unit_delete" || $r['style']=="style" || $r['style_view']=="style_view" || $r['style_add']=="style_add" || $r['style_edit']=="style_edit" || $r['style_delete']=="style_delete" || $r['product']=="product" || $r['product_view']=="product_view" || $r['product_add']=="product_add" || $r['product_edit']=="product_edit" || $r['product_delete']=="product_delete" || $r['supplier_packing']=="supplier_packing" || $r['supplier_packing_view']=="supplier_packing_view" || $r['supplier_packing_add']=="supplier_packing_add" || $r['supplier_packing_edit']=="supplier_packing_edit" || $r['supplier_packing_delete']=="supplier_packing_delete" || $r['distribution_packing']=="distribution_packing" || $r['distribution_packing_view']=="distribution_packing_view" || $r['distribution_packing_add']=="distribution_packing_add" || $r['distribution_packing_edit']=="distribution_packing_edit" || $r['distribution_packing_delete']=="distribution_packing_delete" || $r['product_import']=="product_import" || $r['import_add']=="import_add" || $r['import_view']=="import_view" || $r['import_print']=="import_print" || $r['import_delete']=="import_delete")
                        {?>
            <?php
                $url = uri_string();
                if ($url == "import/view_supplier" || $url == "import/view_brand" || $url == "import/view_unit" || $url == "import/view_product_making" || $url == "import/new_product" || $url == "import/get_product_import" || $url == "import/view_import" || $url == "import/view_supplier_packing" || $url == "import/new_supplier_packing" || $url == "import/view_distribution_packing" || $url == "import/new_distribution_packing" || $url == "import/view_style" || $url == "import/get_product_import_supplier" || $url == "import/get_product_import_distribution")
                    {
                        echo '<li class="has-sub opened active">';
                    }
                else
                    {
                        echo '<li class="has-sub">';
                    }
            ?>

                <a href="#">
                    <i class="fa fa-navicon"></i>
                    <span class="title">Product Info</span>
                </a>
                <ul>

                   <?php
                          foreach ($previledge as $r ){ ?>


                    <?php
                    if($r['supplier']=="supplier" || $r['supplier_view']=="supplier_view" || $r['supplier_add']=="supplier_add" || $r['supplier_edit ']=="supplier_edit ")
                        {?>

                    <?php
                        $url2 = uri_string();
                        if ($url2 == "import/view_supplier" )
                            {
                                echo '<li class="opened active">';
                            }
                        else
                            {
                                echo '<li>';
                            }
                    ?>

                        <a href="<?php echo site_url('import/view_supplier'); ?>">
                            <span class="title">Supplier</span>
                        </a>
                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                    <?php
                          foreach ($previledge as $r ){ ?>


                    <?php
                    if($r['brand']=="brand" || $r['brand_view']=="brand_view" || $r['brand_add']=="brand_add" || $r['brand_edit']=="brand_edit" || $r['brand_delete']=="brand_delete")
                        {?>
                    <?php
                        $url2 = uri_string();
                        if ($url2 == "import/view_brand" )
                            {
                                echo '<li class="opened active">';
                            }
                        else
                            {
                                echo '<li>';
                            }
                    ?>

                        <a href="<?php echo site_url('import/view_brand'); ?>">
                            <span class="title">Brand</span>
                        </a>
                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>



                    <?php
                          foreach ($previledge as $r ){ ?>


                    <?php
                    if($r['unit']=="unit" || $r['unit_view']=="unit_view" || $r['unit_add']=="unit_add" || $r['unit_edit']=="unit_edit" || $r['unit_delete']=="unit_delete")
                        {?>

                        <?php
                        $url2 = uri_string();
                        if ($url2 == "import/view_unit" )
                            {
                                echo '<li class="opened active">';
                            }
                        else
                            {
                                echo '<li>';
                            }
                    ?>
                        <a href="<?php echo site_url('import/view_unit'); ?>">
                            <span class="title">Unit</span>
                        </a>
                    </li>

                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>



                    <?php
                          foreach ($previledge as $r ){ ?>


                    <?php
                    if($r['style']=="style" || $r['style_view']=="style_view" || $r['style_add']=="style_add" || $r['style_edit']=="style_edit" || $r['style_delete']=="style_delete")
                        {?>
                    <?php
                        $url2 = uri_string();
                        if ($url2 == "import/view_style" )
                            {
                                echo '<li class="opened active">';
                            }
                        else
                            {
                                echo '<li>';
                            }
                    ?>
                        <a href="<?php echo site_url('import/view_style'); ?>">
                            <span class="title">Style & Size</span>
                        </a>
                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                        <?php
                          foreach ($previledge as $r ){ ?>


                    <?php
                    if($r['product']=="product" || $r['product_view']=="product_view" || $r['product_add']=="product_add" || $r['product_edit']=="product_edit" || $r['product_delete']=="product_delete")
                        {?>
                    <?php
                        $url2 = uri_string();
                        if ($url2 == "import/view_product_making" || $url2 == "import/new_product" )
                            {
                                echo '<li class="opened active">';
                            }
                        else
                            {
                                echo '<li>';
                            }
                    ?>
                        <a href="<?php echo site_url('import/view_product_making'); ?>">
                            <span class="title">Product Settings</span>
                        </a>
                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>
<!--                    <li>
                        <a href="<?php echo site_url('import/view_stock_import'); ?>">
                            <span class="title">Initial Import</span>
                        </a>
                    </li>-->
<!--                    <li>
                        <a href="<?php echo site_url('import/view_import'); ?>">
                            <span class="title">Invoice Import</span>
                        </a>
                    </li>-->

                    <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['supplier_packing']=="supplier_packing" || $r['supplier_packing_view']=="supplier_packing_view" || $r['supplier_packing_add']=="supplier_packing_add" || $r['supplier_packing_edit']=="supplier_packing_edit" || $r['supplier_packing_delete']=="supplier_packing_delete")
                        {?>
                    <?php
                        $url2 = uri_string();
                        if ($url2 == "import/view_supplier_packing" || $url2 == "import/new_supplier_packing" || $url2 == "import/get_product_import_supplier")
                            {
                                echo '<li class="opened active">';
                            }
                        else
                            {
                                echo '<li>';
                            }
                    ?>
                        <a href="<?php echo site_url('import/view_supplier_packing'); ?>">
                            <span class="title">Supplier Packing</span>
                        </a>
                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                     <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['distribution_packing']=="distribution_packing" || $r['distribution_packing_view']=="distribution_packing_view" || $r['distribution_packing_add']=="distribution_packing_add" || $r['distribution_packing_edit']=="distribution_packing_edit" || $r['distribution_packing_delete']=="distribution_packing_delete")
                        {?>
                    <?php
                        $url2 = uri_string();
                        if ($url2 == "import/view_distribution_packing" || $url2 == "import/new_distribution_packing" || $url2 == "import/get_product_import_distribution")
                            {
                                echo '<li class="opened active">';
                            }
                        else
                            {
                                echo '<li>';
                            }
                    ?>
                        <a href="<?php echo site_url('import/view_distribution_packing'); ?>">
                            <span class="title">Distribution Packing</span>
                        </a>
                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                        <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['product_import']=="product_import" || $r['import_add']=="import_add" || $r['import_view']=="import_view" || $r['import_print']=="import_print" || $r['import_delete']=="import_delete")
                        {?>
                    <?php
                        $url2 = uri_string();
                        if ($url2 == "import/get_product_import"  )
                            {
                                echo '<li class="opened active">';
                            }
                        else
                            {
                                echo '<li>';
                            }
                    ?>
                        <a href="<?php echo site_url('import/get_product_import'); ?>">
                            <span class="title">Product Import</span>
                        </a>
                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>

<!--                    <li>
                        <a href="<?php echo site_url('import/view_package'); ?>">
                            <span class="title">Package</span>
                        </a>
                    </li>-->

                </ul>
            </li>

            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['inventory']=="inventory" || $r['inventory_view']=="inventory_view" )
                        {?>
            <?php
                $url2 = uri_string();
                if ($url2 == "inventory/view_inventory"  )
                    {
                        echo '<li class="root-level opened active" >';
                    }
                else
                    {
                        echo '<li root-level>';
                    }
            ?>
                <a href="<?php echo site_url('inventory/view_inventory'); ?>">
                    <i class="fa fa-navicon"></i>
                    <span class="title">Inventory</span>
                </a>
            </li>
            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


              <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['customer']=="customer" || $r['customer_view']=="customer_view" || $r['customer_add']=="customer_add" || $r['customer_edit']=="customer_edit" || $r['customer_delete']=="customer_delete"  )
                        {?>
            <?php
                $url2 = uri_string();
                if ($url2 == "sales/view_customer" || $url2 == "sales/new_customer" || $url2 == "sales/view_sales" || $url2 == "sales/new_sales" || $url2 == "sales/view_customer_payment" || $url2 == "sales/new_customer_payment" || $url2 == "sales/view_customer_payment_final" || $url2 == "sales/view_customer_payment_single")
                    {
                        echo '<li class=" has-sub opened active">';
                    }
                else
                    {
                        echo '<li class= "has-sub">';
                    }
               ?>
                <a href="#">
                    <i class="fa fa-navicon"></i>
                    <span class="title">Product Sales</span>
                </a>
                <ul>


                    <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['customer']=="customer" || $r['customer_view']=="customer_view" || $r['customer_add']=="customer_add" || $r['customer_edit']=="customer_edit" || $r['customer_delete']=="customer_delete" || $r['sales']=="sales" || $r['sales_create']=="sales_create")
                        {?>
                   <?php
                        $url2 = uri_string();
                        if ($url2 == "sales/view_customer" || $url2 == "sales/new_customer" )
                            {
                                echo '<li class=" opened active">';
                            }
                        else
                            {
                                echo '<li>';
                            }
                    ?>
                        <a href="<?php echo site_url('sales/view_customer'); ?>">
                            <span class="title">Customer</span>
                        </a>
                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                    <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['user_id']==1)
                        {?>
                     <?php
                        $url2 = uri_string();
                        if ($url2 == "sales/view_customer_payment" || $url2 == "sales/new_customer_payment" )
                            {
                                echo '<li class=" opened active">';
                            }
                        else
                            {
                                echo '<li>';
                            }
                    ?>
                        <a href="<?php echo site_url('sales/view_customer_payment'); ?>">
                            <span class="title">Customer Payment</span>
                        </a>
                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                        <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['sales']=="sales" || $r['sales_create']=="sales_create" )
                        {?>
                     <?php
                        $url2 = uri_string();
                        if ( $url2 == "sales/view_sales" || $url2 == "sales/new_sales")
                            {
                                echo '<li class=" opened active">';
                            }
                        else
                            {
                                echo '<li>';
                            }
                    ?>
                        <a href="<?php echo site_url('sales/view_sales'); ?>">
                            <span class="title">Sales</span>
                        </a>
                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>
<!--                    <li>
                        <a href="<?php echo site_url('sales/split'); ?>">
                            <span class="title">Split Product</span>
                        </a>
                    </li>-->

                </ul>
             </li>
              <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                 <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['return_1']=="return" || $r['sales_return']=="sales_return" )
                        {?>
                <?php
                $url2 = uri_string();
                if ( $url2 == "sales_return/create_sales_return" )
                    {
                        echo '<li class=" opened active">';
                    }
                else
                    {
                        echo '<li>';
                    }
            ?>
             <a href="<?php echo site_url('sales_return/create_sales_return'); ?>">
                    <i class="fa fa-navicon"></i>
                    <span class="title">Sales Return</span>
                </a>
            </li>
            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


            <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['invoice']=="invoice" || $r['invoice_listing']=="invoice_listing" || $r['invoice_print']=="invoice_print")
                        {?>
                <?php
                $url2 = uri_string();
                if ($url2 == "invoice/sales_invoice"  )
                    {
                        echo '<li class="root-level opened active" >';
                    }
                else
                    {
                        echo '<li root-level>';
                    }
            ?>
                <a href="<?php echo site_url('invoice/sales_invoice'); ?>">
                    <i class="fa fa-navicon"></i>
                    <span class="title">Invoice</span>
                </a>
            </li>
            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


            <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['challan']=="challan" || $r['challan_listing']=="challan_listing" || $r['challan_print']=="challan_print")
                        {?>
            <?php
                $url2 = uri_string();
                if ($url2 == "chalan/chalan_listing"  )
                    {
                        echo '<li class="root-level opened active" >';
                    }
                else
                    {
                        echo '<li root-level>';
                    }
            ?>
                <a href="<?php echo site_url('chalan/chalan_listing'); ?>">
                    <i class="fa fa-navicon"></i>
                    <span class="title">Delivery Chalan</span>
                </a>
            </li>
            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


               <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['receipt']=="receipt" || $r['receipt_listing']=="receipt_listing" || $r['receipt_print']=="receipt_print")
                        {?>
             <?php
                $url2 = uri_string();
                if ($url2 == "receipt/deposite_receipt"  )
                    {
                        echo '<li class="root-level opened active" >';
                    }
                else
                    {
                        echo '<li root-level>';
                    }
            ?>
                <a href="<?php echo site_url('receipt/deposite_receipt'); ?>">
                    <i class="fa fa-navicon"></i>
                    <span class="title">Money Receipt</span>
                </a>
            </li>
            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


             <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['ledger']=="ledger" || $r['ledger_view']=="ledger_view")
                        {?>
            <?php
                $url2 = uri_string();
                if ($url2 == "ledger/ledger_listing"  )
                    {
                        echo '<li class="root-level opened active" >';
                    }
                else
                    {
                        echo '<li root-level>';
                    }
            ?>
                <a href="<?php echo site_url('ledger/ledger_listing'); ?>">
                    <i class="fa fa-navicon"></i>
                    <span class="title">ledger</span>
                </a>
            </li>
            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>



                         <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['all_customer_ledger_report']=="all_customer_ledger_report" || $r['customer_ledger_report']=="customer_ledger_report" || $r['supplier_return_report']=="supplier_return_report" || $r['product_return_report']=="product_return_report" || $r['invoice_return_report']=="invoice_return_report" || $r['cost_sales_report']=="cost_sales_report" || $r['product_sales_report']=="product_sales_report" || $r['invoice_sales_report']=="invoice_sales_report" || $r['supplier_sales_report']=="supplier_sales_report" || $r['product_inventory_report']=="product_inventory_report" || $r['supplier_inventory_report']=="supplier_inventory_report" || $r['product_import_report']=="product_import_report" || $r['supplier_import_report']=="supplier_import_report" || $r['all_customer_ledger_report']=="all_customer_ledger_report" || $r['product_import_report']=="product_import_report" || $r['supplier_import_report']=="supplier_import_report")
                        {?>
                        <?php
                $url2 = uri_string();
                if ($url2 == "report/import_supplier_monthly_report" || $url2 == "report/import_supplier_yearly_report" || $url2 == "report/generate_import_supplier_monthly_report" || $url2 == "report/generate_import_supplier_yearly_report" || $url2 == "report/import_supplier_custom_report" || $url2 == "report/generate_import_supplier_custom_report" || $url2 =="report/import_product_monthly_report" || $url2 == "report/generate_import_product_monthly_report" || $url2 == "report/import_product_yearly_report" || $url2 == "report/generate_import_product_yearly_report" || $url2 == "report/import_product_custom_report" || $url2 == "report/generate_import_product_custom_report" || $url2 == "report/sales_product_wise_report" || $url2 == "report/generate_sales_product_wise_monthly_report" || $url2 == "report/generate_sales_product_wise_yearly_report" || $url2 == "report/generate_sales_product_wise_custom_report")
                    {
                        echo '<li class="has-sub opened active" >';
                    }
                else
                    {
                        echo '<li class= "has-sub">';
                    }
            ?>
               <a href="#">
                    <i class="fa fa-navicon"></i>
                    <span class="title">Report Details</span>
                </a>
                <ul>

                      <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['product_import_report']=="product_import_report" || $r['supplier_import_report']=="supplier_import_report")
                        {?>
                    <?php
                        $url2 = uri_string();
                        if ($url2 == "report/import_supplier_monthly_report" || $url2 == "report/import_supplier_yearly_report" || $url2 == "report/generate_import_supplier_monthly_report" || $url2 == "report/generate_import_supplier_yearly_report" || $url2 == "report/import_supplier_custom_report" || $url2 == "report/generate_import_supplier_custom_report" || $url2 =="report/import_product_monthly_report" || $url2 == "report/generate_import_product_monthly_report" || $url2 == "report/import_product_yearly_report" || $url2 == "report/generate_import_product_yearly_report" || $url2 == "report/import_product_custom_report" || $url2 == "report/generate_import_product_custom_report")
                            {
                                echo '<li class="has-sub opened active" >';
                            }
                        else
                            {
                                echo '<li class= "has-sub">';
                            }
                    ?>

                        <a href="#">
                            <i class="fa fa-navicon"></i>
                            <span class="title">Import/Purchase</span>
                        </a>
                        <ul>

                            <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['supplier_import_report']=="supplier_import_report")
                        {?>
                           <?php
                                $url2 = uri_string();
                                if ($url2 == "report/import_supplier_monthly_report" || $url2 == "report/import_supplier_yearly_report" || $url2 == "report/generate_import_supplier_monthly_report" || $url2 == "report/generate_import_supplier_yearly_report" || $url2 == "report/import_supplier_custom_report" || $url2 == "report/generate_import_supplier_custom_report" )
                                    {
                                        echo '<li class="has-sub opened active" >';
                                    }
                                else
                                    {
                                        echo '<li class= "has-sub">';
                                    }
                            ?>
                                <a href="#">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">Supplier Wise</span>
                                </a>

                                <ul>

                                   <?php
                                        $url2 = uri_string();
                                        if ($url2 == "report/import_supplier_monthly_report" || $url2 == "report/generate_import_supplier_monthly_report" )
                                            {
                                                echo '<li class="opened active" >';
                                            }
                                        else
                                            {
                                                echo '<li>';
                                            }
                                    ?>
                                        <a href="<?php echo site_url('report/import_supplier_monthly_report');?>">
                                            <span class="title">Monthly</span>
                                        </a>
                                    </li>
                                    <?php
                                        $url2 = uri_string();
                                        if ($url2 == "report/import_supplier_yearly_report" || $url2 == "report/generate_import_supplier_yearly_report" )
                                            {
                                                echo '<li class="opened active" >';
                                            }
                                        else
                                            {
                                                echo '<li>';
                                            }
                                    ?>
                                        <a href="<?php echo site_url('report/import_supplier_yearly_report');?>">
                                            <span class="title">Yearly</span>
                                        </a>
                                    </li>
                                    <?php
                                        $url2 = uri_string();
                                        if ($url2 == "report/import_supplier_custom_report" || $url2 == "report/generate_import_supplier_custom_report" )
                                            {
                                                echo '<li class="opened active" >';
                                            }
                                        else
                                            {
                                                echo '<li>';
                                            }
                                    ?>
                                        <a href="<?php echo site_url('report/import_supplier_custom_report');?>">
                                            <span class="title">Custom Period</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                             <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                           <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['product_import_report']=="product_import_report")
                        {?>
                        <?php
                                $url2 = uri_string();
                                if ($url2 == "report/import_product_monthly_report" || $url2 == "report/generate_import_product_monthly_report" || $url2 == "report/import_product_yearly_report" || $url2 == "report/generate_import_product_yearly_report" || $url2 == "report/import_product_custom_report" || $url2 == "report/generate_import_product_custom_report")
                                    {
                                        echo '<li class="has-sub opened active" >';
                                    }
                                else
                                    {
                                        echo '<li class= "has-sub">';
                                    }
                            ?>
                                <a href="#">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">Product Wise</span>
                                </a>

                                <ul>

                                    <?php
                                        $url2 = uri_string();
                                        if ($url2 == "report/import_product_monthly_report" || $url2 == "report/generate_import_product_monthly_report")
                                            {
                                                echo '<li class="opened active" >';
                                            }
                                        else
                                            {
                                                echo '<li>';
                                            }
                                    ?>
                                        <a href="<?php echo site_url('report/import_product_monthly_report');?>">
                                            <span class="title">Monthly</span>
                                        </a>
                                    </li>
                                    <?php
                                        $url2 = uri_string();
                                        if ($url2 == "report/import_product_yearly_report" || $url2 == "report/generate_import_product_yearly_report")
                                            {
                                                echo '<li class="opened active" >';
                                            }
                                        else
                                            {
                                                echo '<li>';
                                            }
                                    ?>
                                        <a href="<?php echo site_url('report/import_product_yearly_report');?>">
                                            <span class="title">Yearly</span>
                                        </a>
                                    </li>
                                    <?php
                                        $url2 = uri_string();
                                        if ($url2 == "report/import_product_custom_report" || $url2 == "report/generate_import_product_custom_report")
                                            {
                                                echo '<li class="opened active" >';
                                            }
                                        else
                                            {
                                                echo '<li>';
                                            }
                                    ?>
                                        <a href="<?php echo site_url('report/import_product_custom_report');?>">
                                            <span class="title">Custom Period</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>




                        <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['user_id']==1)
                        {?>

                            <li>
                                <a href="<?php echo site_url('report/all_import_product_report');?>">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">All Purchase</span>
                                </a>


                            </li>
                            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>






                        </ul>

                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                         <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['product_inventory_report']=="product_inventory_report" || $r['supplier_inventory_report']=="supplier_inventory_report")
                        {?>
                        <li class="has-sub" >


                        <a href="#">
                            <i class="fa fa-navicon"></i>
                            <span class="title">Inventory</span>
                        </a>
                        <ul>

                          <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['supplier_inventory_report']=="supplier_inventory_report")
                        {?>
                                <li class="has-sub" >


                                <a href="#">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">Supplier Wise</span>
                                </a>

                                <ul>

                                  <li>
                                        <a href="<?php echo site_url('report/inventory_supplier_monthly_report');?>">
                                            <span class="title">Monthly</span>
                                        </a>
                                    </li>
                                   <li>
                                        <a href="<?php echo site_url('report/inventory_supplier_yearly_report');?>">
                                            <span class="title">Yearly</span>
                                        </a>
                                    </li>
                                   <li>
                                        <a href="<?php echo site_url('report/inventory_supplier_custom_report');?>">
                                            <span class="title">Custom Period</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                        <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['product_inventory_report']=="product_inventory_report")
                        {?>
                        <li class= "has-sub">
                                <a href="#">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">Product Wise</span>
                                </a>

                                <ul>

                                   <li>
                                        <a href="<?php echo site_url('report/inventory_product_monthly_report');?>">
                                            <span class="title">Monthly</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('report/inventory_product_yearly_report');?>">
                                            <span class="title">Yearly</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('report/inventory_product_custom_report');?>">
                                            <span class="title">Custom Period</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>

                        </ul>

                    </li>
                     <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                          <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['cost_sales_report']=="cost_sales_report" || $r['product_sales_report']=="product_sales_report" || $r['invoice_sales_report']=="invoice_sales_report" || $r['supplier_sales_report']=="supplier_sales_report")
                        {?>
                    <?php
                        $url2 = uri_string();
                        if ($url2 == "report/sales_product_wise_report" || $url2 == "report/generate_sales_product_wise_monthly_report" || $url2 == "report/generate_sales_product_wise_yearly_report" || $url2 == "report/generate_sales_product_wise_custom_report")
                            {
                                echo '<li class="has-sub opened active" >';
                            }
                        else
                            {
                                echo '<li class="has-sub">';
                            }
                    ?>
                        <a href="#">
                            <i class="fa fa-navicon"></i>
                            <span class="title">Sales</span>
                        </a>
                        <ul>

                             <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['product_sales_report']=="product_sales_report")
                        {?>
                    <?php
                        $url2 = uri_string();
                        if ($url2 == "report/sales_product_wise_report" || $url2 == "report/generate_sales_product_wise_monthly_report" || $url2 == "report/generate_sales_product_wise_yearly_report" || $url2 == "report/generate_sales_product_wise_custom_report")
                            {
                                echo '<li class="root-level opened active" >';
                            }
                        else
                            {
                                echo '<li class="root-level">';
                            }
                    ?>
                                <a href="<?php echo site_url('report/sales_product_wise_report');?>">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">Product Wise</span>
                                </a>


                            </li>
                            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                           <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['invoice_sales_report']=="invoice_sales_report")
                        {?>
                            <li class="root-level">
                                <a href="<?php echo site_url('report/sales_invoice_wise_report');?>">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">Invoice Wise</span>
                                </a>


                            </li>
                             <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                         <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['supplier_sales_report']=="supplier_sales_report")
                        {?>
                        <li class="root-level">
                                <a href="<?php echo site_url('report/sales_supplier_wise_report');?>">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">Supplier Wise</span>
                                </a>


                            </li>
                            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                             <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['cost_sales_report']=="cost_sales_report")
                        {?>
                            <li class="root-level" >
                                <a href="<?php echo site_url('report/sales_cost_profit_wise_report');?>">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">Sales Cost & Profit</span>
                                </a>
                            </li>
                            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>

                        </ul>

                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                     <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['supplier_return_report']=="supplier_return_report" || $r['product_return_report']=="product_return_report" || $r['invoice_return_report']=="invoice_return_report")
                        {?>
                        <li class="has-sub">
                        <a href="#">
                            <i class="fa fa-navicon"></i>
                            <span class="title">Return</span>
                        </a>
                        <ul>

                              <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['product_return_report']=="product_return_report")
                        {?>
                            <li class="root-level">
                                <a href="<?php echo site_url('report/return_product_wise_report');?>">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">Product Wise</span>
                                </a>


                            </li>
                            <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>



                           <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['invoice_return_report']=="invoice_return_report")
                        {?>
                        <li class="root-level">
                                <a href="<?php echo site_url('report/return_invoice_wise_report');?>">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">Invoice Wise</span>
                                </a>


                            </li>
                             <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                             <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['supplier_return_report']=="supplier_return_report")
                        {?>
                            <li class="root-level">
                                <a href="<?php echo site_url('report/return_supplier_wise_report');?>">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">Supplier Wise</span>
                                </a>


                            </li>
                             <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>



                        </ul>

                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                    <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['all_customer_ledger_report']=="all_customer_ledger_report" || $r['customer_ledger_report']=="customer_ledger_report")
                        {?>
                    <li class= "has-sub">
                        <a href="#">
                            <i class="fa fa-navicon"></i>
                            <span class="title">Ledger</span>
                        </a>
                        <ul>

                              <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['customer_ledger_report']=="customer_ledger_report")
                        {?>
                            <li class= "root-level">
                                <a href="<?php echo site_url('report/ledger_customer_wise');?>">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">Customer Wise</span>
                                </a>


                            </li>
                             <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


                          <?php
                          foreach ($previledge as $r ){ ?>

                    <?php
                    if($r['all_customer_ledger_report']=="all_customer_ledger_report")
                        {?>
                        <li class= "root-level">
                                <a href="<?php echo site_url('report/ledger_all_customer_wise');?>">
                                    <i class="fa fa-navicon"></i>
                                    <span class="title">All Customer</span>
                                </a>


                            </li>
                             <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>

                        </ul>

                    </li>
                    <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>

                </ul>
             </li>
             <?php }
                         else
                              {?>

                        <li style="display: none"></li>

                              <?php }?>
                    <?php  } ?>


        </ul>
    </div>
