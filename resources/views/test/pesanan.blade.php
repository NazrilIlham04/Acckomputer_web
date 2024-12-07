<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f0f4f9;
        }

        .sidebar {
            height: 100vh;
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

        .btn-primary {
            background-color: #00FF9C;
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
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
    <h3>Tambah Pesanan</h3>
</div>
    <form>
<div class="row mb-3">
<div class="col-md-4">
    <label for="pc" class="form-label">PC</label>
    <select class="form-select" id="pc">
    <option selected disabled>Pilih PC</option>
    <option value="pc1">PC 1</option>
    <option value="pc2">PC 2</option>
    </select>
</div>
<div class="col-md-4">
    <label for="service" class="form-label">Layanan</label>
    <select class="form-select" id="service">
    <option selected disabled>Pilih Layanan</option>
    <option value="service1">Layanan 1</option>
    <option value="service2">Layanan 2</option>
    </select>
</div>
<div class="col-md-4">
    <label for="price" class="form-label">Harga</label>
    <input type="text" class="form-control" id="price" placeholder="Rp">
</div>
</div>
<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-primary btn-circle">+</button>
</div>
</form>
<h3 class="mt-5">Komponen Komputer</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
        <thead class="table-light">
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
        <div class="d-flex justify-content-end mt-4">
            <button type="button" class="btn btn-primary btn-next">Berikutnya</button>
        </div>
    </div>
        </main>
    </div>
  </div>
</body>
