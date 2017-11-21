<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/'); ?>img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assets/'); ?>css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url('assets/'); ?>css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/'); ?>css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                   ProductionHouse
                </a>
                <center><span><?php echo $this->session->userdata('tanggal');  ?></span></center>
                
                
            </div>

            <ul class="nav">
                
                <li>
                    <a href="<?php echo site_url('karyawan') ?>">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>Karyawan</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('penyedia') ?>">
                        <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                        <p>Penyedia</p>
                    </a>
                </li>
                
                <li>
                    <a href="<?php echo site_url('barang') ?>">
                       <i class="fa fa-cubes" aria-hidden="true"></i>
                        <p>Barang</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('pembelian') ?>">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        <p>Pembelian</p>
                    </a>
                </li>
				
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-success btn-flat">Keluar</a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>