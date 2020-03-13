<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Entities\Car;

use Likemusic\YandexFleetTaxiClient\Contracts\PostDataKey\CreateCarInterface as PostDataKeysEnum;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\Car\AttributeNameInterface as AttributesEnum;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\Car\ToPostDataConverterInterface;
use Likemusic\YandexFleetTaxiClientSimplified\Entities\Base\ToPostDataConverter as BaseToPostDataConverter;

class ToPostDataConverter extends BaseToPostDataConverter implements ToPostDataConverterInterface
{
    protected function getMapping(): array
    {
        return [
            AttributesEnum::BRAND => PostDataKeysEnum::BRAND,
            AttributesEnum::MODEL => PostDataKeysEnum::MODEL,
            AttributesEnum::COLOR => PostDataKeysEnum::COLOR,
            AttributesEnum::YEAR => PostDataKeysEnum::YEAR,
            AttributesEnum::NUMBER => PostDataKeysEnum::NUMBER,
            AttributesEnum::CALL_SIGN => PostDataKeysEnum::CALLSIGN,
            AttributesEnum::VIN => PostDataKeysEnum::VIN,
            AttributesEnum::REGISTRATION_CERT => PostDataKeysEnum::REGISTRATION_CERT,
        ];
    }

    protected function getCalculatedValues(array $attributes): array
    {
        return [];
    }
}
