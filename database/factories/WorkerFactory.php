<?php
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$fakerRu = Faker\Factory::create('ru_RU');
$factory->define(App\Models\Worker::class, function (Faker\Generator $faker) use ($fakerRu) {

    return [
        'name' => $fakerRu->name,
        'surname' => $fakerRu->lastName,
        'position' => $faker->randomElement($array = array ('driver','helper','mechanic')),
        'birthday'=> $faker->date($format = 'Y-m-d', $max = '2000-01-01'),
        'phoneNumber' => $faker->e164PhoneNumber,
        'homeAddress' => $fakerRu->address,
    ];
});

