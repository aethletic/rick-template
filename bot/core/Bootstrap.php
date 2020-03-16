<?php

class Bootstrap
{
    public static function require($dirs = [])
    {
        foreach ($dirs as $dir) {
            $files = glob($dir);
            foreach ($files as $key => $file) {
                require_once $file;
            }
        }
    }

    public static function user($user)
    {
        if (!User::exists($user['id'])) {
            return User::create($user);
        } else {
            $diffLastMessageDate = time() - User::get($user['id'], 'last_message_date');

            if ($diffLastMessageDate <= Config::get('spam.timeout')) {
                return false;
            }

            return User::setLastMessage($user['id']);
        }
    }
}
