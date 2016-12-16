<?php

use Illuminate\Database\Seeder;
use Xstore\Models\TaProduct;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(Xstore\Models\TaProduct::class,1000)->create();
    }
}
