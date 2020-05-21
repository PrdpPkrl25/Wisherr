<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'event_name'=>$faker->word,
        'event_date'=>$faker->date(),
        'user_id'=>1,
    ];
});
