<div class="nav-list">
<div class="pcoded-inner-navbar main-menu">


<!-- PEMBAGIAN MENU PERTAMA!-->
<div class="pcoded-navigation-label">Navigasi</div>
<ul class="pcoded-item pcoded-left-item">

<!-- DASHBOR START!-->
<li <?php if($this->uri->segment(1)=="page"){echo 'class="active"';}?>>
<a href="<?php echo base_url('/page/home');?>" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-home"></i>
</span>
<span class="pcoded-mtext">Dasbor</span>
</a>
</li>
<!-- DASHBOR END!-->

<!-- DAFTAR AKUN START!-->
<li class="pcoded-hasmenu <?php if($this->uri->segment(1)=="C_Akun"){echo 'active pcoded-trigger';}?>">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="fa fa-book"></i>
</span>
<span class="pcoded-mtext">Daftar Akun</span>
</a>
<ul class="pcoded-submenu">
<!--SUB DAFTAR AKUN START!-->
<li <?php if($this->uri->segment(1)=="C_Akun"){echo 'class="active"';}?>>
<a  href="<?php echo base_url('C_Akun'); ?>" class="waves-effect waves-dark">
<span class="pcoded-mtext">Daftar Akun</span>
</a>
</li>
<li class=" ">
<a href="other.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Lainnya</span>
</a>
</li>
</ul>
</li>
<!-- DAFTAR AKUN END!-->

</ul>
<!-- PEMBAGIAN MENU KEDUA!-->


<div class="pcoded-navigation-label">UI Element</div>
<ul class="pcoded-item pcoded-left-item">

<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-box"></i>
</span>
<span class="pcoded-mtext">Basic</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="alert.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Alert</span>
</a>
</li>
<li class="">
<a href="breadcrumb.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Breadcrumbs</span>
</a>
</li>
<li class="">
<a href="button.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Button</span>
</a>
</li>
<li class="">
<a href="box-shadow.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Box-Shadow</span>
</a>
</li>
<li class="">
<a href="accordion.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Accordion</span>
</a>
</li>
<li class="">
<a href="generic-class.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Generic Class</span>
</a>
</li>
<li class=" ">
<a href="tabs.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tabs</span>
</a>
</li>
<li class="">
<a href="color.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Color</span>
</a>
</li>
<li class=" ">
<a href="label-badge.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Label Badge</span>
</a>
</li>
<li class=" ">
<a href="progress-bar.html" class="waves-effect waves-dark"> 
<span class="pcoded-mtext">Progress Bar</span>
</a>
</li>
<li class=" ">
<a href="list.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">List</span>
</a>
</li>
<li class=" ">
<a href="tooltip.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tooltip And Popover</span>
</a>
</li>
<li class=" ">
<a href="typography.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Typography</span>
</a>
</li>
<li class=" ">
<a href="other.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Other</span>
</a>
</li>
</ul>
</li>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-gitlab"></i>
</span>
<span class="pcoded-mtext">Advance</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="draggable.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Draggable</span>
</a>
</li>
<li class=" ">
<a href="modal.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Modal</span>
</a>
</li>
<li class=" ">
<a href="notification.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Notifications</span>
</a>
</li>
<li class=" ">
<a href="rating.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rating</span>
</a>
</li>
<li class=" ">
<a href="range-slider.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Range Slider</span>
</a>
</li>
<li class=" ">
<a href="slider.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Slider</span>
</a>
</li>
<li class=" ">
<a href="syntax-highlighter.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Syntax Highlighter</span>
</a>
</li>
<li class=" ">
<a href="tour.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tour</span>
</a>
</li>
<li class=" ">
<a href="treeview.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tree View</span>
</a>
</li>
<li class=" ">
<a href="nestable.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Nestable</span>
</a>
</li>
<li class=" ">
<a href="toolbar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Toolbar</span>
</a>
</li>
<li class=" ">
<a href="x-editable.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">X-Editable</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-package"></i>
</span>
<span class="pcoded-mtext">Extra</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="session-timeout.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Session Timeout</span>
</a>
</li>
<li class=" ">
<a href="session-idle-timeout.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Session Idle Timeout</span>
</a>
</li>
<li class=" ">
<a href="offline.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Offline</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="animation.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-aperture rotate-refresh"></i>
</span>
<span class="pcoded-mtext">Animations</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-command"></i>
</span>
<span class="pcoded-mtext">Icons</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="icon-font-awesome.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Font Awesome</span>
</a>
</li>
<li class=" ">
<a href="icon-themify.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Themify</span>
</a>
</li>
<li class=" ">
<a href="icon-simple-line.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Simple Line Icon</span>
</a>
</li>
</ul>
</li>
</ul>

 <div class="pcoded-navigation-label">Forms</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
