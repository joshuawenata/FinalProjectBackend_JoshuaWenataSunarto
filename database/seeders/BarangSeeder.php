<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            'category' => 'furniture',
            'name' => 'chair',
            'price' => 1500000,
            'stock' => 5,
            'photo' => './product/chair.jpg'
        ]);
        DB::table('barang')->insert([
            'category' => 'electronic',
            'name' => 'computer',
            'price' => 5000000,
            'stock' => 5,
            'photo' => './product/computer.jpg'
        ]);
        DB::table('barang')->insert([
            'category' => 'furniture',
            'name' => 'lamps',
            'price' => 300000,
            'stock' => 10,
            'photo' => './product/lamp.jpg'
        ]);
        DB::table('barang')->insert([
            'category' => 'electronic',
            'name' => 'headphone',
            'price' => 570000,
            'stock' => 5,
            'photo' => './product/headphone.jpg'
        ]);
        DB::table('barang')->insert([
            'category' => 'furniture',
            'name' => 'sofas',
            'price' => 3500000,
            'stock' => 5,
            'photo' => './product/sofa.jpg'
        ]);
    }
}
