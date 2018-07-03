<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'user_id'=>rand(1,30),
        'category_id'=>rand(1,20),
        'title'=> $title,
        'slug'=> str_slug($title),
        'excerpt'=> $faker->text(200),
        'body'=> $faker->text(500),
        'status'=>$faker->randomElement(['PUBLISHED'],['DRAFT']),
        'published_at'=> Carbon::now(),

    ];
});
