<?php

use Illuminate\Database\Seeder;
use App\Maintenance;
use App\MaintenanceTransaction;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 5)->create();
        factory(Maintenance::class, 10)->create();
        factory(MaintenanceTransaction::class, 80)->create();
    }
}
