<?php

use Illuminate\Database\Seeder;
use App\User;

class admin_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'akif',
            'email' => 'mujde.akif@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => 2
        ]);
    }
}
