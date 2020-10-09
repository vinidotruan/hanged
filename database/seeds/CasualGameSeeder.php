<?php

use Illuminate\Database\Seeder;

class CasualGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CasualGame::class, 50)->create();
    }
}
