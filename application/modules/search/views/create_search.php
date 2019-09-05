<style>
    input[type=text] {
    width: 100%;
    padding: 5px;
    margin: 5px 0;
    box-sizing: border-box;
    
}

#autoSuggestionsList > li {
    background: none repeat scroll 0 0 #F3F3F3;
    border-bottom: 1px solid #E3E3E3;
    list-style: none outside none;
    padding: 3px 15px 3px 15px;
    text-align: left;
}

#autoSuggestionsList > li a { color: #800000; }

.auto_list {
    border: 1px solid #E3E3E3;
    border-radius: 5px 5px 5px 5px;
    position: absolute;
    cursor: pointer;
    z-index: 99;
}
    
</style>

<h2>All Types Of Search</h2>


<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error!</strong> <?php echo $this->session->flashdata('success'); ?>

    </div>
<?php } ?>

<script type="text/javascript">
        jQuery(document).ready(function ($) {
            var $table4 = jQuery("#table-4");

            $table4.DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
    </script>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                    <b>Search Your Products Or Supplier</b>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form action="<?php echo site_url('Search/get_search'); ?>" role="form" class="form-horizontal form-groups-bordered"  method="post" enctype="multipart/form-data">

                    <div class="col-md-12">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">


                            <div class="form-group">
                                <div class="col-sm-8">

                                    <div class="something">
                                        <input style="border-radius:15px;" class="form-control" name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();">
                                        <div id="suggestions">
                                            <div style="width:292px" id="autoSuggestionsList"></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                        </div>

                    </div>

<!--                    <div class="form-group col-sm-10" style="text-align: center">
                        <button style="width:100px;height:35px;font-size:15px;text-align: center"  type="submit" class="btn btn-success">Search</button>	
                    </div>-->
                </form>

            </div>

        </div>

    </div>
</div>


    
    
    


    
<script type="text/javascript">

function ajaxSearch()
{
    
    
    
    
    
    
    var input_data = $('#search_data').val();

    if (input_data.length === 0)
    {
        $('#suggestions').hide();
    }
    else
    {

        var post_data = {
            'search_data': input_data,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Search/autocomplete/",
            data: post_data,
            success: function (data) {
                // return success
                if (data.length > 0) {
                    $('#suggestions').show();
                    $('#autoSuggestionsList').addClass('auto_list');
                    $('#autoSuggestionsList').html(data);
                }
            }
         });

     }
 }
</script>