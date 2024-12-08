<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f0f4f9;
        }

        .sidebar {
            height: 200vh;
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

        {
        .container {
        margin-left: 260px; /* Sesuaikan margin kiri sesuai lebar sidebar */
        padding: 20px;
        }
        }

        .bottom-icon {
            margin-top: auto;
            text-align: center;
        }

        .bottom-icon img {
            width: 100px;
        }

        .profile-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-image img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .btn-primary {
            background-color: #ffbe76;
            border: none;
        }

        .btn-secondary {
            background-color: #22177A;
            border: none;
            color: #ffffff;
        }
    </style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<body>
    <div class="d-flex">
        <div class="sidebar d-flex flex-column p-3">
            <div class="logo">
                <div class="position-sticky">
                    <div class="text-center py-3">
                        <a href="https://imgbb.com/"><img src="https://i.ibb.co.com/Byfjjmh/Screenshot-2024-04-22-043255-1.png" alt="Screenshot-2024-04-22-043255-1" border="0"></a>                    </div>
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
        <div class="container mt-4" style="max-width: 800px;">
            <div class="profile-card">
            <div class="text-center profile-image mb-3">
            <img src="https://via.placeholder.com/100" alt="Profile">
        </div>
        <form>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" value="Owner">
        </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" value="Nazril">
        </div>
        <div class="mb-3 position-relative">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" value="">
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-control" id="role" name="role">
            <option value="Owner">Owner</option>
            <option value="Teknisi">Teknisi</option>
            </select>
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-primary">Daftar Pengguna</button>
            <button type="button" class="btn btn-secondary">Kembali</button>
     </div>
    </form>
    </div>
</body>
