<?php

namespace App\Services;

use App\Car\PassengerCar;
use App\Factory\CarFactory;
use App\Factory\DTO\CarParamsDto;

class CarService implements CarServiceInterface
{
    public function create(CarParamsDto $params): PassengerCar
    {
        return (new CarFactory())->createPassenger($params);
    }
}
