<?php

class Coffee implements JsonSerializable
{
    private $coffeeId;
    private $name;
    private $description;
    private $price;

    public function __construct()
    {
    }

    public function jsonSerialize() {
        return array(
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
       );
    }
    

    public function getCoffeeId()
    {
        return $this->coffeeId;
    }

    public function setCoffeeId($coffeeId)
    {
        $this->coffeeId = $coffeeId;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

}
