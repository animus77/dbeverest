<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\sells;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([UsersTableSeeder::class]);
        $this->call([SellsTableSeeder::class]);
        $this->call([PermissionsTableSeeder::class]);
    }
}
