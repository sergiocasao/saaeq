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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $name = $faker->name;

    return [
        'name' => $name,
        'slug' => str_slug($name),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'active' => true,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Test\Question::class, function (Faker\Generator $faker) {

    $name = $faker->name;

    return [
        'question' => '¿'.$faker->sentence.'?',
    ];

});

$factory->define(App\Models\Test\Answer::class, function (Faker\Generator $faker){

        $learn_type = App\LearnType::all()->random(1);
        $question   = App\Models\Test\Question::all()->random(1);

    return [
        'answer' => $faker->sentence,
        'learn_type_id' => $learn_type->id,
        'question_id' => $question->id,
    ];

});

$factory->define(App\Curse::class, function (Faker\Generator $faker){

    $label = ucfirst($faker->words(rand(1,4), true));

    return [
        'label'      => $label,
        'slug'       => str_slug($label),
        'description'=> $faker->paragraph,
        'publish_id' => 1,
        'publish_at' => Carbon\Carbon::now(),
    ];

});

$factory->define(App\Signature::class, function (Faker\Generator $faker){

    $label = ucfirst($faker->words(rand(1,4), true));

    $curse = App\Curse::all()->random(1);

    return [
        'label'      => $label,
        'slug'       => str_slug($label),
        'description'=> $faker->paragraph,
        'curse_id'   => $curse->id,
    ];

});

$factory->define(App\Theme::class, function (Faker\Generator $faker){

    $label = ucfirst($faker->words(rand(1,4), true));

    $signature = App\Signature::all()->random(1);

    return [
        'label'         => $label,
        'slug'          => str_slug($label),
        'description'   => $faker->paragraph,
        'signature_id'  => $signature->id,
    ];

});
