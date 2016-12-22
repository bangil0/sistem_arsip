<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Arsip Kegiatan</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>asset/css/datepicker.css" rel="stylesheet">
      <!--   <link href="<?php //echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet"> -->
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/jquery.validate.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/bootstrap-notify.css" rel="stylesheet">

        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/img/favicon.png" />

        <!-- Add custom CSS here -->
        <link href="<?php echo base_url(); ?>asset/css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/font-awesome/css/font-awesome.css">
        <!-- Page Specific CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/morris-0.4.3.min.css">

        <!-- Page-Level Plugin CSS - Tables -->
        <link href="<?php echo base_url(); ?>asset/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <script src="<?php echo base_url(); ?>asset/js/dataTables/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
  
        <script src="<?php echo base_url(); ?>asset/js/bootstrap-datepicker.js"></script>
      
        <script src="<?php echo base_url(); ?>asset/js/jquery.bootstrap-growl.js"></script>


        

        <script type="text/javascript">
var date = jQuery.noConflict();
date(document).ready(function() {
    date('#dp1').datepicker({
                    format: "yyyy-mm-dd"
                });
   
})
</script>  
        
         <?php if ($this->session->flashdata('success')): ?>

            <script type="text/javascript">
            var notif = jQuery.noConflict();
            notif(document).ready(function() {
                setTimeout(function() {
                    notif.bootstrapGrowl("<?php echo $this->session->flashdata('success') ?>", { type: 'success' });
                }, 1000);             
                      });                                                                                                                                                                                                                                                                                                 
            </script>   


        <?php endif; ?>

        <?php if ($this->session->flashdata('error')): ?>

             <script type="text/javascript">
            //    $(document).ready(function() {
            //     setTimeout(function() {
            //         $.bootstrapGrowl("<?php echo $this->session->flashdata('error') ?>", { type: 'danger' });
            //     }, 1000);  
            //    });  

                var notif = jQuery.noConflict();
            notif(document).ready(function() {
                setTimeout(function() {
                    notif.bootstrapGrowl("<?php echo $this->session->flashdata('error') ?>", { type: 'danger' });
                }, 1000);             
                      });                                                                                                                                                                                                                                                                                        
            </script>


        <?php endif; ?>


    </head>

    <body>
        <div id="wrapper">


            <!-- Sidebar -->
            <nav class="navbar navbar-baru navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('admin'); ?>"><img src="<?php echo base_url();?>asset/img/logoheader4.png"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">

                    <?php $this->load->view('themes/sidebar'); ?>

                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <li class="dropdown user-dropdown">
                            <?php
                            $role = $pengguna->userLevel;
                            if ($role == 'administrator') {
                                $peran = "(Administator)";
                            } else {
                                $peran = "(Pengelola)";
                            }
                            ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $pengguna->userNamaLengkap; ?> <b><?php echo $peran; ?></b> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('admin/profile'); ?>"><i class="fa fa-user"></i> Profil</a></li>

                                <li class="divider"></li>
                                <li><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>

