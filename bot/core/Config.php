<?php

class Config
{
    public static function get($key) {
        $config = require __DIR__ . '/../../config/config.php';
        return $config[$key];
    }
}
