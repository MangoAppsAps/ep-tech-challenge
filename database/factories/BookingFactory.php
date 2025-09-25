<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(Booking::class, function (Faker $faker) {
    $start = Carbon::make($faker->dateTimeBetween('-1 year', '+1 year'));
    $end = $start->copy()->addMinutes($faker->randomElement([15, 30, 45, 60, 75, 90]));

    return [
        'start' => $start,
        'end' => $end,
        'notes' => $faker->boolean(30) ? $faker->paragraphs(1, true) : '',
    ];
});
