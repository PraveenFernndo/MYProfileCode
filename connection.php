<?php

class Database
{

    public static $connection;

    public static function setUpConnection()
    {
        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("sql101.infinityfree.com", "if0_34449717", "5p9kkHpHzfzbB8", "if0_34449717_profile");
        }
    }

    public static function iud($q)
    {
        Database::setUpConnection();
        Database::$connection->query($q);
    }

    public static function search($q)
    {
        Database::setUpConnection($q);
        $resultset = Database::$connection->query($q);

        return $resultset;
    }
}
