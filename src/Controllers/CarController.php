<?php

namespace App\Controllers;

use App\Factory\DTO\CarParamsDto;
use App\Services\CarService;
use App\Services\CarServiceInterface;

class CarController
{
    public CarServiceInterface $carService;

    public function __construct()
    {
        $this->carService = new CarService();
    }

    public function create()
    {
        $params = CarParamsDto::createFromWeb($_GET);

        $mercedes = $this->carService->create($params);

        $this->out($mercedes);
    }

    private function out($mercedes)
    {
        echo '<pre>';
        echo '<h1>Легковой автомобиль</h1>';
        print_r($mercedes);
        echo '</pre>';
    }
}
