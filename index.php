<?php

use Aethletic\Telegram\Bot;
use Aethletic\Telegram\File;

require __DIR__ . '/bot/bootstrap.php';

$rick->callback('{default}', 'Callback::default');
$rick->callback('example_callback_data', 'Callback::example');

$rick->hear('{default}', 'Event::default');
$rick->hear(['/start', '/keyboard', 'Назад'], 'Event::start');
$rick->hear('Inline-клавиатура', 'Example::inline');
$rick->hear('Спрятать клавиатуру', 'Example::hide');
$rick->hear('Клавиатура', 'Example::keyboard');
$rick->hear('Анимация', 'Example::animation');
$rick->hear('Картинка', 'Example::picture');
$rick->hear('Файл', 'Example::file');

$rick->run();
