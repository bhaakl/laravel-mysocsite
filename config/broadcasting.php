<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Broadcaster
    |--------------------------------------------------------------------------
    |
    | Эта опция управляет бродкастером по умолчанию, который будет использоваться
    | каркасом, когда необходимо транслировать событие. Можно установить значение
    | любое из соединений, определенных в массиве «connections» ниже.
    |
    | Поддерживаются: «redis», «log», «null».
    |
    */

    'default' => env('BROADCAST_DRIVER', 'null'),

    /*
    |--------------------------------------------------------------------------
    | Broadcast Connections
    |--------------------------------------------------------------------------
    |
    | В этом разделе можно определить все транслируемые соединения, которые будут использоваться
    | для трансляции событий в другие системы или через вебсокеты. Образцы
    | каждого из доступных типов соединений представлены в этом массиве.
    |
    */

    'connections' => [

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
