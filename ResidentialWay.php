<?php


final class ResidentialWay extends HighWay
{
    protected array $currentVehicles  = [];
    protected int $nbLane = 2 ;
    protected int $maxSpeed = 50;

    public function addVehicle(?Vehicle $car)
    {
        // TODO: Implement addVehicle() method.
        if ($car instanceof Truck === true || $car instanceof Car === true || $car instanceof Bicycle === true) {
            $array = $this->getCurrentVehicles();
            array_push($array, $car);
            $this->setCurrentVehicles($array);
        }
    }

    /**
     * @return array
     */
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     */
    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }



}