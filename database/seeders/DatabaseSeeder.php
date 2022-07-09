<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\CreateAdminUserSeeder;
use Database\Seeders\UserSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateAdminUserSeeder::class);
   //    $this->call(UserSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
