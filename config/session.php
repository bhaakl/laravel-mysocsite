<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Драйвер сессии по умолчанию
    |--------------------------------------------------------------------------
    |
    | Эта опция управляет «драйвером» сессии по умолчанию, который будет использоваться при
    | запросах. По умолчанию будет использоваться легкий нативный драйвер, но
    | можно указать любой из других драйверов, представленных здесь.
    |
    | Поддерживаются: «file», «cookie», «database», «redis», «array»
    |
    */

    'driver' => env('SESSION_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Время жизни сеанса
    |--------------------------------------------------------------------------
    |
    | В данном разделе можно указать количество минут, в течение которых сессия будет
    | простаивать до истечения срока действия. Если вы решили, чтобы они
    | немедленно завершаться при закрытии браузера, установите этот параметр.
    |
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Шифрование сеанса
    |--------------------------------------------------------------------------
    |
    | Эта опция позволяет легко указать, что все данные сеанса
    | должны быть зашифрованы перед сохранением. Все шифрование будет выполнено
    | автоматически Laravel, и можно будет использовать сессию как обычно.
    |
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Расположение файла сеанса
    |--------------------------------------------------------------------------
    |
    | При использовании нативного драйвера сеанса нам необходимо место, где могут храниться файлы сеанса
    | файлы сессий. Для удобства задано значение по умолчанию, но можно указать и другое
    | расположение. Это необходимо только для файловых сессий.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Подключение к базе данных сеанса
    |--------------------------------------------------------------------------
    |
    | При использовании драйверов сессий «database» или «redis» можно указать
    | соединение, которое должно использоваться для управления этими сессиями. Оно должно
    | соответствовать соединению в параметрах конфигурации базы данных.
    |
    */

    'connection' => env('SESSION_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    | Таблица базы данных сеансов
    |--------------------------------------------------------------------------
    |
    | При использовании драйвера сеанса «база данных» можно указать таблицу, которую следует
    | использовать для управления сеансами. По умолчании, разумеется.
    | однако при необходимости можно изменить это значение.
    |
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    | Хранилище кэша сеансов
    |--------------------------------------------------------------------------
    |
    | При использовании одного из внутренних модулей сессий фреймворка, управляемых кэшем, можно
    | указать хранилище кэша, которое должно использоваться для этих сессий. Это значение
    | должно совпадать с одним из настроенных хранилищ кэша приложения.
    |
    | Пример: «apc», «dynamodb», «memcached», «redis».
    |
    */

    'store' => env('SESSION_STORE'),

    /*
    |--------------------------------------------------------------------------
    | Lottery
    |--------------------------------------------------------------------------
    |
    | Некоторые драйверы сессий должны вручную очищать свое хранилище, чтобы
    | избавиться от старых сессий в хранилище. Вот вероятность того, что это
    | произойдет при данном запросе. По умолчанию шансы равны 2 из 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Название куки сессии
    |--------------------------------------------------------------------------
    |
    | Здесь вы можете изменить имя cookie, используемого для идентификации сессии
    | экземпляра сессии по идентификатору. Указанное здесь имя будет использоваться каждый раз, когда
    | новый файл cookie сессии создается фреймворком для каждого драйвера.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'my-site'), '_') . '_session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Путь cookie сессии
    |--------------------------------------------------------------------------
    |
    | Путь cookie сессии определяет путь, для которого cookie будет
    | считаться доступным. Обычно это корневой путь
    | приложения, но можно изменить его при необходимости.
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Домен cookie сессии
    |--------------------------------------------------------------------------
    |
    | Здесь вы можете изменить домен cookie, используемый для идентификации сессии
    | в приложении. Это определит, какие домены будут
    | доступным для приложения. По умолчанию установлено нужное значение.
    |
    */

    'domain' => env('SESSION_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Только HTTPS Cookies
    |--------------------------------------------------------------------------
    |
    | Если установить этот параметр в значение true, сессионные файлы cookie будут отправляться обратно 
    | на сервер только в том случае, если браузер имеет HTTPS-соединение. 
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | Только HTTP-доступ
    |--------------------------------------------------------------------------
    |
    | Установка этого значения в true не позволит JavaScript получить доступ 
    | к значению cookie, и доступ к cookie будет осуществляться только по
    | протоколу HTTP. При необходимости вы можете изменить этот параметр.
    |
    */

    'http_only' => true,

    /*
    |--------------------------------------------------------------------------
    | Cookies того же сайта
    |--------------------------------------------------------------------------
    |
    | Этот параметр определяет, как cookie будут вести себя при межсайтовых запросах
    | и может быть использована для защиты от CSRF-атак. По умолчанию мы
    | установим значение «lax», так как это безопасное значение по умолчанию.
    |
    | Поддерживаются: «lax», «strict», «none», null
    | 
    */

    'same_site' => 'lax',

];
