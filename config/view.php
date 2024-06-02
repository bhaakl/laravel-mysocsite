<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Большинство систем шаблонизации загружают шаблоны с диска. Тут можно указать
    | массив путей, которые должны быть проверены для ваших представлений. Конечно
    | обычный путь к представлениям Laravel уже прописан заранее.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Путь скомпилированного представления
    |--------------------------------------------------------------------------
    |
    | Этот параметр определяет, где будут храниться все скомпилированные шаблоны Blade
    | храниться для приложения. Обычно это место находится в каталоге хранилища
    | директории. Однако, как обычно, это значение можно изменить.
    |
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];