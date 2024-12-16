<div>
    {{-- The best athlete wants his opponent at his best. --}}
    @php
       // dd($jenis)
    @endphp
    <div class="content container" style="margin-left: 270px; margin-top: 30px;">
        <h4 class="mb-4 fw-bold">Jenis Produk</h4>
        <div class="card-container" style="background-color: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <form wire:submit.prevent="submit">
                <div class="mb-3">
                    <label for="jenis-produk" class="form-label" style="font-weight: bold;">Jenis Produk</label>
                    <input
                        type="text"
                        id="jenis-produk"
                        class="form-control @error('jenisProduk') is-invalid @enderror"
                        placeholder="Masukkan jenis produk"
                        wire:model="jenisProduk">
                    @error('jenisProduk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <a href="/produks/" type="button" class="btn" style="background-color: #f41010; color: white; margin-right: 10px;" >Batalkan</a>
                    <button type="submit" class="btn" style="background-color: #0d35d5; color: white;">Simpan</button>
                </div>
            </form>
        </div>
        <div class="mt-4"></div>
        <div class="mt-4"></div>
        <div class="card-container" style="background-color: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Jenis Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jenis as $j )
                    <tr>
                        <td>{{$j->id}}</td>
                        <td>{{$j->jenis_produk}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
