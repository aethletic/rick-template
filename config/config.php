<?php

return [
    'token' => '1086711779:AAEwVydt6DjqtMhA_vblCj-SIIzsyeUAjkY', // Токен телеграм бота
    'bot.version' => '1.0.3', // Версирование бота, чтобы автоматически сообщать пользователю о новой версии
    // TODO: использовать драйвер MySQL и SQLite
    'db.path' => __DIR__ . '/../database/bot.sqlite', // SQLite файл с базой данных
    'spam.timeout' => 0, // Через сколько секунд пользователь может написать
    'rick.logs' => true, // Включить/выключить запись логов
    'rick.logs_dir' => __DIR__ . '/../var/logs', // Папка где хранятся логи
    'rick.default_parse_mode' => 'markdown', // *жирный*, _подчеркивание_, `код`, [тут ссылка](https://botify.ru)
];
