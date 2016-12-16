<?php

use Illuminate\Database\Seeder;

class RollTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Xstore\Models\TaRoll::class,1)->create();
    }
}
