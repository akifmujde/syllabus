<?php

use Illuminate\Database\Seeder;
use App\Model\Zamanlar;

class zaman_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zamanlar::create(['zaman_araligi' => '8:15 - 9:00']);
        Zamanlar::create(['zaman_araligi' => '9:15 - 10:00']);
        Zamanlar::create(['zaman_araligi' => '10:15 - 11:00']);

        Zamanlar::create(['zaman_araligi' => '14:15 - 15:00']);
        Zamanlar::create(['zaman_araligi' => '15:15 - 16:00']);
        Zamanlar::create(['zaman_araligi' => '16:15 - 17:00']);

        Zamanlar::create(['zaman_araligi' => '17:15 - 18:00']);
        Zamanlar::create(['zaman_araligi' => '18:15 - 19:00']);
        Zamanlar::create(['zaman_araligi' => '19:15 - 20:00']);

        Zamanlar::create(['zaman_araligi' => '20:15 - 21:00']);
        Zamanlar::create(['zaman_araligi' => '21:15 - 22:00']);
        Zamanlar::create(['zaman_araligi' => '22:15 - 23:00']);
    }
}
