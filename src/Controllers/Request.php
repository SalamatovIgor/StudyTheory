<?php

declare(strict_types=1);

namespace App\Controllers;

class Request
{
    public function get(string $name, $default = null)
    {
        if (isset($_GET[$name])) {
            return $_GET[$name];
        }

        return $default;
    }
}
