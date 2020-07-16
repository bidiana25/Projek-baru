<div class="navbar-wrapper">
<div class="navbar-logo">
<a href="index.html">
<img class="img-fluid" src="<?php echo base_url()?>assets/png/logo.png" alt="Theme-Logo" />
</a>
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="feather icon-menu icon-toggle-right"></i>
</a>
<a class="mobile-options waves-effect waves-light">
<i class="feather icon-more-horizontal"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<ul class="nav-left">
<li>
<li>
<a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-d2d1d6e2f87cbebdf4013b26-="">
<i class="full-screen feather icon-maximize"></i>
</a>
</li>
</li>
</ul>
<ul class="nav-right">


<li class="user-profile header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<img src="<?php echo base_url()?>assets/jpg/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
<span><?php echo $this->session->userdata('nama') ?></span>
<i class="feather icon-chevron-down"></i>
</div>
<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
<a href="#">
<i class="feather icon-user"></i> Profile
</a>
</li>
<li>
<a href="<?php echo base_url('index.php/auth/logout'); ?>">
<i class="feather icon-log-out"></i> Logout
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>