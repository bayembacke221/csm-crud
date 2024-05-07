<?php

class CreatePostsTable
{
    public static function postsTable($pdo)
    {
        try {
            $query ="CREATE TABLE IF NOT EXISTS  posts (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                slug VARCHAR(255) NOT NULL,
                body TEXT NOT NULL,
                thumbnails VARCHAR(255),
                isPublished VARCHAR(50) DEFAULT 1,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";

            $statement = $pdo->prepare($query);
            $statement->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}