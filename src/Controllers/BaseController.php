<?php

declare(strict_types=1);

namespace App\Controllers;

class BaseController
{
    protected Request $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    protected function view(string $view, array $params)
    {
        foreach ($params as $varName => $varValue){
            $$varName = $varValue;
        }

        require 'view/main-template.php';
    }

    public function __call(string $name, array $arguments)
    {
        echo $name;
    }
}