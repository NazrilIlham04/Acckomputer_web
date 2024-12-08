<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Layanan dengan Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f9;
        }

        .sidebar {
            height: 100vh;
            width: 260px;
            position: fixed;
            background-color: #133E87;
            color: white;
        }

        .sidebar .logo img {
            width: 150px;
            margin: 20px auto;
            display: block;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            display: flex;
            align-items: center;
            padding: 10px 20px;
        }

        .sidebar ul li a:hover {
            background-color: #22177A;
            border-radius: 5px;
        }

        .sidebar ul li a i {
            margin-right: 10px;
        }

        .container {
            margin-left: 280px; /* Sesuaikan margin kiri dengan lebar sidebar */
            padding: 20px;
        }

        .search-bar {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .search-bar input {
            width: 300px;
            border-radius: 30px;
            border: 1px solid #ccc;
            padding: 0.5rem 1.5rem;
            font-size: 14px;
        }

        .table-container {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .table {
            font-size: 14px;
        }

        .btn-add {
            background-color: #4e91f9;
            color: white;
            padding: 10px 30px;
            border-radius: 30px;
            border: none;
            font-size: 14px;
        }

        .btn-add:hover {
            background-color: #3877c9;
        }

        h2 {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column p-3">
        <div class="logo">
            <div class="position-sticky">
                <div class="text-center py-3">
                    <img src="https://i.ibb.co/Byfjjmh/Screenshot-2024-04-22-043255-1.png" alt="Logo">
                </div>
                <ul class="nav flex-column px-3">
                    <li class="nav-item mb-3">
                        <a class="nav-link text-white active" href="#">
                            <i class="bi bi-house"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-cart"></i> Pemesanan
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-list"></i> Daftar Layanan
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-box"></i> Daftar Produk
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-receipt"></i> Data Transaksi
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Search...">
        </div>

        <div class="table-container">
            <h2 class="mb-4 text-center">Daftar Layanan</h2>
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>Kode</th>
                        <th>Nama Service</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Install Ulang Windows</td>
                        <td>Rp100.000</td>
                        <td>
                            <button class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ganti Pasta</td>
                        <td>Rp70.000</td>
                        <td>
                            <button class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                        </td>
                    </tr>
                    <!-- Tambahkan lebih banyak baris jika diperlukan -->
                </tbody>
            </table>
            <div class="text-end">
                <button class="btn btn-add">Tambah</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
