<?php

use App\Models\User;
use App\Models\Country;
use Illuminate\Database\Seeder;

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
    }
}
