<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Contracts\Common;

use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\EntityInterface;

interface EntityToEntityPostDataConverterInterface
{
    public function convertToPostData(EntityInterface $entity): array;
}
