<?php

use Illuminate\Database\Seeder;
use App\Model\Gunler;

class gun_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gunler::create(['gun_adi' => 'Pazartesi']);
        Gunler::create(['gun_adi' => 'Sali']);
        Gunler::create(['gun_adi' => 'Carsamba']);
        Gunler::create(['gun_adi' => 'Persembe']);
        Gunler::create(['gun_adi' => 'Cuma']);
        Gunler::create(['gun_adi' => 'Cumartesi']);
        Gunler::create(['gun_adi' => 'Pazar']);
    }
}
