<?php

namespace App\Controllers;
class DashboardController
{

    public function index()
    {
        return view('index');
    }

    public function allPosts()
    {
        return view('posts');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function create()
    {
        return view('create');
    }

    public function show()
    {
        return view('show');
    }

    public function edit()
    {
        return view('edit');
    }

    public function delete()
    {
        echo 'delete';
    }
}