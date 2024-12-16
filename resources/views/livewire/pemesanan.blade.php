<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @if (session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form wire:submit.prevent="submitForm">
    <!-- Langkah 1 -->
    <div class="{{ $currentStep == 1 ? 'block' : 'hidden' }}">
        <h2>Informasi Pelanggan</h2>
        <div>
            <label>Nama Lengkap:</label>
            <input type="text" wire:model.defer="nama">
            @error('nama') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>No Telepon:</label>
            <input type="text" wire:model.defer="telepon">
            @error('telepon') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Alamat:</label>
            <textarea wire:model.defer="alamat"></textarea>
            @error('alamat') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <!-- Langkah 2 -->
    <div class="{{ $currentStep == 2 ? 'block' : 'hidden' }}">
        <h2>Detail Pesanan</h2>
        <div>
            <label>PC Pilihan:</label>
            <input type="text" wire:model.defer="pc">
            @error('pc') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <!-- Langkah 3 -->
    <div class="{{ $currentStep == 3 ? 'block' : 'hidden' }}">
        <h2>Metode Pembayaran</h2>
        <div>
            <label>Metode Pembayaran:</label>
            <select wire:model.defer="metodePembayaran">
                <option value="">Pilih</option>
                <option value="cash">Cash</option>
                <option value="credit_card">Kartu Kredit</option>
            </select>
            @error('metodePembayaran') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <!-- Navigasi Langkah -->
    <div>
        @if ($currentStep > 1)
            <button type="button" wire:click="decreaseStep">Sebelumnya</button>
        @endif

        @if ($currentStep < 3)
            <button type="button" wire:click="increaseStep">Berikutnya</button>
        @else
            <button type="submit">Simpan</button>
        @endif
    </div>
</form>
</div>
