<?php

require_once 'LightableInterface.php';

class Car extends Vehicule implements LightableInterface
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    protected string $energy;

    protected int $energyLevel;

    protected bool $hasParkBrake = true;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function start(): string
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('Unable to start with handbrake on !');
        }

        $this->setCurrentSpeed(5);
        return "Go !";
    }

    public function foward(): string
    {
        $this->setCurrentSpeed(50);

        return "On the road again!";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /**
     * Get the value of currentSpeed
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * Get the value of energyLevel
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * Set the value of energyLevel
     *
     * @return  self
     */

    public function setEnergyLevel(int $energyLevel): object
    {
        $this->energyLevel = $energyLevel;

        return $this;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */
    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
