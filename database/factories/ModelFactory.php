<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Xstore\Models\TaProduct::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->name,
        'url' => str_ireplace(' ', '-',$faker->name),
        'image' => $faker->imageUrl,
    	'price' => $faker->randomFloat(100000000,999999999),
    	'sale' => $faker->numberBetween(0,1),
    	'status' => $faker->numberBetween(0,1),
        'active' => $faker->numberBetween(0,1),
    	'trademark' => $faker->numberBetween(32,61),
    ];
});

$factory->define(Xstore\Models\TaCategory::class, function(Faker\Generator $faker){
    return [

        'name' => $faker->name,
        'url' => str_ireplace(' ', '-',$faker->name),
        'image' => $faker->imageUrl,
        'active' => $faker->numberBetween(0,1),
    ];
});

$factory->define(Xstore\Models\TaTrademark::class, function(Faker\Generator $faker){
    return [
        'category' => $faker->numberBetween(1,4),
        'name' => $faker->name,
        'url' => str_ireplace(' ', '-',$faker->name),
        'image' => $faker->imageUrl,
        'active' => $faker->numberBetween(0,1),

    ];
});

$factory->define(Xstore\Models\TaRoll::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->name,
        'active' => $faker->boolean,
    ];
});

$factory->define(Xstore\Models\TaCustomer::class, function(Faker\Generator $faker){
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'dob' => $faker->dateTime,
        'address' => $faker->address,
        'idcard' => $faker->numberBetween(100000000,999999999),
        'email' => $faker->email,
        'password' => $faker->password,
        'phone' => $faker->phoneNumber,
        'sex' => $faker->boolean,
        'status' => $faker->boolean,
        'active' => $faker->boolean,
        'roll' => $faker->numberBetween(1,4),
    ];
});