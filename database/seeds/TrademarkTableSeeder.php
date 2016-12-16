<?php

use Illuminate\Database\Seeder;
use Xstore\Models\TaTrademark;
use Xstore\Models\TaCategory;
class TrademarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Xstore\Models\TaTrademark::class,24)->create();
    }
}
