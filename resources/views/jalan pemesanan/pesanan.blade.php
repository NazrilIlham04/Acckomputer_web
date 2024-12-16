<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan </title>
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
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-8 py-0" style="margin-left: 260px; padding: 20px;">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            </div>
            <form>
            <h3 class="mt-5">Komponen Komputer</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light" style="background-color: #f8f9fa;">
                        <tr>
                            <th>Kode</th>
                            <th>Nama Komponen</th>
                            <th>Type</th>
                            <th>Harga</th>
                            <th>Kuantitas Pembelian</th>
                            <th>Ceklis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Asrock B65M-H</td>
                            <td>Mainboard</td>
                            <td>Rp1.955.000</td>
                            <td><input type="number" class="form-control" min="0" value="0"></td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>VGA Colorful GeForce RTX 3060 Mini</td>
                            <td>GPU</td>
                            <td>Rp6.299.000</td>
                            <td><input type="number" class="form-control" min="0" value="0"></td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>ADATA XPG LANCER BLADE 32GB (2x16GB) 5600MHz DDR5</td>
                            <td>RAM</td>
                            <td>Rp1.245.000</td>
                            <td><input type="number" class="form-control" min="0" value="0"></td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Processor Intel i3 12100F - LGA1700 Gen</td>
                            <td>CPU</td>
                            <td>Rp1.445.000</td>
                            <td><input type="number" class="form-control" min="0" value="0"></td>
                            <td><input type="checkbox"></td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="mt-5">Keterangan</h4>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button type="button" class="btn btn-primary btn-next" style="background-color: #1b10f0; border: none;">Berikutnya</button>
                </div>
            </div>
        </main>
    </div>
</form>
</body>
</html>
