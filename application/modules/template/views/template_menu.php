<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="<?php echo base_url('admin/admin') ?>">
              <img class="brand-logo" alt="modern admin logo" src="<?= site_url('app-assets/images/logo/logo.png'); ?>">
              <h3 class="brand-text">Admin Menu</h3>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700"><?php echo "". $this->session->userdata('username'); ?></span>
                </span>
                <span class="avatar avatar-online">
                  <img src="<?= site_url('app-assets/images/portrait/small/avatar-s-19.png'); ?>" alt="avatar"><i></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url('login/login/logout') ?>"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
        </div>
      </div>
    </div>
  </nav>
</body>

<?php $uri = $this->uri->segment(2);?>
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item <?= $uri=='' ? 'active' : '' ?>"><a href="<?= site_url('admin/') ?>"><i class="la la-home"></i><span class="menu-title">Dashboard</span></a>
        </li>
         <li class=" nav-item <?= $uri=='statistik' ? 'active' : '' ?>"><a href="<?= site_url('admin/statistik/') ?>"><i class="la la-area-chart"></i><span class="menu-title">Statistik</span></a>
        </li>
         <li class=" nav-item <?= $uri=='forms' ? 'active' : '' ?>"><a href="<?= site_url('admin/forms/') ?>"><i class="la la-paste"></i><span class="menu-title">Form</span></a>
        </li>
         <li class=" nav-item <?= $uri=='pengaturan' ? 'active' : '' ?>"><a href="<?= site_url('admin/pengaturan/') ?>"><i class="la la-cogs"></i><span class="menu-title">Pengaturan</span></a>
        </li>
    </div>
  </div>