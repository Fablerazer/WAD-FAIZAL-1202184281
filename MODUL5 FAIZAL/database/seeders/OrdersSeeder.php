<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('orders')->insert([
            'product_id' => '11',
            'amount' => '50',
            'buyer_name' => 'Faizal Hudya R',
            'buyer_contact' => '08112348923',
        ]);
    }
}
