<?php

    $laman = 'utama';
    include '../../assets/layout/admin/header.php';

?>

    <!-- Main Content -->
    <div class="flex-grow-1 d-flex flex-column p-3">

        <!-- Navbar -->
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded mb-4 shadow-sm" aria-label="Top Navigation">
            <div class="container-fluid">

                <!-- Toggle Button -->
                <button class="btn btn-outline-secondary me-2"
                    data-bs-toggle="collapse"
                    data-bs-target="#sidebar">
                    <i class="bi bi-list"></i>
                </button>

            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item me-3"><a class="nav-link position-relative" href="#"><i class="bi bi-bell fs-5"></i><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span></a></li>
                <li class="nav-item me-3"><a class="nav-link" href="#"><i class="bi bi-envelope fs-5"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-gear fs-5"></i></a></li>
                </ul>
            </div>
            </div>
        </nav>
        </header>

        <!-- Dashboard Main -->
        <main>
            <!-- Dashboard Cards -->
            <section class="row g-3 mb-4" aria-label="Dashboard Cards">
                <article class="col-md-3">
                <div class="card text-bg-primary shadow-sm mb-3">
                    <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-white">Users</h6>
                    <h4 class="card-title text-white">1,234</h4>
                    </div>
                </div>
                </article>
                <article class="col-md-3">
                <div class="card text-bg-success shadow-sm mb-3">
                    <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-white">Sales</h6>
                    <h4 class="card-title text-white">$12,345</h4>
                    </div>
                </div>
                </article>
                <article class="col-md-3">
                <div class="card text-bg-warning shadow-sm mb-3">
                    <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark">Orders</h6>
                    <h4 class="card-title text-dark">567</h4>
                    </div>
                </div>
                </article>
                <article class="col-md-3">
                <div class="card text-bg-danger shadow-sm mb-3">
                    <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-white">Errors</h6>
                    <h4 class="card-title text-white">0</h4>
                    </div>
                </div>
                </article>
            </section>

            <!-- Actions -->
            <section class="mb-4" aria-label="Dashboard Actions">
                <h5>Actions</h5>
                <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-primary"><i class="bi bi-person-plus me-1"></i>Add User</button>
                <button class="btn btn-secondary"><i class="bi bi-file-earmark-text me-1"></i>Generate Report</button>
                <button class="btn btn-success"><i class="bi bi-download me-1"></i>Export</button>
                <button class="btn btn-danger"><i class="bi bi-trash me-1"></i>Delete</button>
                </div>
            </section>

            <!-- Table Data Dummy -->
            <section aria-label="Recent Users Table">
                <h5>Recent Users</h5>
                <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td>Admin</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>User</td>
                        <td><span class="badge bg-secondary">Inactive</span></td>
                        <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </section>
        </main>

        

    </div>

<?php

    include '../../assets/layout/admin/footer.php';

?>