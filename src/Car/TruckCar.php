<?php

namespace App\Car;

/**
 * Подкласс грузовых автомобилей. Здесь задаются свойства, которые есть у грузовых автомобилей
 */

class TruckCar extends BaseCar
{
    // Считаем, что у грузовиков всегда 2 двери и никогда иначе
    private const DOORS_COUNT = 2;

    // Обьем кузова
    public int $bodyVolume;

    public function __construct()
    {
        $this->doorsCount = self::DOORS_COUNT;
    }
}
