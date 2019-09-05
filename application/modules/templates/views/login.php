<?php $this->load->view('link/template/header_link'); ?>
<body class="page-body login-page login-form-fall" data-url="#">
    <div class="login-container">
        <div class="login-header login-caret">
            <div class="login-content">
                <a href="<?php echo base_url(); ?>" class="logo">
                    <img style="width:250px" src="<?php echo base_url(); ?>assets/images/logo.png" width="120" alt="" />
                </a>
            </div>
        </div>

        <div class="login-progressbar">
            <div></div>
        </div>

        <div class="login-form">
            <div class="login-content">
                <form action="<?php echo site_url('administrator/login_credential');?>" method="post" >

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-mail"></i>
                            </div>
                            <input type="text" class="form-control" name="email" id="username" placeholder="Email" autocomplete="off" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-key"></i>
                            </div>

                            <input type="password" class="form-control" name="pass" id="password" placeholder="Password" autocomplete="off" />
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-login">
                            <i class="entypo-login"></i>
                            Loged In
                        </button>
                    </div>
                </form>
                <div class="login-bottom-links">
                    <a href="#" class="link">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('link/template/footer_link'); ?>

</body>
</html>
