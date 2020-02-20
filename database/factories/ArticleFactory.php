<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //สร้าง field ข้อมูลในการสร้างข้อมูลจำลอง
        'title'     => $faker->text(50),
        'url'       => "",
        'target'    => "",
        'slug'      => "",
        'details'   => $faker->realText(rand(10,20)),
        'date'      => $faker->date('Y-m-d',now()),
        'author'    => $faker->name,
        'cover'     => $faker->imageUrl($width= 640, $heigth = 480),
        'view'      => 1
    ];
});
