<div>
    <div class="main-content w-100" style="margin-left: 250px; padding: 20px;">
        <div class="form-container" style="background-color: white; border-radius: 8px; padding: 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <h4>Edit Produk</h4>

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="update">
                <div class="mb-3">
                    <label for="nama-produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama-produk" placeholder="Masukkan nama produk" wire:model="nama_produk">
                    @error('nama_produk') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis</label>
                    <select class="form-select" id="jenis" wire:model="jenis">
                        <option value="" selected>Pilih jenis</option>
                        @foreach ($jenis_produk as $jenis)
                            <option value="{{ $jenis->id }}">{{ $jenis->jenis_produk }}</option>
                        @endforeach
                    </select>
                    @error('jenis') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" placeholder="Masukkan harga" wire:model="harga">
                    @error('harga') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <a href="/produks" type="button" class="btn btn-danger me-2" >Batalkan</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
