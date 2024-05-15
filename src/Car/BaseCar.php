<?php

namespace App\Car;

/**
 * Общий предок всех автомобилей. Здесь задаются свойства, которые у всех автомобилей
 */

class BaseCar
{
    // Мощность двигателя
    public int $capacity;

    // Кол-во дверей
    public int $doorsCount;

    public function __construct()
    {
        $this->sad = 11;
    }
}
