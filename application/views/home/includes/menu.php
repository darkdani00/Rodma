
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('home');?>">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laptop"></i>
      </div>
      <div class="sidebar-brand-text mx-3 ">RODMA</div>
    </a>

    <!-- Heading -->
    <div class="sidebar-heading">
      Menu
    </div>

 

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="<?=base_url('pedidos');?>" >
        <i class="fas fa-fw fa-folder"></i>
        <span>Pedidos</span>
      </a>
    </li>

    <!-- Nav Item - Charts -->
    <?php
   $current_session = $this->session->userdata('store_sess');
   ?>
    <li class="nav-item">
      <a class="nav-link" <?=base_url('pedidos/initial/'.$current_session->id_usuario);?>>
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Productos</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="<?=base_url('descuentos');?>">
        <i class="fas fa-credit-card"></i>
        <span>Descuentos</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->