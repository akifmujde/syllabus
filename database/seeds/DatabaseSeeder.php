<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(role_seed::class);
        $this->call(admin_seed::class);
        $this->call(gun_seed::class);
        $this->call(zaman_seed::class);
    }
}
