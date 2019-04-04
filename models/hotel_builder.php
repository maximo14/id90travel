<?php
require "hotel.php";
require "location.php";

class HotelBuilder
{
    private $hotel;
    private $location;
    public function __construct()
    {
        $this->hotel = new Hotel();
        $this->location = new Location();
        $this->hotel->setLocation($this->location);
    }

    public function setId($id)
    {
        $this->hotel->setId($id);
        return $this;
    }
    public function setName($name)
    {
        $this->hotel->setName($name);
        return $this;
    }
    public function setTotal($total)
    {
        $this->hotel->setTotal($total);
        return $this;
    }
    public function setImage($image)
    {
        $this->hotel->setImage($image);
        return $this;
    }
    public function setDescription($description)
    {
        $this->hotel->setDescription($description);
        return $this;
    }

    public function setCity($city)
    {
        $this->location->setCity($city);
        return $this;
    }

    public function setCountry($country)
    {
        $this->location->setCountry($country);
        return $this;
    }

    public function setLocationDescription($description)
    {
        $this->location->setDescription($description);
        return $this;
    }

    public function build(){
        return $this->hotel;
    }
}
