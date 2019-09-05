


<div class="gallery-env">

    <div class="row">

        <div class="col-sm-12">

            <h3>
                Site Favicon Upload


            </h3>

            <hr />


        </div>

    </div>


    <?php foreach ($favicon as $r) { ?>

        <div class="row">

            <div class="col-sm-4 col-xs-6" data-tag="1d" style="text-align: center">

                <article class="image-thumb" >

                    <a href="#" class="image">
                        <img style="width: 22px;height: 22px" src="<?php echo base_url(); ?>package_media/favicon/<?php echo $r['image'] ?>" alt="favicon" />
                    </a>


                </article>

            </div>

        </div>

    <?php } ?>


    <form action="<?php echo site_url('global_settings/add_favicon'); ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">

                <?php foreach ($favicon_id as $r) { ?>
                    <input type="hidden" name="favicon_id" value="<?php echo $r['favicon_id'] ?>">
                <?php } ?>
                <div class="form-group">
                    <label style="margin-top:75px" class="col-sm-2 control-label">Upload New Image</label>

                    <div class="col-sm-5">

                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                <img src="<?php echo base_url(); ?>assets/images/200x150.png" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                            <div>
                                <span class="btn btn-white btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="userfile" accept="image/*">
                                </span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                        <button  type="submit" class="btn btn-success btn-icon">
                            <i class="entypo-check"></i>
                            Submit
                        </button>

                    </div>
                </div>

            </div>

        </div>

    </form>

</div>

