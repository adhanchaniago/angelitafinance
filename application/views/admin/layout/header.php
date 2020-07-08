<?php
$meta = $this->meta_model->get_meta();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $meta->title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/admin/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/admin/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/admin/css/themify-icons.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/admin/css/metisMenu.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/admin/css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/admin/css/slicknav.min.css');?>">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/admin/css/typography.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/admin/css/default-css.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/admin/css/styles.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/admin/css/responsive.css');?>">
    <!-- modernizr css -->
    <script src="<?php echo base_url('assets/template/admin/js/vendor/modernizr-2.8.3.min.js');?>"></script>
    <!-- Autocomplete CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/admin/js/autocomplete/jquery-ui.css'); ?>">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">