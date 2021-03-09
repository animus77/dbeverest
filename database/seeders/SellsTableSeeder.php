<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Sells::factory(80)->create();

    }
}
