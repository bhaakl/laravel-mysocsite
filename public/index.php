<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Проверка, находится ли приложение на обслуживании
|--------------------------------------------------------------------------
|
| Если приложение находится в режиме обслуживания / демо-режиме с помощью команды «down», в этом случае нам потребуется этот файл.
| необходимо предоставить этот файл, чтобы любой шаблон с предварительным рендерингом мог быть показан
| вместо запуска фреймворка, который может вызвать исключение.
|
*/

if (file_exists(__DIR__ . '/../storage/framework/maintenance.php')) {
    require __DIR__ . '/../storage/framework/maintenance.php';
}

/*
|--------------------------------------------------------------------------
| Регистрация автозагрузчика
|--------------------------------------------------------------------------
|
| Composer предоставляет удобный, автоматически генерируемый загрузчик классов для
| этого приложения. Нужно только его использовать! Для этого просто включим его
| в скрипт, чтобы не загружать классы вручную.
|
*/

require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Запуск приложения
|--------------------------------------------------------------------------
|
| Запустив приложение, можно обработать входящий запрос с помощью
| HTTP-ядра приложения. А затем направить ответ обратно
| в браузер клиента, что позволит пользователю пользоваться приложением.
|
*/

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = tap($kernel->handle(
    $request = Request::capture()
))->send();

$kernel->terminate($request, $response);
