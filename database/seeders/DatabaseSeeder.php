<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'username' => $faker->userName,
                'nama' => $faker->name,
                'password' => Hash::make('password123'),
                'role' => $faker->randomElement(['owner', 'teknisi']),
                'alamat' => $faker->address,
                'no_telp' => $faker->randomNumber(8),
                'link_gambar' => $faker->imageUrl(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        foreach (range(1, 10) as $index) {
            DB::table('customers')->insert([
                'nama' => $faker->name,
                'no_telepon' => $faker->randomNumber(8),
                'alamat' => $faker->address,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        foreach (range(1, 5) as $index) {
            DB::table('jenis_produks')->insert([
                'jenis_produk' => $faker->word,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        foreach (range(1, 20) as $index) {
            DB::table('produks')->insert([
                'nama_produk' => $faker->word,
                'harga' => $faker->numberBetween(1000, 50000),
                'jenis' => $faker->numberBetween(1, 5),
                'link_gambar' => $faker->imageUrl(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        foreach (range(1, 15) as $index) {
            DB::table('transaksis')->insert([
                'id_customer' => $faker->numberBetween(1, 10),
                'id_kasir' => $faker->numberBetween(1, 10),
                'metode_pembayaran' => $faker->randomElement(['debit', 'cash']),
                'total_harga' => $faker->numberBetween(5000, 200000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        foreach (range(1, 30) as $index) {
            DB::table('detail_transaksis')->insert([
                'id_transaksi' => $faker->numberBetween(1, 15),
                'id_produk' => $faker->numberBetween(1, 20),
                'kuantitas' => $faker->numberBetween(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
