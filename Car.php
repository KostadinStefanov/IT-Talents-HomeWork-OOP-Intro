<?php

class Car
{
    private $model;

    private $maxSpeed;

    private $currentSpeed;

    private $color;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    private $currentGear;

    private $owner;

    /**
     * @return Person
     */
    public function getOwner()
    {
        return $this->owner->getName() . ' ' .  $this->owner->getAge() . ' years old';
    }

    /**
     * @param Person $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    private $price;

    private $isSportCar;


    /**
     * @return mixed
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * @param mixed $currentSpeed
     */
    public function setCurrentSpeed($currentSpeed)
    {
        if($currentSpeed <= $this->maxSpeed){
            $this->currentSpeed = $currentSpeed;
        } else {
            throw new Exception("speed cannot be over max speed");
        }

    }

    /**
     * @return mixed
     */
    public function getCurrentGear()
    {
        return $this->currentGear;
    }

    /**
     * @param mixed $currentGear
     */
    public function setCurrentGear($currentGear)
    {
        if($currentGear >0 && $currentGear<=5){
            $this->currentGear = $currentGear;
        } else {
            throw new Exception("No such gear");
        }

    }

    function __construct($model, $maxSpeed, $currentSpeed, $color, $currentGear, Person $owner = null)
    {
        $this->model = $model;
        $this->maxSpeed = $maxSpeed;
        $this->currentSpeed = $currentSpeed;
        $this->color = $color;
        $this->currentGear = $currentGear;
        $this->owner = $owner;
    }


    public function display()
    {
        return 'The model ' . $this->model . ' is on gear ' . $this->getCurrentGear() . ' and the current speed is ' . $this->getCurrentSpeed() . ' km/h' . '<br>';
    }

    public function accelerate($acceleration)
    {
        $this->setCurrentSpeed($this->getCurrentSpeed() + $acceleration);
    }

    public function changeGearUp()
    {
        $this->setCurrentGear($this->getCurrentGear() + 1 );
    }

    public function changeGearDown()
    {
        $this->setCurrentGear($this->getCurrentGear() - 1 );
    }

    public function changeColor($newColor)
    {
        $this->setColor($newColor);
    }
}