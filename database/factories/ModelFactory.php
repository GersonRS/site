<?php

/*
|--------------------------------------------------------------------------
| Models Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Models factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Site\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Site\Models\Company::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'lat' => $faker->randomFloat(8, 10, 5000000),
        'lng' => $faker->randomFloat(8, 10, 5000000),
        'website' => $faker->domainName,
        'mail' => $faker->companyEmail,
        'address' => $faker->address,
        'active' => $faker->boolean(100)
    ];
});

$factory->define(Site\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'company_id' => $faker->numberBetween(1, 5)
    ];
});


$factory->define(Site\Models\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'price' => $faker->randomFloat(2, 10, 50)
    ];
});

$factory->define(Site\Models\Client::class, function (Faker\Generator $faker) {
    return [
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->state,
        'zipcode' => $faker->postcode
    ];
});

$factory->define(Site\Models\Order::class, function (Faker\Generator $faker) {
    return [
        'client_id' => $faker->numberBetween(1, 10),
        'company_id' => $faker->numberBetween(1, 5),
        'total' => $faker->randomFloat(2, 50, 100),
        'status' => 0
    ];
});

$factory->define(Site\Models\OrderItem::class, function (Faker\Generator $faker) {
    return [
        'product_id' => $faker->numberBetween(1, 5),
        'amount' => $faker->randomDigitNotNull,
        'price' => $faker->randomFloat(2, 50, 100)
    ];
});

$factory->define(Site\Models\CompanyUser::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 10),
        'admin' => $faker->boolean(100)
    ];
});

$factory->define(Site\Models\Cupom::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->numberBetween(100, 10000),
        'value' => $faker->randomFloat(2, 50, 100)
    ];
});