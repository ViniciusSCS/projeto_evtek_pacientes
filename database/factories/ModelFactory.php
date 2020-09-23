<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Paciente::class, static function (Faker\Generator $faker) {
    return [
        'cpf' => $faker->sentence,
        'nome' => $faker->sentence,
        'rg' => $faker->sentence,
        'cartao_sus' => $faker->sentence,
        'sexo' => $faker->randomNumber(5),
        'data_nascimento' => $faker->date(),
        'nome_mae' => $faker->sentence,
        'telefone' => $faker->sentence,
        'cep' => $faker->sentence,
        'endereco' => $faker->sentence,
        'numero' => $faker->randomNumber(5),
        'complemento' => $faker->sentence,
        'bairro' => $faker->sentence,
        'cidade' => $faker->sentence,
        'uf' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Paciente::class, static function (Faker\Generator $faker) {
    return [
        'bairro' => $faker->sentence,
        'cartao_sus' => $faker->sentence,
        'cep' => $faker->sentence,
        'cidade' => $faker->sentence,
        'complemento' => $faker->sentence,
        'cpf' => $faker->sentence,
        'data_nascimento' => $faker->date(),
        'endereco' => $faker->sentence,
        'nome' => $faker->sentence,
        'nome_mae' => $faker->sentence,
        'numero' => $faker->randomNumber(5),
        'rg' => $faker->sentence,
        'sexo' => $faker->randomNumber(5),
        'telefone' => $faker->sentence,
        'uf' => $faker->sentence,
        
        
    ];
});
