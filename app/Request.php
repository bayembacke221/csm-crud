<?php
namespace App;
class Request
{

    public  static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
    public static function all()
    {
        return $_REQUEST;
    }
    public static function file()
    {
        return $_FILES;
    }

}