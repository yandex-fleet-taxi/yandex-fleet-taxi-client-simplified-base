<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Entities\Driver;

use DateTime;
use Likemusic\YandexFleetTaxiClient\Contracts\PostDataKey\CreateDriver\DriverProfile\DriverLicenceInterface as DriverLicencePostDataKeysEnum;
use Likemusic\YandexFleetTaxiClient\Contracts\PostDataKey\CreateDriver\DriverProfileInterface as DriverProfilePostDataKeysEnum;
use Likemusic\YandexFleetTaxiClient\Contracts\PostDataKey\CreateDriverInterface as PostDataKeysEnum;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\Driver\AttributeNameInterface as AttributesEnum;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\Driver\ToPostDataConverterInterface;
use Likemusic\YandexFleetTaxiClientSimplified\Entities\Base\ToPostDataConverter as BaseToPostDataConverter;

class ToPostDataConverter extends BaseToPostDataConverter implements ToPostDataConverterInterface
{
    protected function getMapping(): array
    {
        return [];
    }

    protected function getCalculatedValues(array $attributes): array
    {
        return [
            PostDataKeysEnum::DRIVER_PROFILE => $this->getCalculateDriverProfile($attributes),
        ];
    }

    private function getCalculateDriverProfile(array $attributes): array
    {
        $mappedValues = $this->getDriverProfileMappedValues($attributes);
        $calculatedValues = $this->getDriverProfileCalculatedValues($attributes);

        return array_replace_recursive($mappedValues, $calculatedValues);
    }

    private function getDriverProfileMappedValues(array $attributes): array
    {
        $mapping = $this->getDriverProfileMapping();

        return $this->getValuesByMapping($mapping, $attributes);
    }

    private function getDriverProfileMapping(): array
    {
        return [
            AttributesEnum::FIRST_NAME => DriverProfilePostDataKeysEnum::FIRST_NAME,
            AttributesEnum::LAST_NAME => DriverProfilePostDataKeysEnum::LAST_NAME,
            AttributesEnum::MIDDLE_NAME => DriverProfilePostDataKeysEnum::MIDDLE_NAME,
        ];
    }

    private function getDriverProfileCalculatedValues(array $attributes): array
    {
        return [
            DriverProfilePostDataKeysEnum::DRIVER_LICENSE => $this->calculateDriverLicence($attributes),
            DriverProfilePostDataKeysEnum::PHONES => $this->calculatePhones($attributes),
            DriverProfilePostDataKeysEnum::HIRE_DATE => date('Y-d-m'),
        ];
    }

    private function calculateDriverLicence(array $attributes): array
    {
        $mappedValues = $this->getDriverLicenceMappedValues($attributes);
        $calculatedValues = $this->getDriverLicenceCalculatedValues($attributes);

        return $mappedValues + $calculatedValues;
    }

    private function getDriverLicenceMappedValues(array $attributes): array
    {
        $mapping = $this->getDriverLicenceMapping();

        return $this->getValuesByMapping($mapping, $attributes);
    }

    private function getDriverLicenceMapping(): array
    {
        return [
            AttributesEnum::LICENCE_COUNTRY => DriverLicencePostDataKeysEnum::COUNTRY,
            AttributesEnum::LICENCE_NUMBER => DriverLicencePostDataKeysEnum::NUMBER,
        ];
    }

    private function getDriverLicenceCalculatedValues(array $attributes): array
    {
        return [
            DriverLicencePostDataKeysEnum::EXPIRATION_DATE => $this->calculateDriverLicenceExpirationDate($attributes),
            DriverLicencePostDataKeysEnum::ISSUE_DATE => $this->calculateDriverLicenceIssueDate($attributes),
        ];
    }

    private function calculateDriverLicenceExpirationDate(array $attributes): string
    {
        $expirationDateTime = $attributes[AttributesEnum::LICENCE_EXPIRATION_DATE];

        return $this->formatDate($expirationDateTime);
    }

    private function formatDate(DateTime $dateTime): string
    {
        return $dateTime->format('Y-m-d');
    }

    private function calculateDriverLicenceIssueDate(array $attributes): string
    {
        $issueDateTime = $attributes[AttributesEnum::LICENCE_ISSUE_DATE];

        return $this->formatDate($issueDateTime);
    }

    private function calculatePhones(array $attributes): array
    {
        return [
            $attributes[AttributesEnum::PHONE_NUMBER],
        ];
    }
}
