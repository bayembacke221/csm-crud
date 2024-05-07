<?php

namespace App\Controllers;

use App\Request;
use App\Models\Post;
class PostController
{

    public function store()
    {
        $img = Request::file()['thumbnail'];

        $filePath = $img['tmp_name'];

        $imgName = strtolower(str_replace(' ', '-', $img['name']));

        $imgUrl = 'public/assets/thumbnails/' . $imgName;

        move_uploaded_file($filePath, $imgUrl);

        (new Post())->storePost($imgUrl, Request::all());


    }
    public function index()
    {
        $posts= (new Post())->allPost('posts');


        return view('posts',['posts'=>$posts]);
    }

    public function show()
    {
        $post= (new Post())->getPost('posts',Request::all()['id']);

        return view('show',['post'=>$post]);
    }

    public function delete()
    {
        (new Post())->deletePost('posts',Request::all()['id']);
        startSession();
        setSession('success', 'Post deleted successfully');
        redirect('posts');
    }

}