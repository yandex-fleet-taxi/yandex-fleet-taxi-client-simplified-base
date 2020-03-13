<?php

namespace Likemusic\YandexFleetTaxiClientSimplified\Contracts;

use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\DriverInterface;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\CarInterface;

interface ClientInterface
{
    // Login
    public function login();

    // Create and Link Entities
    public function createDriver(DriverInterface $driver): string;
    public function createCar(CarInterface $car): string;
    public function bindDriverWithCar(string $driverId, string $carId);

    /**
     * @param DriverInterface $driver
     * @param CarInterface $car
     * @return array [$driverId, $carId]
     */
    public function createDriverWithCar(DriverInterface $driver, CarInterface $car): array;

    // Get Data
    public function getVehiclesCardData();
    public function getVehiclesCardModels(string $brandName);
    public function getDriversCardData(): array;
}
