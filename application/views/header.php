<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Tailwebs</title>

    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
   <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/daterangepicker/daterangepicker.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->

 
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <style>
        .help-block {
            padding-left: 5px;
            padding-top: 5px;
            color: crimson;
        }
        .form-control {
    font-weight: bold; /* Make font bold */
    color: #333; /* Set text color to dark */
    padding: 8px; /* Adjust padding as needed */
    border: 1px solid #ccc; /* Add border for better visibility */
    border-radius: 4px; /* Add border radius for rounded corners */
    outline: none; /* Remove outline */
    transition: border-color 0.3s; /* Add transition for smooth effect */
}
.form-control:focus {
    border-color: #007bff; /* Change border color on focus */
}

/* Apply styles to select element */
.select2-container .select2-selection--single {
    font-weight: bold; /* Make font bold */
    color: #333; /* Set text color to dark */
    border: 1px solid #ccc; /* Add border */
    border-radius: 4px; /* Add border radius */
    outline: none; /* Remove outline */
}




    </style>
    <style type="text/css">

    #nestedtable td{
        line-height: 2;
    border-bottom: 1px solid #dee2e6 !important; 
    background-color: #fff;
        margin-bottom: 0rem;
        height: 65px ;
    }
    #nestedtable tr:last-child td{
            border-bottom: none !important;
        }
         #nestedtable tr:first-child td{
            border-top: none !important;
        }
        #nestedtable tr td{
            border-right: none !important;
        }

        .lablebtn{
           padding: 0.25rem 0.5rem;line-height: 1.5;background-color: #17a2b8; font-size: .875rem;color:#fff
        }
        .navbar-nav .nav-link.active{
          color: #007bff !important;
        }
        .navbar-light .navbar-nav .active>.nav-link{
          color: #007bff !important;
        }
.navbar-light .navbar-nav .nav-link {
    color: black;
}
</style>
</head>


<body class="hold-transition sidebar-collapse layout-top-nav layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link">Tailwebs</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          Home
        </a>
        
      </li>
 <li class="nav-item">
        <a class="nav-link" data-widget="navbar" href="<?php echo base_url('logout')?>" >
          Logout
        </a>
        
      </li>
    
    </ul>
  </nav>
  <!-- /.navbar -->
  
  <!-- /.navbar -->

   <!-- Main Sidebar Container -->
 
 
