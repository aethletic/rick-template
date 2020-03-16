<?php

class DB
{
    public static function init()
    {
        $factory = new \Database\Connectors\ConnectionFactory();
        return $factory->make([
            'driver'    => 'sqlite',
            'database' => Config::get('db.path'),
        ]);
    }
}
