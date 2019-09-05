<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="https://bootswatch.com/cosmo/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="<?php echo base_url(); ?>assets/css/menu/hummingbird-treeview.css" rel="stylesheet" type="text/css">


<style>

    ul { 
        list-style: none;
        margin: 5px 20px;
    }    
</style>
<h2>Add User Previledge Info</h2>

<a href="<?php echo site_url('user/view_user'); ?>" class="btn btn-primary btn-icon icon-left" >
    View User
    <i class=" glyphicon glyphicon-plus-sign"></i>
</a>

<br><br>
<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>

    </div>
<?php } ?>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <?php foreach ($user as $r) { ?>
                        <b>User Email: </b> <?php echo $r['email'] ?><br> <b>User Type: </b> <?php echo $r['type'] ?>
                    <?php } ?>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">
                 <?php foreach ($user as $r) { ?>
                <form action="<?php echo site_url('user/insert_previledge');?>/<?php echo $r['user_id']?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    <div class="col-md-12">
                        <div class="form-group">

                            <div id="treeview_container" class="hummingbird-treeview well h-scroll-large" style="background:none;border: none">
                                <!-- <div id="treeview_container" class="hummingbird-treeview"> -->
                                <ul id="treeview" class="hummingbird-base">
                                    <div class="col-md-4">
                                    <li>
                                        <i class="fa fa-plus"></i> 
                                        <label> <input name="presets" value="presets" id="node-1" data-id="custom-1" type="checkbox">Presets</label>
                                        <ul>
                                            <li>
                                                <i class="fa fa-plus"></i>
                                                
                                        <?php
                                            if ($r['supplier'] == "supplier") {
                                                ?>
                                                
                                                <label> <input name="supplier" value="supplier" id="node-0-1" data-id="custom-1" type="checkbox" checked=""> Supplier</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="supplier" value="supplier" id="node-0-1" data-id="custom-1" type="checkbox"> Supplier</label>
                                                <?php } ?> 
                                                
                                                
                                                <ul>
                                                    <li>
                                        <?php
                                            if ($r['supplier_view'] == "supplier_view") {
                                                ?>
                                                
                                                        <label> <input name="supplier_view" value="supplier_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox" checked="">View</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="supplier_view" value="supplier_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                <?php } ?> 
                                                        
                                                    </li>
                                                    <li>
                                         <?php
                                            if ($r['supplier_add'] == "supplier_add") {
                                                ?>
                                                
                                                        <label> <input name="supplier_add" value="supplier_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox" checked="">Add</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="supplier_add" value="supplier_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">Add</label>
                                                <?php } ?>                                                       
                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['supplier_add'] == "supplier_add") {
                                                ?>
                                                
                                                    <label> <input name="supplier_edit" value="supplier_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox" checked="">Edit</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="supplier_edit" value="supplier_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Edit</label>
                                                <?php } ?>                                                       
                                                        
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                          <?php
                                            if ($r['brand'] == "brand") {
                                                ?>
                                                
                                                <label> <input name="brand" value="brand" id="node-0-1" data-id="custom-1" type="checkbox" checked=""> Brand</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="brand" value="brand" id="node-0-1" data-id="custom-1" type="checkbox"> Brand</label>
                                                <?php } ?>                                                
                                                
                                                <ul>
                                                    <li>
                                          <?php
                                            if ($r['brand_view'] == "brand_view") {
                                                ?>
                                                
                                                        <label> <input name="brand_view" value="brand_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox" checked="">View</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="brand_view" value="brand_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['brand_add'] == "brand_add") {
                                                ?>
                                                
                                                        <label> <input name="brand_add" value="brand_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox" checked="">Add</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="brand_add" value="brand_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">Add</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['brand_edit'] == "brand_edit") {
                                                ?>
                                                
                                                    <label> <input name="brand_edit" value="brand_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox" checked="">Edit</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="brand_edit" value="brand_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Edit</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['brand_delete'] == "brand_delete") {
                                                ?>
                                                
                                                        <label> <input name="brand_delete" value="brand_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox" checked="">Delete</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="brand_delete" value="brand_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                          <?php
                                            if ($r['unit'] == "unit") {
                                                ?>
                                                
                                                <label> <input name="unit" value="unit" id="node-0-1" data-id="custom-1" type="checkbox" checked=""> Unit</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="unit" value="unit" id="node-0-1" data-id="custom-1" type="checkbox"> Unit</label>
                                                <?php } ?>                                                
                                                
                                                <ul>
                                                    <li>
                                          <?php
                                            if ($r['unit_view'] == "unit_view") {
                                                ?>
                                                
                                                        <label> <input name="unit_view" value="unit_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox" checked="">View</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="unit_view" value="unit_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['unit_add'] == "unit_add") {
                                                ?>
                                                
                                                <label> <input name="unit_add" value="unit_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox" checked="">Add</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="unit_add" value="unit_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">Add</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['unit_edit'] == "unit_edit") {
                                                ?>
                                                
                                                        <label> <input name="unit_edit" value="unit_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox" checked="">Edit</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="unit_edit" value="unit_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Edit</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['unit_delete'] == "unit_delete") {
                                                ?>
                                                
                                                        <label> <input name="unit_delete" value="unit_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox" checked="">Delete</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="unit_delete" value="unit_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                <?php } ?>
                                                        
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <i class="fa fa-plus"></i>
                                          <?php
                                            if ($r['style'] == "style") {
                                                ?>
                                                
                                                <label> <input name="style" value="style" id="node-0-1" data-id="custom-1" type="checkbox" checked=""> Style & Size</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="style" value="style" id="node-0-1" data-id="custom-1" type="checkbox"> Style & Size</label>
                                                <?php } ?>                                                
                                                
                                                <ul>
                                                    <li>
                                          <?php
                                            if ($r['style_view'] == "style_view") {
                                                ?>
                                                
                                                        <label> <input name="style_view" value="style_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox" checked="">View</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="style_view" value="style_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['style_add'] == "style_add") {
                                                ?>
                                                
                                                <label> <input name="style_add" value="style_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox" checked="">Add</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="style_add" value="style_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">Add</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['style_edit'] == "style_edit") {
                                                ?>
                                                
                                                        <label> <input name="style_edit" value="style_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox" checked="">Edit</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="style_edit" value="style_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Edit</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['style_delete'] == "style_delete") {
                                                ?>
                                                
                                                        <label> <input name="style_delete" value="style_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox" checked="">Delete</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="style_delete" value="style_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                          <?php
                                            if ($r['product'] == "product") {
                                                ?>
                                                
                                                <label> <input name="product" value="product" id="node-0-1" data-id="custom-1" type="checkbox" checked=""> Product Settings</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="product" value="product" id="node-0-1" data-id="custom-1" type="checkbox"> Product Settings</label>
                                                <?php } ?>                                                
                                                <ul>
                                                    <li>
                                          <?php
                                            if ($r['product_view'] == "product_view") {
                                                ?>
                                                
                                                        <label> <input checked="" name="product_view" value="product_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="product_view" value="product_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['product_add'] == "product_add") {
                                                ?>
                                                
                                                        <label> <input checked="" name="product_add" value="product_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">Add</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="product_add" value="product_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">Add</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['product_edit'] == "product_edit") {
                                                ?>
                                                
                                                        <label> <input checked="" name="product_edit" value="product_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Edit</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="product_edit" value="product_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Edit</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['product_delete'] == "product_delete") {
                                                ?>
                                                
                                                        <label> <input checked="" name="product_delete" value="product_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="product_delete" value="product_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                          <?php
                                            if ($r['supplier_packing'] == "supplier_packing") {
                                                ?>
                                                
                                                <label> <input checked="" name="supplier_packing" value="supplier_packing" id="node-0-1" data-id="custom-1" type="checkbox">Supplier Packing</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="supplier_packing" value="supplier_packing" id="node-0-1" data-id="custom-1" type="checkbox">Supplier Packing</label>
                                                <?php } ?>                                                
                                                <ul>
                                                    <li>
                                          <?php
                                            if ($r['supplier_packing_view'] == "supplier_packing_view") {
                                                ?>
                                                
                                                        <label> <input checked="" name="supplier_packing_view" value="supplier_packing_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="supplier_packing_view" value="supplier_packing_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['supplier_packing_add'] == "supplier_packing_add") {
                                                ?>
                                                
                                                        <label> <input checked="" name="supplier_packing_add" value="supplier_packing_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">Add</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="supplier_packing_add" value="supplier_packing_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">Add</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['supplier_packing_edit'] == "supplier_packing_edit") {
                                                ?>
                                                
                                                        <label> <input checked="" name="supplier_packing_edit" value="supplier_packing_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Edit</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="supplier_packing_edit" value="supplier_packing_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Edit</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['supplier_packing_delete'] == "supplier_packing_delete") {
                                                ?>
                                                
                                                        <label> <input checked="" name="supplier_packing_delete" value="supplier_packing_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="supplier_packing_delete" value="supplier_packing_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                          <?php
                                            if ($r['distribution_packing'] == "distribution_packing") {
                                                ?>
                                                
                                                <label> <input checked="" name="distribution_packing" value="distribution_packing" id="node-0-1" data-id="custom-1" type="checkbox">Distribution Packing</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="distribution_packing" value="distribution_packing" id="node-0-1" data-id="custom-1" type="checkbox">Distribution Packing</label>
                                                <?php } ?>                                                
                                                <ul>
                                                    <li>
                                          <?php
                                            if ($r['distribution_packing_view'] == "distribution_packing_view") {
                                                ?>
                                                
                                                        <label> <input checked="" name="distribution_packing_view" value="distribution_packing_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="distribution_packing_view" value="distribution_packing_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['distribution_packing_add'] == "distribution_packing_add") {
                                                ?>
                                                
                                                        <label> <input checked="" name="distribution_packing_add" value="distribution_packing_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">Add</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="distribution_packing_add" value="distribution_packing_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">Add</label>
                                                <?php } ?>                                                         
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['distribution_packing_edit'] == "distribution_packing_edit") {
                                                ?>
                                                
                                                        <label> <input checked="" name="distribution_packing_edit" value="distribution_packing_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Edit</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="distribution_packing_edit" value="distribution_packing_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Edit</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['distribution_packing_delete'] == "distribution_packing_delete") {
                                                ?>
                                                
                                                        <label> <input checked="" name="distribution_packing_delete" value="distribution_packing_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="distribution_packing_delete" value="distribution_packing_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                          <?php
                                            if ($r['product_import'] == "product_import") {
                                                ?>
                                                
                                                <label> <input checked="" name="product_import" value="product_import" id="node-0-1" data-id="custom-1" type="checkbox">Product Import</label>
                                                <?php } 
                                            else {
                                                ?>
                                                <label> <input name="product_import" value="product_import" id="node-0-1" data-id="custom-1" type="checkbox">Product Import</label>
                                                <?php } ?>                                                
                                                <ul>
                                                    <li>
                                          <?php
                                            if ($r['import_add'] == "import_add") {
                                                ?>
                                                
                                                        <label> <input checked="" name="import_add" value="import_add" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">Import</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="import_add" value="import_add" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">Import</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                          <?php
                                            if ($r['import_view'] == "import_view") {
                                                ?>
                                                
                                                        <label> <input checked="" name="import_view" value="import_view" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">View</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="import_view" value="import_view" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">View</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                         <?php
                                            if ($r['import_print'] == "import_print") {
                                                ?>
                                                
                                                        <label> <input checked="" name="import_print" value="import_print" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Print</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="import_print" value="import_print" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Print</label>
                                                <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                         <?php
                                            if ($r['import_delete'] == "import_delete") {
                                                ?>
                                                
                                                        <label> <input checked="" name="import_delete" value="import_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                <?php } 
                                            else {
                                                ?>
                                                        <label> <input name="import_delete" value="import_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                <?php } ?>                                                         
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            
                                            
                                            
                                        </ul>
                                    </li>
                                    </div>
                                    <div class="col-md-4">
                                    <li>
                                        <i class="fa fa-plus"></i> 
                                         <?php
                                            if ($r['operation'] == "operation") {
                                                ?>
                                                
                                                <label> <input checked="" name="operation" value="operation" id="node-1" data-id="custom-1" type="checkbox">Operations</label>
                                                        <?php } 
                                                    else {
                                                        ?>
                                                <label> <input name="operation" value="operation" id="node-1" data-id="custom-1" type="checkbox">Operations</label>
                                                        <?php } ?>                                        
                                        <ul>
<!--                                            <li>
                                                <i class="fa fa-plus"></i> 
                                                <label> <input name="inventory" value="inventory" id="node-0-1" data-id="custom-1" type="checkbox">Inventory</label>
                                                <ul>
                                                    <li>
                                                        <label> <input name="inventory_view" value="inventory_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                    </li>
                                                    
                                                    
                                                </ul>
                                            </li>-->
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                         <?php
                                            if ($r['customer'] == "customer") {
                                                ?>
                                                
                                                <label> <input checked="" name="customer" value="customer" id="node-0-1" data-id="custom-1" type="checkbox"> Customer</label>
                                                        <?php } 
                                                    else {
                                                        ?>
                                                <label> <input name="customer" value="customer" id="node-0-1" data-id="custom-1" type="checkbox"> Customer</label>
                                                        <?php } ?>                                                
                                                <ul>
                                                    <li>
                                         <?php
                                            if ($r['customer_view'] == "customer_view") {
                                                ?>
                                                
                                                        <label> <input checked="" name="customer_view" value="customer_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                        <?php } 
                                                    else {
                                                        ?>
                                                        <label> <input name="customer_view" value="customer_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                        <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                         <?php
                                            if ($r['customer_add'] == "customer_add") {
                                                ?>
                                                
                                                        <label> <input checked="" name="customer_add" value="customer_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">Add</label>
                                                        <?php } 
                                                    else {
                                                        ?>
                                                        <label> <input name="customer_add" value="customer_add" class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox">Add</label>
                                                        <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                         <?php
                                            if ($r['customer_edit'] == "customer_edit") {
                                                ?>
                                                
                                                        <label> <input checked="" name="customer_edit" value="customer_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Edit</label>
                                                        <?php } 
                                                    else {
                                                        ?>
                                                        <label> <input name="customer_edit" value="customer_edit" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Edit</label>
                                                        <?php } ?>                                                        
                                                    </li>
                                                    <li>
                                         <?php
                                            if ($r['customer_delete'] == "customer_delete") {
                                                ?>
                                                
                                                        <label> <input checked="" name="customer_delete" value="customer_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                        <?php } 
                                                    else {
                                                        ?>
                                                        <label> <input name="customer_delete" value="customer_delete" class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox">Delete</label>
                                                        <?php } ?>                                                        
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                         <?php
                                            if ($r['sales'] == "sales") {
                                                ?>
                                                
                                                <label> <input checked="" name="sales" value="sales" id="node-0-1" data-id="custom-1" type="checkbox"> Sales</label>
                                                        <?php } 
                                                    else {
                                                        ?>
                                                <label> <input name="sales" value="sales" id="node-0-1" data-id="custom-1" type="checkbox"> Sales</label>
                                                        <?php } ?>                                                
                                                <ul>
                                                    <li>
                                         <?php
                                            if ($r['sales_create'] == "sales_create") {
                                                ?>
                                                
                                                        <label> <input checked="" name="sales_create" value="sales_create" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">Create Sale</label>
                                                        <?php } 
                                                    else {
                                                        ?>
                                                        <label> <input name="sales_create" value="sales_create" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">Create Sale</label>
                                                        <?php } ?>                                                        
                                                    </li>
                                                    
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                         <?php
                                            if ($r['return_1'] == "return") {
                                                ?>
                                                
                                                <label> <input name="return" value="return" id="node-0-1" data-id="custom-1" type="checkbox"> Sales Return</label>
                                                        <?php } 
                                                    else {
                                                        ?>
                                                <label> <input name="return" value="return" id="node-0-1" data-id="custom-1" type="checkbox"> Sales Return</label>
                                                        <?php } ?>                                                
                                                <ul>
                                                    <li>
                                         <?php
                                            if ($r['sales_return'] == "sales_return") {
                                                ?>
                                                
                                                        <label> <input checked="" name="sales_return" value="sales_return" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">Return</label>
                                                        <?php } 
                                                    else {
                                                        ?>
                                                        <label> <input name="sales_return" value="sales_return" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">Return</label>
                                                        <?php } ?>                                                        
                                                    </li>
                                                    
                                                    
                                                </ul>
                                            </li>
                                            
<!--                                            <li>
                                                <i class="fa fa-plus"></i> 
                                                <label> <input name="invoice" value="invoice" id="node-0-1" data-id="custom-1" type="checkbox"> Invoice</label>
                                                <ul>
                                                    <li>
                                                        <label> <input name="invoice_listing" value="invoice_listing" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">Invoice Listing</label>
                                                    </li>
                                                    <li>
                                                        <label> <input name="invoice_print" value="invoice_print" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">Print & Details</label>
                                                    </li>
                                                    
                                                    
                                                </ul>
                                            </li>-->
<!--                                            <li>
                                                <i class="fa fa-plus"></i> 
                                                <label> <input name="challan" value="challan" id="node-0-1" data-id="custom-1" type="checkbox"> Delivery Challan</label>
                                                <ul>
                                                    <li>
                                                        <label> <input name="challan_listing" value="challan_listing" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">Challan Listing</label>
                                                    </li>
                                                    <li>
                                                        <label> <input name="challan_print" value="challan_print" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">Print & Details</label>
                                                    </li>
                                                    
                                                    
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                                <label> <input name="receipt" value="receipt" id="node-0-1" data-id="custom-1" type="checkbox"> Money Receipt</label>
                                                <ul>
                                                    <li>
                                                        <label> <input name="receipt_listing" value="receipt_listing" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">Receipt Listing</label>
                                                    </li>
                                                    <li>
                                                        <label> <input name="receipt_print" value="receipt_print" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">Print & Details</label>
                                                    </li>
                                                    
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                                <label> <input name="ledger" value="ledger" id="node-0-1" data-id="custom-1" type="checkbox"> Ledger</label>
                                                <ul>
                                                    <li>
                                                        <label> <input name="ledger_view" value="ledger_view" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox">View</label>
                                                    </li>
                                                    
                                                    
                                                    
                                                </ul>
                                            </li>-->
                                            
                                        </ul>
                                    </li>
                                    </div>
                                    
                                    <div class="col-md-4">
                                    <li>
                                        <i class="fa fa-plus"></i>
                                         <?php
                                            if ($r['report'] == "report") {
                                                ?>
                                                
                                        <label> <input checked="" name="report" value="report" id="node-1" data-id="custom-1" type="checkbox">Reports</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label> <input name="report" value="report" id="node-1" data-id="custom-1" type="checkbox">Reports</label>
                                                <?php } ?>                                        
                                        <ul>
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                         <?php
                                            if ($r['import_report'] == "import_report") {
                                                ?>
                                                
                                                <label> <input checked="" name="import_report" value="import_report" id="node-0-1" data-id="custom-1" type="checkbox"> Import / Purchase</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                <label> <input name="import_report" value="import_report" id="node-0-1" data-id="custom-1" type="checkbox"> Import / Purchase</label>
                                                <?php } ?>                                                
                                                <ul>
                                                    <li>
                                         <?php
                                            if ($r['supplier_import_report'] == "supplier_import_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="supplier_import_report" value="supplier_import_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Supplier Wise</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="supplier_import_report" value="supplier_import_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Supplier Wise</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                         <?php
                                            if ($r['product_import_report'] == "product_import_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="product_import_report" value="product_import_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Product Wise</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="product_import_report" value="product_import_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Product Wise</label>
                                                <?php } ?>                                                
                                                        
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                         <?php
                                            if ($r['inventory_report'] == "inventory_report") {
                                                ?>
                                                
                                                <label> <input checked="" name="inventory_report" value="inventory_report" id="node-0-1" data-id="custom-1" type="checkbox"> Inventory</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                <label> <input name="inventory_report" value="inventory_report" id="node-0-1" data-id="custom-1" type="checkbox"> Inventory</label>
                                                <?php } ?>                                          
                                                <ul>
                                                    <li>
                                         <?php
                                            if ($r['supplier_inventory_report'] == "supplier_inventory_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="supplier_inventory_report" value="supplier_inventory_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Supplier Wise</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="supplier_inventory_report" value="supplier_inventory_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Supplier Wise</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                         <?php
                                            if ($r['product_inventory_report'] == "product_inventory_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="product_inventory_report" value="product_inventory_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Product Wise</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="product_inventory_report" value="product_inventory_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Product Wise</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                         <?php
                                            if ($r['sales_report'] == "sales_report") {
                                                ?>
                                                
                                                <label> <input checked="" name="sales_report" value="sales_report" id="node-0-1" data-id="custom-1" type="checkbox"> Sales</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                <label> <input name="sales_report" value="sales_report" id="node-0-1" data-id="custom-1" type="checkbox"> Sales</label>
                                                <?php } ?>                                                
                                                <ul>
                                                    <li>
                                         <?php
                                            if ($r['product_sales_report'] == "product_sales_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="product_sales_report" value="product_sales_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Product Wise</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="product_sales_report" value="product_sales_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Product Wise</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                        <?php
                                            if ($r['supplier_sales_report'] == "supplier_sales_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="supplier_sales_report" value="supplier_sales_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Supplier Wise</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="supplier_sales_report" value="supplier_sales_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Supplier Wise</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                       <?php
                                            if ($r['invoice_sales_report'] == "invoice_sales_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="invoice_sales_report" value="invoice_sales_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Invoice Wise</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="invoice_sales_report" value="invoice_sales_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Invoice Wise</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                       <?php
                                            if ($r['cost_sales_report'] == "cost_sales_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="cost_sales_report" value="cost_sales_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Cost & Profit</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="cost_sales_report" value="cost_sales_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Cost & Profit</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                       <?php
                                            if ($r['return_report'] == "return_report") {
                                                ?>
                                                
                                                <label> <input checked="" name="return_report" value="return_report" id="node-0-1" data-id="custom-1" type="checkbox"> Return</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                <label> <input name="return_report" value="return_report" id="node-0-1" data-id="custom-1" type="checkbox"> Return</label>
                                                <?php } ?>                                                
                                                <ul>
                                                    <li>
                                       <?php
                                            if ($r['product_return_report'] == "product_return_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="product_return_report" value="product_return_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Product Wise</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="product_return_report" value="product_return_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Product Wise</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                       <?php
                                            if ($r['supplier_return_report'] == "supplier_return_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="supplier_return_report" value="supplier_return_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Supplier Wise</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="supplier_return_report" value="supplier_return_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Supplier Wise</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                       <?php
                                            if ($r['invoice_return_report'] == "invoice_return_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="invoice_return_report" value="invoice_return_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Invoice Wise</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="invoice_return_report" value="invoice_return_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Invoice Wise</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <i class="fa fa-plus"></i> 
                                       <?php
                                            if ($r['ledger_report'] == "ledger_report") {
                                                ?>
                                                
                                                <label> <input checked="" name="ledger_report" value="ledger_report" id="node-0-1" data-id="custom-1" type="checkbox"> Ledger</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                <label> <input name="ledger_report" value="ledger_report" id="node-0-1" data-id="custom-1" type="checkbox"> Ledger</label>
                                                <?php } ?>                                                
                                                <ul>
                                                    <li>
                                       <?php
                                            if ($r['customer_ledger_report'] == "customer_ledger_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="customer_ledger_report" value="customer_ledger_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Customer Wise</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="customer_ledger_report" value="customer_ledger_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> Customer Wise</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    <li>
                                       <?php
                                            if ($r['all_customer_ledger_report'] == "all_customer_ledger_report") {
                                                ?>
                                                
                                                        <label><input checked="" name="all_customer_ledger_report" value="all_customer_ledger_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> All Customer Wise</label>
                                                <?php } 
                                                else {
                                                     ?>
                                                        <label><input name="all_customer_ledger_report" value="all_customer_ledger_report" class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox"> All Customer Wise</label>
                                                <?php } ?>                                                        
                                                        
                                                    </li>
                                                    
                                                    
                                                    
                                                </ul>
                                            </li>
                                            
                                            
                                            
                                            
                                        </ul>
                                    </li>
                                    </div>

                                </ul>
                            </div>
                        </div>
                        <div class="form-group col-sm-12" style="text-align: center">
                            <button style="width:auto;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Add Previledge</button>	
                        </div>
                    </div>


                </form>
                <?php } ?>

            </div>

        </div>

    </div>
</div>



<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/css/menu/hummingbird-treeview.js"></script>
<script>
    $("#treeview").hummingbird();
    $("#checkAll").click(function () {
        $("#treeview").hummingbird("checkAll");
    });
    $("#uncheckAll").click(function () {
        $("#treeview").hummingbird("uncheckAll");
    });
    $("#collapseAll").click(function () {
        $("#treeview").hummingbird("collapseAll");
    });
    $("#checkNode").click(function () {
        $("#treeview").hummingbird("checkNode", {attr: "id", name: "node-0-2-2", expandParents: false});
    });
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>