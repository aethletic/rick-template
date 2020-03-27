<?php

class User
{
    public static function create($user)
    {
        $insert = [
            'user_id' => $user['id'],
            'full_name' => $user['fullname'],
            'first_name' => $user['firstname'],
            'last_name' => $user['lastname'],
            'username' => $user['username'],
            'lang' => $user['lang'],
            'reg_date' => time(),
            'last_message_date' => time(),
            'is_banned' => 'N',
            'expire_ban' => 0,
            'bot_version' => Config::get('bot.version'),
        ];

        return DB::init()->table('users')->insert($insert);
    }

    public static function exists($user_id)
    {
        return DB::init()->table('users')->where('user_id', '=', $user_id)->count();
    }

    public static function update($user_id, $update)
    {
        return DB::init()->table('users')->where('user_id', '=', $user_id)->update($update);
    }

    public static function setLastMessage($user_id)
    {
        return self::update($user_id, ['last_message_date' => time()]);
    }

    public static function get($user_id, $select = false)
    {
        if ($select) {
            return DB::init()->table('users')->where('user_id', '=', $user_id)->get()[0][$select];
        } else {
            return DB::init()->table('users')->where('user_id', '=', $user_id)->get()[0];
        }
    }

    public static function isNewBotVersion($user_id)
    {
        $userBotVersion = User::get($user_id, 'bot_version');
        $curBotVersion = Config::get('bot.version');

        if ($userBotVersion !== $curBotVersion) {
            User::update($user_id, ['bot_version' => $curBotVersion]);
            return true;
        } else {
            return false;
        }
    }


}
