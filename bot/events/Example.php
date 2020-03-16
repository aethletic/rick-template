<?php

use Aethletic\Telegram\File;

class Example
{
    public static function keyboard($rick, $user, $updates)
    {
        $rick->say("Пример обычной клавиатуры", $rick->keyboard('цифры'));
    }

    public static function hide($rick, $user, $updates)
    {
        $rick->say("Показать клавиатуру: /start", $rick->keyboard(false));
    }

    public static function inline($rick, $user, $updates)
    {
        $rick->say("Пример inline-клавиатуры", $rick->inline('inline'));
    }

    public static function picture($rick, $user, $updates)
    {
        $rick->sendPhoto($user['chat_id'], 'https://i.picsum.photos/id/1029/200/200.jpg', 'Пример отправки картинки');
    }

    public static function file($rick, $user, $updates)
    {
        $rick->sendDocument($user['chat_id'], 'http://www.orimi.com/pdf-test.pdf', 'Пример отправки файла');
    }
}
