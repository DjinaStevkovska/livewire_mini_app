<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\User;
use App\Post;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'post_id' => Post::all()->random()->id(),
        'username' => User::all()->random()->name(),
        'content' => $faker->sentence(),
    ];
});
