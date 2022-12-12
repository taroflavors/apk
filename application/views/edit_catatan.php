<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/'); ?>img/favicon.png" rel="icon">
    <link href="<?= base_url('assets/'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="<?= base_url('assets/'); ?>vendor/https://fonts.gstatic.com" rel="preconnect">
    <link href="<?= base_url('assets/'); ?>vendor/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>



<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">aplikasi perjalanan</span>
            </a>
        </div><!-- End Logo -->




        <nav class="header-nav ms-auto">
            <li style="margin-bottom: 25px;" class="nav-item dropdown pe-3">

                <!-- <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="assets/img/news-3.jpg" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">Diva Oliviya</span>
                </a> -->
                <!--End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Diva Oliviya Mayantika</h6>
                        <span>Web Designer</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul>
                <!--End Profile Dropdown Items -->
            </li>
            <!--End Profile Nav -->

        </nav>
        <!--End Icons Navigation -->

    </header>
    <!--End Header-->


    <section style="margin-left:350px; margin-top:150px; margin-bottom:-500px;" class="section">
        <div class="row">
            <div class="lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit catatan</h5>

                        <?= $this->session->flashdata('message') ?>

                        <!-- General Form Elements -->
                        <?php foreach ($editcatatan as $edt) { ?>
                            <form method="post" action="<?= base_url() . 'tampil_catatan/update/' . $edt->id; ?>">
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">pilih tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $edt->tanggal ?>">
                                    </div>
                                </div>
                                <br>
                                <div class=" row mb-3">
                                    <label for="inputTime" class="col-sm-2 col-form-label">pilih jam</label>
                                    <div class="col-sm-10">
                                        <input type="time" name="jam" id="jam" class="form-control" value="<?= $edt->jam ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">pilih lokasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="lokasi" id="lokasi" class="form-control" value="<?= $edt->lokasi ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">suhu tubuh</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="suhu" id="suhu" class="form-control" value="<?= $edt->suhu ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary"><i class="bx bx-edit-alt"></i> Edit</button>

                                    </div>


                                </div>
                            </form><!-- End General Form Elements -->
                        <?php  } ?>
                    </div>
                </div>



            </div>
        </div>

    </section>