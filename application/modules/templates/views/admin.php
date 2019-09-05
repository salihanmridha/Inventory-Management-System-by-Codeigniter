<?php $this->load->view('link/template/header_link'); ?>
<style>
@media print {
   body {
   display:table;
   table-layout:fixed;
   padding-top:0.508cm;
   padding-bottom:0.508cm;
   padding-left:50px;
   padding-right:50px;
   height:auto;
  }



}

</style>
<body class="page-body  page-left-in" data-url="http://neon.dev" >

        <div class="page-container">

            <div class="sidebar-menu">
                <?php $this->load->view('link/template/nav'); ?>
            </div>

            <div class="main-content">
                <?php $this->load->view('link/template/top_nav'); ?>




                <?php
                if(isset($view_file)){
                        $this->load->view($view_module.'/'.$view_file);
                }
                ?>


                <!-- Footer -->
                <?php $this->load->view('link/template/footer'); ?>
            </div>



        </div>


        <?php $this->load->view('link/template/footer_link'); ?>
    </body>
</html>
