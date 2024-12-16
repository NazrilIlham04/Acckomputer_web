<div>
    @php
       //dd($produks)
    @endphp
    <body style="background-color: #f0f4f9;">
        <div class="d-flex">
            <div class="content" style="margin-left: 260px; padding: 20px;">
                <h2 class="mb-4 fw-bold" style="font-weight: bold;">Daftar Produk</h2>
                <div class="table-container" style="background: white; padding: 20px; border-radius: 10px;">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Kode</th>
                                <th>Nama Barang</th>
                                <th>Type</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produks as $produk )
                            <tr>
                                <td>{{$produk -> id}}</td>
                                <td>{{$produk -> nama_produk}}</td>
                                <td>{{$produk -> jenisProduk -> jenis_produk}}</td>
                                <td>{{$produk -> harga}}</td>
                                <td>
                                    <a href="/produks/edit/{{$produk -> id}}" class="btn btn-warning btn-action" style="margin-right: 10px;"><i class="bi bi-pencil"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="justify-between">
                        <a href="/produks/jenis" class="btn btn-primary">Jenis Produk</a>
                        <a href="/produks/tambah" class="btn btn-secondary">Tambah Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</div>
