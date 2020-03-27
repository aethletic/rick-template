<?php

use Aethletic\Telegram\File;

class Callback
{
    public static function default($rick, $user, $updates)
    {
        $rick->notify('Ошибка: колбэк не определён!');
    }

    public static function example($rick, $user, $updates)
    {
        $rick->notify('Этот колбэк определён в файле index.php');
    }
}
