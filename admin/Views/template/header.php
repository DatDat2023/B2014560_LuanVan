<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <base href="<?php echo baseUrl;?>">
  <link rel="apple-touch-icon" sizes="76x76" href="./resource/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./resource/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    BOOKADMIN
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="resource/css/bootstrap.min.css" rel="stylesheet" />
  <link href="resource/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="resource/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo" style="background-color:#0B2161">
        <a href="#" class="simple-text logo-mini" style="font-size:30px">
        📖
        </a>
       <a href="#" class="simple-text logo-normal" style="font-size:35px">
       <marquee><a href="../index.php" style="color:white">𝕋𝔻𝔹𝕆𝕆𝕂</a></marquee>
        </a>

      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper" style="background-color:#0B2161">
        <ul class="nav">
          <li class="active ">
            <a href="./">
              <i class="now-ui-icons design_app"></i>
              <p>Trang chủ</p>
            </a>
          </li>
          <li>
            <a href="./sanpham">
              <i class="now-ui-icons education_atom"></i>
              <p>Quản lý Sách</p>
            </a>
          </li>
          <li>
            <a href="./user">
              <i class="now-ui-icons users_single-02"></i>
              <p>Quản lý tài khoản </p>
            </a>
          </li>
          <li>
            <a href="./hoadon">
              <i class="now-ui-icons files_paper"></i>
              <p>Đơn đặt hàng</p>
            </a>
          </li>
          <li>
            <a href="./doanhthu">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Doanh thu</p>
            </a>
          </li>
          <li>
            <a href="./danhmuc">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Danh mục sản phẩm</p>
            </a>
          </li>
          <li>
            <a href="./quanlikho">
              <i class="now-ui-icons files_paper"></i>
              <p>quản lý kho</p>
            </a>
          </li>
          <li>
            <a href="./giamgia">
              <i class="now-ui-icons arrows-1_minimal-down"></i>
              <p>kho voucher</p>
            </a>
          </li>
          <li>
            <a href="./quanlyluothuy">
              <i class="now-ui-icons business_bank"></i>
              <p>quản lý lượt hủy đơn</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel" style="background-image: url(k.jpg);">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="./" >Trang chủ</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="./logout">Đăng xuất</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->