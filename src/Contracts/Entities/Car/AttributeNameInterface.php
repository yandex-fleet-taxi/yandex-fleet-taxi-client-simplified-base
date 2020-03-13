<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\Car;

use Likemusic\YandexFleetTaxiClient\Contracts\PostDataKey\CreateCarInterface as PostDataKeysEnum;

interface AttributeNameInterface
{
    const BRAND = PostDataKeysEnum::BRAND;
    const MODEL = PostDataKeysEnum::MODEL;
    const COLOR = PostDataKeysEnum::COLOR;
    const YEAR = PostDataKeysEnum::YEAR;
    const NUMBER = PostDataKeysEnum::NUMBER;
    const CALL_SIGN = PostDataKeysEnum::CALLSIGN;
    const VIN = PostDataKeysEnum::VIN;
    const REGISTRATION_CERT = PostDataKeysEnum::REGISTRATION_CERT;
}
