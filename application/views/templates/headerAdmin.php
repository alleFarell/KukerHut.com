<!DOCTYPE html>
<html lang="en">

<head>
    <title>KukerHut</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/logo.jpeg') ?>" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <!-- SweetAlert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.10/dist/sweetalert2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <link rel="stylesheet" href="<?= base_url('assets/css/open-iconic-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/aos.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/ionicons.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.timepicker.css') ?>">


    <link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/icomoon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body class="goto-here">

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('assets\images\Logo n Text Horizontal.png') ?>" height="80px" width="300px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?= base_url('admin') ?>" class="nav-link">Data Produk</a></li>
                    <li class="nav-item active"><a href="<?= base_url('admin/kategori') ?>" class="nav-link">Data Kategori</a></li>
                </ul>
            </div>
            <form class="form-inline">
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?= base_url('assets\images\user.png') ?>" width="35">
                            <p class="user-name mr-2 d-none d-lg-inline text-dark" style="text-transform: uppercase;font-weight: 500"><?= $user['username'] ?></p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </nav>
    <!-- Navbar End -->