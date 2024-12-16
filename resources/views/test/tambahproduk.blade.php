<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk </title>
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
        <div class="main-content w-100" style="margin-left: 250px; padding: 20px;">
            <div class="form-container" style="background-color: white; border-radius: 8px; padding: 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <h4>Tambah Produk</h4>
                <form>
                    <div class="mb-3">
                        <label for="nama-produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama-produk" placeholder="Masukkan nama produk">
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis</label>
                        <select class="form-select" id="jenis">
                            <option selected>Pilih jenis</option>
                            <option value="1">Jenis 1</option>
                            <option value="2">Jenis 2</option>
                            <option value="3">Jenis 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" placeholder="Masukkan harga">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-danger me-2">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>