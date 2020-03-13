<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Entities;

use DateTime;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\DriverInterface;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\Driver\AttributeNameInterface as AttributesEnum;

class Driver extends Base implements DriverInterface
{
    public function getLicenceCountryCode(): ?string
    {
        return $this->getAttribute(AttributesEnum::LICENCE_COUNTRY);
    }

    public function setLicenceCountryCode(?string $licenceCountryCode = null)
    {
        return $this->setAttribute(AttributesEnum::LICENCE_COUNTRY, $licenceCountryCode);
    }

    public function getLicenceNumber(): ?string
    {
        return $this->getAttribute(AttributesEnum::LICENCE_NUMBER);
    }

    public function setLicenceNumber(?string $licenceNumber)
    {
        return $this->setAttribute(AttributesEnum::LICENCE_NUMBER, $licenceNumber);
    }

    public function getLicenceExpirationDate(): DateTime
    {
        return $this->getAttribute(AttributesEnum::LICENCE_EXPIRATION_DATE);
    }

    public function setLicenceExpirationDate(DateTime $licenceExpirationDate)
    {
        return $this->setAttribute(AttributesEnum::LICENCE_EXPIRATION_DATE, $licenceExpirationDate);
    }

    public function getLicenceIssueDate(): ?DateTime
    {
        return $this->getAttribute(AttributesEnum::LICENCE_ISSUE_DATE);
    }

    public function setLicenceIssueDate(?DateTime $licenceIssueDate)
    {
        return $this->setAttribute(AttributesEnum::LICENCE_ISSUE_DATE, $licenceIssueDate);
    }

    public function getFirstName(): ?string
    {
        return $this->getAttribute(AttributesEnum::FIRST_NAME);
    }

    public function setFirstName(?string $firstName)
    {
        return $this->setAttribute(AttributesEnum::FIRST_NAME, $firstName);
    }

    public function getLastName(): ?string
    {
        return $this->getAttribute(AttributesEnum::LAST_NAME);
    }

    public function setLastName(?string $lastName)
    {
        return $this->setAttribute(AttributesEnum::LAST_NAME, $lastName);
    }

    public function getMiddleName(): ?string
    {
        return $this->getAttribute(AttributesEnum::MIDDLE_NAME);
    }

    public function setMiddleName(?string $middleName)
    {
        return $this->setAttribute(AttributesEnum::MIDDLE_NAME, $middleName);
    }

    public function getPhoneNumber(): ?string
    {
        return $this->getAttribute(AttributesEnum::PHONE_NUMBER);
    }

    public function setPhoneNumber(?string $phoneNumber)
    {
        return $this->setAttribute(AttributesEnum::PHONE_NUMBER, $phoneNumber);
    }
}
