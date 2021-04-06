<?php

require_once 'Vehicle.php';
class Truck extends Vehicle
{
    private string $energy;
    private int $energyLevel;
    private int $stockCapacity;
    private int $fillingLevel = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stockCapacity = $stockCapacity;
    }

    public function checkingLevel()
    {
        $message ='';
        if ($this->fillingLevel >= $this->stockCapacity) {
            $message = 'full <br>';
        } else {
            $message ='in filling <br>';
        }
        return $message;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): string
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): int
    {
       return $this->energyLevel = $energyLevel;
    }

    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }

    public function setStockCapacity(int $stockCapacity): int
    {
        return $this->stockCapacity = $stockCapacity;
    }

    public function getFillingLevel(): int
    {
        return $this->fillingLevel;
    }

    public function setFillingLevel(int $fillingLevel): int
    {
       return $this->fillingLevel = $fillingLevel ;
    }

}
