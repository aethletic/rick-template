<?php

use Aethletic\Telegram\Bot;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/core/Bootstrap.php';

ini_set('display_errors', true);
date_default_timezone_set('Europe/Samara');

Bootstrap::require([
    __DIR__ . '/core/*.php',
    __DIR__ . '/events/*.php',
]);

$rick = new Bot(Config::get('token'), [
    'rick.logs' => Config::get('rick.logs'),
    'rick.logs_dir' => Config::get('rick.logs_dir'),
]);

$rick->register('keyboards', require __DIR__ . '/keyboards.php');

$updates = $rick->getUpdates();
$user = $rick->getUser();

if (!Bootstrap::user($user)) {
    exit($rick->say("Воу-воу! Полегче ковбой."));
}
