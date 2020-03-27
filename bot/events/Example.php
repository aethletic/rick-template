<?php

use Aethletic\Telegram\File;

class Example
{
    public static function keyboard($rick, $user, $updates)
    {
        $rick->action('typing')->say("Пример обычной клавиатуры", $rick->keyboard('цифры'));
    }

    public static function hide($rick, $user, $updates)
    {
        $rick->action('typing')->say("Показать клавиатуру: /keyboard", $rick->keyboard(false));
    }

    public static function inline($rick, $user, $updates)
    {
        $rick->action('typing')->say("Пример inline-клавиатуры", $rick->inline('inline'));
    }

    public static function picture($rick, $user, $updates)
    {
        $rick->action('upload_photo')->sendPhoto($user['chat_id'], 'https://i.picsum.photos/id/1029/200/200.jpg', 'Пример отправки картинки');
    }

    public static function file($rick, $user, $updates)
    {
        $rick->action('upload_document')->sendDocument($user['chat_id'], 'http://www.orimi.com/pdf-test.pdf', 'Пример отправки файла');
    }

    public static function animation($rick, $user, $updates)
    {
        $rick->action('upload_photo')->sendAnimation($user['chat_id'], 'https://media3.giphy.com/media/1yldrx2Q4EiAplBPDW/giphy.gif?cid=ecf05e47c86cef6c44bd567174fb295cea457dba197669bc&rid=giphy.gif', 'Пример отправки анимации');
    }

}
