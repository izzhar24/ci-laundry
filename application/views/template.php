<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="LMS - Laundry Management System">
    <meta name="author" content="Agus Firman">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Pro Bootstrap Admin Template</title>

    <link href="<?= base_url() ?>assets/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/simple-line-icons.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/pace.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/css/dataTables.bootstrap4.css" />
    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.js"></script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img class="navbar-brand-full" src="<?= base_url() ?>assets/img/brand/logo.svg" width="89" height="25"
                alt="CoreUI Logo">
            <img class="navbar-brand-minimized" src="<?= base_url() ?>assets/img/brand/sygnet.svg" width="30"
                height="30" alt="CoreUI Logo">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="img-avatar" src="<?= base_url() ?>assets/img/avatars/6.jpg"
                        alt="admin@bootstrapmaster.com">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url() ?>change_password">
                        <i class="fa fa-shield"></i> Change Password</a>
                    <a class="dropdown-item" href="<?= base_url() ?>logout">
                        <i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        </button>
    </header>
    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>dashboard">
                            <i class="nav-icon icon-speedometer"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="main.html">
                            <i class="nav-icon icon-speedometer"></i> Transaksi
                        </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="nav-icon icon-puzzle"></i> Data</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="base/breadcrumb.html">
                                    <i class="nav-icon icon-puzzle"></i> Konsumen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="base/cards.html">
                                    <i class="nav-icon icon-puzzle"></i> Suppliers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="base/carousel.html">
                                    <i class="nav-icon icon-puzzle"></i> Karyawan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="base/collapse.html">
                                    <i class="nav-icon icon-puzzle"></i> Pembelian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="base/jumbotron.html">
                                    <i class="nav-icon icon-puzzle"></i> Pemakaian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="base/navs.html">
                                    <i class="nav-icon icon-puzzle"></i> Jenis Laundry</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="nav-icon icon-cursor"></i> Master Data</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>users">
                                    <i class="nav-icon icon-cursor"></i> Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>supplier">
                                    <i class=" nav-icon icon-cursor"></i> Suppliers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>Item">
                                    <i class="nav-icon icon-puzzle"></i> Items</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>setting">
                                    <i class=" nav-icon icon-cursor"></i> Setting</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main">

            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>

                <li class="breadcrumb-menu d-md-down-none">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <a class="btn" href="#">
                            <i class="icon-speech"></i>
                        </a>
                        <a class="btn" href="./">
                            <i class="icon-graph"></i> &nbsp;Dashboard</a>
                        <a class="btn" href="#">
                            <i class="icon-settings"></i> &nbsp;Settings</a>
                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <div id="ui-view">

                    <?php
                    echo $contents;
                    ?>

                </div>
            </div>
        </main>
    </div>
    <footer class="app-footer">
        <div>
            <a href="https://coreui.io/pro/">LMS</a>
            <span>© 2019 Laundry Management System.</span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            <a href="https://coreui.io/pro/">Agus Firman</a>
        </div>
    </footer>

    <style>
    .dataTables_filter,
    .dataTables_paginate {
        float: right;
        text-align: right;
    }
    </style>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/pace.min.js"></script>
    <script src="<?= base_url() ?>assets/js/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>assets/js/coreui.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>assets/js/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url() ?>assets/js/Chart.min.js"></script>
    <script src="<?= base_url() ?>assets/js/custom-tooltips.min.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
</body>

</html>