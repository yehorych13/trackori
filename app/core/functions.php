<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    exit();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function base_path($path)
{
    return BASE_PATH.$path;
}

function abort($code = 404)
{
    http_response_code($code);
    require base_path('views/'.$path);
    exit();
}

function redirect($path)
{
    header("location: {$path}");
    exit();
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('views/'.$path);
}
