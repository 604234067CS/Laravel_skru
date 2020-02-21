<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'url' => "",
        'target' => "",
        'slug' => "",
        'details' => $faker->realText(rand(10,20)),
        'date' => $faker->date('Y-m-d', NOW()),
        'author' => $faker->name,
        'cover' => $faker->imageUrl($width = 640, $height = 480),
        'view' => 1
    ];
});
