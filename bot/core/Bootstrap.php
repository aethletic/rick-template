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
            User::create($user);
            return 'new_user';
        } else {
            if (self::isSpam($user)) {
                return 'spam';
            }

            User::setLastMessage($user['id']);

            if (User::isNewBotVersion($user['id'])) {
                return 'new_version';
            }
        }
    }

    public static function isSpam($user)
    {
        $diffLastMessageDate = time() - User::get($user['id'], 'last_message_date');

        if ($diffLastMessageDate <= Config::get('spam.timeout')) {
            return true;
        } else {
            return false;
        }
    }
}
