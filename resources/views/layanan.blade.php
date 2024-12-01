<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    min-height: 100vh;
    background-color: #f0f4f8;
}

.container {
    display: flex;
    width: 100%;
}

.sidebar {
    width: 20%;
    background-color: #2c3e50;
    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px 0;
}

.logo h1 {
    font-size: 20px;
    text-align: center;
    margin-bottom: 30px;
}

.logo span {
    color: #e74c3c;
}

.sidebar nav ul {
    list-style: none;
    width: 100%;
    padding-left: 0;
}

.sidebar nav ul li {
    margin: 10px 0;
    text-align: center;
}

.sidebar nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 10px 0;
    display: block;
    transition: background 0.3s;
}

.sidebar nav ul li.active a,
.sidebar nav ul li a:hover {
    background-color: #34495e;
    border-radius: 5px;
}

.user img {
    margin-top: auto;
    border-radius: 50%;
    width: 50px;
    height: 50px;
}

main {
    width: 80%;
    padding: 20px;
}

header {
    display: flex;
    justify-content: flex-end;
    margin-bottom: 20px;
}

header input {
    width: 300px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.content h2 {
    margin-bottom: 20px;
    font-size: 24px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background-color: #fff;
}

table th,
table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

table th {
    background-color: #2c3e50;
    color: #fff;
}

button {
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button.edit {
    background-color: #f1c40f;
    color: #fff;
}

button.delete {
    background-color: #e74c3c;
    color: #fff;
}

button.add {
    background-color: #3498db;
    color: #fff;
    width: 100%;
    padding: 10px;
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Layanan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <h1>AEC <span>COMPUTER</span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Pemesanan</a></li>
                    <li class="active"><a href="#">Daftar Layanan</a></li>
                    <li><a href="#">Daftar Produk</a></li>
                    <li><a href="#">Data Transaksi</a></li>
                </ul>
            </nav>
            <div class="user">
                <img src="user-icon.png" alt="User Icon">
            </div>
        </aside>
        <main>
            <header>
                <input type="text" placeholder="Search...">
            </header>
            <section class="content">
                <h2>Daftar Layanan</h2>
                <table>
                    <thead>
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
                                <button class="edit">✏️</button>
                                <button class="delete">🗑️</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ganti Pasta</td>
                            <td>Rp70.000</td>
                            <td>
                                <button class="edit">✏️</button>
                                <button class="delete">🗑️</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Upgrade Komponen</td>
                            <td>Rp30.000</td>
                            <td>
                                <button class="edit">✏️</button>
                                <button class="delete">🗑️</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Recovery Data</td>
                            <td>Rp200.000</td>
                            <td>
                                <button class="edit">✏️</button>
                                <button class="delete">🗑️</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Install Ulang Linux</td>
                            <td>Rp120.000</td>
                            <td>
                                <button class="edit">✏️</button>
                                <button class="delete">🗑️</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Migrasi Data Laptop ke Laptop atau dari Sistem Operasi Lain</td>
                            <td>Rp40.000</td>
                            <td>
                                <button class="edit">✏️</button>
                                <button class="delete">🗑️</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="add">Tambah</button>
            </section>
        </main>
    </div>
</body>
</html>

