<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->realText(rand(10,15));
    $created = $faker->dateTimeBetween('-30 days','-2 days');

    return [
        'title' => $title,
        'author_id' => rand(1,15),
        'category_id' => rand(1,5),
        'descr' => $faker->realText(rand(499,500)),
        'created_at' => $created,
        'updated_at' => $created,
    ];
});
