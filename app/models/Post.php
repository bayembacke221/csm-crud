<?php
namespace App\Models;
class Post
{

    public function storePost($imgUrl,$data)
    {
        $data['thumbnail'] = $imgUrl;

        $query = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            "posts",
            implode(', ', array_keys($data)),
            ':'.implode(', :', array_keys($data))
        );

        try {
            $statement = connect()->prepare($query);
            $statement->execute($data);

            startSession();

            setSession('success', 'Post created successfully');


            redirect('/posts/create');
        } catch (\Exception $e) {
            die($e->getMessage());
        }

    }

    public function allPost($table)
    {
        $query = sprintf(
            "SELECT * FROM %s",
            $table
        );

        try {
            $statement = connect()->prepare($query);
            $statement->execute();

            return $statement->fetchAll(\PDO::FETCH_OBJ);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function getPost($table,$id)
    {
        $query = sprintf(
            "SELECT * FROM %s WHERE id = %s",
            $table,
            $id
        );

        try {
            $statement = connect()->prepare($query);
            $statement->execute();

            return $statement->fetch(\PDO::FETCH_OBJ);
        } catch (\Exception $e) {
            die($e->getMessage());
        }

    }

    public function deletePost($table,$id)
    {
        $query = sprintf(
            "DELETE FROM %s WHERE id = %s",
            $table,
            $id
        );

        try {
            $statement = connect()->prepare($query);
            $statement->execute();


        } catch (\Exception $e) {
            die($e->getMessage());
        }

    }
}