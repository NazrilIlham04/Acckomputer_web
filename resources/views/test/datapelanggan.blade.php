<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body style="background-color: #f0f4f9;">
    <div class="d-flex">
        <div class="sidebar d-flex flex-column p-3" style="height: 100vh; position: fixed; width: 250px; background-color: #133E87; color: white;">
            <div class="logo">
                <div class="position-sticky">
                    <div class="text-center py-3">
                        <a href="https://imgbb.com/"><img src="https://i.ibb.co.com/Byfjjmh/Screenshot-2024-04-22-043255-1.png" alt="Screenshot-2024-04-22-043255-1" border="0" style="width: 150px; margin: 20px auto; display: block;"></a>
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
        <div class="flex-grow-1 p-4" style="margin-left: 250px;">
            <div class="search-bar" style="position: relative; margin-bottom: 30px;">
                <i class="fas fa-search" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: gray;"></i>
                <input type="text" class="form-control" placeholder="Search..." style="padding-left: 40px; border-radius: 20px;">
            </div>
            <h5 style="font-weight: bold;">Pencarian.. Nazril</h5>

            <div class="bg-white rounded p-3 mb-4 shadow-sm">
                <h6 style="font-weight: bold; margin-bottom: 20px;">Data Pelanggan</h6>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Barang</th>
                            <th>Transaksi Pelanggan</th>
                            <th>Data Pelanggan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nazril</td>
                            <td><button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button></td>
                            <td><button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="bg-white rounded p-3 shadow-sm">
                <h6 style="font-weight: bold; margin-bottom: 20px;">Data Pelanggan</h6>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Produk</th>
                            <th>Transaksi dengan Produk</th>
                            <th>Data Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4">Tidak ada data</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="namaBarang" value="Dio">
                        </div>
                        <div class="mb-3">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control" id="kodeBarang" value="1">
                        </div>
                        <div class="mb-3">
                            <label for="transaksi" class="form-label">Transaksi</label>
                            <input type="text" class="form-control" id="transaksi" value="Edit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>