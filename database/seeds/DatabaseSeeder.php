<?php

use App\Models\User;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use App\Models\HygieneInspection;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(PermissionTableSeeder::class);
        $this->call(AdminSeeder::class);
        // $this->call(SettingSeeder::class);
        factory(User::class,5)->create();
        factory(Employee::class,5)->create();
        factory(HygieneInspection::class, 5)->create();
    }
}
