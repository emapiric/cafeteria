<?php

class Orders implements JsonSerializable
{
    private $orderId;
    private $coffeeId;
    private $orderDate;

    public function __construct()
    {
    }

    public function jsonSerialize() {
        return array(
            'coffeeId' => $this->coffeeId,
            'orderDate' => $this->orderDate,
       );
    } 

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    public function getCoffeeId(){
        return $this->coffeeId;
    }

    public function setCoffeeId($coffeeId){
        $this->coffeeId = $coffeeId;
    }

    public function getOrderDate(){
        return $this->orderDate;
    }

    public function setOrderDate($orderDate){
        $this->orderDate = $orderDate;
    }

}
