<?php

return [
    'цифры' => [
        ['1','2','3'],
        ['4','5','6'],
        ['7','8','9'],
          ['Назад']
    ],
    'example' => [
        ['Картинка','Файл'],
        ['Клавиатура', 'Inline-клавиатура'],
        ['Спрятать клавиатуру'],
        ['Анимация'],
    ],
    'inline' => [
        [
            ['text' => 'Google', 'url' => 'https://google.com'],
            ['text' => 'Yandex', 'url' => 'https://yandex.ru'],
        ],
        [
            ['text' => 'Известный колбэк', 'callback_data' => 'example_callback_data'],
            ['text' => 'Неизвестный колбэк', 'callback_data' => 'example_dummy_callback_data'],
        ]
    ],
];
