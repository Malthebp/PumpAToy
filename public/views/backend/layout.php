<?php
require('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 Admin</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo PUBLICROOT; ?>css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo PUBLICROOT; ?>css/font-awesome.min.css">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<link href="<?php echo PUBLICROOT; ?>css/style.css" rel="stylesheet">
	</head>
	<body>
	<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#">My Profile</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-log-out"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->
<!-- Main -->
<main class="container-fluid">
    <div class="row">
        <div class="col-sm-2" id="adminNav">
            <!-- Left column -->
            <ul class="nav nav-stacked">
                <li class="active"> <a href="<?php echo PUBLICROOT; ?>admin/products"><i class="fa fa-th" aria-hidden="true"></i>
                Products</a></li>
                <li class="active"> <a href="<?php echo PUBLICROOT; ?>admin/categories"><i class="fa fa-tags" aria-hidden="true"></i>
                Categories</a></li>
            </ul>
        </div>
        <!-- /col-3 -->
        <div class="col-sm-10">