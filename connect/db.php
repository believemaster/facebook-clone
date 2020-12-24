<?php

/*
    PDO = php data object provides data access abstraction layer, 
    which means that, regardless of which database you are using. 
    You use the same functions to issue queries and fetch data
*/

class DB
{
    private static function connect()
    {
        $pdo = new PDO('mysql:host=127.0.0.1; dbname=facebook_clone; charset=utf8mb4', 'root', '');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

    public static function query($query, $params = array())
    {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);

        if (explode(' ', $query)[0] == 'SELECT') {
            $data = $statement->fetchAll();
            return $data;
        }
    }
}
