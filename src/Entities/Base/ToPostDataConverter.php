<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Entities\Base;

use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Common\EntityToEntityPostDataConverterInterface;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\EntityInterface;

abstract class ToPostDataConverter implements EntityToEntityPostDataConverterInterface
{
    /** @var array */
    private $defaultPostData;

    public function __construct(array $defaultPostData)
    {
        $this->defaultPostData = $defaultPostData;
    }

    public function convertToPostData(EntityInterface $entity): array
    {
        $defaultPostData = $this->defaultPostData;
        $entityPostData = $this->convertEntityToPostData($entity);

        return array_replace_recursive($defaultPostData, $entityPostData);
    }

    private function convertEntityToPostData(EntityInterface $entity): array
    {
        $attributes = $entity->toArray();
        $mappedValues = $this->getMappedValues($attributes);
        $calculatedValues = $this->getCalculatedValues($attributes);

        return $mappedValues + $calculatedValues;
    }

    private function getMappedValues(array $attributes): array
    {
        $mapping = $this->getMapping();

        return $this->getValuesByMapping($mapping, $attributes);
    }

    abstract protected function getMapping(): array;

    protected function getValuesByMapping(array $mapping, array $attributes)
    {
        $values = [];

        foreach ($mapping as $sourceKey => $destKey) {
            $values[$destKey] = $attributes[$sourceKey];
        }

        return $values;
    }

    abstract protected function getCalculatedValues(array $attributes): array ;
}
