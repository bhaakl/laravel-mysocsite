<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Строки языка проверки
    |--------------------------------------------------------------------------
    |
    | Следующие строки языка содержат сообщения об ошибках по умолчанию, используемые
    | классом валидатора. Некоторые из этих правил имеют несколько версий, 
    | например, правила размера. 
    */

    'accepted' => 'Атрибут : должен быть принят.',
    'active_url' => 'Атрибут : не является допустимым URL-адресом.',
    'after' => 'Атрибутом : должна быть дата после :date.',
    'after_or_equal' => 'Атрибут : должен содержать дату, следующую за :date или равную ей.',
    'alpha' => 'Атрибут : может содержать только буквы.',
    'alpha_dash' => 'Атрибут : может содержать только буквы, цифры, тире и символы подчеркивания.',
    'alpha_name' => 'Атрибут : должен быть отформатирован как имя без неожиданных символов или знаков препинания.',
    'alpha_num' => 'Атрибут : может содержать только буквы и цифры.',
    'array' => 'Атрибут : должен быть массивом.',
    'before' => 'Атрибутом : должна быть дата, предшествующая :date.',
    'before_or_equal' => 'Атрибут : должен быть датой, предшествующей или равной :date.',
    'between' => [
        'numeric' => 'Атрибут : должен находиться в диапазоне от :min до :max.',
        'file' => 'Атрибут : должен содержать от :min до :max килобайт.',
        'string' => 'Атрибут : должен содержать от :min до :max символов.',
        'array' => 'Атрибут : должен содержать от :min до :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно быть истинным или ложным.',
    'confirmed' => 'Подтверждение :attribute не совпадает.',
    'date' => 'Атрибут :не является действительной датой.',
    'date_format' => 'Атрибут :attribute не соответствует формату :format.',
    'different' => 'Атрибуты :attribute и :other должны быть разными.',
    'digits' => 'Атрибутом :attribute должны быть цифры :digits.',
    'digits_between' => 'Атрибут :attribute должен находиться между цифрами :min и :max.',
    'dimensions' => 'Атрибут :имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute имеет дублирующее значение',
    'email' => 'Атрибут :должен быть действительным адресом электронной почты.',
    'exists' => 'Выбранный атрибут :недействителен.',
    'file' => 'Атрибут :должен быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'numeric' => 'Атрибут :attribute должен быть больше, чем :value.',
        'file' => 'Атрибут :attribute должен быть больше, чем :value kilobytes.',
        'string' => 'Символов :attribute должно быть больше, чем символов :value.',
        'array' => 'Атрибут :attribute должен иметь больше элементов, чем :value.',
    ],
    'gte' => [
        'numeric' => 'Атрибут :attribute должен быть больше или равен :value.',
        'file' => 'Атрибут :attribute должен быть больше или равен :value kilobytes.',
        'string' => 'Символы :attribute должны быть больше или равны символам :value.',
        'array' => 'Атрибут :attribute должен иметь элементы :value или больше.',
    ],
    'image' => 'Поле :attribute должно быть изображением.',
    'in' => 'Выбранное значение :attribute недопустимо.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'ip' => 'Поле :attribute должно быть допустимым IP-адресом.',
    'ipv4' => 'Поле :attribute должно быть допустимым IPv4-адресом.',
    'ipv6' => 'Поле :attribute должно быть допустимым IPv6-адресом.',
    'json' => 'Поле :attribute должно быть допустимой JSON-строкой.',
    'lt' => [
        'numeric' => 'Поле :attribute должно быть меньше чем :value.',
        'file' => 'Поле :attribute должно быть меньше чем :value килобайт.',
        'string' => 'Поле :attribute должно содержать меньше чем :value символов.',
        'array' => 'Поле :attribute должно содержать меньше чем :value элементов.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute должно быть меньше или равно :value.',
        'file' => 'Поле :attribute должно быть меньше или равно :value килобайт.',
        'string' => 'Поле :attribute должно содержать меньше или равно :value символов.',
        'array' => 'Поле :attribute должно содержать не более :value элементов.',
    ],
    'max' => [
        'numeric' => 'Поле :attribute не может быть больше :max.',
        'file' => 'Поле :attribute не может быть больше :max килобайт.',
        'string' => 'Поле :attribute не может содержать более :max символов.',
        'array' => 'Поле :attribute не может содержать более :max элементов.',
    ],
    'mimes' => 'Поле :attribute должно быть файлом типа: :values.',
    'mimetypes' => 'Поле :attribute должно быть файлом типа: :values.',
    'min' => [
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'file' => 'Поле :attribute должно быть не менее :min килобайт.',
        'string' => 'Поле :attribute должно содержать не менее :min символов.',
        'array' => 'Поле :attribute должно содержать не менее :min элементов.',
    ],
    'not_in' => 'Выбранное значение :attribute недопустимо.',
    'not_regex' => 'Формат поля :attribute недопустим.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'present' => 'Поле :attribute должно присутствовать.',
    'regex' => 'Формат поля :attribute недопустим.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => 'Поле :attribute обязательно, когда :other равно :value.',
    'required_unless' => 'Поле :attribute обязательно, если :other не входит в :values.',
    'required_with' => 'Поле :attribute обязательно, когда присутствует :values.',
    'required_with_all' => 'Поле :attribute обязательно, когда присутствуют все :values.',
    'required_without' => 'Поле :attribute обязательно, когда отсутствует :values.',
    'required_without_all' => 'Поле :attribute обязательно, когда отсутствуют все :values.',
    'same' => 'Поля :attribute и :other должны совпадать.',
    'size' => [
        'numeric' => 'Поле :attribute должно быть размером :size.',
        'file' => 'Поле :attribute должно быть размером :size килобайт.',
        'string' => 'Поле :attribute должно содержать :size символов.',
        'array' => 'Поле :attribute должно содержать :size элементов.',
    ],
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно быть допустимой временной зоной.',
    'unique' => 'Такое значение поля :attribute уже существует.',
    'uploaded' => 'Не удалось загрузить файл :attribute.',
    'url' => 'Формат поля :attribute недопустим.',
    'can_be_author' => 'Выбранный пользователь не может быть автором.',
    'current_password' => 'Текущий пароль недействителен.',

   /*
    |--------------------------------------------------------------------------
    | Строки пользовательского языка валидации
    |--------------------------------------------------------------------------
    |
    | Здесь можно указать пользовательские сообщения валидации для атрибутов, используя
    | соглашение «attribute.rule» для названия строк. Это позволяет быстро
    | указать конкретную строку пользовательского языка для данного правила атрибута.
    |
    */

    'custom' => [
        'can_be_author' => [
            'accepted' => 'Выбранный автор недопустим.',
        ],
        'current_password' => [
            'accepted' => 'Текущий пароль недействителен.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Пользовательские атрибуты проверки
    |--------------------------------------------------------------------------
    |
    | Следующие языковые строки используются для замены держателей атрибутов
    | на что-то более удобное для читателя, например E-Mail Address вместо
    | «email». Это помогает сделать сообщения более чистыми.
    |
    */

    'attributes' => [
        'name' => 'Имя',
        'username' => 'Имя пользователя',
        'email' => 'Email',
        'first_name' => 'Имя',
        'last_name' => 'Фамилия',
        'current_password' => 'Текущий пароль',
        'password' => 'Пароль',
        'password_confirmation' => 'Подтверждение пароля',
        'city' => 'Город',
        'country' => 'Страна',
        'address' => 'Адрес',
        'phone' => 'Телефон',
        'mobile' => 'Мобильный',
        'age' => 'Возраст',
        'sex' => 'Пол',
        'gender' => 'Пол',
        'day' => 'День',
        'month' => 'Месяц',
        'year' => 'Год',
        'hour' => 'Час',
        'minute' => 'Минута',
        'second' => 'Секунда',
        'title' => 'Заголовок',
        'content' => 'Содержимое',
        'description' => 'Описание',
        'excerpt' => 'Выдержка',
        'date' => 'Дата',
        'time' => 'Время',
        'available' => 'Доступно',
        'size' => 'Размер',
        'posted_at' => 'Опубликовано',
        'author_id' => 'Автор',
        'post_id' => 'Пост',
        'thumbnail_id' => 'Миниатюра',
    ],
    
    'errors' => ':count ошибка|:count ошибки|:count ошибок',    

];
