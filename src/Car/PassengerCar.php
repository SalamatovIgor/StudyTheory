<?php

namespace App\Car;

/**
 * Подкласс легковых автомобилей. Здесь задаются свойства, которые есть у всех легковых автомобилей
 */

class PassengerCar extends BaseCar
{
    // Тип кузова
    public string $bodyType;
}
