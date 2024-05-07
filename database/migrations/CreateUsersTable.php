<?php


class CreateUsersTable
{

    public static function usersTable($pdo)
    {
        try {
            $query = "CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(255) NOT NULL UNIQUE,
                email VARCHAR(255) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,
                thumbnails VARCHAR(255) ,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
            $statement = $pdo->prepare($query);
            $statement->execute();

        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

}