<?php

return [
    'token' => '1086711779:AAFiQYbF86P9xhGxTd4ghYa7G4IFBxMD1iI', // токен телеграм бота
    'db.path' => __DIR__ . '/../database/bot.sqlite', // SQLite файл с базой данных
    'spam.timeout' => 1, // через сколько секунд пользователь может написать
    'rick.logs' => true, // включить/выключить запись логов
    'rick.logs_dir' => __DIR__ . '/../var/logs', // папка где хранятся логи
];
