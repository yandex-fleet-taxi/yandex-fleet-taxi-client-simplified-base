<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities;

use DateTime;

interface DriverInterface extends EntityInterface
{
    public function getLicenceCountryCode(): ?string;

    public function setLicenceCountryCode(?string $licenceCountryCode = null);

    public function getLicenceNumber(): ?string;

    public function setLicenceNumber(?string $licenceNumber);

    public function getLicenceExpirationDate(): DateTime;

    public function setLicenceExpirationDate(DateTime $licenceExpirationDate);

    public function getLicenceIssueDate(): ?DateTime;

    public function setLicenceIssueDate(?DateTime $licenceIssueDate);

    public function getFirstName(): ?string;

    public function setFirstName(?string $firstName);

    public function getLastName(): ?string;

    public function setLastName(?string $lastName);

    public function getMiddleName(): ?string;

    public function setMiddleName(?string $middleName);

    public function getPhoneNumber(): ?string;

    public function setPhoneNumber(?string $phoneNumber);
}
