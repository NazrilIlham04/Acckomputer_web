<div>
    {{-- Be like water. --}}
    @php
           // dd($jumlahTransaksi)
    @endphp
    <div class="content" style="margin-left: 260px; padding: 20px;">
        <div class="welcome" style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">
            Selamat Datang {{$profile->nama}}
        </div>

        <div class="grid-container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="card-stat bg-blue" style="padding: 20px; border-radius: 10px; color: white; text-align: center; font-weight: bold; height: 150px; background-color: #6a89cc;">
                <div>Jumlah Transaksi Hari Ini</div>
                @php
                    $jumlah = 1;
                @endphp
                @foreach ($jumlahTransaksi as $j)
                    @php
                        $jumlah ++;
                    @endphp
                @endforeach
                <h1 style="font-size: 50px;">{{$jumlah}}</h1>
            </div>
            <div class="card-stat bg-red" style="padding: 20px; border-radius: 10px; color: white; text-align: center; font-weight: bold; height: 150px; background-color: #e55039;">
                <div>Total Uang Masuk Hari Ini Rupiah Per Juta</div>
                <h1 style="font-size: 50px;">{{$totalHariIni}}</h1>
            </div>
            <div class="card-stat bg-orange" style="padding: 20px; border-radius: 10px; color: white; text-align: center; font-weight: bold; height: 150px; background-color: #f6b93b;">
                <div>Produk Yang Paling Sering di Beli</div>
                <h1 style="font-size: 50px;">{{$produkTerpopuler}}</h1>
            </div>
            <div class="card-stat bg-green" style="padding: 20px; border-radius: 10px; color: white; text-align: center; font-weight: bold; height: 150px; background-color: #78e08f;">
                <div>Pembayaran Paling diminati</div>
                <h1 style="font-size: 50px;">{{$pembayaranTerpopuler->metode_pembayaran }}</h1>
            </div>
        </div>
    </div>
</div>
