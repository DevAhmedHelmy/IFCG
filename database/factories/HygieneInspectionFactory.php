<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employee;
use Faker\Generator as Faker;
use App\Models\HygieneInspection;

$factory->define(HygieneInspection::class, function (Faker $faker) {
    $employees = Employee::count();
    $array1 = [0,3,6];
    $array2 = [1,2,3];
    $array3 = [1,2];
    $array4=['production', 'fill','stores'];
    return [
        'employee_id' => rand(1,$employees),
        'diarrhea' => $faker->randomElement($array1) ,
        'beard' => $faker->randomElement($array1),
        'uniform' => $faker->randomElement($array1) ,
        'hairnet' => $faker->randomElement($array1) ,
        'flu' => $faker->randomElement($array1) ,
        'shoes' => $faker->randomElement($array1) ,
        'gloves' => $faker->randomElement($array1) ,
        'pins' => $faker->randomElement($array1) ,
        'cleanness' => $faker->randomElement($array1) ,
        'wounds' => $faker->randomElement($array1) ,
        'nails' => $faker->randomElement($array1) ,
        'mask' => $faker->randomElement($array1) ,
        'accessories' => $faker->randomElement($array1),
        'eating' => $faker->randomElement($array1) ,
        'rosacea' => $faker->randomElement($array2) ,
        'shift' => $faker->randomElement($array3) ,
        'area' => $faker->randomElement($array4),
        'notes' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'corrective_action' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
