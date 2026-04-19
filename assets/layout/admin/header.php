<?php
    function active($file, $laman) {
        return $laman == $file ? 'active' : '';
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    </head>

    <body>

        <div class="d-flex vh-100 overflow-hidden">

            <!-- Sidebar -->
            <div id="sidebar" class="collapse collapse-horizontal show">

                <aside class="d-flex flex-column flex-shrink-0 bg-dark text-white h-100 p-3 overflow-auto"
                       style="width: 220px; min-width:220px;">

                <a href="#" class="d-flex align-items-center mb-3 text-white text-decoration-none">
                    <i class="bi bi-speedometer2 fs-4 me-2"></i>
                    <span class="fs-4">Admin</span>
                </a>

                <hr>

                <nav aria-label="Sidebar Navigation">
                    <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item"><a href="./" class="nav-link <?= active('Dashboard',$laman);?> text-white"><i class="bi bi-house-door me-2"></i>Dashboard</a></li>
                    <li class="nav-item"><a href="admin_user.php" class="nav-link <?= active('Users', $laman);?> text-white"><i class="bi bi-people me-2"></i>Users</a></li>
                    <li class="nav-item"><a href="admin_produk.php" class="nav-link <?= active('Product', $laman);?> text-white"><i class="bi bi-basket me-2"></i>Product</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-gear me-2"></i>Settings</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-file-earmark-text me-2"></i>Reports</a></li>
                    </ul>
                </nav>

                <hr>

                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="https://via.placeholder.com/32" alt="User" class="rounded-circle me-2">
                    <strong>Admin</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>

                </aside>

            </div>

            <!-- Main Content -->
            <div class="flex-grow-1 d-flex flex-column p-2 p-md-3" style="min-width:0;">

            <!-- Navbar -->
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light rounded mb-3 mb-md-4 shadow-sm px-2 px-md-3 position-sticky top-0 z-3" aria-label="Top Navigation">
                    <div class="container-fluid p-0">

                        <!-- Toggle Button -->
                        <button class="btn btn-outline-secondary me-2"
                            data-bs-toggle="collapse"
                            data-bs-target="#sidebar">
                            <i class="bi bi-list"></i>
                        </button>

                        <a class="navbar-brand" href="#"><?= $laman; ?></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                            <li class="nav-item me-2 me-md-3"><a class="nav-link position-relative" href="#"><i class="bi bi-bell fs-5"></i><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span></a></li>
                            <li class="nav-item me-2 me-md-3"><a class="nav-link" href="#"><i class="bi bi-envelope fs-5"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-gear fs-5"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>