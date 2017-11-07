<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Data\Models\Item::class, function (Faker $faker) {
    return [
       'name'        => $faker->word,
       'slug'        => $faker->slug,
       'title'       => $faker->sentence,
       'description' => $faker->sentence,
       'category'    => $faker->randomElement(['computer' => 'computer', 'phone' => 'phone', 'television' => 'television']),
       'is_featured' => $faker->boolean,
       'cost'        => $faker->randomFloat(2,1,100),
       'price'       => $faker->randomFloat(2, 100, 200),
    ];
});
