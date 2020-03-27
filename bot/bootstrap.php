<?php

ini_set('display_errors', true);
date_default_timezone_set('Europe/Samara');

use Aethletic\Telegram\Bot;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/core/Bootstrap.php';

Bootstrap::require([
    __DIR__ . '/core/*.php',
    __DIR__ . '/events/*.php',
    __DIR__ . '/callbacks/*.php',
]);

$rick = new Bot(Config::get('token'), [
    'rick.logs'                 => Config::get('rick.logs'),
    'rick.logs_dir'             => Config::get('rick.logs_dir'),
    'rick.default_parse_mode'   => Config::get('rick.default_parse_mode'),
]);

$rick->register('keyboards', require __DIR__ . '/keyboards.php');

$updates = $rick->getUpdates();
$user = $rick->getUser();
$status = Bootstrap::user($user);

if ($status == 'spam')
    exit($rick->action('typing')->say("*Воу-воу! Полегче ковбой* 👮"));

if ($status == 'ban')
    exit($rick->action('typing')->say("*Стоп! Вы забанены* 🤚"));

if ($status == 'new_version')
    exit($rick->action('typing')->say("Ура! Моя версия данных обновилась до *" . Config::get('bot.version') . "* 🥳", $rick->keyboard('example')));

if ($status == 'new_user')
    $rick->action('typing')->say("*Вы добавлены в базу данных* 🥳");
