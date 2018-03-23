<?php

use Illuminate\Database\Seeder;
use App\Model\Role;

class role_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['role' => 'hoca']);
        Role::create(['role' => 'admin']);
    }
}
