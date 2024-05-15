<?php

namespace App\Factory\DTO;

class CarParamsDto
{
    public string $bodyType;
    public int $capacity;
    public int $doorsCount;

    public static function createFromWeb(array $mass): self
    {
        $dto = new self();

        $dto->bodyType = $mass['bodyType'];
        $dto->capacity = $mass['capacity'];
        $dto->doorsCount = $mass['doorsCount'];

        return $dto;
    }

    public static function createFromEmail(array $mass): self
    {
        $dto = new self();

        $dto->bodyType = $mass['body-Type'];
        $dto->capacity = $mass['capa-city'];
        $dto->doorsCount = $mass['door-sCount'];

        return $dto;
    }
}
