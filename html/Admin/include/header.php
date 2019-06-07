<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SPORTSTRIVES | Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <link href="./assets/css/style.css" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidedbar-1.jpg">
      
      <div class="logo">
        <a href="dashboard.php" class="simple-text logo-normal">
          <img src="./assets/img/logo.png" alt="">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">
              <i class="fa fa-futbol-o"></i>
              <!-- <img src="./assets/img/sidebar_icon1.png" alt="" class="mr-3"> -->
              <p class="d-inline-block">Athletes</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sports_organisation.php">
              <i class="fa fa-list-alt"></i>
              <!-- <img src="./assets/img/sidebar_icon1.png" alt="" class="mr-3"> -->
              <p class="d-inline-block">Sports Companies</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tournament.php">
              <i class="fa fa-list"></i>
              <!-- <img src="./assets/img/sidebar_icon1.png" alt="" class="mr-3"> -->
              <p class="d-inline-block">Tournaments</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);">
              <i class="fa fa-sign-out"></i>
              <!-- <img src="./assets/img/sidebar_icon2.png" alt="" class="mr-3"> -->
              <p class="d-inline-block">Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top custom_nav">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown d-flex">
                <img src="http://via.placeholder.com/40x40" class="rounded-circle" alt="">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">hi james
                  <i class="fa fa-sort-desc ml-3"></i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->