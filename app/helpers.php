<?php


use App\App;
use Database\Connection;
if (! function_exists('dd')){
    function dd($data){
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die();
    }

}

if(! function_exists('connect')){
    function connect()
    {
        App::bind('config', require 'config.php');

        try {
            return Connection::make(App::get('config')['database']);
        } catch (Exception $e) {
        }
        throw new Exception('Could not connect to the database');
    }
}

if (! function_exists('view')) {
    function view($name, $data = [])
    {
        extract($data);
        return require "views/{$name}.view.php";
    }
}

if (! function_exists('setSession')) {
    function setSession($key, $value)
    {
        $_SESSION[$key] = $value;

    }

}

if (! function_exists('startSession')) {
    function startSession()
    {
        ob_start();
        session_start();
    }

}

if (! function_exists('getSession')){
    function getSession($key)
    {
        return $_SESSION[$key];
    }
}

if (! function_exists('unsetSession')){
    function unsetSession($key)
    {
        unset($_SESSION[$key]);
    }
}

if (! function_exists('redirect')){
    function redirect($path)
    {
        header("Location: {$path}");
    }
}