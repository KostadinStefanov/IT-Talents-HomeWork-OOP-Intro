<?php

class Person
{
    private  $friend;
    private $name;

    /**
     * @return Person
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * @param Person $friend
     */
    public function setFriend($friend)
    {
        $this->friend = $friend;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
    private $age;

    public function __construct( $name, $age,  Person $friend = null)
    {
        $this->friend = $friend;
        $this->name = $name;
        $this->age = $age;
    }

}