<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
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
                            <a class="nav-link text-white active" href="/dashboard" style="text-decoration: none; color: white; font-size: 16px; display: flex; align-items: center; padding: 10px 20px;">
                                <i class="bi bi-house" style="margin-right: 10px;"></i> Beranda
                            </a>
                        </li>
                        <li class="nav-item mb-3" style="margin: 15px 0;">
                            <a class="nav-link text-white" href="/pemesanan" style="text-decoration: none; color: white; font-size: 16px; display: flex; align-items: center; padding: 10px 20px;">
                                <i class="bi bi-cart" style="margin-right: 10px;"></i> Pemesanan
                            </a>
                        </li>
                        <li class="nav-item mb-3" style="margin: 15px 0;">
                            <a class="nav-link text-white" href="/produks" style="text-decoration: none; color: white; font-size: 16px; display: flex; align-items: center; padding: 10px 20px;">
                                <i class="bi bi-box" style="margin-right: 10px;"></i> Daftar Produk
                            </a>
                        </li>
                        <li class="nav-item mb-3" style="margin: 15px 0;">
                            <a class="nav-link text-white" href="/dataTransaksi" style="text-decoration: none; color: white; font-size: 16px; display: flex; align-items: center; padding: 10px 20px;">
                                <i class="bi bi-receipt" style="margin-right: 10px;"></i> Data Transaksi
                            </a>
                        </li>
                        <li class="nav-item mb-3" style="margin: 15px 0;">
                            <a class="nav-link text-white" href="/profile" style="text-decoration: none; color: white; font-size: 16px; display: flex; align-items: center; padding: 10px 20px;">
                                <i class="bi bi-person" style="margin-right: 10px;"></i> Profil
                            </a>
                        </li>
                        <li class="nav-item mb-3" style="margin: 15px 0;">
                            <a class="nav-link text-white" href="/logout" style="text-decoration: none; color: white; font-size: 16px; display: flex; align-items: center; padding: 10px 20px;">
                                <i class="bi bi-box-arrow-right" style="margin-right: 10px;"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="table-container" style="margin-left: 250px; padding: 20px;">
            <h1>Daftar Pengguna</h1>
            <div class="d-flex justify-content-between mb-3">
                <input type="text" class="form-control w-15 me-2" placeholder="Cari Pengguna...">
            </div>
            <table class="table table-bordered" style="width: 200%;">
                <thead style="background-color: #0069d9; color: rgb(255, 255, 255);">
                    <tr>
                        <th class="text-center">Kode</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nazril</td>
                        <td>Aril</td>
                        <td>Aril123</td>
                        <td>Owner</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ilham</td>
                        <td>Ilhamm</td>
                        <td>Ilham1212</td>
                        <td>Teknisi</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-left">
                <button class="btn btn-primary">Tambah Pengguna</button>
            </div>
        </div>
    </div>
</body>
</html>