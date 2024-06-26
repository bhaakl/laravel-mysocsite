<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Конфигурация "cовместное использование ресурсов между разными источниками" (CORS)
    |--------------------------------------------------------------------------
    |
    | Здесь можно настроить параметры «CORS». Это определяет, какие кросс-оригинальные операции могут выполняться
    | в веб-браузерах. При необходимости можно настроить эти параметры.
    |
    | Чтобы узнать больше: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
