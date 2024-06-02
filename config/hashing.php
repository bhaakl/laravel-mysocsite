<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Драйвер хэша по умолчанию
    |--------------------------------------------------------------------------
    |
    | Эта опция управляет хэш-драйвером по умолчанию, который будет использоваться для хэширования
    | паролей для приложения. По умолчанию используется алгоритм bcrypt
    | однако при желании можно изменить этот параметр.
    |
    | Поддерживаются: «bcrypt», «argon», «argon2id».
    |
    */

    'driver' => 'bcrypt',

    /*
    |--------------------------------------------------------------------------
    | Параметры Bcrypt
    |--------------------------------------------------------------------------
    |
    | Здесь можно указать параметры конфигурации, которые должны использоваться при
    | хешировании паролей с помощью алгоритма Bcrypt. Это позволит контролировать
    | количество времени, необходимое для хэширования заданного пароля.
    |
    */

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 10),
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon Options
    |--------------------------------------------------------------------------
    |
    | Здесь можно указать параметры конфигурации, которые должны использоваться, если
    | пароли хэшируются с помощью алгоритма Argon. Это позволит контролировать
    | количество времени, необходимое для хэширования заданного пароля.
    |
    */

    'argon' => [
        'memory' => 65536,
        'threads' => 1,
        'time' => 4,
    ],

];