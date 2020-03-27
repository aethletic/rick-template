<?php

use Aethletic\Telegram\File;

class Event
{
    public static function default($rick, $user, $updates)
    {
        $rick->action('typing')->say('К сожалению, сообщение не распознано.');
    }

    public static function start($rick, $user, $updates)
    {
        $rick->action('typing')->say("Привет, {$user['fullname']}!", $rick->keyboard('example'));
    }
}
