<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body style="background-color: #f0f4f9;">
    <div class="d-flex">

        <div class="sidebar d-flex flex-column p-3" style="height: 100vh; position: fixed; width: 250px; background-color: #133E87; color: white;">
            <div class="logo">
                <div class="position-sticky">
                    <div class="text-center py-3">
                        <a href="#">
                            <img src="https://i.ibb.co.com/Byfjjmh/Screenshot-2024-04-22-043255-1.png" alt="Logo" style="width: 150px; margin: 20px auto; display: block;">
                        </a>
                    </div>
                    <ul class="nav flex-column px-3" style="list-style: none; padding: 0; margin: 20px 0;">
                        <li class="nav-item mb-3" style="margin: 15px 0;">
                            <a class="nav-link text-white active" href="#" style="text-decoration: none; color: white; font-size: 16px; display: flex; align-items: center; padding: 10px 20px;">
                                <i class="bi bi-house" style="margin-right: 10px;"></i> Beranda
                            </a>
                        </li>
                        <li class="nav-item mb-3" style="margin: 15px 0;">
                            <a class="nav-link text-white" href="#" style="text-decoration: none; color: white; font-size: 16px; display: flex; align-items: center; padding: 10px 20px;">
                                <i class="bi bi-cart" style="margin-right: 10px;"></i> Pemesanan
                            </a>
                        </li>
                        <li class="nav-item mb-3" style="margin: 15px 0;">
                            <a class="nav-link text-white" href="#" style="text-decoration: none; color: white; font-size: 16px; display: flex; align-items: center; padding: 10px 20px;">
                                <i class="bi bi-box" style="margin-right: 10px;"></i> Daftar Produk
                            </a>
                        </li>
                        <li class="nav-item mb-3" style="margin: 15px 0;">
                            <a class="nav-link text-white" href="#" style="text-decoration: none; color: white; font-size: 16px; display: flex; align-items: center; padding: 10px 20px;">
                                <i class="bi bi-receipt" style="margin-right: 10px;"></i> Data Transaksi
                            </a>
                        </li>
                        <li class="nav-item mb-3" style="margin: 15px 0;">
                            <a class="nav-link text-white" href="#" style="text-decoration: none; color: white; font-size: 16px; display: flex; align-items: center; padding: 10px 20px;">
                                <i class="bi bi-person" style="margin-right: 10px;"></i> Profil
                            </a>
                        </li>
                        <li class="nav-item mb-3" style="margin: 15px 0;">
                            <a class="nav-link text-white" href="#" style="text-decoration: none; color: white; font-size: 16px; display: flex; align-items: center; padding: 10px 20px;">
                                <i class="bi bi-box-arrow-right" style="margin-right: 10px;"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <main class="content" style="margin-left: 260px; padding: 20px;">
            <div class="container py-4">
                <h3 class="mb-3">Pilih data pelanggan</h3>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari data Pelanggan" aria-label="Cari data Pelanggan">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
                <div class="card shadow-sm" style="border-radius: 15px;">
                    <div class="card-body">
                        <h5 class="card-title">Data Pelanggan</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama Pelanggan</th>
                                    <th>No Telepon</th>
                                    <th>Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nazril</td>
                                    <td>085230369011</td>
                                    <td>
                                        <button class="btn-select" style="background-color: #00c851; color: white; border: none; border-radius: 50%; padding: 5px 10px;">
                                            <i class="bi bi-bag-check"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">&lt;</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">&gt;</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
