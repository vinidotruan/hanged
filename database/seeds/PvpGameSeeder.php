<?php

use Illuminate\Database\Seeder;

class PvpGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PvpGameSeeder::class, 50)->create();
    }
}
