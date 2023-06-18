<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kodebrg' => 'L',
                'namabrg' => 'Laptop',
                'desk' => 'Best Seller',
                'harga' => 120000000,
                'satuanbrg' => 1
            ],
            [
                'kodebrg' => 'K',
                'namabrg' => 'Komputer',
                'desk' => 'Recommended',
                'harga' => 17000000,
                'satuanbrg' => 2
            ],
            [
                'kodebrg' => 'P',
                'namabrg' => 'Print',
                'desk' => 'New Arrival',
                'harga' => 4000000,
                'satuanbrg' => 3
            ],
        ]);
    }
}
