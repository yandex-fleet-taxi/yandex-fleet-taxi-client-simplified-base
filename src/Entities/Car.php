<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Entities;

use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\Car\AttributeNameInterface as AttributesEnum;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\CarInterface;

class Car extends Base implements CarInterface
{
    public function getBrandName(): ?string
    {
        return $this->getAttribute(AttributesEnum::BRAND);
    }

    public function setBrandName(?string $brandName)
    {
        return $this->setAttribute(AttributesEnum::BRAND, $brandName);
    }

    public function getModel(): ?string
    {
        return $this->getAttribute(AttributesEnum::MODEL);
    }

    public function setModel(?string $model)
    {
        return $this->setAttribute(AttributesEnum::MODEL, $model);
    }

    public function getColor(): ?string
    {
        return $this->getAttribute(AttributesEnum::COLOR);
    }

    public function setColor(?string $color)
    {
        return $this->setAttribute(AttributesEnum::COLOR, $color);
    }

    public function getYear(): int
    {
        return $this->getAttribute(AttributesEnum::YEAR);
    }

    public function setYear(?int $year)
    {
        return $this->setAttribute(AttributesEnum::YEAR, $year);
    }

    public function getNumber(): ?string
    {
        return $this->getAttribute(AttributesEnum::NUMBER);
    }

    public function setNumber(?string $number)
    {
        return $this->setAttribute(AttributesEnum::NUMBER, $number);
    }

    public function getCallSign(): ?string
    {
        return $this->getAttribute(AttributesEnum::CALL_SIGN);
    }

    public function setCallSign(?string $callSign)
    {
        return $this->setAttribute(AttributesEnum::CALL_SIGN, $callSign);
    }

    public function getVin(): ?string
    {
        return $this->getAttribute(AttributesEnum::VIN);
    }

    public function setVin(?string $vin)
    {
        return $this->setAttribute(AttributesEnum::VIN, $vin);
    }

    public function getRegistrationCert(): ?string
    {
        return $this->getAttribute(AttributesEnum::REGISTRATION_CERT);
    }

    public function setRegistrationCert(?string $registrationCert)
    {
        return $this->setAttribute(AttributesEnum::REGISTRATION_CERT, $registrationCert);
    }
}
