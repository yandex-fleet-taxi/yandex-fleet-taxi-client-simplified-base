<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Contracts\Common;

interface FromArrayInterface
{
    public function fromArray(array $attributes): self;
}
