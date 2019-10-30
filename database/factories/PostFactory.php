<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $created = $faker->dateTimeBetween('-1 year', '-11 days');
    $updated = clone $created;
    $updated->add(DateInterval::createFromDateString('+' . $faker->numberBetween(0, 10) . 'days'));
    return [
        'title' => $faker->sentence(6, true),
        'body' => $faker->paragraphs(20, true),
        'created_at' => $created,
        'updated_at' => $updated
    ];
});

