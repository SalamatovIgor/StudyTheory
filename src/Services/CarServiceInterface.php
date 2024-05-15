<?php

namespace App\Services;

use App\Car\PassengerCar;
use App\Factory\DTO\CarParamsDto;

interface CarServiceInterface
{
    public function create(CarParamsDto $params): PassengerCar;
}
