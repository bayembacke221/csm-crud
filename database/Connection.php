<?php
namespace Database;
use PDO;
use PDOException;

class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                'mysql:host='. $config['host'].';
                dbname='.$config['dbname'],
                $config['user'],
                $config['password']
            );
        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}