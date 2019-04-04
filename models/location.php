<?php
class Location
{
    private $city;
    private $country;
    private $description;

    public function __construct()
    { }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;      
    }

    public function getCountry()
    {
        return $this->country;
    }
  
    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}
