<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\Driver;

use Likemusic\YandexFleetTaxiClient\Contracts\PostDataKey\CreateDriver\DriverProfileInterface as ProfilePostDataKeysEnum;

interface AttributeNameInterface
{
    // Licence
    const LICENCE_COUNTRY = 'licence_country';
    const LICENCE_NUMBER = 'licence_number';
    const LICENCE_EXPIRATION_DATE = 'licence_expiration_date';
    const LICENCE_ISSUE_DATE = 'licence_issue_date';

    // Profile
    const FIRST_NAME = ProfilePostDataKeysEnum::FIRST_NAME;
    const LAST_NAME = ProfilePostDataKeysEnum::LAST_NAME;
    const MIDDLE_NAME = ProfilePostDataKeysEnum::MIDDLE_NAME;
    const PHONE_NUMBER = 'phone_number';
}
