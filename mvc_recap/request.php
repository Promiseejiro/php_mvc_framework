<?php

class Request
{

    public function getPath()
    {
        $path = $_SERVER["REQUEST_URI"] ?? "/";
        $position = strpos($path, "?");
        var_dump($path);
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function method()
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }
}
