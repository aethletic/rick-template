<?php

use Aethletic\Telegram\File;

require __DIR__ . '/bot/bootstrap.php';

$rick->callback('{default}', function() use ($rick) {
    $rick->notify('Ошибка: колбэк не определён!');
});

$rick->callback('example_callback_data', function() use ($rick) {
    $rick->notify('Этот колбэк определён в файле index.php');
});

$rick->hear('{default}', function() use ($rick) {
    $rick->say('К сожалению, сообщение не распознано.');
});

$rick->hear(['/start', 'Назад'], function() use ($rick, $user) {
    $rick->say("Привет, {$user['fullname']}!", $rick->keyboard('example'));
});

$rick->hear('Картинка', 'Example::picture');
$rick->hear('Файл', 'Example::file');
$rick->hear('Клавиатура', 'Example::keyboard');
$rick->hear('Inline-клавиатура', 'Example::inline');
$rick->hear('Спрятать клавиатуру', 'Example::hide');

$rick->run();
