<!DOCTYPE html>
<html lang="en">
  
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="">

        <title><?php echo $title; ?></title>

        <!-- Bootstrap core CSS -->
        <link id="switch_style" href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/dropzone/downloads/css/dropzone.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/fontawesome/css/font-awesome.css" rel="stylesheet">
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
        <![endif]-->

        <?php echo $xajax_js; ?>
    </head>

    <body>

        <!-- <Vue_menu> -->
        <?php echo $this->load->view('./include/menuview', FALSE); ?>
        <!-- </Vue_menu> -->

        <hr class="topbar"/>
        
        <!-- <Include_adaptativepage> -->
        <?php 
            if (isset($module) and $module!="" and isset($view) and $view!=""){
                $path=$module.'/'.$view;
                $this->load->view($path);
            } 
        ?>
        <!-- </Include_adaptativepage> -->

<!-- <Module_login> -->
<?php echo Modules::run('login'); ?>
<!-- </Module_login> -->

<!-- <Vue_footer> -->
<?php echo $this->load->view('./include/footerview', FALSE); ?>
<!-- </Vue_footer> -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/angular/angular.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/dropzone/downloads/dropzone.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script src="<?php echo base_url(); ?>assets/js/global.js"></script>
</body>

</html>