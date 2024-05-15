<?php

declare(strict_types=1);

namespace App\Controllers;

class MainController extends BaseController
{
    public function main()
    {
        $this->view('main', [
            'ref' => $this->request->get('referr', 'Google')
        ]);
    }

    public function error404(): void
    {
        // TODO Сделать вьюху (view)
        echo 'Не найденно';
    }
}