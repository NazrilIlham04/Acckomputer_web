<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body style="background-color: #f0f4f9;">
    <div class="d-flex">
        <div class="sidebar d-flex flex-column p-3" style="height: 100vh; position: fixed; width: 250px; background-color: #133E87; color: white;">
            <div class="logo" style="position: sticky;">
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
        <div class="content" style="margin-left: 280px; padding: 20px;">
            <div class="search-bar" style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px;">
                <input type="text" placeholder="Search..." style="flex-grow: 1; border: 2px solid #ddd; border-radius: 5px; padding: 8px 12px;">
                <button style="background-color: #1e00ff; color: white; border: none; padding: 8px 15px; border-radius: 5px;">Search</button>
            </div>
            <div class="table-container" style="background: white; border-radius: 10px; padding: 20px;">
                <h2 style="font-weight: bold; font-size: 24px; margin-bottom: 10px;">Data Transaksi</h2>
                <table class="table table-bordered" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="padding: 15px; text-align: left; background-color: #f8f9fa;">Kode</th>
                            <th style="padding: 15px; text-align: left; background-color: #f8f9fa;">Id Struk</th>
                            <th style="padding: 15px; text-align: left; background-color: #f8f9fa;">Pelanggan</th>
                            <th style="padding: 15px; text-align: left; background-color: #f8f9fa;">Pegawai</th>
                            <th style="padding: 15px; text-align: left; background-color: #f8f9fa;">Jenis Pembayaran</th>
                            <th style="padding: 15px; text-align: left; background-color: #f8f9fa;">Harga</th>
                            <th style="padding: 15px; text-align: left; background-color: #f8f9fa;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background-color: #f2f2f2;">
                            <td style="padding: 15px; text-align: left;">1</td>
                            <td style="padding: 15px; text-align: left;">121212121</td>
                            <td style="padding: 15px; text-align: left;">Nazril</td>
                            <td style="padding: 15px; text-align: left;">Thoriq</td>
                            <td style="padding: 15px; text-align: left;">Cash</td>
                            <td style="padding: 15px; text-align: left;">Rp.100.000</td>
                            <td style="padding: 15px; text-align: left;"><button class="action-btn edit" style="border: none; color: white; padding: 5px 10px; border-radius: 5px; cursor: pointer; background-color: #1e00ff;"><i class="bi bi-pencil"></i></button></td>
                        </tr>
                        <tr style="background-color: #fff;">
                            <td style="padding: 15px; text-align: left;">2</td>
                            <td style="padding: 15px; text-align: left;">121212121</td>
                            <td style="padding: 15px; text-align: left;">Ilham</td>
                            <td style="padding: 15px; text-align: left;">Thoriq</td>
                            <td style="padding: 15px; text-align: left;">Cash</td>
                            <td style="padding: 15px; text-align: left;">Rp.300.000</td>
                            <td style="padding: 15px; text-align: left;"><button class="action-btn edit" style="border: none; color: white; padding: 5px 10px; border-radius: 5px; cursor: pointer; background-color: #1e00ff;"><i class="bi bi-pencil"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
