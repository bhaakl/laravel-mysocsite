<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Имя приложения
    |--------------------------------------------------------------------------
    |
    | Это значение является именем вашего приложения. Это значение используется, когда
    | фреймворк должен поместить имя приложения в уведомление или
    | любом другом месте, требуемом приложением или его пакетами.
    |
    */

    'name' => env('APP_NAME', 'My-Site'),

    /*
    |--------------------------------------------------------------------------
    | Окружение приложения
    |--------------------------------------------------------------------------
    |
    | Это значение определяет «окружение», в котором в данный момент работает ваше приложение
    | работает в данный момент. Это может определить, как вы предпочитаете настраивать различные
    | сервисы, используемые приложением. Установите это значение в файле «.env».
    |
    */

    'env' => env('APP_ENV', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Режим отладки приложений
    |--------------------------------------------------------------------------
    |
    | Когда ваше приложение находится в режиме отладки, подробные сообщения об ошибках с
    | трассировкой стека будут показаны все ошибки, возникающие в вашем
    | приложения. Если эта функция отключена, будет показана простая общая страница ошибок.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL-адрес приложения
    |--------------------------------------------------------------------------
    |
    | Этот URL-адрес используется консолью для правильной генерации URL-адресов при использовании
    | инструмента командной строки Artisan. Нужно установить его в корень
    | приложения, чтобы он использовался при запуске задач Artisan.
    |
    */

    'url' => env('APP_URL', 'http://localhost:8000'),

    'asset_url' => env('ASSET_URL'),

    /*
    |--------------------------------------------------------------------------
    | Часовой пояс приложения
    |--------------------------------------------------------------------------
    |
    | Здесь можно указать часовой пояс по умолчанию для приложения, который
    | будет использоваться функциями PHP date и date-time.
    |
    */

    'timezone' => 'Europe/Moscow',

    /*
    |--------------------------------------------------------------------------
    | Конфигурация локали приложения
    |--------------------------------------------------------------------------
    |
    | Локаль приложения определяет локаль по умолчанию, которая будет использоваться
    | провайдером сервиса перевода. Можно установить это значение
    | на любую из локалей, которые будут поддерживаться приложением.
    |
    */

    'locale' => 'ru',

    /*
    |--------------------------------------------------------------------------
    | Обратная локаль приложения
    |--------------------------------------------------------------------------
    |
    | Обратная локаль определяет локаль, которую следует использовать, когда текущая локаль
    | недоступна. Можно изменить значение, чтобы оно соответствовало любой из
    | языковых папок, предоставляемых приложением.
    |
    */

    'fallback_locale' => 'ru',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | Эта локаль будет использоваться PHP-библиотекой Faker при генерации поддельных
    | данных для зерен (seeds) базы данных. Например, она будет использоваться для получения
    | локализованных телефонных номеров, информации об адресах улиц и т. д.
    |
    */

    'faker_locale' => 'ru_RU',

    /*
    |--------------------------------------------------------------------------
    | Ключ шифрования
    |--------------------------------------------------------------------------
    |
    | Этот ключ используется службой шифрования Illuminate и должен быть установлен
    | в случайную 32-символьную строку, иначе зашифрованные строки
    | не будут безопасными. Это необходимо сделать перед развертыванием приложения!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Драйвер режима обслуживания
    |--------------------------------------------------------------------------
    |
    | Эти параметры конфигурации определяют драйвер, используемый для определения и
    | управления статусом «режима обслуживания» Laravel. Драйвер «cache» позволит
    | позволит управлять режимом обслуживания на нескольких машинах.
    |
    | Поддерживаемые драйверы: «file», «cache»
    |
    */

    'maintenance' => [
        'driver' => 'file',
    ],

    /*
    |--------------------------------------------------------------------------
    | Провайдеры автозагрузки
    |--------------------------------------------------------------------------
    |
    | Перечисленные здесь провайдеры будут автоматически загружаться при
    | запросе к вашему приложению. Можно добавлять свои собственные сервисы в
    | в этот массив, чтобы расширить функциональность приложения.
    |
    */

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Провайдеры прикладных услуг...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\TelescopeServiceProvider::class,
        App\Providers\BladeServiceProvider::class,
        App\Providers\ObserverServiceProvider::class,
    ])->toArray(),

    /*
    |--------------------------------------------------------------------------
    | Псевдонимы классов
    |--------------------------------------------------------------------------
    |
    | Этот массив псевдонимов классов будет зарегистрирован, когда это приложение
    | запускается. Однако можно регистрировать сколько угодно, поскольку
    | псевдонимы загружаются «лениво», чтобы не мешать производительности.
    |
    */

    'aliases' => Facade::defaultAliases()->toArray(),

];
