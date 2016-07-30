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

$factory->define(App\Eloquent\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Eloquent\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(4, false),
        'type' => $faker->randomElement(config('ecm.categories')),
        'description' => $faker->text,
        'locked' => rand(0,1),
    ];
});

$factory->define(App\Eloquent\Provider::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'introduce' => $faker->text,
        'locked' => rand(0,1),
    ];
});

$factory->define(App\Eloquent\Property::class, function (Faker\Generator $faker) {
    return [
        'key' => $faker->randomElement(['size','color','style']),
        'name' => $faker->colorName,
        'locked' => rand(0,1),
    ];
});

$factory->define(App\Eloquent\Page::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(10, false),
        'intro' => $faker->text,
        'description' => $faker->paragraph(15, true),
        'featured' => rand(0,1),
        'locked' => rand(0,1),
    ];
});

$factory->define(App\Eloquent\Post::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(10, false),
        'intro' => $faker->text,
        'description' => $faker->paragraph(15, true),
        'user_id' => 2,
        'featured' => rand(0,1),
        'locked' => rand(0,1),
    ];
});

$factory->define(App\Eloquent\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(10, false),
        'description' => $faker->paragraph(15, true),
        'code' => $faker->ean8,
        'price' => $faker->randomNumber(6),
        'sale' => rand(0,1),
        'price_sale' => $faker->randomNumber(5),
        'provider_id' => $faker->numberBetween(0,30),
        'user_id' => 2,
        'locked' => rand(0,1),
    ];
});
