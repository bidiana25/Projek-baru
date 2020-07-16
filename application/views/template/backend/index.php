<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/color.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Sistem Informasi Akuntansi</title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/feather.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/themify-icons.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/icofont.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/pages.css">
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<nav class="navbar header-navbar pcoded-header">
<?php
        /*
        * Variabel $headernya diambil dari core MY_Controller
        * (application/core/MY_Controller.php)
        * */
        echo $headernya;
        ?>
</nav>

<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="p-fixed users-main">
<div class="user-box">
<div class="chat-search-box">
<a class="back_friendlist">
<i class="feather icon-x"></i>
</a>
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
</div>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius img-radius" src="<?php echo base_url()?>assets/jpg/avatar-3.jpg" alt="Generic placeholder image ">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="<?php echo base_url()?>assets/jpg/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
 <div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="<?php echo base_url()?>assets/jpg/avatar-4.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="<?php echo base_url()?>assets/jpg/avatar-3.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="<?php echo base_url()?>assets/jpg/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="feather icon-x"></i> Josephin Doe
</a>
</div>
<div class="main-friend-chat">
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="<?php echo base_url()?>assets/jpg/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">Ohh! very nice</p>
</div>
<p class="chat-time">8:22 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="<?php echo base_url()?>assets/jpg/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">can you come with me?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="chat-reply-box">
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" class="form-control" placeholder="Write hear . . ">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
</div>
</div>
</div>
</div>
</div>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<!-- SIDEBAR DISINI !-->
<nav class="pcoded-navbar">

<?php
        /*
        * Variabel $headernya diambil dari core MY_Controller
        * (application/core/MY_Controller.php)
        * */
        echo $sidebarnya;
        ?>

</nav>

<!-- SIDEBAR TUTUP!-->

<div class="pcoded-content">

<?php
        /*
        * Variabel $headernya diambil dari core MY_Controller
        * (application/core/MY_Controller.php)
        * */
        echo $contentnya;
        ?>


</div>
</div>
</div>
</div>
</div>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="6deb0c3865275e7b982ef6c1-text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script type="6deb0c3865275e7b982ef6c1-text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui.min.js"></script>
<script type="6deb0c3865275e7b982ef6c1-text/javascript" src="<?php echo base_url()?>assets/js/popper.min.js"></script>
<script type="6deb0c3865275e7b982ef6c1-text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url()?>assets/js/waves.min.js" type="6deb0c3865275e7b982ef6c1-text/javascript"></script>

<script type="6deb0c3865275e7b982ef6c1-text/javascript" src="<?php echo base_url()?>assets/js/jquery.slimscroll.js"></script>

<script type="6deb0c3865275e7b982ef6c1-text/javascript" src="<?php echo base_url()?>assets/js/modernizr.js"></script>
<script type="6deb0c3865275e7b982ef6c1-text/javascript" src="<?php echo base_url()?>assets/js/css-scrollbars.js"></script>

<script src="<?php echo base_url()?>assets/js/pcoded.min.js" type="6deb0c3865275e7b982ef6c1-text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/vertical-layout.min.js" type="6deb0c3865275e7b982ef6c1-text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/jquery.mcustomscrollbar.concat.min.js" type="6deb0c3865275e7b982ef6c1-text/javascript"></script>
<script type="6deb0c3865275e7b982ef6c1-text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="6deb0c3865275e7b982ef6c1-text/javascript"></script>
<script type="6deb0c3865275e7b982ef6c1-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="<?php echo base_url()?>assets/js/rocket-loader.min.js" data-cf-settings="6deb0c3865275e7b982ef6c1-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/color.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:53 GMT -->
</html>
