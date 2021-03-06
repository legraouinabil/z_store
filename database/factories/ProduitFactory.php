<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produit;
use Faker\Generator as Faker;

$factory->define(Produit::class, function (Faker $faker) {
    $title = $faker->sentence();
    return [
        //
       'title' => $title, 
       'description' => $faker->paragraph,
       'price' => $faker->numberBetween($min = 10 , $max =1000),
       'underline_Pice' => $faker->numberBetween($min = 10 , $max =1000),
       'category_id' => $faker->numberBetween($min = 1 , $max =10),
      
    ];
});
