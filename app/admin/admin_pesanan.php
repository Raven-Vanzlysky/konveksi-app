<?php

    $laman = 'Pesanan';
    include '../../assets/layout/admin/header.php';

?>

    <!-- Dashboard Main -->
    <main class="overflow-auto" style="flex:1;">

        <!-- Actions -->
        <section class="mb-3 mb-md-4" aria-label="Validasi Actions">
            <h5 class="mb-2">Actions</h5>
            <div class="d-flex flex-wrap gap-2">
            <button class="btn btn-primary"><i class="bi bi-person-plus me-1"></i>Add User</button>
            <button class="btn btn-secondary"><i class="bi bi-file-earmark-text me-1"></i>Generate Report</button>
            <button class="btn btn-success"><i class="bi bi-download me-1"></i>Export</button>
            <button class="btn btn-danger"><i class="bi bi-trash me-1"></i>Delete</button>
            </div>
        </section>

        <!-- Table Data Dummy -->
        <section class="mb-4 mb-md-5" aria-label="Validasi Table">
            <h5 class="mb-2">Validasi Pesanan</h5>
            <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                <tr>
                    <th scope="col" class="py-2">#</th>
                    <th scope="col" class="py-2">Name</th>
                    <th scope="col" class="py-2">Email</th>
                    <th scope="col" class="py-2">Role</th>
                    <th scope="col" class="py-2">Status</th>
                    <th scope="col" class="py-2">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row" class="py-2">1</th>
                    <td class="py-2">John Doe</td>
                    <td class="py-2">john@example.com</td>
                    <td class="py-2">Admin</td>
                    <td class="py-2"><span class="badge bg-success">Active</span></td>
                    <td class="py-2">
                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="py-2">2</th>
                    <td class="py-2">Jane Smith</td>
                    <td class="py-2">jane@example.com</td>
                    <td class="py-2">User</td>
                    <td class="py-2"><span class="badge bg-secondary">Inactive</span></td>
                    <td class="py-2">
                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </section>

        <!-- Actions -->
        <section class="mb-3 mb-md-4" aria-label="Kelola Actions">
            <h5 class="mb-2">Actions</h5>
            <div class="d-flex flex-wrap gap-2">
            <button class="btn btn-primary"><i class="bi bi-person-plus me-1"></i>Add User</button>
            <button class="btn btn-secondary"><i class="bi bi-file-earmark-text me-1"></i>Generate Report</button>
            <button class="btn btn-success"><i class="bi bi-download me-1"></i>Export</button>
            <button class="btn btn-danger"><i class="bi bi-trash me-1"></i>Delete</button>
            </div>
        </section>

        <!-- Table Data Dummy -->
        <section class="mb-2" aria-label="Kelola Table">
            <h5 class="mb-2">Kelola Pesanan</h5>
            <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                <tr>
                    <th scope="col" class="py-2">#</th>
                    <th scope="col" class="py-2">Name</th>
                    <th scope="col" class="py-2">Email</th>
                    <th scope="col" class="py-2">Role</th>
                    <th scope="col" class="py-2">Status</th>
                    <th scope="col" class="py-2">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row" class="py-2">1</th>
                    <td class="py-2">John Doe</td>
                    <td class="py-2">john@example.com</td>
                    <td class="py-2">Admin</td>
                    <td class="py-2"><span class="badge bg-success">Active</span></td>
                    <td class="py-2">
                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="py-2">2</th>
                    <td class="py-2">Jane Smith</td>
                    <td class="py-2">jane@example.com</td>
                    <td class="py-2">User</td>
                    <td class="py-2"><span class="badge bg-secondary">Inactive</span></td>
                    <td class="py-2">
                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </section>

    </main>

<?php

    include '../../assets/layout/admin/footer.php';

?>