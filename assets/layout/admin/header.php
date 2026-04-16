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

        <div class="d-flex min-vh-100">

            <!-- Sidebar -->
            <div id="sidebar" class="collapse collapse-horizontal show">

                <aside class="d-flex flex-column flex-shrink-0 bg-dark text-white vh-100 p-3" style="width: 220px;">
                <a href="#" class="d-flex align-items-center mb-3 text-white text-decoration-none">
                    <i class="bi bi-speedometer2 fs-4 me-2"></i>
                    <span class="fs-4">Admin</span>
                </a>
                <hr>
                <nav aria-label="Sidebar Navigation">
                    <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item"><a href="./" class="nav-link <?= active('utama',$laman);?> text-white"><i class="bi bi-house-door me-2"></i>Dashboard</a></li>
                    <li class="nav-item"><a href="admin_user.php" class="nav-link <?= active('user', $laman);?> text-white"><i class="bi bi-people me-2"></i>Users</a></li>
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