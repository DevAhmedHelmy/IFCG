<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employee;
use Faker\Generator as Faker;
use App\Models\HygieneInspection;

$factory->define(HygieneInspection::class, function (Faker $faker) {
    $employees = Employee::count();

    return [
        'employee_id' => rand(1,$employees),

        'diarrhea' => $faker->randomElement([0,3,5]) ,
        'beard' => $faker->randomElement([0,3,5]),
        'uniform' => $faker->randomElement([0,3,5]) ,
        'hairnet' => $faker->randomElement([0,3,5]) ,
        'flu' => $faker->randomElement([0,3,5]) ,
        'shoes' => $faker->randomElement([0,3,5]) ,
        'gloves' => $faker->randomElement([0,3,5]) ,
        'pins' => $faker->randomElement([0,3,5]) ,
        'cleanness' => $faker->randomElement([0,3,5]) ,
        'wounds' => $faker->randomElement([0,3,5]) ,
        'nails' => $faker->randomElement([0,3,5]) ,
        'mask' => $faker->randomElement([0,3,5]) ,
        'accessories' => $faker->randomElement([0,3,5]),
        'eating' => $faker->randomElement([0,3,5]) ,
        'rosacea' => $faker->randomElement([1,2,3]) ,
        'shift' => $faker->randomElement([1,2]) ,
        'area' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'notes' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'corrective_action' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
