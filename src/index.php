<?php

use App\Controllers\CarController;
use App\Enum\BodyTypeEnum;

require __DIR__ . '/vendor/autoload.php';

$_GET['bodyType'] = BodyTypeEnum::HATCHBACK;
$_GET['capacity'] = 99;
$_GET['doorsCount'] = 4;

$controlCar = new CarController();

$controlCar->create();
