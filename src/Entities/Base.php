<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Entities;

use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Common\FromArrayInterface;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Common\ToArrayInterface;

class Base implements FromArrayInterface, ToArrayInterface
{
    /** @var array */
    private $attributes;

    public function fromArray(array $attributes): FromArrayInterface
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function toArray(): array
    {
        return $this->attributes;
    }

    protected function getAttribute(string $attributeName)
    {
        return $this->attributes[$attributeName];
    }

    protected function setAttribute(string $attributeName, $attributeValue): self
    {
        $this->attributes[$attributeName] = $attributeValue;

        return $this;
    }
}
