<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Cast\Double;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'name' => 'Nike Ardila',
            'price' => '700.500',
            'description' => 'ini deskripsi',
            'stock' => '50',
            'img_path' => 'diterasrumahmu',
        ]);
    }
}
