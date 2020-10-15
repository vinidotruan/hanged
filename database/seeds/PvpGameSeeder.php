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
        factory(App\PvpGame::class, 50)->create();
    }
}