<span class="pcoded-mtext">Form</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="form-elements-component.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Components</span>
</a>
</li>
<li class=" ">
<a href="form-elements-add-on.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Add-On</span>
</a>
</li>
<li class=" ">
<a href="form-elements-advance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Advance</span>
</a>
</li>
<li class=" ">
<a href="form-validation.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Validation</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="form-picker.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-edit-1"></i>
</span>
<span class="pcoded-mtext">Form Picker</span>
<span class="pcoded-badge label label-warning">NEW</span>
</a>
</li>
<li class=" ">
<a href="form-select.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-feather"></i>
</span>
<span class="pcoded-mtext">Form Select</span>
</a>
</li>
<li class=" ">
<a href="form-masking.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-shield"></i>
</span>
<span class="pcoded-mtext">Form Masking</span>
</a>
</li>
<li class=" ">
<a href="form-wizard.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-tv"></i>
</span>
<span class="pcoded-mtext">Form Wizard</span>
</a>
</li>
</ul>

<div class="pcoded-navigation-label">Tables</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-credit-card"></i>
</span>
<span class="pcoded-mtext">Bootstrap Table</span>
</a>
<ul class="pcoded-submenu"> 
<li class=" ">
<a href="bs-basic-table.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-sizing.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Sizing Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-border.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Border Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-styling.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Styling Table</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-inbox"></i>
</span>
<span class="pcoded-mtext">Data Table</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-basic.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Initialization</span>
</a>
</li>
<li class=" ">
<a href="dt-advance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Advance Initialization</span>
</a>
</li>
<li class=" ">
<a href="dt-styling.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Styling</span>
</a>
</li>
<li class=" ">
<a href="dt-api.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">API</span>
</a>
</li>
<li class=" ">
<a href="dt-ajax.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Ajax</span>
</a>
</li>
<li class=" ">
<a href="dt-server-side.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Server Side</span>
</a>
</li>
<li class=" ">
<a href="dt-plugin.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Plug-In</span>
</a>
</li>
<li class=" ">
<a href="dt-data-sources.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Sources</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
 <i class="feather icon-server"></i>
</span>
<span class="pcoded-mtext">DT Extensions</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-ext-autofill.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">AutoFill</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Button</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-ext-basic-buttons.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Button</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-buttons-html-5-data-export.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Export</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="dt-ext-col-reorder.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Col Reorder</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-fixed-columns.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed Columns</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-fixed-header.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed Header</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-key-table.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Key Table</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-responsive.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Responsive</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-row-reorder.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Row Reorder</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-scroller.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Scroller</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-select.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Select Table</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="foo-table.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-hash"></i>
</span>
 <span class="pcoded-mtext">FooTable</span>
</a>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-airplay"></i>
</span>
<span class="pcoded-mtext">Handson Table</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="handson-appearance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Appearance</span>
</a>
</li>
<li class="">
<a href="handson-data-operation.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Operation</span>
</a>
</li>
<li class="">
<a href="handson-rows-cols.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rows Columns</span>
</a>
</li>
<li class="">
<a href="handson-columns-only.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Columns Only</span>
</a>
</li>
<li class="">
<a href="handson-cell-features.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Cell Features</span>
</a>
</li>
<li class="">
<a href="handson-cell-types.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Cell Types</span>
</a>
</li>
<li class="">
<a href="handson-integrations.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Integrations</span>
</a>
</li>
<li class="">
<a href="handson-rows-only.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rows Only</span>
</a>
</li>
<li class="">
<a href="handson-utilities.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Utilities</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="editable-table.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-edit"></i>
</span>
<span class="pcoded-mtext">Editable Table</span>
</a>
</li>
</ul>





</div>
</div>