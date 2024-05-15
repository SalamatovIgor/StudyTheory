<?php

namespace App\Factory;

use App\Car\PassengerCar;
use App\Factory\DTO\CarParamsDto;

class CarFactory
{
    public function createPassenger(CarParamsDto $params): PassengerCar
    {

        $mercedes = new PassengerCar();
        $mercedes->bodyType = $params->bodyType;
        $mercedes->capacity = $params->capacity;
        $mercedes->doorsCount = $params->doorsCount;

        return $mercedes;
    }
}
