<?php

namespace Likemusic\YandexFleetTaxiClientSimplified;

use Likemusic\YandexFleetTaxiClient\Contracts\ClientInterface as NativeClient;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\ClientInterface;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\Car\ToPostDataConverterInterface as CarToPostDataConverterInterface;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\CarInterface;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\Driver\ToPostDataConverterInterface as DriverToPostDataConverterInterface;
use Likemusic\YandexFleetTaxiClientSimplified\Contracts\Entities\DriverInterface;

class Client implements ClientInterface
{
    /** @var NativeClient */
    private $client;

    /** @var string */
    private $login;

    /** @var string */
    private $password;

    /** @var string */
    private $partId;

    /** @var string */
    private $workRuleId;

    /** @var DriverToPostDataConverterInterface */
    private $driverToPostDataConverter;

    /** @var CarToPostDataConverterInterface */
    private $carToPostDataConverter;

    public function __construct(
        NativeClient $client,
        string $login,
        string $password,
        string $parkId,
        string $workRuleId,
        DriverToPostDataConverterInterface $driverToPostDataConverter,
        CarToPostDataConverterInterface $carToPostDataConverter
    )
    {
        $this->client = $client;
        $this->login = $login;
        $this->password = $password;
        $this->partId = $parkId;
        $this->workRuleId = $workRuleId;
        $this->driverToPostDataConverter = $driverToPostDataConverter;
        $this->carToPostDataConverter = $carToPostDataConverter;
    }

    public function bindDriverWithCar(string $driverId, string $carId)
    {
        return $this->client->bindDriverWithCar($this->partId, $driverId, $carId);
    }

    public function createDriverWithCar(DriverInterface $driver, CarInterface $car): array
    {
        $this->login();
        $driverId = $this->createDriver($driver);
        $carId = $this->createCar($car);

        return [$driverId, $carId];
    }

    public function login()
    {
        $login = $this->login;
        $password = $this->password;

        return $this->client->login($login, $password);
    }

    public function createDriver(DriverInterface $driver): string
    {
        $parkId = $this->partId;
        $driverPostData = $this->convertDriverToDriverPostData($driver);

        return $this->createDriverByNativeClient($parkId, $driverPostData);
    }

    private function convertDriverToDriverPostData(DriverInterface $driver)
    {
        return $this->driverToPostDataConverter->convertToPostData($driver);
    }

    private function createDriverByNativeClient(string $parkId, array $postData)
    {
        return $this->client->createDriver($parkId, $postData);
    }

    public function createCar(CarInterface $car): string
    {
        $parkId = $this->partId;
        $carPostData = $this->convertCarToCarPostData($car);

        return $this->createCarByNativeClient($parkId, $carPostData);
    }

    private function convertCarToCarPostData(CarInterface $car)
    {
        return $this->carToPostDataConverter->convertToPostData($car);
    }

    private function createCarByNativeClient(string $parkId, array $postData)
    {
        return $this->client->createCar($parkId, $postData);
    }

    public function getVehiclesCardModels(string $brandName)
    {
        return $this->client->getVehiclesCardModels($brandName);
    }

    public function getVehiclesCardData()
    {
        return $this->client->getVehiclesCardData($this->partId);
    }

    public function getDriversCardData(): array
    {
        return $this->client->getDriversCardData($this->partId);
    }


}
