<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(CategoryTableSeeder::class);
        // $this->call(TrademarkTableSeeder::class);
        for ($i=0; $i < 1; $i++) {
        	$this->call(ProductTableSeeder::class);
        }

    }
}
