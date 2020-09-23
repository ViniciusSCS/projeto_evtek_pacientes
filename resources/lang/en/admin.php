<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'paciente' => [
        'title' => 'Pacientes',

        'actions' => [
            'index' => 'Pacientes',
            'create' => 'New Paciente',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'cpf' => 'Cpf',
            'nome' => 'Nome',
            'rg' => 'Rg',
            'cartao_sus' => 'Cartao sus',
            'sexo' => 'Sexo',
            'data_nascimento' => 'Data nascimento',
            'nome_mae' => 'Nome mae',
            'telefone' => 'Telefone',
            'cep' => 'Cep',
            'endereco' => 'Endereco',
            'numero' => 'Numero',
            'complemento' => 'Complemento',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'uf' => 'Uf',
            
        ],
    ],

    'paciente' => [
        'title' => 'Pacientes',

        'actions' => [
            'index' => 'Pacientes',
            'create' => 'New Paciente',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'bairro' => 'Bairro',
            'cartao_sus' => 'Cartao sus',
            'cep' => 'Cep',
            'cidade' => 'Cidade',
            'complemento' => 'Complemento',
            'cpf' => 'Cpf',
            'data_nascimento' => 'Data nascimento',
            'endereco' => 'Endereco',
            'nome' => 'Nome',
            'nome_mae' => 'Nome mae',
            'numero' => 'Numero',
            'rg' => 'Rg',
            'sexo' => 'Sexo',
            'telefone' => 'Telefone',
            'uf' => 'Uf',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];