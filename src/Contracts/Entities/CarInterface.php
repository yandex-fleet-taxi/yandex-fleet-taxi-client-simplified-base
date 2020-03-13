<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities;

interface CarInterface extends EntityInterface
{
    // Марка
    public function getBrandName(): ?string;

    public function setBrandName(?string $brandName);

    // Модель
    public function getModel(): ?string;

    public function setModel(?string $model);

    // Цвет
    public function getColor(): ?string;

    public function setColor(?string $color);

    // Год выпуска
    public function getYear(): int;

    public function setYear(?int $year);

    // Гос.номер
    public function getNumber(): ?string;

    public function setNumber(?string $number);

    // Позывной
    public function getCallSign(): ?string;

    public function setCallSign(?string $callSign);

    // VIN
    public function getVin(): ?string;

    public function setVin(?string $vin);

    // СТС
    public function getRegistrationCert(): ?string;

    public function setRegistrationCert(?string $registrationCert);
}
