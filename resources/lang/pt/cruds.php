<?php

return [
    'userManagement' => [
        'title'          => 'Gestão de Utilizador',
        'title_singular' => 'Gestão de Utilizador',
    ],
    'permission'     => [
        'title'          => 'Permissões',
        'title_singular' => 'Permissão',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Titulo',
            'title_helper'      => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Alterado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Eliminado em',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Regras',
        'title_singular' => 'Regra',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'title'                 => 'Titulo',
            'title_helper'          => '',
            'stripe_plan_id'        => 'Stripe Plan ID',
            'stripe_plan_id_helper' => '',
            'price'                 => 'Preço',
            'price_helper'          => '',
            'permissions'           => 'Permissões',
            'permissions_helper'    => '',
            'created_at'            => 'Criado em',
            'created_at_helper'     => '',
            'updated_at'            => 'Alterado em',
            'updated_at_helper'     => '',
            'deleted_at'            => 'Eliminado em',
            'deleted_at_helper'     => '',
        ],
    ],
    'user'           => [
        'title'          => 'Utilizadores',
        'title_singular' => 'Utilizador',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nome',
            'name_helper'              => '',
            'phone_number'             => 'Telefone',
            'phone_number_helper'      => 'O número de telefone deve conter o indicadtivo do país no inicio. (Eg: +34 961 267 478)',
            'email'                    => 'Email',
            'email_helper'             => '',
            'address'                  => 'Morada',
            'address_helper'           => '',
            'address2'                 => 'Morada 2',
            'address_helper2'          => '',
            'postcode'                 => 'Código Postal',
            'postcode_helper'          => '',
            'city'                     => 'Localidade',
            'city_helper'              => '',
            'country'                  => 'País',
            'country_helper'           => '',
            'select_country'           => 'Seleccione o País',
            'select_country_helper'    => '',
            'is_admin'                 => 'Tornar Administrador',
            'is_admin_helper'          => 'O Administrador terá permissões de gestão da aplicação.',
            'email_verified_at'        => 'Email verificado em',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Regras',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Criado em',
            'created_at_helper'        => '',
            'updated_at'               => 'Alterado em',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Eliminado em',
            'deleted_at_helper'        => '',
        ],
    ],
    'country'        => [
        'title'          => 'Países',
        'title_singular' => 'País',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'short_code'        => 'Abreviatura',
            'short_code_helper' => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Alterado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Eliminado em',
            'deleted_at_helper' => '',
        ],
    ],
    'project'        => [
        'title'          => 'Projectos',
        'title_singular' => 'Projecto',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'subdomain'         => 'Subdominio',
            'name_helper'       => '',
            'subdomain_helper'  => 'O subdominio deve ter no maximo 10 caractares, sem espaços, sinais ou maiúsculas',
            ],
        'database' => [
            'created_error' => 'Erro ao criar a base de dados.'
        ]
    ],
];